<?php
/**
 * フッターテンプレート
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

</main>

<footer class="mt-auto border-t border-slate-200 bg-white">
	<div class="mx-auto max-w-6xl px-4 py-10">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="mb-6 text-sm text-slate-600" aria-label="<?php esc_attr_e( 'フッターメニュー', 'gd-aircon-repair' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'flex flex-wrap gap-4 list-none p-0 m-0',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<p class="text-center text-xs text-slate-500">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<a class="text-slate-600 no-underline hover:underline" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
