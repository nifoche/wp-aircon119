<?php
/**
 * 検索結果
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-10">
	<header class="mb-8">
		<h1 class="text-2xl font-bold text-slate-900">
			<?php
			/* translators: %s: search query */
			printf( esc_html__( '検索結果: %s', 'gd-aircon-repair' ), '<span class="text-slate-700">' . esc_html( get_search_query() ) . '</span>' );
			?>
		</h1>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="grid gap-8 md:grid-cols-[1fr_280px]">
			<div>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'search' );
				endwhile;

				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => __( '前へ', 'gd-aircon-repair' ),
						'next_text' => __( '次へ', 'gd-aircon-repair' ),
					)
				);
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	<?php else : ?>
		<p class="text-slate-600"><?php esc_html_e( '該当する投稿は見つかりませんでした。', 'gd-aircon-repair' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
