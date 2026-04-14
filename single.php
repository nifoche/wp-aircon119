<?php
/**
 * 単一投稿
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
				<p class="mt-2 text-sm text-slate-500">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
						<?php echo esc_html( get_the_date() ); ?>
					</time>
				</p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-8 overflow-hidden rounded-lg">
					<?php the_post_thumbnail( 'large', array( 'class' => 'h-auto w-full' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="prose prose-slate max-w-none text-slate-800">
				<?php the_content(); ?>
			</div>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="mt-8 text-sm">' . __( 'ページ:', 'gd-aircon-repair' ),
					'after'  => '</div>',
				)
			);
			?>

			<?php if ( comments_open() || get_comments_number() ) : ?>
				<div class="mt-12">
					<?php comments_template(); ?>
				</div>
			<?php endif; ?>
		</article>
	<?php endwhile; ?>
</div>

<?php
get_footer();
