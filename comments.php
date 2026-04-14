<?php
/**
 * コメント表示
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area border-t border-slate-200 pt-8">
	<?php if ( have_comments() ) : ?>
		<h2 class="mb-6 text-lg font-semibold text-slate-900">
			<?php
			$gd_comment_count = get_comments_number();
			if ( '1' === $gd_comment_count ) {
				esc_html_e( '1件のコメント', 'gd-aircon-repair' );
			} else {
				/* translators: %s: comment count */
				printf( esc_html( _n( '%s件のコメント', '%s件のコメント', $gd_comment_count, 'gd-aircon-repair' ) ), number_format_i18n( $gd_comment_count ) );
			}
			?>
		</h2>

		<ol class="list-none space-y-6 p-0">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation(
			array(
				'prev_text' => __( '古いコメント', 'gd-aircon-repair' ),
				'next_text' => __( '新しいコメント', 'gd-aircon-repair' ),
			)
		);
		?>
	<?php endif; ?>

	<?php if ( ! comments_open() ) : ?>
		<p class="text-sm text-slate-500"><?php esc_html_e( 'コメントは受け付けていません。', 'gd-aircon-repair' ); ?></p>
	<?php else : ?>
		<?php comment_form(); ?>
	<?php endif; ?>
</div>
