<?php
/**
 * 業務用エアコン修理 テーマの機能定義
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GD_AIRCON_REPAIR_VERSION', '1.0.0' );

/**
 * テーマのデフォルト設定
 */
function gd_aircon_repair_setup() {
	load_theme_textdomain( 'gd-aircon-repair', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'メインメニュー', 'gd-aircon-repair' ),
			'footer'  => __( 'フッターメニュー', 'gd-aircon-repair' ),
		)
	);

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	add_editor_style( 'assets/css/app.css' );
}
add_action( 'after_setup_theme', 'gd_aircon_repair_setup' );

/**
 * コンテンツ幅（ブロックエディタ等で参照）
 */
function gd_aircon_repair_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gd_aircon_repair_content_width', 1200 );
}
add_action( 'after_setup_theme', 'gd_aircon_repair_content_width', 0 );

/**
 * スタイル・スクリプトの読み込み
 */
function gd_aircon_repair_scripts() {
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();

	$css_path = $theme_dir . '/assets/css/app.css';
	$deps     = array();

	wp_enqueue_style(
		'gd-aircon-repair-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap',
		array(),
		null
	);
	$deps[] = 'gd-aircon-repair-fonts';

	if ( file_exists( $css_path ) ) {
		wp_enqueue_style(
			'gd-aircon-repair-app',
			$theme_uri . '/assets/css/app.css',
			array( 'gd-aircon-repair-fonts' ),
			(string) filemtime( $css_path )
		);
		$deps[] = 'gd-aircon-repair-app';
	}

	wp_enqueue_style(
		'gd-aircon-repair-style',
		get_stylesheet_uri(),
		$deps,
		GD_AIRCON_REPAIR_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'gd_aircon_repair_scripts' );

/**
 * スレッドコメント用スクリプト
 */
function gd_aircon_repair_enqueue_comment_reply() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gd_aircon_repair_enqueue_comment_reply' );

/**
 * ウィジェットエリア
 */
function gd_aircon_repair_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'サイドバー', 'gd-aircon-repair' ),
			'id'            => 'sidebar-1',
			'description'   => __( '投稿・固定ページのサイドバー', 'gd-aircon-repair' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s mb-6">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-lg font-semibold mb-2">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gd_aircon_repair_widgets_init' );

/**
 * メインメニュー未設定時のフォールバック（Figma準拠のラベル）
 */
function gd_aircon_repair_fallback_primary_menu() {
	$items = array(
		array(
			'url'   => home_url( '/' ),
			'label' => __( 'ホーム', 'gd-aircon-repair' ),
			'current' => is_front_page() || is_home(),
		),
		array(
			'url'     => home_url( '/symptoms/' ),
			'label'   => __( '症状', 'gd-aircon-repair' ),
			'current' => is_page( 'symptoms' ),
		),
		array(
			'url'     => home_url( '/types/' ),
			'label'   => __( '業務用エアコンの形状', 'gd-aircon-repair' ),
			'current' => is_page( 'types' ),
		),
		array(
			'url'     => home_url( '/error-codes/' ),
			'label'   => __( 'エラーコード', 'gd-aircon-repair' ),
			'current' => is_page( 'error-codes' ),
		),
	);

	echo '<ul class="primary-menu flex flex-wrap items-center gap-6 md:gap-8 list-none m-0 p-0">';

	foreach ( $items as $item ) {
		$classes = array( 'menu-item' );
		if ( ! empty( $item['current'] ) ) {
			$classes[] = 'current-menu-item';
		}
		echo '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';
		echo '<a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['label'] ) . '</a>';
		echo '</li>';
	}

	echo '</ul>';
}
