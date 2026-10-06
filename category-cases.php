<?php
/**
 * 施工事例カテゴリー専用テンプレート（category-cases.php）
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<div class="mx-auto max-w-6xl px-4 py-10">

	<!-- パンくず -->
	<nav class="mb-6 text-sm text-slate-500" aria-label="パンくず">
		<ol class="flex items-center gap-1">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-brand-orange no-underline">ホーム</a></li>
			<li class="mx-1 text-slate-400">›</li>
			<li class="text-slate-700 font-medium">施工事例</li>
		</ol>
	</nav>

	<header class="mb-8">
		<h1 class="text-2xl font-bold text-slate-900">施工事例一覧</h1>
		<p class="mt-1 text-sm text-slate-500">業務用エアコンの修理・メンテナンス実績をご紹介します。</p>
	</header>

	<?php if ( have_posts() ) : ?>
		<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
			<?php
			while ( have_posts() ) :
				the_post();
				$photos        = json_decode( get_post_meta( get_the_ID(), '_repair_photos', true ) ?: '[]', true );
				$thumb_id      = ! empty( $photos[0]['media_id'] ) ? (int) $photos[0]['media_id'] : null;
				$symptom_tag   = get_post_meta( get_the_ID(), '_repair_symptom_tag', true );
				$pref          = get_post_meta( get_the_ID(), '_repair_pref', true );
				$city          = get_post_meta( get_the_ID(), '_repair_city', true );
				$price_range   = trim( preg_replace( '/（[^）]*）/', '', get_post_meta( get_the_ID(), '_repair_price_range', true ) ) );
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'group flex flex-col overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm hover:shadow-md transition-shadow' ); ?>>

					<!-- サムネイル -->
					<a href="<?php the_permalink(); ?>" class="block aspect-[4/3] overflow-hidden bg-gray-100 no-underline">
						<?php if ( $thumb_id ) : ?>
							<?php echo wp_get_attachment_image(
								$thumb_id,
								'medium',
								false,
								[
									'class' => 'h-full w-full object-contain group-hover:scale-105 transition-transform duration-300',
									'alt'   => esc_attr( $photos[0]['caption'] ?? get_the_title() ),
								]
							); ?>
						<?php elseif ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium', [ 'class' => 'h-full w-full object-cover group-hover:scale-105 transition-transform duration-300' ] ); ?>
						<?php else : ?>
							<div class="flex h-full items-center justify-center text-slate-300">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
							</div>
						<?php endif; ?>
					</a>

					<!-- カード本体 -->
					<div class="flex flex-1 flex-col p-4">

						<!-- ラベル -->
						<p class="mb-2 text-xs text-slate-500">
							<?php if ( $pref ) : ?><?php echo esc_html( $pref ); ?><?php echo $city ? '・' . esc_html( $city ) : ''; ?><?php endif; ?>
							<?php if ( $symptom_tag && $pref ) : ?>　<?php endif; ?>
							<?php if ( $symptom_tag ) : ?><span class="text-brand-orange font-medium"><?php echo esc_html( $symptom_tag ); ?></span><?php endif; ?>
						</p>

						<!-- タイトル -->
						<h2 class="flex-1 text-base font-bold leading-snug text-slate-900">
							<a href="<?php the_permalink(); ?>" class="no-underline hover:text-brand-orange">
								<?php the_title(); ?>
							</a>
						</h2>

						<!-- 日付 -->
						<p class="mt-3 text-right text-xs text-slate-400">
							<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
								<?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
							</time>
						</p>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<div class="mt-10">
			<?php
			the_posts_pagination(
				[
					'mid_size'  => 2,
					'prev_text' => '前へ',
					'next_text' => '次へ',
				]
			);
			?>
		</div>

	<?php else : ?>
		<p class="text-slate-600">施工事例が見つかりませんでした。</p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
