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
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/water-leak/01.jpg',
		'url'         => home_url( '/symptoms/water-leak/' ),
	),
	array(
		'title'       => '冷えない',
		'description' => '業務用エアコンを冷房しても室温が下がらない、冷たい風が弱い、設定温度にならない状態です。外気温の上昇や室外機の設置環境、室内の熱負荷によって体感が落ちることもあります。風量低下や熱交換の効率低下、冷媒系の不具合など複数要因があるため、症状の出方で切り分けが必要です。',
		'button'      => '冷えない症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/not-cooling/01.jpg',
		'url'         => home_url( '/symptoms/not-cooling/' ),
	),
	array(
		'title'       => '暖まらない',
		'description' => '業務用エアコンで暖房運転をしても室温が上がりにくい、温風は出るのに部屋全体が暖まらない、設定温度まで届かない状態です。朝晩の外気温低下や部屋の広さ、天井の高さ、窓の多さなど環境要因でも体感は変わります。風量不足、風向設定、フィルター汚れ、室外機まわりの条件、冷媒系の不具合など複数要因が重なることもあるため、順番に切り分けることが大切です。',
		'button'      => '暖まらない症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/not-heating/01.jpg',
		'url'         => home_url( '/symptoms/not-heating/' ),
	),
	array(
		'title'       => '途中で止まる',
		'description' => '業務用エアコンが運転の途中で止まる、風が出なくなる、しばらくすると再開する、またはそのまま停止したままになる状態です。設定温度に近づいたときの制御や暖房時の霜取り運転、おそうじ機能など正常動作で一時停止する場合もあります。一方で、タイマー設定やランプ点滅、異常表示が伴う場合は故障や点検が必要なケースもあるため、止まり方とランプ状態の確認が重要です。',
		'button'      => '途中で止まる症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/stops-unexpectedly/01.jpg',
		'url'         => home_url( '/symptoms/stops-unexpectedly/' ),
	),
	array(
		'title'       => '異臭がする',
		'description' => 'エアコン運転時にカビ臭・生乾き臭・生活臭などの不快なにおいが発生する状態です。主因はフィルターや熱交換器に付着したホコリや汚れが湿気でカビ・細菌の温床になること、また室内空気の循環により飲食物やタバコ等の臭い成分が内部に吸着・蓄積することです。発生タイミング（起動直後・送風時・停止後）や臭いの種類により原因が異なるため、複数要因を前提に切り分けが必要です。',
		'button'      => '異臭がする症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/bad-smell/01.jpg',
		'url'         => home_url( '/symptoms/bad-smell/' ),
	),
	array(
		'title'       => '異音がする',
		'description' => '業務用エアコンの運転中や停止前後に、いつもと違う音がする状態です。水が流れるような音、樹脂が鳴るような音、霜取り時の切替音などは正常動作のことがあります。一方で、以前より明らかに大きい音、急に出始めた金属音や振動音、継続して気になる音は、室内機や室外機の部品不具合が隠れている可能性もあります。音の種類と発生タイミングを分けて確認することが大切です。',
		'button'      => '異音がする症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/strange-noise/01.jpg',
		'url'         => home_url( '/symptoms/strange-noise/' ),
	),
	array(
		'title'       => '霜・氷がつく',
		'description' => '業務用エアコンの暖房時に、室外機やその周辺に霜や氷が付く状態です。低温で湿度が高い環境では、暖房の仕組み上ある程度は正常に起こり得ます。霜が付くと暖房能力が落ちるため、エアコンは霜取り運転に入り、一時的に暖房を止めて霜を溶かします。ただし、霜や氷が過剰に残り続ける、何度も止まる、暖房が戻らない場合は、設置環境や不具合の確認が必要になることがあります。',
		'button'      => '霜・氷がつく症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/frost-ice/01.jpg',
		'url'         => home_url( '/symptoms/frost-ice/' ),
	),
	array(
		'title'       => '風が出ない',
		'description' => '業務用エアコンを運転しても室内機から風が出ない、または運転開始直後にしばらく送風されない状態です。暖房開始時や冷房・除湿開始直後、停止後すぐの再運転時などは、機器保護やにおい抑制、室内機を暖める制御のため一時的に風が出ないことがあります。一方で、長く待っても出ない、何度も繰り返す、ランプ異常や冷暖房不良を伴う場合は、設定以外の不具合も疑う必要があります。',
		'button'      => '風が出ない症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/no-airflow/01.jpg',
		'url'         => home_url( '/symptoms/no-airflow/' ),
	),
	array(
		'title'       => 'リモコン操作できない',
		'description' => '業務用エアコンのリモコン操作をしても本体が反応しない、電源が入らない、ボタンを押しても指示が通らない状態です。この症状は、リモコン側の電池切れや表示異常、設定・通信不良、本体受信側の問題など複数の原因で起こります。リモコン自体の不具合なのか、本体側が反応できていないのかで対応が変わるため、まずは切り分けが重要です。',
		'button'      => 'リモコン操作できない症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/remote-control-issues/01.jpg',
		'url'         => home_url( '/symptoms/remote-control-issues/' ),
	),
	array(
		'title'       => '漏電ブレーカーが落ちる',
		'description' => '業務用エアコンの運転中や運転開始時に、専用の漏電ブレーカーやブレーカーが落ちて停止する状態です。単なる一時的な電源トラブルではなく、漏電やショートなど電気系統の異常が背景にある可能性があります。各社の案内でも、漏電が疑われる場合はそのまま使い続けず、まず安全確保を優先する扱いです。電気まわりの症状なので、他の症状よりも危険度が高いと考えて対応する必要があります。',
		'button'      => '漏電ブレーカーが落ちる症状について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/power-outage/01.jpg',
		'url'         => home_url( '/symptoms/power-outage/' ),
	),
	array(
		'title'       => '結露',
		'description' => '業務用エアコンの吹出口や本体まわり、配管付近などに水滴が付き、結露している状態です。冷房や除湿では空気中の水分が冷やされて結露水になるため、ある程度は仕組み上起こりますが、吹出口から水滴が落ちるほどの結露は、環境条件や汚れ、排水不良の影響が重なっている場合があります。単なる水漏れと見分けにくいこともあるため、どこに付いているか、運転条件は何かを切り分けることが重要です。',
		'button'      => '結露について詳しく見る',
		'image'       => get_template_directory_uri() . '/assets/images/symptoms/condensation/01.jpg',
		'url'         => home_url( '/symptoms/condensation/' ),
	),
);
?>

<section class="relative overflow-hidden border-b-[6px] border-brand-fire bg-brand-cream pb-10 pt-24 text-brand-ink lg:pt-16">
	<div class="pointer-events-none absolute inset-0 opacity-[0.07]">
		<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_texture_url ); ?>" alt="" loading="lazy">
	</div>

	<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<nav class="mb-6 flex items-center gap-2 text-sm font-bold text-[#42566a] lg:text-base" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
			<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
			</a>
			<span aria-hidden="true">/</span>
			<span><?php esc_html_e( '症状', 'gd-aircon-repair' ); ?></span>
		</nav>

		<div class="max-w-[980px] space-y-6">
			<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-6xl lg:leading-[1.1]">
				<?php esc_html_e( 'こんなお困りごとはありませんか？', 'gd-aircon-repair' ); ?>
			</h1>

			<div class="space-y-4 text-base leading-7 text-[#42566a] lg:text-lg">
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
					href="<?php echo esc_url( 'tel:' . preg_replace( '/\D+/', '', (string) apply_filters( 'gd_aircon_repair_phone_tel', '05055263005' ) ) ); ?>"
				>
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
					</svg>
					<span><?php echo esc_html( apply_filters( 'gd_aircon_repair_phone_display', '050-5526-3005' ) ); ?></span>
				</a>
				<a
					class="inline-flex items-center gap-1 rounded bg-brand-orange px-4 py-3 text-white no-underline shadow-md transition hover:bg-brand-orange/90"
					href="<?php echo esc_url( apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact/' ) ) ); ?>"
				>
					<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z" />
					</svg>
					<span class="text-sm font-bold"><?php esc_html_e( 'WEBで', 'gd-aircon-repair' ); ?></span>
					<span class="rounded-sm bg-white px-1.5 py-0.5 text-lg font-black leading-none text-brand-fire"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
					<span class="text-sm font-bold"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-[#FFFBF9] py-10 lg:py-14">
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
						class="hidden items-center gap-2 rounded bg-brand-sky px-6 py-3 text-sm md:text-base font-extrabold text-white no-underline shadow-md transition hover:bg-brand-sky/90 lg:inline-flex"
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

				<a
					class="inline-flex items-center gap-2 rounded bg-brand-sky px-6 py-3 text-sm md:text-base font-extrabold text-white no-underline shadow-md transition hover:bg-brand-sky/90 lg:hidden"
					href="<?php echo esc_url( $symptom['url'] ); ?>"
				>
					<span class="grow"><?php echo esc_html( $symptom['button'] ); ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
						<path d="M9.29 6.71a1 1 0 0 1 1.42 0l5 5a1 1 0 0 1 0 1.42l-5 5a1 1 0 1 1-1.42-1.42L13.59 12 9.29 7.71a1 1 0 0 1 0-1.42z" />
					</svg>
				</a>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();
