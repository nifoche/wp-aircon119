<?php
/**
 * 404
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-16 text-center">
	<h1 class="text-3xl font-bold text-slate-900"><?php esc_html_e( 'ページが見つかりません', 'gd-aircon-repair' ); ?></h1>
	<p class="mt-4 text-slate-600"><?php esc_html_e( 'お探しのページは移動または削除された可能性があります。', 'gd-aircon-repair' ); ?></p>
	<p class="mt-8">
		<a class="inline-flex rounded-lg bg-slate-900 px-5 py-2.5 text-sm font-medium text-white no-underline hover:bg-slate-800" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'トップへ戻る', 'gd-aircon-repair' ); ?>
		</a>
	</p>
</div>

<?php
get_footer();
