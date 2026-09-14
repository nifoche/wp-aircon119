<?php
/**
 * 固定ページ: 症状「暖まらない」
 * URL 例: /symptoms/not-heating/
 *
 * Template Name: 症状詳細（暖まらない）
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

$assets = get_template_directory_uri() . '/assets/images/symptoms/not-heating/';
$hero_bg = $assets . '01.jpg';

$info_blocks = array(
	array(
		'title' => __( '暖まらない主な原因', 'gd-aircon-repair' ),
		'text'  => __( '暖まらない原因は、温風の量が足りない場合と、暖房の効き自体が弱い場合の大きく2つに分けられます。フィルターの目詰まりで吸い込みが弱くなると風量が落ち、暖気が室内に回りにくくなります。また、ルーバーが上向きすぎる、室外機の吹出口や吸込口が塞がれている、外気温が大きく下がっている、部屋に対して能力が不足している場合も暖まりにくくなります。急に効きが悪化した場合は、冷媒系の不具合の可能性もあります。', 'gd-aircon-repair' ),
		'image' => $assets . '02.jpg',
	),
	array(
		'title' => __( '自分で確認して良い範囲', 'gd-aircon-repair' ),
		'text'  => __( 'まず暖房モードになっているか、設定温度が低すぎないか、風量が『しずか』や省エネ寄りになっていないかを確認しましょう。次に風向を下向きまたは自動にし、フィルターの汚れ、吹出口や吸込口の塞がり、室外機まわりの障害物や積雪の有無を外観で確認してください。朝晩だけ暖まりにくい場合は外気温の影響もあるため、しばらく様子を見る判断もあります。改善しない場合は、型番やエラー表示の有無を控えて業者へ相談しましょう。', 'gd-aircon-repair' ),
		'image' => $assets . '03.jpg',
	),
	array(
		'title' => __( '放置するとどうなるのか', 'gd-aircon-repair' ),
		'text'  => __( '暖まらない状態が続くと室内環境が悪化し、冬場の作業効率低下や来客時の快適性低下につながります。無理に長時間運転を続けると機器への負荷が増え、別の不具合や停止を招く可能性があります。寒さ対策のために他の機器を追加しても根本原因が残ると、電力コストだけ増えて改善しないこともあります。早めに設定・風向・フィルター・室外機環境を点検し、必要に応じて専門点検へつなぐことが被害拡大の防止につながります。', 'gd-aircon-repair' ),
		'image' => $assets . '04.jpg',
	),
	array(
		'title' => __( 'やってはいけないこと', 'gd-aircon-repair' ),
		'text'  => __( '分解して内部部品や配線、冷媒まわりを自分で触るのは危険なので避けてください。市販の洗浄スプレーで内部洗浄を試すと故障や別トラブルにつながるおそれがあります。また、室外機をカバーや荷物で囲ったまま運転を続ける、能力不足の可能性を無視して無理に設定温度だけを上げ続けるのもおすすめできません。異常が続く場合は、運転状況を記録して早めに業者へ相談するのが安全です。', 'gd-aircon-repair' ),
		'image' => $assets . '05.jpg',
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);


$faq_items = array(
	array(
		'question' => __( '暖かい風は出ているのに部屋が暖まらないのは故障ですか？', 'gd-aircon-repair' ),
		'answer'   => __( '故障とは限りません。風向、フィルター汚れ、室外機まわり、外気温低下、部屋の広さとの能力差でも起こるため、まず基本条件を確認しましょう。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '暖房時は風向をどう設定するとよいですか？', 'gd-aircon-repair' ),
		'answer'   => __( '暖気は上にたまりやすいため、下向きまたは自動が基本です。天井方向のままだと足元まで暖まりにくく感じやすくなります。', 'gd-aircon-repair' ),
		'open'     => false,
	),
	array(
		'question' => __( '業者へ相談する前に伝えるとよい情報は何ですか？', 'gd-aircon-repair' ),
		'answer'   => __( 'メーカーと型番、室内機タイプ、暖まらない時間帯、設定温度と風量、エラー表示の有無、室外機まわりの状況を伝えると切り分けが進みやすいです。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = get_template_directory_uri() . '/assets/images//icon-answer.png';
?>

<div class="bg-[#FFFBF9]">
	<section class="relative overflow-hidden border-b-[6px] border-brand-fire bg-brand-cream pb-10 pt-24 text-brand-ink lg:pb-12 lg:pt-16">
		<div class="pointer-events-none absolute inset-0 opacity-[0.07]">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_bg ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-[#42566a] lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"><?php esc_html_e( '症状', 'gd-aircon-repair' ); ?></a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="font-extrabold text-brand-ink"><?php esc_html_e( '暖まらない', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '症状: 暖まらない', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-[#42566a] lg:text-xl">
					<?php esc_html_e( '業務用エアコンで暖房運転をしても室温が上がりにくい、温風は出るのに部屋全体が暖まらない、設定温度まで届かない状態です。朝晩の外気温低下や部屋の広さ、天井の高さ、窓の多さなど環境要因でも体感は変わります。風量不足、風向設定、フィルター汚れ、室外機まわりの条件、冷媒系の不具合など複数要因が重なることもあるため、順番に切り分けることが大切です。', 'gd-aircon-repair' ); ?>
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

	<section class="bg-[#FFF7F3] py-12 lg:py-16">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
			<div class="flex flex-col items-center gap-5">
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( '暖まらない症状に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
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
							class="flex cursor-pointer list-none items-center gap-4 rounded-full bg-brand-fire px-2 py-2 pl-4 text-white"
							for="<?php echo esc_attr( $faq_control_id ); ?>"
						>
							<span class="shrink-0 text-5xl font-bold leading-none montserrat" aria-hidden="true">Q</span>
							<span class="min-w-0 flex-1 text-lg font-bold leading-snug lg:text-2xl"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="mr-1 flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-brand-fire group-has-[input:checked]:hidden" aria-hidden="true">
								<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-10 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
							</span>
							<span class="mr-1 hidden h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-brand-fire group-has-[input:checked]:flex" aria-hidden="true">
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
