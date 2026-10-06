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

			<?php
			// ── 施工事例メタ取得 ──
			$repair_pref        = get_post_meta( get_the_ID(), '_repair_pref', true );
			$repair_city        = get_post_meta( get_the_ID(), '_repair_city', true );
			$repair_industry    = get_post_meta( get_the_ID(), '_repair_industry', true );
			$repair_symptom_tag = get_post_meta( get_the_ID(), '_repair_symptom_tag', true );
			$repair_maker       = get_post_meta( get_the_ID(), '_repair_maker', true );
			$repair_type        = get_post_meta( get_the_ID(), '_repair_type', true );
			$repair_location    = get_post_meta( get_the_ID(), '_repair_location', true );
			$repair_machine     = get_post_meta( get_the_ID(), '_repair_machine', true );
			$repair_installed   = get_post_meta( get_the_ID(), '_repair_installed_years', true );
			$repair_symptom     = get_post_meta( get_the_ID(), '_repair_symptom', true );
			$repair_response    = get_post_meta( get_the_ID(), '_repair_response', true );
			$repair_work_time   = get_post_meta( get_the_ID(), '_repair_work_time', true );
			$repair_price_range = get_post_meta( get_the_ID(), '_repair_price_range', true );
			$repair_photos      = json_decode( get_post_meta( get_the_ID(), '_repair_photos', true ) ?: '[]', true );
			$repair_related     = json_decode( get_post_meta( get_the_ID(), '_repair_related', true ) ?: '[]', true );
			$is_repair_case     = ! empty( $repair_pref );
			?>

			<?php if ( $is_repair_case && ! empty( $repair_photos ) ) : ?>
			<!-- 施工写真 -->
			<div class="mb-8 grid grid-cols-3 gap-3">
				<?php foreach ( $repair_photos as $photo ) : ?>
					<figure class="m-0">
						<?php if ( ! empty( $photo['media_id'] ) ) : ?>
							<?php echo wp_get_attachment_image(
								(int) $photo['media_id'],
								'medium',
								false,
								[
									'class' => 'rounded-lg w-full h-40 object-cover',
									'alt'   => esc_attr( $photo['alt'] ?? $photo['caption'] ?? '' ),
								]
							); ?>
						<?php endif; ?>
						<figcaption class="mt-1 text-center text-xs text-gray-500">
							<span class="font-bold"><?php echo esc_html( $photo['slot'] ?? '' ); ?></span>
							<?php echo esc_html( $photo['caption'] ?? '' ); ?>
						</figcaption>
					</figure>
				<?php endforeach; ?>
			</div>
			<?php elseif ( has_post_thumbnail() ) : ?>
				<div class="mb-8 overflow-hidden rounded-lg">
					<?php the_post_thumbnail( 'large', array( 'class' => 'h-auto w-full' ) ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $is_repair_case ) : ?>
			<!-- 施工概要テーブル -->
			<div class="mb-8 rounded-xl bg-gray-50 p-5 text-sm">
				<h2 class="mb-3 text-base font-bold text-gray-800">施工概要</h2>
				<table class="w-full border-collapse">
					<tbody>
						<?php
						$rows = [
							'所在地・業種' => $repair_location,
							'機種・形状'   => $repair_machine,
							'設置年数'     => $repair_installed,
							'症状'         => $repair_symptom,
							'対応内容'     => $repair_response,
							'作業時間'     => $repair_work_time,
							'費用'         => $repair_price_range,
						];
						foreach ( $rows as $label => $value ) :
							if ( ! $value ) continue;
							?>
							<tr class="border-b border-gray-200 last:border-0">
								<th class="w-28 whitespace-nowrap py-2 pr-4 text-left font-semibold text-gray-600 align-top"><?php echo esc_html( $label ); ?></th>
								<td class="py-2 text-gray-800"><?php echo esc_html( $value ); ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

			<!-- タグ -->
			<div class="mb-8 flex flex-wrap gap-2">
				<?php if ( $repair_symptom_tag ) : ?>
					<span class="rounded-full bg-orange-100 px-3 py-1 text-xs font-semibold text-orange-700">症状：<?php echo esc_html( $repair_symptom_tag ); ?></span>
				<?php endif; ?>
				<?php if ( $repair_pref ) : ?>
					<span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">
						<?php echo esc_html( $repair_pref ); ?><?php echo $repair_city ? '・' . esc_html( $repair_city ) : ''; ?>
					</span>
				<?php endif; ?>
				<?php if ( $repair_maker ) : ?>
					<span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-700"><?php echo esc_html( $repair_maker ); ?></span>
				<?php endif; ?>
				<?php if ( $repair_type ) : ?>
					<span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-700"><?php echo esc_html( $repair_type ); ?></span>
				<?php endif; ?>
			</div>
			<?php endif; ?>

			<!-- 本文 -->
			<div class="prose prose-slate max-w-none text-slate-800">
				<?php the_content(); ?>
			</div>

			<?php if ( $is_repair_case && ! empty( $repair_related ) ) : ?>
			<!-- 関連リンク -->
			<div class="mt-8 border-t border-gray-200 pt-6">
				<h3 class="mb-3 text-sm font-bold text-gray-700">関連ページ</h3>
				<ul class="space-y-2">
					<?php foreach ( $repair_related as $link ) : ?>
						<li>
							<a href="<?php echo esc_url( $link['href'] ); ?>" class="text-sm text-orange-600 hover:text-orange-800 hover:underline">
								<?php echo esc_html( $link['label'] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>

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
