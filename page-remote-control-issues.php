<?php
/**
 * 固定ページ: 症状「リモコン操作できない」
 * URL 例: /symptoms/remote-control-issues/
 *
 * Template Name: 症状詳細（リモコン操作できない）
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
$quote_url     = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact' ) );

$assets = get_template_directory_uri() . '/assets/images/symptoms/remote-control-issues/';
$hero_bg = $assets . '01.jpg';

$info_blocks = array(
	array(
		'title' => __( 'リモコン操作できない主な原因', 'gd-aircon-repair' ),
		'text'  => __( 'リモコン操作できない原因は、大きく分けてリモコン側と本体側があります。リモコン側では、電池消耗、液晶表示異常、リセット不良、発信不良、ボタン不良などが考えられます。本体側では、受信部の反応不良や本体そのものの不具合もあります。各社FAQでも、まず『本体が応急運転できるか』『リモコン表示が正常か』の切り分けを勧めています。つまり、リモコンだけの問題か、エアコン本体側も含めた問題かを先に見極めることが大切です。', 'gd-aircon-repair' ),
		'image' => $assets . '02.jpg',
	),
	array(
		'title' => __( '自分で確認して良い範囲', 'gd-aircon-repair' ),
		'text'  => __( 'まず、リモコン表示が薄い、消えている、固まっていないかを確認し、必要なら電池交換やリモコンのリセットを試しましょう。次に、本体の応急運転や本体ボタンで動くかを確認すると、リモコン側か本体側かを切り分けやすくなります。受信部や発光部が汚れていないか、操作距離や向きに問題がないかも確認してください。リモコン側を整えても反応しない、本体の応急運転でも動かない場合は、本体不具合の可能性があるため業者へ相談しましょう。', 'gd-aircon-repair' ),
		'image' => $assets . '03.jpg',
	),
	array(
		'title' => __( '放置するとどうなるのか', 'gd-aircon-repair' ),
		'text'  => __( 'リモコン操作できない状態を放置すると、温度調整や運転切替ができず、冷暖房の効きや快適性に直接影響します。応急運転で一時的に使えても、細かな制御ができないままでは業務運用に支障が出ることがあります。また、実際には本体側の不具合なのにリモコンだけを疑い続けると、復旧が遅れて完全停止に気づくのが遅れる可能性もあります。早めにリモコン側と本体側の切り分けをして、必要なら交換や点検につなぐことが重要です。', 'gd-aircon-repair' ),
		'image' => $assets . '04.jpg',
	),
	array(
		'title' => __( 'やってはいけないこと', 'gd-aircon-repair' ),
		'text'  => __( '反応しないからといって、自己判断で本体を分解したり、受信部や配線まわりを無理に触ったりするのは危険なので避けてください。高所にある本体の応急運転ボタンを確認する場合も、不安定な足場で無理に作業しないことが大切です。また、リモコン故障と決めつけて買い替えを急ぐ前に、本体側が動くかを確認した方が安全です。安全に確認できる範囲だけ試し、改善しない場合は販売店や業者へ相談しましょう。', 'gd-aircon-repair' ),
		'image' => $assets . '05.jpg',
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( 'リモコンが反応しないとき、最初に何を確認すればいいですか？', 'gd-aircon-repair' ),
		'answer'   => __( 'まずは液晶表示と電池の状態を確認し、必要なら電池交換やリセットを試してください。そのうえで本体が応急運転できるかを見ると切り分けやすいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '本体が応急運転できれば、リモコン故障の可能性が高いですか？', 'gd-aircon-repair' ),
		'answer'   => __( 'はい、目安になります。本体が動くのにリモコン操作だけ通らないなら、リモコン側の不具合や設定・通信不良の可能性が高まります。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( 'どんな状態なら点検や交換を考えるべきですか？', 'gd-aircon-repair' ),
		'answer'   => __( '電池交換やリセットでも改善しない、本体も応急運転できない、表示異常や一部ボタン不良が続く場合は、点検やリモコン交換を検討した方がよいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_bg ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-white/90 lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"><?php esc_html_e( '症状', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="text-white"><?php esc_html_e( 'リモコン操作できない', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '症状: リモコン操作できない', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-white/90 lg:text-xl">
					<?php esc_html_e( '業務用エアコンのリモコン操作をしても本体が反応しない、電源が入らない、ボタンを押しても指示が通らない状態です。この症状は、リモコン側の電池切れや表示異常、設定・通信不良、本体受信側の問題など複数の原因で起こります。リモコン自体の不具合なのか、本体側が反応できていないのかで対応が変わるため、まずは切り分けが重要です。', 'gd-aircon-repair' ); ?>
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
						class="!hidden inline-flex h-12 items-center justify-center gap-1 rounded bg-brand-orange px-6 text-white no-underline shadow-md ring-1 ring-black/5 transition hover:bg-brand-orange/95"
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

	<div class="flex flex-col gap-12 py-10 lg:gap-12 lg:py-16">
		<?php foreach ( $info_blocks as $block ) : ?>
			<?php
			$title_class = isset( $block['title_class'] ) ? $block['title_class'] : 'text-3xl lg:text-[40px]';
			?>
			<div class="mx-auto grid w-full max-w-[1280px] gap-8 px-4 lg:grid-cols-2 lg:items-start lg:gap-10 lg:px-10">
				<div class="flex min-w-0 flex-col gap-4">
					<h2 class="<?php echo esc_attr( $title_class ); ?> font-bold leading-tight text-brand-skydeep">
						<?php echo esc_html( $block['title'] ); ?>
					</h2>
					<p class="text-lg leading-[1.75] text-slate-700">
						<?php echo esc_html( $block['text'] ); ?>
					</p>
				</div>
				<div class="min-h-[240px] overflow-hidden bg-stone-300 lg:min-h-[400px]">
					<img
						class="h-full w-full object-cover"
						src="<?php echo esc_url( $block['image'] ); ?>"
						alt=""
						loading="lazy"
						width="640"
						height="400"
					>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<section class="bg-[#f0faff] py-12 lg:py-16">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
			<div class="flex flex-col items-center gap-5">
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( 'リモコン操作できない症状に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
				<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
			</div>

			<div class="mx-auto mt-10 flex max-w-[1120px] flex-col gap-6">
				<?php foreach ( $faq_items as $faq_index => $faq ) : ?>
					<?php
					$faq_control_id = 'symptom-water-not-cooling-faq-' . (int) $faq_index;
					?>
					<div class="group">
						<input
							class="sr-only"
							type="checkbox"
							id="<?php echo esc_attr( $faq_control_id ); ?>"
							<?php echo ! empty( $faq['open'] ) ? 'checked' : ''; ?>
						>
						<label
							class="flex cursor-pointer list-none items-center gap-4 rounded-full bg-sky-500 px-2 py-2 pl-4 text-white"
							for="<?php echo esc_attr( $faq_control_id ); ?>"
						>
							<span class="shrink-0 text-5xl font-bold leading-none montserrat" aria-hidden="true">Q</span>
							<span class="min-w-0 flex-1 text-lg font-bold leading-snug lg:text-2xl"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="mr-1 flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-sky-500 group-has-[input:checked]:hidden" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<span class="mr-1 hidden h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-sky-500 group-has-[input:checked]:flex" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>minus</title><path d="M19,13H5V11H19V13Z" /></svg>
							</span>
						</label>
						<div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-has-[input:checked]:grid-rows-[1fr]">
							<div class="min-h-0 overflow-hidden">
								<div class="mt-4 flex gap-4 px-1 pl-2 lg:pl-4">
									<img class="h-16 w-16 shrink-0 rounded-full object-cover" src="<?php echo esc_url( $faq_avatar ); ?>" alt="" loading="lazy" width="52" height="52">
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
