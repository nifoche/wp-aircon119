<?php
/**
 * ヘッダーテンプレート
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'flex min-h-screen flex-col bg-slate-50 text-slate-900 antialiased' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded focus:bg-white focus:px-3 focus:py-2 focus:shadow" href="#primary">
	<?php esc_html_e( '本文へスキップ', 'gd-aircon-repair' ); ?>
</a>

<header class="border-b border-slate-200 bg-white">
	<div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-4 py-4">
		<div class="flex items-center gap-3">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="text-lg font-bold text-slate-900 no-underline hover:text-slate-700" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="text-sm font-medium text-slate-700" aria-label="<?php esc_attr_e( 'メインメニュー', 'gd-aircon-repair' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'flex flex-wrap gap-6 list-none p-0 m-0',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		<?php endif; ?>
	</div>
</header>

<main id="primary" class="site-main flex-1 w-full">
