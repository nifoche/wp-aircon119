<?php
/**
 * 固定ページ: 形状「天井吊型」
 * URL 例: /types/tentsuri/
 *
 * Template Name: 形状詳細（天井吊型）
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
$hero_bg = $assets . 'tentsuri.jpg';

$info_blocks = array(
	array(
		'title' => __( '天井吊型の特徴', 'gd-aircon-repair' ),
		'text'  => __( '天井吊形の特徴は、天井面に露出して設置するため、埋込工事を前提にしなくても採用しやすいことです。機種によってはロング／ワイド気流で離れた場所まで風を届けやすく、人検知センサーや床温度センサーなどの機能を備えたタイプもあります。埋込形ほど天井条件に左右されにくく、設置条件に制約がある現場でも空調計画を立てやすい形状です。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井吊型のメリット', 'gd-aircon-repair' ),
		'text'  => __( '天井吊形のメリットは、天井内スペースに余裕がない場所でも導入しやすく、埋込形より設置のハードルが比較的低いことです。露出形のため点検や存在確認がしやすく、空間条件によっては離れた場所まで風を届けやすい点も魅力です。店舗や作業スペースなどで、見た目よりも設置性や実用性を重視したい場合にも選びやすく、現場条件に合わせて検討しやすい形状といえます。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井吊型のデメリット', 'gd-aircon-repair' ),
		'text'  => __( '一方で、天井吊形は本体が見えるため、天井カセット形のような一体感や意匠性は出しにくい場合があります。また、天井からの露出設置になるため、空間の見え方や圧迫感が気になるケースもあります。設置位置や風向きが空間に合っていないと、風当たりや空調ムラが気になることもあり、見た目と快適性の両面から設置計画を考える必要があります。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '天井吊型の故障・修理', 'gd-aircon-repair' ),
		'text'  => __( '天井吊形は、高所設置のためフィルターの取り外しや清掃時に注意が必要で、汚れを放置すると効きの低下や臭い、電力消費の増加、故障リスクにつながることがあります。リモコンにフィルターお手入れ表示が出る機種もあり、日常的な確認は重要です。ただし、内部の汚れや異音、異臭、効きの悪さが続く場合は無理に分解せず、専門業者へ相談する前提で考えるのが安全です。', 'gd-aircon-repair' ),
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( '天井吊形は、どんな場所に向いていますか？', 'gd-aircon-repair' ),
		'answer'   => __( '天井内スペースが取りにくい店舗や事務所、埋込形の設置が難しい空間に向いています。見た目よりも設置性や実用性を優先したい場面でも採用しやすい形状です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '天井吊形には、どんな違いがありますか？', 'gd-aircon-repair' ),
		'answer'   => __( '埋込工事を前提にしなくても導入しやすく、天井懐や照明配置の制約を受けにくい点が強みです。機種によっては離れた場所まで風を届けやすい設計もあり、現場条件に合わせて選びやすいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '効きが悪い、においが気になるときは何を確認すればよいですか？', 'gd-aircon-repair' ),
		'answer'   => __( 'まずはフィルターまわりの汚れやお手入れ表示の有無を確認し、安全な範囲で外装や吸込部の状態を見ます。内部洗浄や分解は行わず、異常が続く場合は機種情報と症状を整理して業者へ相談するのが安心です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $assets . 'tentsuri.jpg' ); ?>" alt="" loading="eager" width="1200" height="800">
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
				<span class="text-white"><?php esc_html_e( '天井吊型', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '形状: 天井吊型', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-white/90 lg:text-xl">
					<?php esc_html_e( '天井吊形は、本体を天井から吊り下げて設置する露出形の業務用エアコンです。天井内へ埋め込む必要がないため、天井懐が狭い場所や、照明・設備の関係で埋込形を採用しにくい空間でも検討しやすい形状です。店舗や事務所をはじめ、レイアウト上の制約がある場所でも導入しやすく、比較的わかりやすい設置方式として選ばれています。', 'gd-aircon-repair' ); ?>
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
								src="<?php echo esc_url( $assets . 'tentsuri.jpg' ); ?>"
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
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( '天井吊型に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
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
