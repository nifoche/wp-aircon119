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

$hero_texture_url = get_template_directory_uri() . '/assets/images/error-codes/e55f40f59b1f786159e5bc3341126f1ca3a06460.png';
$phone_display    = apply_filters( 'gd_aircon_repair_phone_display', '0120-000-000' );
$phone_tel        = apply_filters( 'gd_aircon_repair_phone_tel', '0120000000' );
$phone_tel        = preg_replace( '/\D+/', '', (string) $phone_tel );

$privacy_policy_page    = get_page_by_path( 'privacy-policy' );
$privacy_policy_content = '';
if ( $privacy_policy_page instanceof WP_Post ) {
	$privacy_policy_content = apply_filters( 'the_content', $privacy_policy_page->post_content );
}
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden pb-10 pt-24 lg:pb-12 lg:pt-28">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_texture_url ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

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
					class="inline-flex items-center gap-3 text-sky-700 no-underline transition hover:opacity-80"
					href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>"
				>
					<span class="inline-flex h-[52px] w-[52px] items-center justify-center" aria-hidden="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none" focusable="false">
							<g clip-path="url(#clip0_contact_freedial)">
								<path d="M0 8.94043V14.26C4.09307 14.2662 7.89831 15.0524 11.1851 16.3505C11.8007 16.5938 12.3978 16.8548 12.9762 17.1329C14.2919 16.5005 15.7082 15.955 17.2096 15.5107C19.9027 14.7167 22.8677 14.26 25.9998 14.26C30.1115 14.26 33.9335 15.0477 37.2331 16.3505C37.8488 16.5938 38.4463 16.8548 39.0238 17.1329C40.3399 16.5005 41.7562 15.955 43.2576 15.5107C45.9371 14.7214 48.8855 14.2645 52.0001 14.26V8.94043H0Z" fill="#006CA2"/>
								<path d="M32.5598 29.1126C32.5606 30.4566 32.9654 31.6904 33.6627 32.7252C34.3599 33.7577 35.3504 34.5798 36.5081 35.0684C37.2807 35.3954 38.1268 35.5757 39.0237 35.5765C40.3686 35.5749 41.6029 35.1709 42.6366 34.4733C43.6692 33.7756 44.4912 32.7859 44.9806 31.6275C45.3069 30.8553 45.4875 30.0092 45.4879 29.1127C45.4879 28.4718 45.3544 27.792 45.0726 27.0804C44.7918 26.3687 44.3622 25.626 43.7864 24.8879C42.6899 23.4771 41.0603 22.0873 39.0233 20.918C37.4617 21.8161 36.1375 22.84 35.1123 23.9083C34.0204 25.0417 33.2715 26.2196 32.8865 27.3158C32.6654 27.9441 32.5598 28.5424 32.5598 29.1126Z" fill="#006CA2"/>
								<path d="M45.3512 21.5844C46.7069 22.9968 47.7367 24.5466 48.3221 26.2007C48.655 27.1446 48.8396 28.1243 48.8396 29.1126C48.8408 31.1387 48.2205 33.0359 47.1623 34.6006C46.1045 36.1669 44.609 37.4091 42.8451 38.1558C41.67 38.653 40.3749 38.928 39.0239 38.928C36.997 38.928 35.0989 38.3088 33.5342 37.2499C31.9688 36.1917 30.7265 34.697 29.9803 32.9333C29.4827 31.7579 29.2076 30.4627 29.2081 29.1126C29.2081 27.6295 29.6225 26.1712 30.3338 24.8093C31.0461 23.4443 32.0555 22.1632 33.2985 20.9885C33.9448 20.3793 34.6557 19.7991 35.4236 19.2497C34.9105 19.0617 34.3837 18.8854 33.8426 18.7253C31.4544 18.0214 28.8047 17.6113 25.9997 17.6113C22.5592 17.6097 19.3518 18.2296 16.5748 19.2489C17.5894 19.9731 18.5043 20.7561 19.3036 21.5844C20.6585 22.9968 21.6887 24.5466 22.2741 26.2007C22.6074 27.1446 22.7919 28.1243 22.7919 29.1126C22.7924 31.1387 22.1728 33.0359 21.1142 34.6006C20.0561 36.1669 18.561 37.4091 16.7974 38.1558C15.6219 38.653 14.3268 38.928 12.9762 38.928C10.9489 38.928 9.05125 38.3088 7.48658 37.2499C5.92079 36.1917 4.67858 34.697 3.9323 32.9333C3.43464 31.7579 3.16002 30.4627 3.16042 29.1126C3.16042 27.6295 3.57449 26.1712 4.28533 24.8093C4.99809 23.4443 6.00742 22.1632 7.25085 20.9885C7.89679 20.3793 8.60763 19.7991 9.37564 19.2497C8.86204 19.0617 8.33605 18.8854 7.79462 18.7253C5.42009 18.0261 2.78748 17.6159 0 17.6113V43.0587H52V17.6113C48.5778 17.6159 45.3871 18.2344 42.6228 19.2489C43.6373 19.9731 44.5522 20.7562 45.3512 21.5844Z" fill="#006CA2"/>
								<path d="M6.51196 29.1126C6.51278 30.4566 6.9175 31.6904 7.61483 32.7252C8.31206 33.7577 9.3026 34.5798 10.4606 35.0684C11.2329 35.3954 12.0789 35.5757 12.9762 35.5765C14.3203 35.5749 15.5551 35.1709 16.5888 34.4733C17.6217 33.7756 18.4433 32.7859 18.9326 31.6275C19.2594 30.8553 19.44 30.0092 19.4404 29.1127C19.4404 28.4718 19.306 27.792 19.0251 27.0804C18.7438 26.3687 18.3142 25.626 17.739 24.8879C16.6419 23.4771 15.012 22.0873 12.9754 20.918C11.4138 21.8161 10.0896 22.84 9.06484 23.9083C7.97294 25.0417 7.22402 26.2196 6.8391 27.3158C6.61769 27.9441 6.51196 28.5424 6.51196 29.1126Z" fill="#006CA2"/>
							</g>
							<defs>
								<clipPath id="clip0_contact_freedial">
									<rect width="52" height="52" fill="white"/>
								</clipPath>
							</defs>
						</svg>
					</span>
					<span class="text-center text-[48px] font-extrabold leading-[1]"><?php echo esc_html( $phone_display ); ?></span>
				</a>
			</div>
			<p class="mt-1 text-center text-2xl font-medium leading-[2] text-[#364153]">
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

				<form action="#" method="post" class="space-y-4" novalidate>
					<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
						<label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-name"><?php esc_html_e( 'お名前', 'gd-aircon-repair' ); ?></label>
						<input id="contact-name" type="text" class="h-12 w-full rounded-lg border border-[#99a1af] px-3 text-base text-[#1e2939] placeholder:text-[#99a1af]" placeholder="<?php esc_attr_e( '山田 太郎', 'gd-aircon-repair' ); ?>">
					</div>

					<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
						<label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-email"><?php esc_html_e( 'メールアドレス', 'gd-aircon-repair' ); ?></label>
						<input id="contact-email" type="email" class="h-12 w-full rounded-lg border border-[#99a1af] px-3 text-base text-[#1e2939] placeholder:text-[#99a1af]" placeholder="<?php esc_attr_e( 'yamada@example.com', 'gd-aircon-repair' ); ?>">
					</div>

					<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
						<label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-phone"><?php esc_html_e( 'お電話番号', 'gd-aircon-repair' ); ?></label>
						<input id="contact-phone" type="tel" class="h-12 w-full rounded-lg border border-[#99a1af] px-3 text-base text-[#1e2939] placeholder:text-[#99a1af]" placeholder="<?php esc_attr_e( '080-1234-5678', 'gd-aircon-repair' ); ?>">
					</div>

					<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
						<p class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]"><?php esc_html_e( 'お問い合わせ項目', 'gd-aircon-repair' ); ?></p>
						<div class="flex h-12 flex-wrap items-center gap-6" role="radiogroup" aria-label="<?php esc_attr_e( 'お問い合わせ項目', 'gd-aircon-repair' ); ?>">
							<label class="inline-flex items-center gap-2 text-base font-medium text-[#1e2939]">
								<input type="radio" name="contact-type" checked class="h-5 w-5 accent-[#2b7fff]">
								<span><?php esc_html_e( '見積の依頼', 'gd-aircon-repair' ); ?></span>
							</label>
							<label class="inline-flex items-center gap-2 text-base font-medium text-[#1e2939]">
								<input type="radio" name="contact-type" class="h-5 w-5 accent-[#2b7fff]">
								<span><?php esc_html_e( '故障の相談', 'gd-aircon-repair' ); ?></span>
							</label>
							<label class="inline-flex items-center gap-2 text-base font-medium text-[#1e2939]">
								<input type="radio" name="contact-type" class="h-5 w-5 accent-[#2b7fff]">
								<span><?php esc_html_e( 'その他', 'gd-aircon-repair' ); ?></span>
							</label>
						</div>
					</div>

					<div class="flex flex-col gap-2 lg:flex-row lg:items-start lg:gap-3">
						<label class="w-[140px] shrink-0 py-[11px] text-base font-bold leading-5 text-[#4a5565]" for="contact-message"><?php esc_html_e( 'お問い合わせ内容', 'gd-aircon-repair' ); ?></label>
						<textarea id="contact-message" class="h-[140px] w-full rounded-lg border border-[#99a1af] px-3 py-3 text-base text-[#1e2939] placeholder:text-[#99a1af]" placeholder="<?php esc_attr_e( 'お問い合わせ内容を入力してください', 'gd-aircon-repair' ); ?>"></textarea>
					</div>

					<div class="flex flex-col gap-2 lg:flex-row lg:items-start lg:gap-3">
						<p class="w-[140px] shrink-0 py-[11px] text-base font-bold leading-5 text-[#4a5565]">
							<?php esc_html_e( '個人情報の', 'gd-aircon-repair' ); ?><br>
							<?php esc_html_e( '取り扱いについて', 'gd-aircon-repair' ); ?>
						</p>
						<div class="w-full space-y-4">
							<div class="h-[180px] overflow-y-auto rounded-lg border border-[#99a1af] bg-[#f3f4f6] p-3 text-sm leading-7 text-[#364153]">
								<?php if ( '' !== $privacy_policy_content ) : ?>
									<?php echo wp_kses_post( $privacy_policy_content ); ?>
								<?php else : ?>
									<p><?php esc_html_e( 'プライバシーポリシーが見つかりませんでした。', 'gd-aircon-repair' ); ?></p>
								<?php endif; ?>
							</div>
							<label class="inline-flex items-center gap-2 text-base font-medium text-[#1e2939]">
								<input type="checkbox" class="h-5 w-5 accent-[#2b7fff]">
								<span><?php esc_html_e( '個人情報保護方針に同意します', 'gd-aircon-repair' ); ?></span>
							</label>
						</div>
					</div>

					<div class="flex justify-center pt-5">
						<button type="button" class="inline-flex w-60 items-center justify-center gap-3 rounded bg-[#0084d1] px-5 py-4 text-2xl font-bold leading-6 text-white shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]">
							<span class="grow text-center"><?php esc_html_e( '送信する', 'gd-aircon-repair' ); ?></span>
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.5 23.3327V4.66602L25.6667 13.9993M5.83333 19.8327L19.6583 13.9993L5.83333 8.16602V12.2493L12.8333 13.9993L5.83333 15.7493M5.83333 19.8327V8.16602V15.7493V19.8327Z" fill="white"/>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
