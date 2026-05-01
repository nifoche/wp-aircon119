<?php
/**
 * 固定ページ: 形状「天井カセット型」
 * URL 例: /types/tenkase/
 *
 * Template Name: 形状詳細（天井カセット型）
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$phone_display = apply_filters( 'gd_aircon_repair_phone_display', '0120-000-000' );
$phone_tel     = apply_filters( 'gd_aircon_repair_phone_tel', '0120000000' );
$phone_tel     = preg_replace( '/\D+/', '', (string) $phone_tel );
$quote_url     = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/' ) );

$assets = get_template_directory_uri() . '/assets/images/types/';
$hero_bg = $assets . '01.jpg';

$info_blocks = array(
	array(
		'title' => __( '天井カセット型の特徴', 'gd-aircon-repair' ),
		'text'  => __( '天井カセット形の大きな特徴は、天井面に自然になじみやすく、壁面や床面を有効活用しやすいことです。吹出口のタイプには4方向・3方向などがあり、空間の中央で広く風を届けたいケースにも、壁際やレイアウト制約のある場所に合わせたいケースにも対応しやすいです。見た目のすっきり感と、空調のしやすさを両立しやすい形状といえます。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井カセット型のメリット', 'gd-aircon-repair' ),
		'text'  => __( '天井カセット形のメリットは、空間全体へ比較的バランスよく送風しやすく、店舗や事務所の見た目を損ねにくいことです。壁に商品棚や掲示物を設けたい場合でも干渉しにくく、レイアウトの自由度を確保しやすいケースがあります。また、吹出口のバリエーションがあるため、部屋の広さや設置位置に応じて選びやすく、意匠性と快適性の両方を重視したい場面にも向いています。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井カセット型のデメリット', 'gd-aircon-repair' ),
		'text'  => __( '一方で、天井カセット形は天井内のスペースや梁、照明配置などの条件に影響を受けやすく、建物によっては選べるタイプが限られる場合があります。設置位置や吹出方向が空間に合っていないと、風当たりや空調ムラが気になることもあります。また、高所設置になるため、日常的な確認や清掃がしやすいとは限らず、汚れを放置すると効率低下や臭いの原因につながる可能性があります。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井カセット型の故障・修理', 'gd-aircon-repair' ),
		'text'  => __( '天井カセット形は、吸込グリルやフィルター、内部部品に汚れがたまることで吸込み効率が落ち、効きの低下や臭い、余分な電力消費につながることがあります。高所に設置されるため異常に気づきにくいこともあり、効きが悪い、においが気になる、汚れが目立つといった変化があれば早めの確認が大切です。ただし、内部洗浄や分解を伴う対応は専門業者の領域なので、故障かなと感じたら無理をせず業者へ相談するのが安全です。', 'gd-aircon-repair' ),
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( '天井カセット形は、どんな場所に向いていますか？', 'gd-aircon-repair' ),
		'answer'   => __( '店舗、事務所、待合スペースなど、空間全体に風を届けながら見た目もすっきり整えたい場所に向いています。壁や床のスペースを有効活用したいレイアウトでも採用しやすい形状です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '天井カセット形には、どんな違いがありますか？', 'gd-aircon-repair' ),
		'answer'   => __( '同じ天井カセット形でも、吹出口の方向数や構成に違いがあります。空間の中央で広く使いたいのか、壁際や制約のある場所に納めたいのかによって、向いているタイプが変わります。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '効きが悪い、においが気になるときは何を確認すればよいですか？', 'gd-aircon-repair' ),
		'answer'   => __( 'まずは吸込グリルやフィルターまわりの汚れ、におい、効きの変化などを安全な範囲で確認します。内部洗浄や分解は行わず、違和感が続く場合は機種情報と症状を整理して業者へ相談するのが安心です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $assets . 'tenkase.jpg' ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-white/90 lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/types/' ) ); ?>"><?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="text-white"><?php esc_html_e( '天井カセット型', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '形状: 天井カセット型', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-white/90 lg:text-xl">
					<?php esc_html_e( '天井カセット形は、本体を天井内に納めて、意匠パネルだけを見せる業務用エアコンです。店舗やオフィスで採用されることが多く、空間全体をすっきり見せながら空調しやすい、代表的な形状のひとつです。天井カセット形の中にも吹出口の方向数や構成に違いがあり、設置場所やレイアウトに合わせて選ばれています。', 'gd-aircon-repair' ); ?>
				</p>

				<div class="flex flex-wrap gap-3 pt-1">
					<a
						class="inline-flex items-center gap-2 rounded bg-white px-6 py-3 text-base font-extrabold text-brand-skydeep shadow-md no-underline ring-1 ring-black/5 transition hover:bg-slate-100"
						href="<?php echo esc_url( 'tel:' . $phone_tel ); ?>"
					>
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
							<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
						</svg>
						<span><?php echo esc_html( $phone_display ); ?></span>
					</a>
					<a
						class="inline-flex h-12 items-center justify-center gap-1 rounded bg-brand-orange px-6 text-white no-underline shadow-md ring-1 ring-black/5 transition hover:bg-brand-orange/95"
						href="<?php echo esc_url( $quote_url ); ?>"
					>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
							<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />
						</svg>
						<span class="text-base font-extrabold"><?php esc_html_e( 'WEBで', 'gd-aircon-repair' ); ?></span>
						<span class="text-[26px] font-black leading-none text-brand-skydeep"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
						<span class="text-base font-extrabold"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="flex justify-center">
		<div class="max-w-3xl flex flex-col gap-12 py-10 lg:gap-12 lg:py-16">
			<?php foreach ( $info_blocks as $index => $block ) : ?>
				<?php
				$title_class = isset( $block['title_class'] ) ? $block['title_class'] : 'text-3xl lg:text-[40px]';
				?>
				<div class="mx-auto w-full max-w-[860px] px-4 lg:px-10">
					<div class="flex min-w-0 flex-col gap-4">
						<h2 class="<?php echo esc_attr( $title_class ); ?> font-bold leading-tight text-brand-skydeep">
							<?php echo esc_html( $block['title'] ); ?>
						</h2>
						<p class="text-lg leading-[1.75] text-slate-700">
							<?php echo esc_html( $block['text'] ); ?>
						</p>
					</div>
					<?php if ( 0 === (int) $index ) : ?>
						<div class="mt-8 overflow-hidden">
							<img
								class="mx-auto h-auto w-full max-w-[578px]"
								src="<?php echo esc_url( $assets . 'tenkase.jpg' ); ?>"
								alt=""
								loading="lazy"
								width="578"
								height="376"
							>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="bg-[#f0faff] py-12 lg:py-16">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
			<div class="flex flex-col items-center gap-5">
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( '天井カセット型に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
				<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
			</div>

			<div class="mx-auto mt-10 flex max-w-[1120px] flex-col gap-6">
				<?php foreach ( $faq_items as $faq_index => $faq ) : ?>
					<?php
					$faq_control_id = 'symptom-tenkase-faq-' . (int) $faq_index;
					?>
					<div class="group">
						<input
							class="sr-only"
							type="checkbox"
							id="<?php echo esc_attr( $faq_control_id ); ?>"
							<?php echo ! empty( $faq['open'] ) ? 'checked' : ''; ?>
						>
						<label
							class="flex cursor-pointer list-none items-center gap-4 rounded-full bg-[#00a6f4] px-2 py-2 pl-4 text-white"
							for="<?php echo esc_attr( $faq_control_id ); ?>"
						>
							<span class="shrink-0 text-5xl font-bold leading-none montserrat" aria-hidden="true">Q</span>
							<span class="min-w-0 flex-1 text-lg font-bold leading-snug lg:text-2xl"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="mr-1 flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00a6f4] group-has-[input:checked]:hidden" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<span class="mr-1 hidden h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00a6f4] group-has-[input:checked]:flex" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>minus</title><path d="M19,13H5V11H19V13Z" /></svg>
							</span>
						</label>
						<div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-has-[input:checked]:grid-rows-[1fr]">
							<div class="min-h-0 overflow-hidden">
								<div class="mt-4 flex gap-2.5 px-1 pl-2 lg:pl-4">
									<img class="h-[52px] w-[52px] shrink-0 rounded-full object-cover" src="<?php echo esc_url( $faq_avatar ); ?>" alt="" loading="lazy" width="52" height="52">
									<p class="min-w-0 flex-1 text-base font-medium leading-[1.75] text-slate-700">
										<?php echo esc_html( $faq['answer'] ); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
