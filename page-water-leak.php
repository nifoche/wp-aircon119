<?php
/**
 * 固定ページ: 症状「水漏れ」
 * URL 例: /symptoms/water-leak/
 *
 * Template Name: 症状詳細（水漏れ）
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

$assets = 'http://localhost:3845/assets/';
$hero_bg = $assets . 'e55f40f59b1f786159e5bc3341126f1ca3a06460.png';

$info_blocks = array(
	array(
		'title' => __( '水漏れの主な原因', 'gd-aircon-repair' ),
		'text'  => __( '業務用エアコンの水漏れは、冷房／除湿で発生した結露水（ドレン）が排水できず、ドレンパンからあふれるケースが典型です。原因として多いのはドレンホースの詰まり（ホコリ・カビ・スライム等）や折れ、勾配不良による排水不良です。加えて、ドレンポンプ不良、ドレンパンの汚れ・破損、室内機の傾き、冷媒配管の断熱材ズレによる結露、高湿度下で低温設定を続けた吹出口結露も原因になり得ます。', 'gd-aircon-repair' ),
		'image' => $assets . '775fb1b04ed7b64aa65e6171a9966dc04ea17589.png',
	),
	array(
		'title' => __( '自分で確認して良い範囲', 'gd-aircon-repair' ),
		'text'  => __( 'まず運転を停止し、可能なら主電源もOFFにして安全を確保しましょう。次にバケツやタオルで養生し、漏れている位置・量・発生条件（冷房／除湿、換気中、高湿度、雨天など）を記録してください。外観で確認できる範囲として、フィルターの目詰まり、吹出口やパネル周辺の結露、ドレンホース先端の潰れ／障害物、露出配管の断熱材ズレを確認してください。エラー表示があれば控え、天井内や機器内部には触れず業者へ相談しましょう。', 'gd-aircon-repair' ),
		'image' => $assets . 'f2dadddac545eeea3ff08820f4c6237614edd002.png',
	),
	array(
		'title' => __( '放置するとどうなるのか', 'gd-aircon-repair' ),
		'text'  => __( '放置すると天井材・壁紙・床材が濡れて劣化し、カビや異臭が発生して店舗・オフィス環境が悪化します。水が照明や配線、室内機の電装部に及ぶと漏電・ショートの危険が増え、停止や重大故障、火災リスクにつながる可能性があります。漏水が長引くほど修繕範囲が広がり、什器・商品・PCへの二次被害や営業停止リスクも高まります。被害が小さいうちに原因を切り分け、点検・清掃を手配することが重要です。', 'gd-aircon-repair' ),
		'image' => $assets . 'a248a8bc50cb18932d967633fd9f07b43b1f8841.png',
	),
	array(
		'title' => __( 'やってはいけないこと', 'gd-aircon-repair' ),
		'text'  => __( '水漏れ状態のまま運転を続ける、濡れた状態で電源やブレーカー周りに触るのは避けてください。自己判断で分解・配線・天井内作業を行うと感電や破損の恐れがあります。また、市販の洗浄スプレー等で内部洗浄すると、流し切れない汚れがドレンパン／ホースに残って詰まりを悪化させたり、薬剤が電装部にかかって故障する可能性があります。ほこり取り棒やエアダスター等の使用も破損や事故につながり得るためそれらは控え、応急は養生までに留めて業者へ依頼してください。', 'gd-aircon-repair' ),
		'image' => $assets . '41e59468f4525610fd2d1687ffcc9baf1632961f.png',
		'title_class' => 'text-4xl lg:text-[36px]',
	),
);

$case_studies = array(
	array(
		'area'  => __( '東京都 板橋区', 'gd-aircon-repair' ),
		'label' => __( '飲食店 | 天カセ4台', 'gd-aircon-repair' ),
		'price' => '¥000,000',
	),
	array(
		'area'  => __( '東京都 板橋区', 'gd-aircon-repair' ),
		'label' => __( '飲食店 | 天カセ4台', 'gd-aircon-repair' ),
		'price' => '¥000,000',
	),
	array(
		'area'  => __( '東京都 板橋区', 'gd-aircon-repair' ),
		'label' => __( '飲食店 | 天カセ4台', 'gd-aircon-repair' ),
		'price' => '¥000,000',
	),
);
$case_image = $assets . '529fce227844aef2f5321b439c6da99915ee4b59.png';

$faq_items = array(
	array(
		'question' => __( '水漏れっぽいのですが、故障ではないケースもありますか？', 'gd-aircon-repair' ),
		'answer'   => __( '冷房／除湿中の結露水が屋外へ排水されているだけなら正常な場合があります。室内機から床へ垂れる、天井材が濡れる場合は異常の可能性が高いです。', 'gd-aircon-repair' ),
		'open'     => true,
	),
	array(
		'question' => __( '応急対応で、まず何を優先すればよいですか？', 'gd-aircon-repair' ),
		'answer'   => __( '運転停止（可能なら主電源OFF）→養生（バケツ・タオル）→什器退避→発生箇所／量／条件／エラーを記録→管理会社・施工店・メーカーへ連絡の順が安全です。', 'gd-aircon-repair' ),
		'open'     => true,
	),
	array(
		'question' => __( '修理依頼時に、業者へ何を伝えると早いですか？', 'gd-aircon-repair' ),
		'answer'   => __( '型番・設置場所（室内／室外）・漏水の位置・写真・エラー表示・運転モード・発生時刻を共有すると、手元の在庫・工具・人数の調整が早くなります。', 'gd-aircon-repair' ),
		'open'     => false,
	),
);
$faq_avatar = $assets . 'b8d113eca40a4fb03d4acb57d2677f94820896f6.png';
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
				<span class="text-white"><?php esc_html_e( '水漏れ', 'gd-aircon-repair' ); ?></span>
			</nav>

			<div class="max-w-[920px] space-y-7">
				<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
					<?php esc_html_e( '症状: 水漏れ', 'gd-aircon-repair' ); ?>
				</h1>

				<p class="text-base leading-relaxed text-white/90 lg:text-xl">
					<?php esc_html_e( '業務用エアコン（天井カセット形など）の室内機から水滴が落ちる、吹出口から水が飛ぶ、天井点検口やパネル周辺が濡れる状態です。冷房／除湿で発生する結露水（ドレン）が排水しきれない場合や、配管など別の箇所で結露して水漏れのように見える場合があります。床・天井材や什器への二次被害が出やすいため、早めの切り分けが重要です。', 'gd-aircon-repair' ); ?>
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

	<section class="bg-white py-16 lg:py-24">
		<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-10 px-4 lg:gap-10 lg:px-6">
			<div class="flex flex-col items-center gap-8">
				<h2 class="text-center text-4xl font-black text-brand-navy"><?php esc_html_e( '水漏れ修理の対応実績', 'gd-aircon-repair' ); ?></h2>
				<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
			</div>

			<div class="grid grid-cols-1 gap-8 md:grid-cols-3 md:gap-8">
				<?php foreach ( $case_studies as $case ) : ?>
					<article class="overflow-hidden rounded-lg bg-white shadow-[0_10px_15px_-3px_rgba(0,0,0,0.16),0_4px_6px_-4px_rgba(0,0,0,0.1)]">
						<div class="relative h-[280px] overflow-hidden">
							<img
								class="absolute inset-0 h-full w-full object-cover"
								src="<?php echo esc_url( $case_image ); ?>"
								alt=""
								loading="lazy"
								width="400"
								height="280"
							>
							<div class="absolute left-5 top-5 rounded bg-brand-navy px-3 py-2 text-base font-bold leading-none text-white">
								<?php echo esc_html( $case['area'] ); ?>
							</div>
						</div>
						<div class="flex flex-col gap-2 p-6">
							<div class="flex flex-wrap items-start justify-between gap-2 text-xl font-bold">
								<span class="text-brand-navy"><?php echo esc_html( $case['label'] ); ?></span>
								<span class="text-right text-xl font-extrabold text-brand-orange"><?php echo esc_html( $case['price'] ); ?></span>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="bg-[#f0faff] py-12 lg:py-16">
		<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
			<div class="flex flex-col items-center gap-5">
				<h2 class="text-center text-4xl font-bold text-brand-navy"><?php esc_html_e( '水漏れ修理に関するよくある質問', 'gd-aircon-repair' ); ?></h2>
				<span class="h-2 w-24 bg-brand-orange" aria-hidden="true"></span>
			</div>

			<div class="mx-auto mt-10 flex max-w-[1120px] flex-col gap-6">
				<?php foreach ( $faq_items as $faq ) : ?>
					<details class="group" <?php echo ! empty( $faq['open'] ) ? 'open' : ''; ?>>
						<summary class="flex cursor-pointer list-none items-center gap-4 rounded-full bg-[#00a6f4] px-2 py-2 pl-4 text-white [&::-webkit-details-marker]:hidden">
							<span class="shrink-0 text-5xl font-bold leading-none" aria-hidden="true">Q</span>
							<span class="min-w-0 flex-1 text-lg font-bold leading-snug lg:text-2xl"><?php echo esc_html( $faq['question'] ); ?></span>
							<span class="mr-1 flex h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00a6f4] group-open:hidden" aria-hidden="true">+</span>
							<span class="mr-1 hidden h-[52px] w-[52px] shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00a6f4] group-open:flex" aria-hidden="true">−</span>
						</summary>
						<div class="mt-4 flex gap-2.5 px-1 pl-2 lg:pl-4">
							<img class="h-[52px] w-[52px] shrink-0 rounded-full object-cover" src="<?php echo esc_url( $faq_avatar ); ?>" alt="" loading="lazy" width="52" height="52">
							<p class="min-w-0 flex-1 text-base font-medium leading-[1.75] text-slate-700">
								<?php echo esc_html( $faq['answer'] ); ?>
							</p>
						</div>
					</details>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
