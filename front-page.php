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
