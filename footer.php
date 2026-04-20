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

<footer class="mt-auto bg-[#024a70] text-white">
	<div class="mx-auto flex w-full max-w-[1280px] flex-col items-center gap-6 px-8 py-12">
		<p class="text-center text-2xl font-extrabold leading-7"><?php bloginfo( 'name' ); ?></p>

		<div class="w-full border-t border-slate-200" aria-hidden="true"></div>

		<nav
			class="[&_a:hover]:opacity-80 [&_a:focus-visible]:opacity-80 [&_.menu-item>a]:text-sm [&_.menu-item>a]:font-medium [&_.menu-item>a]:leading-5 [&_.menu-item>a]:text-slate-100 [&_.menu-item>a]:no-underline"
			aria-label="<?php esc_attr_e( 'フッターメニュー', 'gd-aircon-repair' ); ?>"
		>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'm-0 flex list-none flex-wrap items-center justify-center gap-x-8 gap-y-3 p-0',
					'container'      => false,
					'fallback_cb'    => 'gd_aircon_repair_fallback_footer_menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>

		<p class="text-center text-sm font-medium leading-5 text-slate-100">
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> all rights reserved
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
