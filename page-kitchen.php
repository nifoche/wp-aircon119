<?php
/**
 * 固定ページ: 形状「厨房用」
 * URL 例: /types/kitchen/
 *
 * Template Name: 形状詳細（厨房用）
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$phone_display = apply_filters( 'gd_aircon_repair_phone_display', '050-5526-3005' );
$phone_tel     = apply_filters( 'gd_aircon_repair_phone_tel', '05055263005' );
$phone_tel     = preg_replace( '/\D+/', '', (string) $phone_tel );
$quote_url     = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact' ) );

$assets = get_template_directory_uri() . '/assets/images/types/';
$hero_bg = $assets . 'kitchen.jpg';

$info_blocks = array(
	array(
		'title' => __( '厨房用の特徴', 'gd-aircon-repair' ),
		'text'  => __( '厨房用の特徴は、形状としては天吊形（露出形）でありながら、一般的な天吊形よりも厨房環境に合わせた清潔性と耐久性を重視していることです。ダイキンの製品情報でも、汚れにくく清掃しやすいステンレス仕様や、主要部品の着脱がしやすいメンテナンス性が打ち出されています。厨房は一般事務所や通常店舗より空調負荷が高く、使用環境も厳しいため、用途別エアコンとして切り分けて考えるのが自然です。過酷な厨房環境でも快適性と長持ちを両立しやすい設計が、この形状の特徴です。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '厨房用のメリット', 'gd-aircon-repair' ),
		'text'  => __( '厨房用のメリットは、油煙や熱気が立ちこめる環境を前提に、汚れにくさ・掃除のしやすさ・耐久性を重視して選べることです。形状としては天吊形のため、厨房空間でレイアウトしやすく、一般的な空調機より厨房環境との相性を考えやすいのが魅力です。また、メンテナンスしやすい構造があることで、日常管理や保守計画も立てやすくなります。厨房のように空調条件が厳しい場所では、用途に合った専用機を選ぶ意味が大きい形状です。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '厨房用のデメリット', 'gd-aircon-repair' ),
		'text'  => __( '一方で、厨房用はどこでも同じように使いやすい万能機ではなく、厨房特有の環境に合わせた選定が前提になります。発熱量、油煙量、レイアウト、換気条件などを見ずに決めると、十分な性能を引き出しにくいことがあります。また、ベース形状は天吊形でも、一般空間向けの天吊形と同じ感覚で選ぶとミスマッチが起きやすく、導入時には負荷条件や清掃運用まで含めて考える必要があります。導入後も、汚れや環境負荷を見越した保守が重要になります。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( '厨房用の故障・修理', 'gd-aircon-repair' ),
		'text'  => __( '厨房用も、油汚れや吸込部の汚れを放置すると効きの低下やにおい、故障リスクにつながります。ダイキンの製品情報でも、吸込グリルや主要部品の着脱がしやすいなど、保守を意識した構造が示されています。とはいえ、内部まで無理に触ったり、自己判断で分解洗浄したりするのは安全ではありません。効きの低下、異音、異臭、汚れの進行が気になる場合は、機種情報と症状を整理して専門業者へ相談するのが安心です。', 'gd-aircon-repair' ),
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( '厨房用は、どんな場所に向いていますか？', 'gd-aircon-repair' ),
		'answer'   => __( '飲食店や宿泊施設など、熱気・油煙・水蒸気の多い厨房環境に向いています。形状としては天井に吊り下げる露出形で、厨房空間に合わせて使いやすいのが特徴です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '厨房用の強みは何ですか？', 'gd-aircon-repair' ),
		'answer'   => __( '天吊形をベースにしながら、汚れにくさ、清掃性、耐久性を厨房向けに強化している点です。過酷な厨房環境でも快適性と長持ちの両立を図りやすいのが強みです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '導入後に特に気をつけることは何ですか？', 'gd-aircon-repair' ),
		'answer'   => __( ' 油汚れや吸込部の状態を放置しないことです。日常清掃しやすい構造でも、内部まで無理に触れず、異常が続く場合は早めに業者へ相談するのが安全です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#FFFBF9]">
	<section class="relative overflow-hidden border-b-[6px] border-brand-fire bg-brand-cream pb-10 pt-24 text-brand-ink lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 opacity-[0.07]">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $assets . 'kitchen.jpg' ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-[#42566a] lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/types/' ) ); ?>"><?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="font-extrabold text-brand-ink"><?php esc_html_e( '厨房用', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '形状: 厨房用', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-[#42566a] lg:text-xl">
					<?php esc_html_e( '厨房用は、飲食店や宿泊施設などの厨房向けに設計された、天井に吊り下げて設置する露出形の業務用エアコンです。一般的な天吊形をベースにしつつ、油煙や高温環境に配慮した厨房専用仕様になっているのが特徴です。', 'gd-aircon-repair' ); ?>
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
						<span class="rounded-sm bg-white px-1.5 py-0.5 text-[22px] font-black leading-none text-brand-fire"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
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
								src="<?php echo esc_url( $assets . 'kitchen.jpg' ); ?>"
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

	<section class="bg-[#FFF7F3] py-12 lg:py-16">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
			<div class="flex flex-col items-center gap-5">
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( '厨房用に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
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
							class="flex cursor-pointer list-none items-center gap-4 rounded-full bg-[#FF681F] px-2 py-2 pl-4 text-white"
							for="<?php echo esc_attr( $faq_control_id ); ?>"
						>
							<span class="shrink-0 text-5xl font-bold leading-none montserrat" aria-hidden="true">Q</span>
							<span class="min-w-0 flex-1 text-lg font-bold leading-snug lg:text-2xl"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="mr-1 flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#FF681F] group-has-[input:checked]:hidden" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<span class="mr-1 hidden h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#FF681F] group-has-[input:checked]:flex" aria-hidden="true">
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
