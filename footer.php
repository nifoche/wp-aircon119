<?php
/**
 * フッターテンプレート
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone_display = apply_filters( 'gd_aircon_repair_phone_display', '0120-000-000' );
$phone_tel     = apply_filters( 'gd_aircon_repair_phone_tel', '0120000000' );
$phone_tel     = preg_replace( '/\D+/', '', (string) $phone_tel );
$quote_url     = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/' ) );
$area_map_url  = 'http://localhost:3845/assets/65aa4862c51ae3de0be7725b1f13968c0386a6c3.png';
$repair_steps  = array(
	array(
		'number'      => '1',
		'title'       => 'WEB・お電話でお問い合わせ',
		'description' => array(
			'お問い合わせフォームまたはお電話でお問い合わせください。',
			'当日から2営業日以内に当社より折り返しご連絡いたします。',
		),
		'image'       => 'http://localhost:3845/assets/472979eb76a7bd5d547bcfb3ccbe3ec303d24102.png',
	),
	array(
		'number'      => '2',
		'title'       => '担当者より折り返しのご連絡',
		'description' => array(
			'担当者よりメールもしくはお電話でご連絡させて頂きます。ご要望をお伺いし、現場調査の日程調整をお願いします。',
		),
		'image'       => 'http://localhost:3845/assets/144038db0673843c409d9f3c781f8f2ee44c569d.png',
	),
	array(
		'number'      => '3',
		'title'       => '現場調査',
		'description' => array(
			'担当者が訪問して設置場所や広さなど、環境に合わせて最適な製品や工事内容を調査いたします。',
		),
		'image'       => 'http://localhost:3845/assets/e064500b2b6892321455680f682aca0c34b79282.png',
	),
	array(
		'number'      => '4',
		'title'       => 'お見積ものご確認（無料）',
		'description' => array(
			'調査内容をもとに選定した機器の説明、工事内容のお見積書を作成いたします。',
		),
		'image'       => 'http://localhost:3845/assets/cc9468e46d3579180c0b51a0bcf366bdb9126207.png',
	),
	array(
		'number'      => '5',
		'title'       => 'ご契約',
		'description' => array(
			'お見積もりの内容をご承認いただけましたらご契約となります。',
			'工事の日程や流れについての打ち合わせをお願いします。',
		),
		'image'       => 'http://localhost:3845/assets/c440ccdcabb8b0182c28e58e721c2cbf6f7e0efe.png',
	),
	array(
		'number'      => '6',
		'title'       => '設置工事・修理',
		'description' => array(
			'既存設備の撤去。新しい設備の設置。配管、配線工事。清掃と養生材の撤去までプロスタッフが丁寧な工事を行います。',
		),
		'image'       => 'http://localhost:3845/assets/9beaf56f40b1cc9bde2c262485d21ab095419342.png',
	),
);
$reason_bg_icon_url = 'http://localhost:3845/assets/9c3e3553b9f1ae18f1c7c9984e64c21d2107da9e.svg';
$reason_check_icon  = 'http://localhost:3845/assets/c19d4babfa819cb8c1e47f6263b9dc9de32bf824.svg';
$reason_star_full   = 'http://localhost:3845/assets/b2fa53943a184fae6af3e339fec755ced2882e49.svg';
$reason_star_half   = 'http://localhost:3845/assets/fe93aa5c6ff749c5606554cb32416c9f4f0f739a.svg';
?>

</main>

<section class="bg-white py-16 lg:py-24">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-16 px-4 lg:px-6">
		<div class="flex flex-col items-center gap-8">
			<h2 class="text-center text-4xl font-black leading-10 text-brand-navy"><?php esc_html_e( '修理の流れ', 'gd-aircon-repair' ); ?></h2>
			<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
		</div>

		<div class="flex flex-col gap-6 lg:gap-10">
			<?php foreach ( $repair_steps as $step ) : ?>
				<div class="flex flex-col gap-5 rounded-2xl bg-white p-4 shadow-[0_5px_25px_0_rgba(0,0,0,0.2)] lg:flex-row lg:items-center lg:gap-10">
					<div class="flex h-[100px] w-[100px] shrink-0 items-center justify-center rounded-full bg-brand-orange">
						<span class="text-[42px] font-extrabold leading-[48px] text-white"><?php echo esc_html( $step['number'] ); ?></span>
					</div>

					<div class="min-w-0 flex-1">
						<p class="text-2xl font-bold leading-tight text-brand-skydeep lg:text-[36px]"><?php echo esc_html( $step['title'] ); ?></p>
						<div class="mt-2 space-y-0.5 text-base leading-7 text-slate-700 lg:text-lg">
							<?php foreach ( $step['description'] as $description_line ) : ?>
								<p><?php echo esc_html( $description_line ); ?></p>
							<?php endforeach; ?>
						</div>
					</div>

					<img
						class="h-[181px] w-full rounded-md object-cover lg:w-[300px]"
						src="<?php echo esc_url( $step['image'] ); ?>"
						alt=""
						loading="lazy"
					>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="relative overflow-hidden bg-brand-navy px-6 py-14 text-white lg:px-8 lg:py-[81px]">
	<div class="pointer-events-none absolute bottom-0 right-0 hidden opacity-10 lg:block">
		<img
			class="h-[350px] w-[366px]"
			src="<?php echo esc_url( $reason_bg_icon_url ); ?>"
			alt=""
			loading="lazy"
		>
	</div>

	<div class="relative mx-auto flex w-full max-w-[1280px] flex-col gap-10 lg:flex-row lg:items-center lg:justify-between lg:gap-16">
		<div class="flex max-w-[560px] flex-col gap-8">
			<div class="space-y-2 tracking-[-0.05em]">
				<p class="text-4xl font-bold leading-tight md:text-4xl md:leading-[60px]"><?php esc_html_e( '業務用エアコン修理会社が', 'gd-aircon-repair' ); ?></p>
				<p class="text-5xl font-bold leading-tight md:text-7xl md:leading-[60px]"><?php esc_html_e( '選ばれる理由', 'gd-aircon-repair' ); ?></p>
			</div>
			<p class="text-lg leading-[1.5] text-white/80">
				<?php esc_html_e( '他社で断られた難工事も一度ご相談ください。', 'gd-aircon-repair' ); ?><br>
				<?php esc_html_e( 'ルームエアコン1台から大型施設の大規模工事(集中管理システム)まで対応しています。', 'gd-aircon-repair' ); ?>
			</p>
		</div>

		<div class="relative flex w-full max-w-[420px] flex-col gap-8 pt-2 lg:self-stretch lg:pt-4">
			<div class="absolute left-[-345px] top-4 z-20 hidden rotate-12 lg:block">
				<div class="rounded-xl border-4 border-white bg-brand-orange px-6 py-6 text-center shadow-header">
					<p class="text-[54px] font-extrabold leading-[60px] text-white">4.9/5</p>
					<div class="mt-1 flex items-center justify-center gap-0.5">
						<img class="h-[19px] w-5" src="<?php echo esc_url( $reason_star_full ); ?>" alt="" loading="lazy">
						<img class="h-[19px] w-5" src="<?php echo esc_url( $reason_star_full ); ?>" alt="" loading="lazy">
						<img class="h-[19px] w-5" src="<?php echo esc_url( $reason_star_full ); ?>" alt="" loading="lazy">
						<img class="h-[19px] w-5" src="<?php echo esc_url( $reason_star_full ); ?>" alt="" loading="lazy">
						<img class="h-[19px] w-5" src="<?php echo esc_url( $reason_star_half ); ?>" alt="" loading="lazy">
					</div>
					<p class="mt-2 text-base font-bold leading-4 text-brand-navy"><?php esc_html_e( 'お客様満足度平均', 'gd-aircon-repair' ); ?></p>
				</div>
			</div>

			<div class="flex items-start gap-4">
				<img class="mt-1 h-[30px] w-[30px]" src="<?php echo esc_url( $reason_check_icon ); ?>" alt="" loading="lazy">
				<div class="space-y-1">
					<p class="text-[32px] font-extrabold leading-8"><?php esc_html_e( '実績', 'gd-aircon-repair' ); ?></p>
					<p class="text-base leading-6 text-white/70">
						<?php esc_html_e( '年間', 'gd-aircon-repair' ); ?>
						<span class="px-1 text-[32px] font-extrabold leading-8 text-brand-orange">1,000</span>
						<?php esc_html_e( '件以上の、豊富な対応実績', 'gd-aircon-repair' ); ?>
					</p>
				</div>
			</div>

			<div class="flex items-start gap-4">
				<img class="mt-1 h-[30px] w-[30px]" src="<?php echo esc_url( $reason_check_icon ); ?>" alt="" loading="lazy">
				<div class="space-y-1">
					<p class="text-[32px] font-extrabold leading-8"><?php esc_html_e( '経験', 'gd-aircon-repair' ); ?></p>
					<p class="text-base leading-6 text-white/70"><?php esc_html_e( '経験豊富な業務用エアコン修理専門スタッフ', 'gd-aircon-repair' ); ?></p>
				</div>
			</div>

			<div class="flex items-start gap-4">
				<img class="mt-1 h-[30px] w-[30px]" src="<?php echo esc_url( $reason_check_icon ); ?>" alt="" loading="lazy">
				<div class="space-y-1">
					<p class="text-[32px] font-extrabold leading-8"><?php esc_html_e( '安心', 'gd-aircon-repair' ); ?></p>
					<p class="text-base leading-6 text-white/70"><?php esc_html_e( '料金にご納得いただいた上で作業を行い、', 'gd-aircon-repair' ); ?></p>
					<p class="text-base leading-6 text-white/70"><?php esc_html_e( 'お見積もりの後にキャンセルも可能', 'gd-aircon-repair' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="relative overflow-hidden bg-[#daedf6] py-5">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-7 md:py-12 lg:px-12">
		<div class="relative z-10 flex max-w-[540px] flex-col gap-5">
			<h2 class="flex flex-col gap-5 text-[#00598a]">
				<span class="text-5xl font-bold leading-none"><?php esc_html_e( '対応エリア', 'gd-aircon-repair' ); ?></span>
				<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
			</h2>

			<p class="text-base font-medium leading-6 text-slate-900">
				<?php esc_html_e( '関東・中部・関西を中心に、地域のプロフェッショナルが迅速に対応いたします!', 'gd-aircon-repair' ); ?>
			</p>

			<div class="flex flex-col gap-6">
				<div class="space-y-2">
					<p class="text-[20px] font-medium leading-7 text-[#875200]"><?php esc_html_e( '関東エリア', 'gd-aircon-repair' ); ?></p>
					<p class="text-base font-medium leading-6 text-slate-900"><?php esc_html_e( '東京都 / 神奈川県 / 埼玉県 / 千葉県 / 茨城県 / 栃木県 / 群馬県', 'gd-aircon-repair' ); ?></p>
				</div>
				<div class="space-y-2">
					<p class="text-[20px] font-medium leading-7 text-[#875200]"><?php esc_html_e( '中部エリア', 'gd-aircon-repair' ); ?></p>
					<p class="text-base font-medium leading-6 text-slate-900"><?php esc_html_e( '愛知県 / 岐阜県 / 三重県 / 静岡県', 'gd-aircon-repair' ); ?></p>
				</div>
				<div class="space-y-2">
					<p class="text-[20px] font-medium leading-7 text-[#875200]"><?php esc_html_e( '関西エリア', 'gd-aircon-repair' ); ?></p>
					<p class="text-base font-medium leading-6 text-slate-900"><?php esc_html_e( '大阪府 / 京都府 / 兵庫県 / 奈良県 / 滋賀県 / 和歌山県', 'gd-aircon-repair' ); ?></p>
				</div>
			</div>

			<p class="pt-4 text-base font-medium leading-6 text-slate-700">
				<?php esc_html_e( '※上記以外の地域も順次拡大中です。お気軽にご相談ください。', 'gd-aircon-repair' ); ?>
			</p>
		</div>

		<div class="pointer-events-none absolute -right-24 top-8 hidden w-[760px] rotate-[5.82deg] md:block lg:-right-20 lg:top-[-32px] lg:w-[852px]">
			<img
				class="h-auto w-full object-contain opacity-95"
				src="<?php echo esc_url( $area_map_url ); ?>"
				alt=""
				loading="lazy"
			>
		</div>
	</div>
</section>

<section class="bg-brand-orange text-white shadow-header">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-10 md:flex-row md:items-center md:justify-between md:gap-6 md:px-10 md:py-14 lg:px-16">
		<div class="flex grow flex-col gap-4">
			<h2 class="text-3xl font-bold leading-tight tracking-[-0.06em] md:text-[44px] md:leading-[1.2]">
				<?php esc_html_e( 'お気軽にご相談ください!!', 'gd-aircon-repair' ); ?>
			</h2>
			<p class="text-2xl font-bold leading-7 text-white/90">
				<?php esc_html_e( '現地調査・お見積もりは完全無料です。', 'gd-aircon-repair' ); ?>
			</p>
		</div>

		<div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-end">
			<a
				class="inline-flex h-16 flex-1 items-center justify-center gap-3 rounded bg-brand-navy px-6 text-[34px] font-bold leading-8 text-white no-underline shadow-lg ring-1 ring-black/5 transition hover:bg-brand-navy/90"
				href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24" fill="currentColor" class="shrink-0" aria-hidden="true" focusable="false">
					<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
				</svg>
				<span class="text-3xl leading-8"><?php echo esc_html( $phone_display ); ?></span>
			</a>

			<a
				class="inline-flex h-16 items-center justify-center gap-1 rounded bg-white px-4 text-brand-navy shadow-lg no-underline ring-1 ring-black/5 transition hover:bg-slate-100"
				href="<?php echo esc_url( $quote_url ); ?>"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="currentColor" class="shrink-0 text-brand-navy" aria-hidden="true" focusable="false">
					<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />
				</svg>
				<span class="text-2xl font-bold leading-8"><?php esc_html_e( 'WEBで', 'gd-aircon-repair' ); ?></span>
				<span class="text-[30px] font-black leading-[38px] text-brand-orange"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
				<span class="text-2xl font-bold leading-8"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
			</a>
		</div>
	</div>
</section>

<footer class="mt-auto bg-[#024a70] text-white">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col items-center gap-6 px-8 py-12">
		<p class="text-center text-2xl font-extrabold leading-7"><?php bloginfo( 'name' ); ?></p>

		<div class="w-full border-t border-slate-200" aria-hidden="true"></div>

		<nav
			class="[&_a:hover]:opacity-80 [&_a:focus-visible]:opacity-80 [&_.menu-item>a]:text-sm [&_.menu-item>a]:font-medium [&_.menu-item>a]:leading-5 [&_.menu-item>a]:text-slate-100 [&_.menu-item>a]:no-underline"
			aria-label="<?php esc_attr_e( 'フッターメニュー', 'gd-aircon-repair' ); ?>"
		>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'm-0 flex list-none flex-wrap items-center justify-center gap-x-8 gap-y-3 p-0',
					'container'      => false,
					'fallback_cb'    => 'gd_aircon_repair_fallback_footer_menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>

		<p class="text-center text-sm font-medium leading-5 text-slate-100">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> all rights reserved
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
