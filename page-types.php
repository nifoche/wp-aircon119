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

$types = array(
	array(
		'title'       => __( '天井カセット型', 'gd-aircon-repair' ),
		'description' => __( '天井カセット形は、本体を天井内に納めて、意匠パネルだけを見せる業務用エアコンです。店舗やオフィスで採用されることが多く、空間全体をすっきり見せながら空調しやすい、代表的な形状のひとつです。天井カセット形の中にも吹出口の方向数や構成に違いがあり、設置場所やレイアウトに合わせて選ばれています。', 'gd-aircon-repair' ),
		'button'      => __( '天井カセット型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/tenkase.jpg',
		'url'         => home_url( '/types/tenkase/' ),
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '天井吊型', 'gd-aircon-repair' ),
		'description' => __( '天井吊形は、本体を天井から吊り下げて設置する露出形の業務用エアコンです。天井内へ埋め込む必要がないため、天井懐が狭い場所や、照明・設備の関係で埋込形を採用しにくい空間でも検討しやすい形状です。店舗や事務所をはじめ、レイアウト上の制約がある場所でも導入しやすく、比較的わかりやすい設置方式として選ばれています。', 'gd-aircon-repair' ),
		'button'      => __( '天井吊型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/tentsuri.jpg',
		'url'         => home_url( '/types/tentsuri/' ),
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( '壁掛型', 'gd-aircon-repair' ),
		'description' => __( '壁掛形は、家庭用エアコンに近い見た目で壁面に取り付ける業務用エアコンです。天井内へ本体を納める必要がないため、天井裏スペースが限られている場所や、既存建物へ後付けしたいケースでも採用しやすい形状です。設置方法が比較的わかりやすく、業務用エアコンの中では扱いやすい形状として選ばれることがあります。', 'gd-aircon-repair' ),
		'button'      => __( '壁掛型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/kabekake.jpg',
		'url'         => home_url( '/types/kabekake/' ),
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
	array(
		'title'       => __( '床置型', 'gd-aircon-repair' ),
		'description' => __( '床置形は、床付近や壁際に設置する露出タイプの業務用エアコンです。天井内へ本体を納める必要がなく、天井懐の制約を受けにくいため、埋込形を採用しにくい空間でも検討しやすい形状です。見た目は比較的わかりやすく、設置位置の自由度やメンテナンス性を重視したい場面で選ばれることがあります。', 'gd-aircon-repair' ),
		'button'      => __( '床置型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/yukaoki.jpg',
		'url'         => home_url( '/types/yukaoki/' ),
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
	array(
		'title'       => __( '天井埋込ダクト型', 'gd-aircon-repair' ),
		'description' => __( '天井埋込ダクト形は、本体を天井内に納め、ダクトを通して吸込口や吹出口を配置する業務用エアコンです。室内機本体を直接見せずに空調計画を組みやすく、吸込口と吹出口の位置を空間に合わせて設計しやすいのが大きな特徴です。意匠性を保ちながら柔軟なレイアウトを取りたい空間で、選択肢に入りやすい形状です。', 'gd-aircon-repair' ),
		'button'      => __( '天井埋込ダクト型について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/duct.jpg',
		'url'         => home_url( '/types/duct/' ),
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),
	array(
		'title'       => __( 'ビルトイン', 'gd-aircon-repair' ),
		'description' => __( 'ビルトインは、本体を天井内に納めつつ、吹出口を分離して設計できる業務用エアコンです。空調機の存在感を抑えながら、店舗デザインや空間形状に合わせて送風計画を組みやすいのが特徴です。L字形やコの字形、細長い空間など、一般的な吹出しだけでは対応しにくいレイアウトでも検討しやすく、意匠性を重視した空間づくりで選ばれやすい形状です。', 'gd-aircon-repair' ),
		'button'      => __( 'ビルトインについて詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/builtin.jpg',
		'url'         => home_url( '/types/builtin/' ),
		'title_class' => 'text-3xl font-bold lg:text-[40px]',
	),

	array(
		'title'       => __( '厨房用', 'gd-aircon-repair' ),
		'description' => __( '厨房用は、飲食店や宿泊施設などの厨房向けに設計された、天井に吊り下げて設置する露出形の業務用エアコンです。一般的な天吊形をベースにしつつ、油煙や高温環境に配慮した厨房専用仕様になっているのが特徴です。', 'gd-aircon-repair' ),
		'button'      => __( '厨房用について詳しく見る', 'gd-aircon-repair' ),
		'image'       => get_template_directory_uri() . '/assets/images/types/kitchen.jpg',
		'url'         => home_url( '/types/kitchen/' ),
		'title_class' => 'text-4xl font-bold lg:text-[36px]',
	),
);
?>

<section class="relative overflow-hidden border-b-[6px] border-brand-fire bg-brand-cream pb-10 pt-24 text-brand-ink lg:pb-12 lg:pt-16">
	<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<nav class="mb-6 flex flex-wrap items-center gap-2 text-base font-bold text-[#42566a] lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
			<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
			</a>
			<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center opacity-90" aria-hidden="true">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</span>
			<span class="font-extrabold text-brand-ink"><?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?></span>
		</nav>

		<div class="max-w-[920px] space-y-7">
			<h1 class="text-4xl font-bold leading-tight tracking-tight lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '業務用エアコンの形状', 'gd-aircon-repair' ); ?>
			</h1>

			<div class="space-y-4 text-base leading-relaxed text-[#42566a] lg:text-xl">
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

<section class="bg-[#FFFBF9] py-10 lg:py-16">
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
						class="relative hidden w-fit items-center gap-3 rounded bg-brand-sky px-6 py-3 text-base font-extrabold text-white no-underline shadow-md ring-1 ring-black/5 transition hover:bg-brand-sky/90 lg:inline-flex"
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

				<a
					class="relative flex w-full items-center gap-3 rounded bg-brand-sky px-6 py-3 text-base font-extrabold text-white no-underline shadow-md ring-1 ring-black/5 transition hover:bg-brand-sky/90 lg:hidden"
					href="<?php echo esc_url( $type['url'] ); ?>"
				>
					<span class="grow"><?php echo esc_html( $type['button'] ); ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="shrink-0 text-white" aria-hidden="true" focusable="false">
						<path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();
