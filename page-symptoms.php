<?php
/**
 * 固定ページテンプレート: 症状
 *
 * @package gd-aircon-repair
 */

get_header();

$hero_texture_url = 'http://localhost:3845/assets/e55f40f59b1f786159e5bc3341126f1ca3a06460.png';
$symptoms         = array(
	array(
		'title'       => '水漏れ',
		'description' => '業務用エアコン（天井カセット形など）の室内機から水滴が落ちる、吹出口から水が飛ぶ、天井点検口やパネル周辺が濡れる状態です。冷房・除湿で発生する結露水（ドレン）が排水しきれない場合や、配管など別の箇所で結露して水漏れのように見える場合があります。',
		'button'      => '水漏れ症状について詳しく見る',
		'image'       => 'http://localhost:3845/assets/775fb1b04ed7b64aa65e6171a9966dc04ea17589.png',
		'url'         => home_url( '/symptoms/water-leak/' ),
	),
	array(
		'title'       => '冷えない',
		'description' => '業務用エアコンを冷房しても室温が下がらない、冷たい風が弱い、設定温度にならない状態です。外気温の上昇や室外機の設置環境、室内の熱負荷によって体感が落ちることもあります。風量低下や熱交換の効率低下、冷媒系の不具合など複数要因があるため、症状の出方で切り分けが必要です。',
		'button'      => '冷えない症状について詳しく見る',
		'image'       => 'http://localhost:3845/assets/192c9e329e27ee2325c1dbfb8a95b82e512a0b6e.png',
		'url'         => '#',
	),
	array(
		'title'       => '匂いがする',
		'description' => '業務用エアコンの運転中にカビ臭い・酸っぱい・こもった臭いなどの異臭が出る状態です。停止中は気にならないのに、起動直後や送風時に強く感じることもあります。フィルターや熱交換器の汚れ、ドレン系の状態、設置環境の影響が重なって発生するケースが多くあります。',
		'button'      => '匂いがする症状について詳しく見る',
		'image'       => 'http://localhost:3845/assets/2c14a38f821b993d646382daf876213f56ade137.png',
		'url'         => '#',
	),
	array(
		'title'       => 'うるさい',
		'description' => '異音・振動が続く場合は、ファンやモーター、固定部、配管まわりなど複数箇所で原因が起きている可能性があります。放置すると故障範囲が広がることもあるため、早めの点検がおすすめです。気になる音のタイミングや発生箇所が分かると、原因特定がスムーズになります。',
		'button'      => 'うるさい症状について詳しく見る',
		'image'       => 'http://localhost:3845/assets/2a2ae8821e2370f96853411d872108f7cc7443d9.png',
		'url'         => '#',
	),
);
?>

<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pt-16">
	<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
		<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_texture_url ); ?>" alt="" loading="lazy">
	</div>

	<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<nav class="mb-6 flex items-center gap-2 text-sm font-bold text-white/90 lg:text-base" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
			<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
			</a>
			<span aria-hidden="true">/</span>
			<span><?php esc_html_e( '症状', 'gd-aircon-repair' ); ?></span>
		</nav>

		<div class="max-w-[980px] space-y-6">
			<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-6xl lg:leading-[1.1]">
				<?php esc_html_e( 'こんなお困りごとはありませんか？', 'gd-aircon-repair' ); ?>
			</h1>

			<div class="space-y-4 text-base leading-7 text-white/90 lg:text-lg">
				<p>
					<?php esc_html_e( '業務用エアコンの不調は、症状によって原因や対処方法が異なります。水漏れ・冷えない・異臭・異音など、よくあるトラブルを一覧でご案内しています。', 'gd-aircon-repair' ); ?>
				</p>
				<p>
					<?php esc_html_e( '気になる症状に近い項目からご確認いただき、早めの点検・修理をご検討ください。原因の切り分けが難しい場合も、お気軽にご相談いただけます。', 'gd-aircon-repair' ); ?>
				</p>
			</div>

			<div class="flex flex-wrap gap-3 pt-1">
				<a
					class="inline-flex items-center gap-2 rounded bg-white px-6 py-3 text-sm font-extrabold text-brand-skydeep no-underline shadow-md transition hover:bg-slate-100"
					href="<?php echo esc_url( 'tel:' . preg_replace( '/\D+/', '', (string) apply_filters( 'gd_aircon_repair_phone_tel', '0120000000' ) ) ); ?>"
				>
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
					</svg>
					<span><?php echo esc_html( apply_filters( 'gd_aircon_repair_phone_display', '0120-000-000' ) ); ?></span>
				</a>
				<a
					class="inline-flex items-center gap-1 rounded bg-brand-orange px-4 py-3 text-white no-underline shadow-md transition hover:bg-brand-orange/90"
					href="<?php echo esc_url( apply_filters( 'gd_aircon_repair_quote_url', home_url( '/' ) ) ); ?>"
				>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />
					</svg>
					<span class="text-sm font-bold"><?php esc_html_e( 'WEBで', 'gd-aircon-repair' ); ?></span>
					<span class="text-xl font-black text-brand-skydeep"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
					<span class="text-sm font-bold"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-[#f9fcff] py-10 lg:py-14">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-10 px-4 lg:gap-12 lg:px-10">
		<?php foreach ( $symptoms as $symptom ) : ?>
			<article class="grid gap-6 lg:grid-cols-2 lg:items-start lg:gap-10">
				<div class="space-y-4">
					<h2 class="text-3xl font-bold leading-tight text-brand-skydeep lg:text-[40px]">
						<?php echo esc_html( $symptom['title'] ); ?>
					</h2>
					<p class="text-base leading-8 text-slate-700 lg:text-lg/8">
						<?php echo esc_html( $symptom['description'] ); ?>
					</p>
					<a
						class="inline-flex items-center gap-2 rounded bg-brand-sky px-6 py-3 text-sm md:text-base font-extrabold text-white no-underline shadow-md transition hover:bg-brand-sky/90"
						href="<?php echo esc_url( $symptom['url'] ); ?>"
					>
						<span><?php echo esc_html( $symptom['button'] ); ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
							<path d="M9.29 6.71a1 1 0 0 1 1.42 0l5 5a1 1 0 0 1 0 1.42l-5 5a1 1 0 1 1-1.42-1.42L13.59 12 9.29 7.71a1 1 0 0 1 0-1.42z" />
						</svg>
					</a>
				</div>

				<div class="overflow-hidden bg-stone-300">
					<img
						class="h-[260px] w-full object-cover lg:h-[400px]"
						src="<?php echo esc_url( $symptom['image'] ); ?>"
						alt="<?php echo esc_attr( $symptom['title'] ); ?>"
						loading="lazy"
					>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();
