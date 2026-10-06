<?php
/**
 * フロントページ（静的ページが設定されている場合）
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<?php
$fv_phone_display = apply_filters( 'gd_aircon_repair_phone_display', '050-5526-3005' );
$fv_phone_tel     = preg_replace( '/\D+/', '', (string) apply_filters( 'gd_aircon_repair_phone_tel', '05055263005' ) );
$fv_show_phone    = (bool) apply_filters( 'gd_aircon_repair_show_phone', true );
$fv_badges        = array(
	'same-day'      => __( '最短当日対応可能', 'gd-aircon-repair' ),
	'all-makers'    => __( 'メーカー問わず全メーカー修理対応', 'gd-aircon-repair' ),
	'12000'         => __( '年間12,000台以上の実績', 'gd-aircon-repair' ),
	'other-install' => __( '他社設置の機器もご相談可能', 'gd-aircon-repair' ),
);
?>
<section class="relative overflow-hidden bg-brand-cream pt-16 lg:pt-0">
	<div class="absolute inset-x-0 bottom-0 top-6 lg:inset-0">
		<img
			class="h-full w-full object-cover object-[12%_0%] sm:object-[18%_4%] lg:object-[center_6%]"
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/top/fv-119.jpg' ); ?>"
			width="1536"
			height="1024"
			alt=""
			fetchpriority="high"
		>
		<?php // 背景動画：1回だけ無音で再生し、終わったら上の静止画に切り替える ?>
		<video
			class="fv-video pointer-events-none absolute inset-0 h-full w-full object-cover opacity-0 transition-opacity duration-1000 motion-reduce:hidden"
			muted
			playsinline
			preload="auto"
			aria-hidden="true"
			data-src-pc="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/fv-119.mp4' ); ?>"
			data-src-sp="<?php echo esc_url( get_template_directory_uri() . '/assets/videos/fv-119-sp.mp4' ); ?>"
		></video>
		<div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(255,247,243,0)_0%,rgba(255,247,243,0)_34%,rgba(255,247,243,0.45)_48%,rgba(255,247,243,0.72)_62%,rgba(255,247,243,0.8)_100%)] lg:hidden" aria-hidden="true"></div>
		<div class="absolute inset-0 hidden bg-[linear-gradient(100deg,rgba(255,255,255,0)_0%,rgba(255,251,249,0.15)_40%,rgba(255,251,249,0.82)_56%,rgba(255,249,245,0.95)_100%)] lg:block" aria-hidden="true"></div>
	</div>

	<div class="relative mx-auto flex w-full max-w-[1440px] items-end px-4 pb-10 pt-[340px] sm:pt-[400px] lg:min-h-[640px] lg:items-center lg:justify-end lg:px-14 lg:py-16">
		<div class="w-full text-right text-[#1a2f3e] lg:w-[700px] xl:w-[760px]">
			<p class="mb-5 inline-flex rounded-full bg-brand-fire px-5 py-2 text-sm font-extrabold text-white shadow-[0_4px_12px_rgba(255,104,31,0.3)] lg:text-base">
				<?php esc_html_e( '調査・お見積り無料／最短当日で駆けつけ', 'gd-aircon-repair' ); ?>
			</p>
			<h1 class="fv-title text-[32px] font-black leading-[1.25] text-brand-ink min-[400px]:text-[34px] sm:text-[46px] lg:text-[56px] xl:text-[62px]">
				<span class="text-[0.72em]"><?php esc_html_e( '止まった', 'gd-aircon-repair' ); ?></span><br>
				<?php esc_html_e( '業務用エアコン', 'gd-aircon-repair' ); ?><span class="text-[0.72em]"><?php esc_html_e( 'を', 'gd-aircon-repair' ); ?></span><br>
				<span class="text-brand-fire"><?php esc_html_e( 'その日のうちに', 'gd-aircon-repair' ); ?></span><?php esc_html_e( '動かす', 'gd-aircon-repair' ); ?>
			</h1>
			<p class="mt-5 text-[15px] leading-[1.85] text-[#42566a] sm:text-base lg:text-[19px] [&>span]:inline-block">
				<span><?php esc_html_e( '水漏れ・冷えない・エラーコード表示。', 'gd-aircon-repair' ); ?></span><span><?php esc_html_e( '全メーカーに対応し、', 'gd-aircon-repair' ); ?></span><br class="hidden sm:inline">
				<span><?php esc_html_e( '他社で断られた機器や旧型機も', 'gd-aircon-repair' ); ?></span><span><?php esc_html_e( 'ご相談いただけます。', 'gd-aircon-repair' ); ?></span>
			</p>
			<ul class="m-0 ml-auto mt-5 grid w-fit list-none grid-cols-2 gap-x-2 gap-y-1 p-0 sm:flex sm:gap-2 lg:mt-6 xl:gap-3">
				<?php foreach ( $fv_badges as $fv_badge_file => $fv_badge_alt ) : ?>
					<li>
						<img
							class="block h-auto w-[132px] sm:w-[124px] lg:w-[138px] xl:w-[150px]"
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/top/badges/badge-' . $fv_badge_file . '.webp' ); ?>"
							width="600"
							height="600"
							alt="<?php echo esc_attr( $fv_badge_alt ); ?>"
							decoding="async"
						>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php // ボタン画像は文字入り（電話番号を変えたら assets/images/top/cta/cta-tel.webp も作り直す） ?>
			<div class="ml-auto mt-7 flex w-full max-w-[360px] flex-col gap-3 sm:max-w-none sm:flex-row sm:justify-end lg:mt-8">
				<?php if ( $fv_show_phone ) : ?>
					<a class="block no-underline transition duration-200 hover:-translate-y-0.5 hover:brightness-105 active:translate-y-px sm:w-[300px] xl:w-[325px]" href="<?php echo esc_url( 'tel:' . $fv_phone_tel ); ?>">
						<img
							class="block h-auto w-full"
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/top/cta/cta-tel.webp' ); ?>"
							width="760"
							height="207"
							alt="<?php echo esc_attr( sprintf( __( 'お電話でのご相談 %s', 'gd-aircon-repair' ), $fv_phone_display ) ); ?>"
							decoding="async"
						>
					</a>
				<?php endif; ?>
				<a class="block no-underline transition duration-200 hover:-translate-y-0.5 hover:brightness-105 active:translate-y-px sm:w-[300px] xl:w-[325px]" href="#top-quote">
					<img
						class="block h-auto w-full"
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/top/cta/cta-web.webp' ); ?>"
						width="760"
						height="206"
						alt="<?php esc_attr_e( '無料 WEBで見積り', 'gd-aircon-repair' ); ?>"
						decoding="async"
					>
				</a>
			</div>
		</div>
	</div>
</section>

<script>
( function () {
	var video = document.querySelector( '.fv-video' );
	if ( ! video ) {
		return;
	}
	if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) {
		video.remove();
		return;
	}
	var hide = function () {
		video.classList.remove( 'opacity-100' );
		video.classList.add( 'opacity-0' );
		window.setTimeout( function () {
			video.remove();
		}, 1000 );
	};
	video.muted = true;
	video.src = window.matchMedia( '(min-width: 1024px)' ).matches ? video.dataset.srcPc : video.dataset.srcSp;
	video.addEventListener( 'playing', function () {
		video.classList.remove( 'opacity-0' );
		video.classList.add( 'opacity-100' );
	}, { once: true } );
	video.addEventListener( 'ended', hide, { once: true } );
	video.addEventListener( 'error', hide, { once: true } );
	var playing = video.play();
	if ( playing && playing.catch ) {
		playing.catch( hide );
	}
} )();
</script>

<div class="bg-brand-fire px-4 py-4 text-white">
	<ul class="m-0 mx-auto flex max-w-[1280px] list-none flex-col items-center gap-1.5 p-0 text-center text-sm font-bold lg:flex-row lg:justify-center lg:gap-12 lg:text-base">
		<li><?php esc_html_e( '対応エリア｜', 'gd-aircon-repair' ); ?><span class="border-b-2 border-white/60 font-extrabold"><?php esc_html_e( '関東・中部・関西', 'gd-aircon-repair' ); ?></span></li>
		<li><?php esc_html_e( '天カセ／天吊／壁掛／床置／ダクト／ビルトイン', 'gd-aircon-repair' ); ?></li>
		<li><?php esc_html_e( 'ダイキン・三菱・日立・東芝・パナソニック 他', 'gd-aircon-repair' ); ?></li>
	</ul>
</div>

<section id="top-quote" class="scroll-mt-28 bg-brand-cream py-12 lg:py-16">
	<div class="mx-auto w-full max-w-[560px] px-4">
		<div class="rounded-lg bg-white px-6 pt-6 text-slate-900 shadow-[0px_25px_50px_-12px_rgba(0,0,0,0.25)]">
			<div class="mb-4 flex items-end justify-center gap-1 border-b-4 border-brand-fire pb-3 text-center">
				<span class="text-lg font-bold leading-8 text-brand-blue lg:text-2xl"><?php esc_html_e( 'WEBでカンタン', 'gd-aircon-repair' ); ?></span>
				<span class="text-4xl font-black leading-[1] text-brand-fire"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
				<span class="text-lg font-bold leading-8 text-brand-blue lg:text-2xl"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
			</div>
			<?php // cf7のフォームを表示 ?>
			<?php echo do_shortcode( '[contact-form-7 id="e2578fa" title="TOPページお問い合わせ"]' ); ?>
		</div>
	</div>
</section>


<?php
$symptom_cards = array(
	array(
		'title' => __( '水漏れ', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/water-leak.webp',
		'url'   => home_url( '/symptoms/water-leak/' ),
	),
	array(
		'title' => __( '冷えない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/not-cooling.webp?v=2',
		'url'   => home_url( '/symptoms/not-cooling/' ),
	),
	array(
		'title' => __( '異臭がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/bad-smell.webp',
		'url'   => home_url( '/symptoms/bad-smell/' ),
	),
	array(
		'title' => __( '異音がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/strange-noise.webp',
		'url'   => home_url( '/symptoms/strange-noise/' ),
	),
	array(
		'title' => __( '暖まらない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/not-heating.webp?v=2',
		'url'   => home_url( '/symptoms/not-heating/' ),
	),
	array(
		'title' => __( '途中で止まる', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/stops-unexpectedly.webp',
		'url'   => home_url( '/symptoms/stops-unexpectedly/' ),
	),
	array(
		'title' => __( '霜・氷がつく', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/frost-ice.webp',
		'url'   => home_url( '/symptoms/frost-ice/' ),
	),
	array(
		'title' => __( '風が出ない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/illust/no-airflow.webp',
		'url'   => home_url( '/symptoms/no-airflow/' ),
	),
);

$ac_types_cards = array(
	array(
		'title' => __( '天井カセット型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tenkase.jpg',
		'url'   => home_url( '/types/tenkase/' ),
	),
	array(
		'title' => __( '天井吊型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tentsuri.jpg',
		'url'   => home_url( '/types/tentsuri/' ),
	),
	array(
		'title' => __( '床置型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/yukaoki.jpg',
		'url'   => home_url( '/types/yukaoki/' ),
	),
	array(
		'title' => __( '壁掛型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/kabekake.jpg',
		'url'   => home_url( '/types/kabekake/' ),
	),
	array(
		'title' => __( 'ビルトイン', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/builtin.jpg',
		'url'   => home_url( '/types/builtin/' ),
	),
	array(
		'title' => __( '天井埋込ダクト型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/duct.jpg',
		'url'   => home_url( '/types/duct/' ),
	),
);
?>

<section class="bg-white py-16 lg:py-[60px]">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
		<div class="mb-8 flex flex-col items-center gap-3 lg:mb-12">
			<p class="text-center text-2xl font-bold leading-[1.2] tracking-[-0.03em] text-[#16374F] lg:text-[32px]">
				<?php esc_html_e( 'こんなお困りごとはありませんか？', 'gd-aircon-repair' ); ?>
			</p>
			<h2 class="text-center text-[36px] font-bold leading-[1.15] tracking-[-0.03em] text-[#16374F] lg:text-[56px]">
				<?php esc_html_e( '業務用エアコン修理会社が解決します', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="mt-2 block h-2 w-24 bg-[#FF681F]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
			<?php foreach ( $symptom_cards as $symptom_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.15),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $symptom_card['url'] ); ?>"
				>
					<div class="h-[201px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $symptom_card['image'] ); ?>"
							alt="<?php echo esc_attr( $symptom_card['title'] ); ?>"
							loading="lazy"
							width="290"
							height="201"
						>
					</div>
					<div class="flex min-h-[60px] items-center justify-center px-4 py-3">
						<p class="text-center text-xl font-bold leading-[1.2] text-[#16374F]">
							<?php echo esc_html( $symptom_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#FF681F] px-6 py-3 text-xl lg:text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#D8480A]"
				href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての症状を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<section class="bg-white py-16 lg:py-20">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<div class="mb-8 flex flex-col items-center gap-5 lg:mb-12">
			<h2 class="text-center text-3xl font-bold leading-[1.1] text-[#16374F] lg:text-[36px]">
				<?php esc_html_e( '業務用エアコンの種類', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="block h-2 w-24 bg-[#FF681F]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
			<?php foreach ( $ac_types_cards as $type_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.16),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $type_card['url'] ); ?>"
				>
					<div class="h-[280px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $type_card['image'] ); ?>"
							alt="<?php echo esc_attr( $type_card['title'] ); ?>"
							loading="lazy"
							width="420"
							height="280"
						>
					</div>
					<div class="p-6">
						<p class="text-xl font-bold leading-[1.2] text-[#16374F] lg:text-[24px]">
							<?php echo esc_html( $type_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#FF681F] px-6 py-3 text-xl lg:text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#D8480A]"
				href="<?php echo esc_url( home_url( '/types/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての種類を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<?php
$pricing_rows = array(
	array(
		'service'         => __( '水漏れ', 'gd-aircon-repair' ),
		'price_ex_tax'    => '15,000',
		'price_incl_tax'  => '16,500',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/water-leak.jpg',
	),
	array(
		'service'         => __( '冷えない', 'gd-aircon-repair' ),
		'price_ex_tax'    => '35,000',
		'price_incl_tax'  => '38,500',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/not-cooling.jpg',
	),
	array(
		'service'         => __( 'ガス漏れガス補充', 'gd-aircon-repair' ),
		'price_ex_tax'    => '35,000',
		'price_incl_tax'  => '38,500',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/gas-leak.jpg',
	),
	array(
		'service'         => __( '室内機基盤取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '34,000',
		'price_incl_tax'  => '37,400',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/indoor-unit-board.jpg',
	),
	array(
		'service'         => __( '室外機基盤取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '42,000',
		'price_incl_tax'  => '46,200',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/outdoor-unit-board.jpg',
	),
	array(
		'service'         => __( 'ファンモーター取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '32,000',
		'price_incl_tax'  => '35,200',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/fan-motor.jpg',
	),
	array(
		'service'         => __( 'ルーバー取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '14,000',
		'price_incl_tax'  => '15,400',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/louver.jpg',
	),
	array(
		'service'         => __( '温度センサー取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '18,000',
		'price_incl_tax'  => '19,800',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/temperature-sensor.jpg',
	),
	array(
		'service'         => __( 'コンプレッサー取替', 'gd-aircon-repair' ),
		'price_ex_tax'    => '120,000',
		'price_incl_tax'  => '132,000',
		'image'           => get_template_directory_uri() . '/assets/images/pricing/compressor.jpg',
	),
);
?>

<section class="bg-[#FFF7F3] py-16 lg:py-20" aria-labelledby="pricing-heading">
	<div class="mx-auto w-full max-w-[880px] px-4 lg:px-6">
		<h2 id="pricing-heading" class="mb-8 text-center text-[32px] font-bold leading-tight text-[#16374F] lg:mb-10 lg:text-[36px]">
			<?php esc_html_e( '透明な料金体系', 'gd-aircon-repair' ); ?>
		</h2>

		<div class="overflow-hidden rounded-xl bg-white shadow-[0px_10px_25px_-5px_rgba(0,0,0,0.08),0px_8px_10px_-6px_rgba(0,0,0,0.08)]">
			<div class="bg-[#16374F] px-4 py-4 text-center text-base font-bold text-white sm:hidden">
				<?php esc_html_e( 'サービス内容', 'gd-aircon-repair' ); ?>
			</div>
			<table class="w-full border-collapse text-left text-slate-800">
				<thead class="hidden sm:table-header-group">
					<tr class="bg-[#16374F] text-white">
						<th scope="col" class="px-4 py-4 text-base font-bold lg:px-6">
							<?php esc_html_e( 'サービス内容', 'gd-aircon-repair' ); ?>
						</th>
						<th scope="col" class="px-4 py-4 text-right text-base font-bold lg:px-6">
							<?php esc_html_e( '料金（税込）', 'gd-aircon-repair' ); ?>
						</th>
					</tr>
				</thead>
				<tbody class="block sm:table-row-group">
					<?php foreach ( $pricing_rows as $row ) : ?>
						<tr class="block border-b border-slate-200 last:border-b-0 sm:table-row">
							<td class="block px-4 py-3 align-middle sm:table-cell sm:py-2 lg:px-6">
								<div class="flex items-center gap-3">
									<img
										class="h-16 w-16 shrink-0 rounded object-cover"
										src="<?php echo esc_url( $row['image'] ); ?>"
										alt="<?php echo esc_attr( $row['service'] ); ?>"
										loading="lazy"
										width="64"
										height="64"
									>
									<div class="flex min-w-0 flex-1 flex-col gap-1.5">
										<span class="text-base font-medium leading-snug text-slate-800">
											<?php echo esc_html( $row['service'] ); ?>
										</span>
										<div class="flex flex-col items-start gap-0.5 sm:hidden">
											<span class="text-xl font-bold tabular-nums text-[#16374F]">
												<?php
												/* translators: %s: price amount without currency symbol */
												echo esc_html( sprintf( __( '¥%s〜', 'gd-aircon-repair' ), $row['price_ex_tax'] ) );
												?>
											</span>
											<span class="text-sm tabular-nums text-slate-500">
												<?php
												/* translators: %s: tax-inclusive price amount */
												echo esc_html( sprintf( __( '(税込 ¥%s〜)', 'gd-aircon-repair' ), $row['price_incl_tax'] ) );
												?>
											</span>
										</div>
									</div>
								</div>
							</td>
							<td class="hidden align-middle sm:table-cell sm:px-4 sm:py-4 sm:text-right lg:px-6">
								<div class="flex flex-col items-end gap-0.5">
									<span class="text-xl font-bold tabular-nums text-[#16374F] lg:text-2xl">
										<?php
										/* translators: %s: price amount without currency symbol */
										echo esc_html( sprintf( __( '¥%s〜', 'gd-aircon-repair' ), $row['price_ex_tax'] ) );
										?>
									</span>
									<span class="text-sm tabular-nums text-slate-500">
										<?php
										/* translators: %s: tax-inclusive price amount */
										echo esc_html( sprintf( __( '(税込 ¥%s〜)', 'gd-aircon-repair' ), $row['price_incl_tax'] ) );
										?>
									</span>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<p class="border-t border-slate-100 px-4 py-4 text-sm leading-relaxed text-slate-500 lg:px-6">
				<?php esc_html_e( '※上記料金は代表的なモデル（ダイキン FHCP80AB等）に基づいた概算です。機種や設置状況により異なる場合があります。', 'gd-aircon-repair' ); ?>
			</p>
		</div>
		<div class="mt-8 flex justify-center">
			<a class="inline-flex items-center gap-3 rounded-lg bg-brand-fire px-6 py-3 text-lg font-bold text-white no-underline shadow-[0_4px_0_#d8480a] transition hover:bg-brand-fire/90" href="<?php echo esc_url( home_url( '/price/' ) ); ?>">
				<?php esc_html_e( '修理費用と「修理か交換か」の判断基準を見る', 'gd-aircon-repair' ); ?>
				<span aria-hidden="true">→</span>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
