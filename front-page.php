<?php
/**
 * フロントページ（静的ページが設定されている場合）
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-10">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="mb-6">
				<h1 class="text-3xl font-bold text-slate-900"><?php the_title(); ?></h1>
			</header>
			<div class="prose prose-slate max-w-none text-slate-800">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</div>

<?php
$symptom_cards = array(
	array(
		'title' => __( '水漏れ', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/water-leak/01.jpg',
		'url'   => home_url( '/symptoms/water-leak/' ),
	),
	array(
		'title' => __( '冷えない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/not-cooling/01.jpg',
		'url'   => home_url( '/symptoms/not-cooling/' ),
	),
	array(
		'title' => __( '異臭がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/bad-smell/01.jpg',
		'url'   => home_url( '/symptoms/bad-smell/' ),
	),
	array(
		'title' => __( '異音がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/strange-noise/01.jpg',
		'url'   => home_url( '/symptoms/strange-noise/' ),
	),
	array(
		'title' => __( '暖まらない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/not-heating/01.jpg',
		'url'   => home_url( '/symptoms/not-heating/' ),
	),
	array(
		'title' => __( '途中で止まる', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/stops-unexpectedly/01.jpg',
		'url'   => home_url( '/symptoms/stops-unexpectedly/' ),
	),
	array(
		'title' => __( '霜・氷がつく', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/frost-ice/01.jpg',
		'url'   => home_url( '/symptoms/frost-ice/' ),
	),
	array(
		'title' => __( '風が出ない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/no-airflow/01.jpg',
		'url'   => home_url( '/symptoms/no-airflow/' ),
	),
);

$ac_types_cards = array(
	array(
		'title' => __( '天井カセット型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tenkase.jpg',
		'url'   => home_url( '/types/tenkase/' ),
	),
	array(
		'title' => __( '天井吊型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tentsuri.jpg',
		'url'   => home_url( '/types/tentsuri/' ),
	),
	array(
		'title' => __( '床置型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/yukaoki.jpg',
		'url'   => home_url( '/types/yukaoki/' ),
	),
	array(
		'title' => __( '壁掛型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/kabekake.jpg',
		'url'   => home_url( '/types/kabekake/' ),
	),
	array(
		'title' => __( 'ビルトイン', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/builtin.jpg',
		'url'   => home_url( '/types/builtin/' ),
	),
	array(
		'title' => __( '天井埋込ダクト型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/duct.jpg',
		'url'   => home_url( '/types/duct/' ),
	),
);
?>

<section class="bg-white py-16 lg:py-[60px]">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
		<div class="mb-8 flex flex-col items-center gap-3 lg:mb-12">
			<p class="text-center text-[32px] font-bold leading-[1.2] tracking-[-0.03em] text-[#00598a]">
				<?php esc_html_e( 'こんなお困りごとはありませんか？', 'gd-aircon-repair' ); ?>
			</p>
			<h2 class="text-center text-[40px] font-bold leading-[1.15] tracking-[-0.03em] text-[#00598a] lg:text-[56px]">
				<?php esc_html_e( '業務用エアコン修理会社が解決します', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="mt-2 block h-2 w-24 bg-[#fe9a00]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
			<?php foreach ( $symptom_cards as $symptom_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.15),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $symptom_card['url'] ); ?>"
				>
					<div class="h-[201px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $symptom_card['image'] ); ?>"
							alt="<?php echo esc_attr( $symptom_card['title'] ); ?>"
							loading="lazy"
							width="290"
							height="201"
						>
					</div>
					<div class="flex min-h-[60px] items-center justify-center px-4 py-3">
						<p class="text-center text-[32px] font-bold leading-[1.2] text-[#00598a] lg:text-[20px]">
							<?php echo esc_html( $symptom_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#0084d1] px-6 py-3 text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]"
				href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての症状を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<section class="bg-white py-16 lg:py-20">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<div class="mb-8 flex flex-col items-center gap-5 lg:mb-12">
			<h2 class="text-center text-[36px] font-bold leading-[1.1] text-[#00598a]">
				<?php esc_html_e( '業務用エアコンの種類', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="block h-2 w-24 bg-[#fe9a00]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
			<?php foreach ( $ac_types_cards as $type_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.16),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $type_card['url'] ); ?>"
				>
					<div class="h-[280px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $type_card['image'] ); ?>"
							alt="<?php echo esc_attr( $type_card['title'] ); ?>"
							loading="lazy"
							width="420"
							height="280"
						>
					</div>
					<div class="p-6">
						<p class="text-[32px] font-bold leading-[1.2] text-[#00598a] lg:text-[24px]">
							<?php echo esc_html( $type_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#0084d1] px-6 py-3 text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]"
				href="<?php echo esc_url( home_url( '/types/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての種類を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
