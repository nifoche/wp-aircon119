<?php
/**
 * 固定ページ: 形状「ビルトイン型」
 * URL 例: /types/builtin/
 *
 * Template Name: 形状詳細（ビルトイン型）
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
$hero_bg = $assets . 'builtin.jpg';

$info_blocks = array(
	array(
		'title' => __( 'ビルトイン型の特徴', 'gd-aircon-repair' ),
		'text'  => __( 'ビルトインの特徴は、吹出口を本体から分離して送風できるため、空間形状や人の集まり方、日照条件などに合わせて柔軟に空調を設計しやすいことです。ダイキンの製品情報でも、変形店舗に対応しやすい点や、機外静圧可変制御による自動調整、薄型化による設置自由度の広さが示されています。また、パネルの見せ方や吸込方法にも選択肢があり、空調設計と見た目の両立を考えやすい形状です。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( 'ビルトイン型のメリット', 'gd-aircon-repair' ),
		'text'  => __( 'ビルトインのメリットは、空調機を目立たせにくくしながら、空間デザインに合わせた吹出し計画を立てやすいことです。意匠性を重視する店舗や、標準的な気流ではムラが出やすい空間でも、設計自由度を取りやすいのが魅力です。また、機外静圧可変制御のように設置条件へ合わせた調整機能があることで、現場条件に応じた納まりや運用を考えやすい点も利点です。見た目と快適性の両方を重視したい場面で候補になりやすい形状といえます。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( 'ビルトイン型のデメリット', 'gd-aircon-repair' ),
		'text'  => __( '一方で、ビルトインは設計自由度が高いぶん、天井内スペースやダクト・チャンバー条件、サービススペース、施工精度など確認すべき点も多くなります。空間にうまく合えば魅力的ですが、計画が甘いと気流ムラや保守のしにくさにつながることがあります。また、本体が隠れて見えにくいため、異常や汚れに気づきにくい面もあります。デザイン優先だけでなく、導入後のメンテナンス性まで含めて検討することが大切です。', 'gd-aircon-repair' ),
	),
	array(
		'title' => __( 'ビルトイン型の故障・修理', 'gd-aircon-repair' ),
		'text'  => __( 'ビルトインも、吸込部や内部の汚れ、ダクト条件との不整合、設置条件の影響で効きの低下やにおい、異音などが出ることがあります。ダイキンの製品情報でもオートグリルやサービススペース確保など、保守性を意識した設計要素が挙げられています。天井内機器のため、見える範囲だけで判断しにくいこともあり、違和感が続く場合は無理に内部へ触らず、機種情報と症状を整理して専門業者へ相談するのが安全です。', 'gd-aircon-repair' ),
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( 'ビルトイン型は、どんな場所に向いていますか？', 'gd-aircon-repair' ),
		'answer'   => __( '意匠性を重視した店舗や、L字形・細長い空間など標準的な吹出しでは空調計画が難しい場所に向いています。空間デザインに合わせて送風を組みたい場面で検討しやすいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( 'ビルトイン型の強みは何ですか？', 'gd-aircon-repair' ),
		'answer'   => __( '本体の存在感を抑えながら、吹出口を分離して柔軟に送風計画を立てやすい点です。見た目と快適性を両立したいときに強みが出やすい形状です。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '導入前に何を見ておくとよいですか？', 'gd-aircon-repair' ),
		'answer'   => __( ' 天井内スペース、サービススペース、吹出口の配置計画、保守しやすさまで含めて確認しておくのが大切です。見た目だけで決めず、運用面まで含めると失敗しにくいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $assets . 'builtin.jpg' ); ?>" alt="" loading="eager" width="1200" height="800">
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
				<span class="text-white"><?php esc_html_e( 'ビルトイン型', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '形状: ビルトイン型', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-white/90 lg:text-xl">
					<?php esc_html_e( 'ビルトインは、本体を天井内に納めつつ、吹出口を分離して設計できる業務用エアコンです。空調機の存在感を抑えながら、店舗デザインや空間形状に合わせて送風計画を組みやすいのが特徴です。L字形やコの字形、細長い空間など、一般的な吹出しだけでは対応しにくいレイアウトでも検討しやすく、意匠性を重視した空間づくりで選ばれやすい形状です。', 'gd-aircon-repair' ); ?>
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
								src="<?php echo esc_url( $assets . 'builtin.jpg' ); ?>"
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
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( 'ビルトイン型に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
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
