<?php
/**
 * 固定ページテンプレート: 業務用エアコンの形状
 * URL 例: /types/
 *
 * Template Name: 業務用エアコンの形状
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$hero_texture_url = 'http://localhost:3845/assets/e55f40f59b1f786159e5bc3341126f1ca3a06460.png';

$types = array(
	array(
		'title'       => __( '天井カセット型', 'gd-aircon-repair' ),
		'description' => __( '天井カセット型は、本体を天井内に納めて、意匠パネルだけを見せる業務用エアコンです。店舗やオフィスで採用されることが多く、空間全体をすっきり見せながら空調しやすい、代表的な形状のひとつです。天井カセット形の中にも吹出口の方向数や構成に違いがあり、設置場所やレイアウトに合わせて選ばれています。', 'gd-aircon-repair' ),
		'button'      => __( '天井カセット型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/e066e74991c270f0317415649e10748752da8acf.png',
		'url'         => home_url( '/types/ceiling-cassette/' ),
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '天井吊型', 'gd-aircon-repair' ),
		'description' => __( '天井吊型は、本体を天井から吊り下げて設置する露出形の業務用エアコンです。天井内へ埋め込む必要がないため、天井懐が狭い場所や、照明・設備の関係で埋込形を採用しにくい空間でも検討しやすい形状です。店舗や事務所をはじめ、レイアウト上の制約がある場所でも導入しやすく、比較的わかりやすい設置方式として選ばれています。', 'gd-aircon-repair' ),
		'button'      => __( '天井吊型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/804f470ab8c7962e5fca3b1c7ae8e43cf27e714a.png',
		'url'         => '#',
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '床置型', 'gd-aircon-repair' ),
		'description' => __( '床置型は、床面に直接設置する業務用エアコンです。壁面や天井に本体を取り付けられないレイアウトや、搬入経路の都合がある場合などに検討されます。メンテナンス箇所へのアクセスが確保しやすいこともあり、用途や設置条件に応じて選ばれています。', 'gd-aircon-repair' ),
		'button'      => __( '床置型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/66e0775775ad508e470db3687661dcfd91e2adbc.png',
		'url'         => '#',
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
	array(
		'title'       => __( '壁掛型', 'gd-aircon-repair' ),
		'description' => __( '壁掛型は、家庭用エアコンに近い見た目で壁面に取り付ける業務用エアコンです。天井内へ本体を納める必要がないため、天井裏スペースが限られている場所や、既存建物へ後付けしたいケースでも採用しやすい形状です。設置方法が比較的わかりやすく、業務用エアコンの中では扱いやすい形状として選ばれることがあります。', 'gd-aircon-repair' ),
		'button'      => __( '壁掛型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/a15c4c15e3626cb3316df880cd95e570c1784c9f.png',
		'url'         => '#',
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
	array(
		'title'       => __( 'ビルトイン', 'gd-aircon-repair' ),
		'description' => __( 'ビルトインは、壁や天井面の収納框に室内機を組み込む形状です。意匠性を保ちながら送風を確保したい空間向けに設計されることがあり、吹出口やパネルの形状はメーカー・機種ごとに様々です。設置条件やメンテナンススペースの確保が計画段階で重要になります。', 'gd-aircon-repair' ),
		'button'      => __( 'ビルトインについて詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/2de5f5759655cf9037ff89db69b33d5080d6c9f9.png',
		'url'         => '#',
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '天井埋込ダクト型', 'gd-aircon-repair' ),
		'description' => __( '天井埋込ダクト型は、本体を天井裏に埋め込み、ダクトで各所へ送風する業務用エアコンです。広いオフィスや店舗など、複数ゾーンへまとめて空調を供給したい場合に選ばれます。ダクト経路やメンテナンス口の確保が、設計・運用の重要なポイントとなります。', 'gd-aircon-repair' ),
		'button'      => __( '天井埋込ダクト型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/4aa42399a5936af4bf883e59c1d6698f01a75fee.png',
		'url'         => '#',
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '厨房用', 'gd-aircon-repair' ),
		'description' => __( '厨房用は、油煙・高温・多湿に配慮して設計された業務用エアコンです。飲食店の厨房などでは、フィルターや熱交換器の汚れ、ドレンまわりの点検が重要になります。壁掛や天井付けなど、機種により形状は異なります。', 'gd-aircon-repair' ),
		'button'      => __( '厨房用について詳しく見る', 'gd-aircon-repair' ),
		'image'       => 'http://localhost:3845/assets/9f373887c77bcac98fee89d2dee949c1800f7fc0.png',
		'url'         => '#',
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
);
?>

<section class="relative overflow-hidden bg-[#006ca2] pb-10 pt-8 text-white lg:pb-12 lg:pt-16">
	<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
		<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_texture_url ); ?>" alt="" loading="eager" width="1200" height="800">
	</div>

	<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-white/90 lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
			<a class="no-underline transition hover:text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
			</a>
			<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</span>
			<span class="text-white"><?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?></span>
		</nav>

		<div class="max-w-[920px] space-y-7">
			<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?>
			</h1>

			<div class="space-y-4 text-base leading-relaxed text-white/90 lg:text-xl">
				<p>
					<?php esc_html_e( '業務用エアコンには、天井埋込型・天井吊型・壁掛型など、設置場所や用途に応じたさまざまな形状があります。', 'gd-aircon-repair' ); ?>
				</p>
				<p>
					<?php esc_html_e( '形状によって気付きやすい不調やメンテナンスのポイントが異なるため、ここでは代表的な形状を一覧でご紹介します。お近くの設置例や詳しい仕様は、機種・メーカーによって異なりますので、気になる形状からご確認ください。', 'gd-aircon-repair' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="bg-[#f9fcff] py-10 lg:py-16">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-10 px-4 lg:gap-12 lg:px-10">
		<?php foreach ( $types as $type ) : ?>
			<?php
			$title_class = isset( $type['title_class'] ) ? $type['title_class'] : 'text-3xl font-bold lg:text-[40px]';
			?>
			<article class="grid gap-8 lg:grid-cols-2 lg:items-start lg:gap-10">
				<div class="flex min-w-0 flex-col gap-4">
					<h2 class="<?php echo esc_attr( $title_class ); ?> leading-tight text-brand-skydeep">
						<?php echo esc_html( $type['title'] ); ?>
					</h2>
					<p class="text-lg leading-[1.75] text-slate-700">
						<?php echo esc_html( $type['description'] ); ?>
					</p>
					<a
						class="relative inline-flex w-fit items-center gap-3 rounded bg-brand-sky px-6 py-3 text-base font-extrabold text-white no-underline shadow-md ring-1 ring-black/5 transition hover:bg-brand-sky/90"
						href="<?php echo esc_url( $type['url'] ); ?>"
					>
						<span><?php echo esc_html( $type['button'] ); ?></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="shrink-0 text-white" aria-hidden="true" focusable="false">
							<path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</div>

				<div class="overflow-hidden bg-white">
					<img
						class="h-[260px] w-full object-contain object-center lg:h-[340px] lg:object-cover"
						src="<?php echo esc_url( $type['image'] ); ?>"
						alt="<?php echo esc_attr( $type['title'] ); ?>"
						loading="lazy"
						width="640"
						height="400"
					>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();
