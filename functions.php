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

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}

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
		'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Noto+Sans+JP:wght@400;700;900&display=swap',
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
 * お問い合わせページ: プライバシーポリシー本文を REST API で取得して #privacy-policy-content に差し込む
 */
function gd_aircon_repair_contact_privacy_policy_script() {
	if ( ! is_page( 'contact' ) ) {
		return;
	}
	$theme_dir = get_template_directory();
	$theme_uri = get_template_directory_uri();
	$path      = $theme_dir . '/assets/js/contact-privacy-policy.js';

	if ( ! file_exists( $path ) ) {
		return;
	}

	wp_enqueue_script(
		'gd-aircon-repair-contact-privacy',
		$theme_uri . '/assets/js/contact-privacy-policy.js',
		array(),
		(string) filemtime( $path ),
		true
	);

	wp_localize_script(
		'gd-aircon-repair-contact-privacy',
		'gdAirconRepairContact',
		array(
			'restPages' => esc_url_raw( rest_url( 'wp/v2/pages' ) ),
			'slug'      => 'privacy-policy',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'gd_aircon_repair_contact_privacy_policy_script' );

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
 *
 * @param string $variant 'desktop' ヘッダー横並び用 | 'mobile' ドロップダウン用（primary-menu 相当のクラスなし・アンダーラインなし）
 */
function gd_aircon_repair_fallback_primary_menu( $variant = 'desktop' ) {
	$variant   = 'mobile' === $variant ? 'mobile' : 'desktop';
	$items     = array(
		array(
			'url'     => home_url( '/' ),
			'label'   => __( 'ホーム', 'gd-aircon-repair' ),
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
			'current' => is_page( ['error-codes', 'error-codes/panasonic/', 'error-codes/mitsubishi/', 'error-codes/mitsubishi-el/', 'error-codes/hitachi/', 'error-codes/toshiba/'] ),
		),
		array(
			'url'     => home_url( '/price/' ),
			'label'   => __( '修理費用', 'gd-aircon-repair' ),
			'current' => is_page( 'price' ),
		),
	);

	if ( 'mobile' === $variant ) {
		$ul_class = 'primary-menu-mobile m-0 flex list-none flex-col gap-1 p-0';
		$items[]  = array(
			'url'     => apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact/' ) ),
			'label'   => __( 'お問い合わせ', 'gd-aircon-repair' ),
			'current' => is_page( 'contact' ),
			'cta'     => true,
		);
	} else {
		$ul_class = 'primary-menu flex flex-wrap items-center gap-6 md:gap-8 list-none m-0 p-0';
	}

	echo '<ul class="' . esc_attr( $ul_class ) . '">';

	foreach ( $items as $item ) {
		$classes = array( 'menu-item' );
		if ( ! empty( $item['current'] ) ) {
			$classes[] = 'current-menu-item';
		}
		if ( ! empty( $item['cta'] ) ) {
			$classes[] = 'menu-item-cta';
		}
		echo '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';
		if ( ! empty( $item['cta'] ) ) {
			echo '<a class="primary-menu-mobile-cta" href="' . esc_url( $item['url'] ) . '"';
			if ( ! empty( $item['current'] ) ) {
				echo ' aria-current="page"';
			}
			echo '>';
			echo '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" class="shrink-0" aria-hidden="true" focusable="false">';
			echo '<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />';
			echo '</svg>';
			echo '<span class="primary-menu-mobile-cta__label">' . esc_html( $item['label'] ) . '</span>';
			echo '</a>';
		} else {
			echo '<a href="' . esc_url( $item['url'] ) . '"';
			if ( ! empty( $item['current'] ) ) {
				echo ' aria-current="page"';
			}
			echo '>' . esc_html( $item['label'] ) . '</a>';
		}
		echo '</li>';
	}

	echo '</ul>';
}

/**
 * フッターメニュー未設定時のフォールバック（Figma準拠のラベル）
 */
function gd_aircon_repair_fallback_footer_menu() {
	$items = array(
		array(
			'url'     => home_url( '/symptoms/' ),
			'label'   => __( '症状一覧', 'gd-aircon-repair' ),
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
		array(
			'url'     => home_url( '/price/' ),
			'label'   => __( '修理費用', 'gd-aircon-repair' ),
			'current' => is_page( 'price' ),
		),
		array(
			'url'     => home_url( '/guide/' ),
			'label'   => __( '修理ガイド', 'gd-aircon-repair' ),
			'current' => is_page( 'guide' ),
		),
		array(
			'url'     => home_url( '/privacy-policy/' ),
			'label'   => __( 'プライバシーポリシー', 'gd-aircon-repair' ),
			'current' => is_page( 'privacy-policy' ),
		),
	);

	echo '<ul class="m-0 flex list-none flex-wrap items-center justify-center gap-x-8 gap-y-3 p-0">';

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

/**
 * エラーコードページ用 ブランドロゴナビゲーション
 *
 * active の index だけテンプレート側から渡し、ブランド一覧は関数内で固定します。
 *
 * @param int $active_index アクティブにするブランドの index（0始まり）.
 */
function gd_aircon_repair_render_error_code_brand_logos( $active_index = 0 ) {
	$assets = get_template_directory_uri() . '/assets/images/error-codes/';

	$brand_logos = array(
		array(
			'label' => __( 'ダイキン', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/' ),
			'src'   => $assets . 'daikin.webp',
		),
		array(
			'label' => __( 'パナソニック', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/panasonic/' ),
			'src'   => $assets . 'panasonic.webp',
		),
		array(
			'label' => __( '三菱重工', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/mitsubishi/' ),
			'src'   => $assets . 'mitsubishi.webp',
		),
		array(
			'label' => __( '日立', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/hitachi/' ),
			'src'   => $assets . 'hitachi.webp',
		),
		array(
			'label' => __( '三菱電機', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/mitsubishi-el/' ),
			'src'   => $assets . 'mitsubishielectric.webp',
		),
		array(
			'label' => __( '東芝キャリア', 'gd-aircon-repair' ),
			'url'   => home_url( '/error-codes/toshiba/' ),
			'src'   => $assets . 'toshiba.png',
		),
	);

	?>
	<section class="mx-auto flex w-full max-w-[1280px] flex-wrap justify-center gap-6 px-4 pb-6 lg:gap-8 lg:px-10">
		<?php foreach ( $brand_logos as $index => $brand ) : ?>
			<?php $is_active = ( (int) $active_index === (int) $index ); ?>
			<a
				class="<?php echo $is_active ? 'border-[5px] border-[#16374F] shadow-[0_10px_15px_0_rgba(255,104,31,0.15),0_4px_6px_0_rgba(0,0,0,0.1)]' : 'border border-transparent shadow-[0_10px_15px_0_rgba(0,0,0,0.15),0_4px_6px_0_rgba(0,0,0,0.1)]'; ?> flex h-auto min-h-[66px] w-[150px] shrink-0 flex-col items-center justify-center rounded-lg bg-white p-4 no-underline transition hover:opacity-90"
				href="<?php echo esc_url( $brand['url'] ); ?>"
				<?php echo $is_active ? ' aria-current="page"' : ''; ?>
			>
				<span class="block w-full [&_img]:h-auto [&_img]:w-full [&_img]:object-contain">
					<img src="<?php echo esc_url( $brand['src'] ); ?>" alt="<?php echo esc_attr( $brand['label'] ); ?>" loading="lazy" width="120" height="48">
				</span>
			</a>
		<?php endforeach; ?>
	</section>
	<?php
}

/**
 * 記事ページのSEOタグ（メタディスクリプション・構造化データ）を出力
 */
function gd_aircon_repair_seo_head() {
	if ( ! is_singular() ) {
		return;
	}

	$post_id     = get_queried_object_id();
	$description = get_post_meta( $post_id, '_gd_meta_description', true );

	if ( $description ) {
		printf( "<meta name=\"description\" content=\"%s\">\n", esc_attr( $description ) );
	}

	$breadcrumbs = array(
		array(
			'name' => __( 'ホーム', 'gd-aircon-repair' ),
			'url'  => home_url( '/' ),
		),
	);
	foreach ( array_reverse( get_post_ancestors( $post_id ) ) as $ancestor_id ) {
		$breadcrumbs[] = array(
			'name' => get_the_title( $ancestor_id ),
			'url'  => get_permalink( $ancestor_id ),
		);
	}
	$breadcrumbs[] = array(
		'name' => get_the_title( $post_id ),
		'url'  => get_permalink( $post_id ),
	);

	$schema = array(
		array(
			'@context'        => 'https://schema.org',
			'@type'           => 'BreadcrumbList',
			'itemListElement' => array_map(
				function ( $crumb, $index ) {
					return array(
						'@type'    => 'ListItem',
						'position' => $index + 1,
						'name'     => $crumb['name'],
						'item'     => $crumb['url'],
					);
				},
				$breadcrumbs,
				array_keys( $breadcrumbs )
			),
		),
	);

	// メタディスクリプションを持つページは記事として扱う
	if ( $description ) {
		$schema[] = array(
			'@context'         => 'https://schema.org',
			'@type'            => 'Article',
			'headline'         => get_the_title( $post_id ),
			'description'      => $description,
			'datePublished'    => get_the_date( 'c', $post_id ),
			'dateModified'     => get_the_modified_date( 'c', $post_id ),
			'mainEntityOfPage' => get_permalink( $post_id ),
			'image'            => has_post_thumbnail( $post_id ) ? get_the_post_thumbnail_url( $post_id, 'large' ) : null,
			'author'           => array(
				'@type' => 'Organization',
				'name'  => '業務用エアコン修理119（元気でんき株式会社）',
			),
			'publisher'        => array(
				'@type' => 'Organization',
				'name'  => '業務用エアコン修理119（元気でんき株式会社）',
				'logo'  => array(
					'@type' => 'ImageObject',
					'url'   => get_template_directory_uri() . '/assets/images/logo-119.png',
				),
			),
		);
	}

	if ( $description && has_post_thumbnail( $post_id ) ) {
		printf( "<meta property=\"og:image\" content=\"%s\">\n", esc_url( get_the_post_thumbnail_url( $post_id, 'large' ) ) );
	}

	foreach ( $schema as $item ) {
		$item = array_filter( $item, fn( $value ) => null !== $value );
		printf( "<script type=\"application/ld+json\">%s</script>\n", wp_json_encode( $item, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) );
	}
}
add_action( 'wp_head', 'gd_aircon_repair_seo_head', 1 );
