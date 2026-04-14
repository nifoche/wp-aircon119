<?php
/**
 * アーカイブ
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-10">
	<?php if ( have_posts() ) : ?>
		<header class="mb-8">
			<h1 class="text-2xl font-bold text-slate-900"><?php the_archive_title(); ?></h1>
			<?php if ( get_the_archive_description() ) : ?>
				<div class="prose prose-slate mt-2 max-w-none text-slate-600">
					<?php the_archive_description(); ?>
				</div>
			<?php endif; ?>
		</header>

		<div class="grid gap-8 md:grid-cols-[1fr_280px]">
			<div>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
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
		<p class="text-slate-600"><?php esc_html_e( '投稿が見つかりませんでした。', 'gd-aircon-repair' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
