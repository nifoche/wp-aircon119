<?php
/**
 * ヘッダーテンプレート
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone_display = apply_filters( 'gd_aircon_repair_phone_display', '0120-000-000' );
$phone_tel     = apply_filters( 'gd_aircon_repair_phone_tel', '0120000000' );
$phone_tel     = preg_replace( '/\D+/', '', (string) $phone_tel );
$quote_url     = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact/' ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'flex min-h-screen flex-col bg-slate-50 font-sans text-slate-900 antialiased' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-[60] focus:rounded focus:bg-white focus:px-3 focus:py-2 focus:shadow" href="#primary">
	<?php esc_html_e( '本文へスキップ', 'gd-aircon-repair' ); ?>
</a>

<header class="site-header fixed left-0 right-0 top-0 z-50 border-b-4 border-brand-orange bg-brand-navy shadow-header">
	<div class="mx-auto flex max-w-[1280px] flex-col gap-4 px-4 pb-3 sm:pb-5 pt-2 sm:pt-4 sm:flex-row sm:items-center sm:justify-between sm:gap-4 lg:px-6">
		<div class="flex shrink-0 items-center justify-between sm:justify-start">
			<?php if ( has_custom_logo() ) : ?>
				<div class="custom-logo-wrap [&_img]:max-h-8 [&_img]:w-auto">
					<?php the_custom_logo(); ?>
				</div>
			<?php else : ?>
				<a class="text-2xl font-bold tracking-tight text-white no-underline hover:text-white/90" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>

			<details class="relative ml-3 lg:hidden">
				<summary
					class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded border border-white/30 text-white transition hover:bg-white/10 [&::-webkit-details-marker]:hidden"
					aria-label="<?php esc_attr_e( 'メニューを開く', 'gd-aircon-repair' ); ?>"
				>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z" />
					</svg>
				</summary>
				<div class="absolute right-0 top-12 z-[60] min-w-[220px] rounded-md border border-slate-200 bg-white p-4 shadow-xl">
					<nav aria-label="<?php esc_attr_e( 'モバイルメニュー', 'gd-aircon-repair' ); ?>">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu-mobile m-0 flex list-none flex-col gap-1 p-0',
									'container'      => false,
									'fallback_cb'    => false,
									'depth'          => 1,
								)
							);
							?>
						<?php else : ?>
							<?php gd_aircon_repair_fallback_primary_menu( 'mobile' ); ?>
						<?php endif; ?>
					</nav>
				</div>
			</details>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="min-w-0 hidden flex-1 lg:flex lg:justify-center" aria-label="<?php esc_attr_e( 'メインメニュー', 'gd-aircon-repair' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu m-0 flex list-none flex-wrap items-center gap-6 p-0 md:gap-8',
						'container'      => false,
						'fallback_cb'    => false,
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php else : ?>
			<nav class="min-w-0 flex-1 hidden lg:flex lg:justify-center" aria-label="<?php esc_attr_e( 'メインメニュー', 'gd-aircon-repair' ); ?>">
				<?php gd_aircon_repair_fallback_primary_menu(); ?>
			</nav>
		<?php endif; ?>

		<div class="hidden lg:flex shrink-0 flex-wrap items-center justify-end gap-3">
			<a
				class="inline-flex items-center gap-2 rounded bg-brand-sky px-6 py-3 text-base font-extrabold uppercase tracking-tight text-white shadow-md no-underline ring-1 ring-black/5 transition hover:bg-brand-sky/90"
				href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="shrink-0" aria-hidden="true" focusable="false">
					<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
				</svg>
				<span><?php echo esc_html( $phone_display ); ?></span>
			</a>
			<a
				class="inline-flex h-12 items-center justify-center gap-1 rounded bg-brand-orange px-4 py-1 text-white shadow-md no-underline ring-1 ring-black/5 transition hover:bg-brand-orange/95"
				href="<?php echo esc_url( $quote_url ); ?>"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" class="shrink-0" aria-hidden="true" focusable="false">
					<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />
				</svg>
				<span class="text-lg font-bold leading-8"><?php esc_html_e( 'WEBで', 'gd-aircon-repair' ); ?></span>
				<span class="text-2xl font-black leading-none text-brand-skydeep"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
				<span class="text-lg font-bold leading-8"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
			</a>
		</div>
	</div>
</header>

<div class="site-header-offset hidden lg:block h-[88px] shrink-0" aria-hidden="true"></div>

<main id="primary" class="site-main w-full flex-1">
