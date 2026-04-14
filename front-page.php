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
get_footer();
