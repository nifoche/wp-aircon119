<?php
/**
 * 検索結果ループ用テンプレートパーツ
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-10 border-b border-slate-200 pb-10 last:mb-0 last:border-0 last:pb-0' ); ?>>
	<header class="mb-3">
		<h2 class="text-xl font-semibold">
			<a class="text-slate-900 no-underline hover:underline" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<p class="text-sm text-slate-500">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
				<?php echo esc_html( get_the_date() ); ?>
			</time>
		</p>
	</header>
	<div class="prose prose-slate max-w-none text-slate-700">
		<?php the_excerpt(); ?>
	</div>
</article>
