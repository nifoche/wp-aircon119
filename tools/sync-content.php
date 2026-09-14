<?php
/**
 * content/ 以下の記事データを WordPress に同期する（CLI専用）
 *
 * 使い方: php tools/sync-content.php [--dry-run]
 * - content/site.json           サイト全体のSEO設定・既存ページのSEO・整理（移動/ゴミ箱）
 * - content/pages/<id>/page.json 記事ページの設定（タイトル・URL・親・説明文・画像）
 * - content/pages/<id>/body.html 本文。{{HOME}} はサイトURL、<!-- image:ファイル名 --> は画像に置換
 *
 * 新規ページは page.json の status（既定 draft）で作成する。既存ページの公開状態は変更しない。
 *
 * @package gd-aircon-repair
 */

if ( 'cli' !== PHP_SAPI ) {
	http_response_code( 404 );
	exit;
}

$dry_run   = in_array( '--dry-run', $argv, true );
$theme_dir = dirname( __DIR__ );
$wp_load   = dirname( $theme_dir, 3 ) . '/wp-load.php';

if ( ! file_exists( $wp_load ) ) {
	fwrite( STDERR, "wp-load.php が見つかりません: {$wp_load}\n" );
	exit( 1 );
}

$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_HOST'] ?? 'localhost';
define( 'WP_USE_THEMES', false );
require $wp_load;
require_once ABSPATH . 'wp-admin/includes/image.php';

$content_dir = $theme_dir . '/content';
$home        = untrailingslashit( home_url() );
$log         = function ( $message ) use ( $dry_run ) {
	echo ( $dry_run ? '[dry-run] ' : '' ) . $message . "\n";
};

/**
 * JSON を読み込む
 */
$read_json = function ( $file ) {
	$data = json_decode( (string) file_get_contents( $file ), true );
	if ( null === $data ) {
		fwrite( STDERR, "JSON の読み込みに失敗: {$file}\n" );
		exit( 1 );
	}
	return $data;
};

/**
 * 画像を取り込む（同じ内容のファイルは再取り込みしない）
 */
$import_image = function ( $file, $alt, $parent_id ) use ( $dry_run, $log ) {
	if ( ! file_exists( $file ) ) {
		$log( "画像が見つかりません: {$file}" );
		return 0;
	}
	$hash     = md5_file( $file );
	$existing = get_posts(
		array(
			'post_type'   => 'attachment',
			'post_status' => 'inherit',
			'meta_key'    => '_gd_source_hash',
			'meta_value'  => $hash,
			'numberposts' => 1,
			'fields'      => 'ids',
		)
	);
	if ( $existing ) {
		update_post_meta( $existing[0], '_wp_attachment_image_alt', $alt );
		return (int) $existing[0];
	}
	if ( $dry_run ) {
		$log( '画像を取り込み予定: ' . basename( $file ) );
		return 0;
	}
	$upload = wp_upload_bits( 'aircon119-' . basename( $file ), null, file_get_contents( $file ) );
	if ( ! empty( $upload['error'] ) ) {
		$log( "画像のアップロードに失敗: {$upload['error']}" );
		return 0;
	}
	$type = wp_check_filetype( $upload['file'] );
	$id   = wp_insert_attachment(
		array(
			'post_mime_type' => $type['type'],
			'post_title'     => $alt,
			'post_status'    => 'inherit',
		),
		$upload['file'],
		$parent_id
	);
	wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $upload['file'] ) );
	update_post_meta( $id, '_wp_attachment_image_alt', $alt );
	update_post_meta( $id, '_gd_source_hash', $hash );
	$log( '画像を取り込みました: ' . basename( $file ) . " #{$id}" );
	return (int) $id;
};

// ---------------------------------------------------------------
// 1) サイト全体の設定・整理
// ---------------------------------------------------------------
$site_file = $content_dir . '/site.json';
if ( file_exists( $site_file ) ) {
	$site = $read_json( $site_file );

	foreach ( $site['move'] ?? array() as $move ) {
		$page   = get_page_by_path( $move['from'] );
		$parent = get_page_by_path( $move['parent'] );
		if ( $page && $parent && (int) $page->post_parent !== (int) $parent->ID ) {
			$log( "移動: /{$move['from']}/ → /{$move['parent']}/ の下" );
			if ( ! $dry_run ) {
				wp_update_post( array( 'ID' => $page->ID, 'post_parent' => $parent->ID ) );
			}
		}
	}

	foreach ( $site['trash'] ?? array() as $item ) {
		$post = get_page_by_path( $item['path'], OBJECT, $item['type'] ?? 'page' );
		if ( $post && 'trash' !== $post->post_status ) {
			$log( "ゴミ箱へ移動: {$item['path']}" );
			if ( ! $dry_run ) {
				wp_trash_post( $post->ID );
			}
		}
	}

	if ( ! empty( $site['blogname'] ) && get_option( 'blogname' ) !== $site['blogname'] ) {
		$log( "サイト名: {$site['blogname']}" );
		if ( ! $dry_run ) {
			update_option( 'blogname', $site['blogname'] );
		}
	}

	if ( ! $dry_run ) {
		if ( isset( $site['front']['seo_title'] ) ) {
			update_option( 'gd_front_seo_title', $site['front']['seo_title'] );
		}
		if ( isset( $site['front']['description'] ) ) {
			update_option( 'gd_front_meta_description', $site['front']['description'] );
		}
	}

	foreach ( $site['seo'] ?? array() as $path => $seo ) {
		$page = get_page_by_path( $path );
		if ( ! $page ) {
			$log( "SEO設定の対象ページがありません: /{$path}/" );
			continue;
		}
		if ( ! $dry_run ) {
			update_post_meta( $page->ID, '_gd_seo_title', $seo['seo_title'] );
			update_post_meta( $page->ID, '_gd_meta_description', $seo['description'] );
		}
	}
	$log( 'サイト設定を反映しました（SEO設定 ' . count( $site['seo'] ?? array() ) . 'ページ）' );
}

// ---------------------------------------------------------------
// 2) 記事ページ
// ---------------------------------------------------------------
$pages = array();
foreach ( glob( $content_dir . '/pages/*/page.json' ) as $file ) {
	$data        = $read_json( $file );
	$data['dir'] = dirname( $file );
	$pages[]     = $data;
}
// 親ページを先に作るため、階層の浅い順に処理
usort(
	$pages,
	function ( $a, $b ) {
		return substr_count( $a['path'], '/' ) <=> substr_count( $b['path'], '/' ) ?: strcmp( $a['path'], $b['path'] );
	}
);

foreach ( $pages as $data ) {
	$path        = trim( $data['path'], '/' );
	$slug        = basename( $path );
	$parent_path = dirname( $path );
	$parent_id   = 0;

	if ( '.' !== $parent_path ) {
		$parent = get_page_by_path( $parent_path );
		if ( ! $parent ) {
			$log( "親ページがありません: /{$parent_path}/（/{$path}/ はスキップ）" );
			continue;
		}
		$parent_id = $parent->ID;
	}

	$existing = get_page_by_path( $path );
	$body     = (string) file_get_contents( $data['dir'] . '/body.html' );
	$body     = str_replace( '{{HOME}}', $home, $body );

	if ( $dry_run ) {
		$log( ( $existing ? '更新' : '新規（' . ( $data['status'] ?? 'draft' ) . '）' ) . ": /{$path}/ {$data['title']}" );
		continue;
	}

	$args = array(
		'post_type'      => 'page',
		'post_title'     => $data['title'],
		'post_name'      => $slug,
		'post_parent'    => $parent_id,
		'menu_order'     => (int) ( $data['menu_order'] ?? 0 ),
		'comment_status' => 'closed',
		'ping_status'    => 'closed',
	);
	if ( $existing ) {
		$args['ID'] = $existing->ID;
		$page_id    = wp_update_post( wp_slash( $args ), true );
	} else {
		$args['post_status'] = in_array( $data['status'] ?? 'draft', array( 'draft', 'publish', 'pending', 'private' ), true ) ? $data['status'] : 'draft';
		$args['post_author'] = (int) ( get_users( array( 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ) )[0] ?? 1 );
		$page_id             = wp_insert_post( wp_slash( $args ), true );
	}
	if ( is_wp_error( $page_id ) ) {
		$log( "失敗: /{$path}/ " . $page_id->get_error_message() );
		continue;
	}

	// アイキャッチ
	if ( ! empty( $data['eyecatch']['file'] ) ) {
		$eye_id = $import_image( $data['dir'] . '/' . $data['eyecatch']['file'], $data['eyecatch']['alt'], $page_id );
		if ( $eye_id ) {
			set_post_thumbnail( $page_id, $eye_id );
		}
	}

	// 本文中の画像: <!-- image:ファイル名 -->
	$images = $data['images'] ?? array();
	$body   = preg_replace_callback(
		'/<!--\s*image:([^\s]+)\s*-->/',
		function ( $m ) use ( $images, $data, $import_image, $page_id ) {
			$alt = $images[ $m[1] ] ?? '';
			$id  = $import_image( $data['dir'] . '/' . $m[1], $alt, $page_id );
			return $id ? '<figure class="article-figure">' . wp_get_attachment_image( $id, 'large', false, array( 'loading' => 'lazy' ) ) . '</figure>' : '';
		},
		$body
	);

	wp_update_post( wp_slash( array( 'ID' => $page_id, 'post_content' => $body ) ) );
	update_post_meta( $page_id, '_gd_seo_title', $data['seo_title'] ?? $data['title'] );
	update_post_meta( $page_id, '_gd_meta_description', $data['description'] ?? '' );

	$log( ( $existing ? '更新' : '新規作成（' . get_post_status( $page_id ) . '）' ) . ": /{$path}/ #{$page_id}" );
}

$log( '完了' );
