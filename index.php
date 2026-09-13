<?php
/**
 * メインテンプレート（フォールバック）
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-10">
	<?php if ( have_posts() ) : ?>
		<header class="mb-8">
			<h1 class="text-2xl font-bold text-slate-900">
				<?php
				if ( is_home() && ! is_front_page() ) {
					single_post_title();
				} elseif ( is_search() ) {
					/* translators: %s: search query */
					printf( esc_html__( '検索結果: %s', 'gd-aircon-repair' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
				} elseif ( is_archive() ) {
					the_archive_title();
				} else {
					esc_html_e( '投稿一覧', 'gd-aircon-repair' );
				}
				?>
			</h1>
			<?php if ( is_archive() && get_the_archive_description() ) : ?>
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
						<p class="mt-4">
							<a class="text-sm font-medium text-brand-firedeep no-underline hover:underline" href="<?php the_permalink(); ?>">
								<?php esc_html_e( '続きを読む', 'gd-aircon-repair' ); ?>
							</a>
						</p>
					</article>
				<?php endwhile; ?>

				<div class="mt-10">
					<?php
					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => __( '前へ', 'gd-aircon-repair' ),
							'next_text' => __( '次へ', 'gd-aircon-repair' ),
						)
					);
					?>
				</div>
			</div>

			<?php get_sidebar(); ?>
		</div>
	<?php else : ?>
		<p class="text-slate-600"><?php esc_html_e( '投稿が見つかりませんでした。', 'gd-aircon-repair' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
