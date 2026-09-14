<?php
/**
 * 固定ページ（記事ページ）
 *
 * @package gd-aircon-repair
 */

get_header();

$quote_url = apply_filters( 'gd_aircon_repair_quote_url', home_url( '/contact/' ) );
?>

<?php
while ( have_posts() ) :
	the_post();
	$ancestor_ids = array_reverse( get_post_ancestors( get_the_ID() ) );
	$child_pages  = get_pages(
		array(
			'parent'      => get_the_ID(),
			'sort_column' => 'menu_order,post_title',
		)
	);
	?>
<div class="bg-[#FFFBF9]">
	<section class="relative overflow-hidden border-b-[6px] border-brand-fire bg-brand-cream pb-10 pt-24 lg:pb-12 lg:pt-12">
		<div class="relative mx-auto w-full max-w-[1080px] px-4 lg:px-10">
			<nav class="mb-5 flex flex-wrap items-center gap-x-2 gap-y-1 text-sm font-bold text-[#42566a] lg:text-base" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?></a>
				<?php foreach ( $ancestor_ids as $ancestor_id ) : ?>
					<span aria-hidden="true">›</span>
					<a class="no-underline transition hover:text-brand-fire" href="<?php echo esc_url( get_permalink( $ancestor_id ) ); ?>"><?php echo esc_html( get_the_title( $ancestor_id ) ); ?></a>
				<?php endforeach; ?>
				<span aria-hidden="true">›</span>
				<span class="font-extrabold text-brand-ink" aria-current="page"><?php the_title(); ?></span>
			</nav>
			<h1 class="text-[26px] font-bold leading-snug tracking-tight text-brand-ink lg:text-[40px] lg:leading-tight"><?php the_title(); ?></h1>
			<p class="mt-4 text-sm text-slate-500">
				<?php
				/* translators: %s: 最終更新日 */
				printf( esc_html__( '最終更新日：%s', 'gd-aircon-repair' ), esc_html( get_the_modified_date( 'Y年n月j日' ) ) );
				?>
			</p>
		</div>
	</section>

	<div class="mx-auto w-full max-w-[860px] px-4 py-10 lg:py-16">
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="m-0 mb-10 overflow-hidden rounded-xl shadow-[0_10px_30px_-12px_rgba(22,55,79,0.35)]">
				<?php
				the_post_thumbnail(
					'large',
					array(
						'class'         => 'block h-auto w-full',
						'loading'       => 'eager',
						'fetchpriority' => 'high',
					)
				);
				?>
			</figure>
		<?php endif; ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'article-body prose prose-slate max-w-none lg:prose-lg' ); ?>>
			<?php the_content(); ?>
		</article>

		<?php if ( $child_pages ) : ?>
			<ul class="m-0 mt-8 grid list-none gap-4 p-0 sm:grid-cols-2">
				<?php foreach ( $child_pages as $child_page ) : ?>
					<li>
						<a class="block h-full rounded-lg border-2 border-[#ffc9ae] bg-white p-5 no-underline transition hover:border-brand-fire" href="<?php echo esc_url( get_permalink( $child_page ) ); ?>">
							<span class="block text-lg font-bold leading-snug text-brand-ink"><?php echo esc_html( get_the_title( $child_page ) ); ?></span>
							<span class="mt-2 block text-sm font-bold text-brand-firedeep"><?php esc_html_e( '記事を読む →', 'gd-aircon-repair' ); ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<?php if ( ! is_page( 'contact' ) && ! is_page( 'privacy-policy' ) ) : ?>
			<aside class="mt-12 rounded-xl bg-brand-ink px-6 py-8 text-center text-white lg:px-10">
				<p class="text-xl font-bold lg:text-2xl"><?php esc_html_e( '業務用エアコンの不具合はご相談ください', 'gd-aircon-repair' ); ?></p>
				<p class="mt-2 text-sm text-white/80 lg:text-base"><?php esc_html_e( '全メーカー対応。現地調査・お見積もりは無料です。', 'gd-aircon-repair' ); ?></p>
				<a class="mt-5 inline-flex min-h-[56px] items-center justify-center gap-2 rounded-lg bg-brand-fire px-8 text-lg font-extrabold text-white no-underline shadow-[0_4px_0_#d8480a] transition hover:bg-brand-fire/90" href="<?php echo esc_url( $quote_url ); ?>">
					<?php esc_html_e( 'WEBで無料見積り', 'gd-aircon-repair' ); ?>
					<span aria-hidden="true">→</span>
				</a>
			</aside>
		<?php endif; ?>
	</div>
</div>
<?php endwhile; ?>

<?php
get_footer();
