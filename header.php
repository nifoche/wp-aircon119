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
// 正式な電話番号が決まるまでは電話表示を出さない（true を返すフィルタで表示）
$show_phone    = (bool) apply_filters( 'gd_aircon_repair_show_phone', false );
$phone_hours   = apply_filters( 'gd_aircon_repair_phone_hours', '受付 9:00-17:00（土日祝を除く）' );
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

<header class="site-header fixed left-0 right-0 top-0 z-50 border-b border-[#f5e3da] bg-white">
	<div class="mx-auto flex max-w-[1440px] flex-col gap-4 px-4 py-2 lg:h-[88px] lg:flex-row lg:items-center lg:justify-between lg:gap-6 lg:px-8 lg:py-0">
		<div class="flex shrink-0 items-center justify-between">
			<a class="block shrink-0 no-underline" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img
					class="h-12 w-auto lg:h-14"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-119.png' ); ?>"
					width="564"
					height="192"
					alt="<?php esc_attr_e( '業務用エアコン修理119', 'gd-aircon-repair' ); ?>"
				>
			</a>

			<details class="relative ml-3 lg:hidden">
				<summary
					class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded border border-slate-300 text-brand-ink transition hover:bg-slate-100 [&::-webkit-details-marker]:hidden"
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

		<div class="hidden lg:flex shrink-0 items-center justify-end gap-4">
			<?php if ( $show_phone ) : ?>
				<a class="text-right leading-tight no-underline" href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>">
					<span class="block text-[11px] font-bold tracking-wide text-slate-500"><?php echo esc_html( $phone_hours ); ?></span>
					<span class="block font-['Helvetica_Neue',Arial,sans-serif] text-[26px] font-extrabold text-brand-blue"><?php echo esc_html( $phone_display ); ?></span>
				</a>
			<?php endif; ?>
			<a
				class="inline-flex h-12 items-center gap-2 rounded-md bg-brand-fire px-6 text-base font-extrabold text-white no-underline shadow-[0_3px_0_#d8480a] transition hover:bg-brand-fire/90"
				href="<?php echo esc_url( $quote_url ); ?>"
			>
				<span class="rounded-sm bg-white px-2 py-0.5 text-[13px] font-extrabold text-brand-fire"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
				<span><?php esc_html_e( 'WEBで見積り', 'gd-aircon-repair' ); ?></span>
			</a>
		</div>
	</div>
</header>

<div class="site-header-offset hidden lg:block h-[88px] shrink-0" aria-hidden="true"></div>

<main id="primary" class="site-main w-full flex-1">
