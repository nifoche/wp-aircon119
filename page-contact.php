<?php
/**
 * 固定ページテンプレート: お問い合わせ
 * URL 例: /contact/
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$phone_display    = apply_filters( 'gd_aircon_repair_phone_display', '050-5526-3005' );
$phone_tel        = apply_filters( 'gd_aircon_repair_phone_tel', '05055263005' );
$phone_tel        = preg_replace( '/\D+/', '', (string) $phone_tel );

?>

<div class="bg-[#FFFBF9]">
	<section class="relative overflow-hidden pb-10 pt-24 lg:pb-12 lg:pt-8">
		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-8 flex flex-wrap items-center gap-2 text-base text-[#4a5565] lg:gap-3 lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="font-normal text-[#99a1af] no-underline transition hover:text-[#364153]" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
				</a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center text-[#99a1af]" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( 'お問い合わせ', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px]">
				<h1 class="text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( 'お問い合わせ', 'gd-aircon-repair' ); ?>
				</h1>
				<p class="mt-5 text-lg font-medium leading-[1.75] text-[#364153] lg:text-[20px]">
					<?php esc_html_e( 'お気軽にご相談ください。現地調査・お見積もりは完全無料です', 'gd-aircon-repair' ); ?>
				</p>
			</div>
		</div>
	</section>

	<section class="px-4 pb-10 pt-5 lg:px-10">
		<div class="mx-auto w-full max-w-[800px] rounded-lg">
			<h2 class="text-center text-[32px] font-bold leading-[1.5] tracking-[-0.075em] text-[#1e2939]">
				<?php esc_html_e( 'お電話でのお問い合わせ', 'gd-aircon-repair' ); ?>
			</h2>
			<div class="mt-2 flex justify-center">
				<a
					class="inline-flex items-center gap-3 text-brand-firedeep no-underline transition hover:opacity-80"
					href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>"
				>
					<span class="inline-flex h-[52px] w-[52px] items-center justify-center" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="currentColor" focusable="false"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" /></svg>
					</span>
					<span class="text-center text-[36px] sm:text-[48px] font-extrabold leading-[1]"><?php echo esc_html( $phone_display ); ?></span>
				</a>
			</div>
			<p class="mt-1 text-center text-xl sm:text-2xl font-medium leading-[2] text-[#364153]">
				<?php esc_html_e( '受付時間: 9:00~17:00（土日祝を除く）', 'gd-aircon-repair' ); ?>
			</p>
		</div>
	</section>

	<section class="pb-16 lg:pb-24">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<div class="mx-auto w-full max-w-[820px] rounded-lg bg-white px-3 py-10 lg:px-6">
				<h2 class="pb-10 text-center text-[32px] font-bold leading-[1.5] tracking-[-0.075em] text-[#1e2939]">
					<?php esc_html_e( 'メールフォームでのお問い合わせ', 'gd-aircon-repair' ); ?>
				</h2>
				<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
