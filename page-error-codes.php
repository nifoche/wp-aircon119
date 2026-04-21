<?php
/**
 * 固定ページテンプレート: エラーコード（ダイキン）
 * URL 例: /error-codes/
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$assets = 'http://localhost:3845/assets/';
$hero_texture_url = $assets . 'e55f40f59b1f786159e5bc3341126f1ca3a06460.png';

$breadcrumb_parent_url = home_url( '/error-codes/' );
$breadcrumb_parent_is_current = ( trailingslashit( $breadcrumb_parent_url ) === trailingslashit( (string) get_permalink() ) );

$brand_logos = array(
	array(
		'label'  => __( 'ダイキン', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/' ),
		'active' => true,
		'type'   => 'image',
		'src'    => $assets . '1a9ba49ea8a07b5aecaab3c28ea32e9f1a92a64b.png',
	),
	array(
		'label'  => __( 'パナソニック', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . '0035fd21991888e4a186827d484c9ce2c72cf60d.png',
	),
	array(
		'label'  => __( '三菱重工', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'mitsubishi',
		'src'    => array(
			$assets . '06411180e9a6790fadcf450db51957b842eacb2c.svg',
			$assets . 'bf37663f6d4c850ecdb8fe1344f4ed28484a1560.svg',
		),
	),
	array(
		'label'  => __( '日立', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'ef3fa526c38b2225a0867adbc913b8d29505f165.png',
	),
	array(
		'label'  => __( 'シャープ', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'eaf9dc630ef1ec868f1e6bb58afed42291879ed8.png',
	),
	array(
		'label'  => '',
		'url'    => '',
		'active' => false,
		'type'   => 'empty',
	),
);

$icon_plus  = $assets . 'ec9c73688b2dab9d929ae36754bc8cd0f7fcc480.svg';
$icon_minus = $assets . '6131c5bcf144c1da8aaae2dc0c3a723248a51746.svg';

$error_rows = array(
	array(
		'code'    => 'A0',
		'summary' => __( '室内機で異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
	array(
		'code'    => 'A1',
		'summary' => __( '室内機の制御基板に搭載されたマイコンの動作不良によりエラーが発生しています。', 'gd-aircon-repair' ),
		'open'    => true,
		'detail'  => array(
			'intro' => array(
				__( 'プリント基板のマイコンが正常に動作していない際に表示されるエラーです。', 'gd-aircon-repair' ),
				__( '専門業者による点検・修理が必要なため、購入店舗またはメーカーへお問い合わせください。', 'gd-aircon-repair' ),
			),
			'causes' => array(
				array(
					'title' => __( '制御基板の不具合', 'gd-aircon-repair' ),
					'text'  => __( '経年劣化、雷・ノイズなど外的要因が考えられます。', 'gd-aircon-repair' ),
				),
				array(
					'title' => __( '経年劣化', 'gd-aircon-repair' ),
					'text'  => __( '長期使用による部品劣化、接触不良が考えられます。', 'gd-aircon-repair' ),
				),
				array(
					'title' => __( '使用環境要因', 'gd-aircon-repair' ),
					'text'  => __( '高温多湿、粉塵、油分の多い環境が影響している可能性があります。', 'gd-aircon-repair' ),
				),
			),
			'checks' => array(
				__( '異音・焦げた臭い・煙などの異常がある場合は、ただちに運転を停止し、可能であれば専用ブレーカーを切ってください。', 'gd-aircon-repair' ),
				__( 'リモコンの表示内容を確認し、他のエラーコードが同時に出ていないかもご確認ください。', 'gd-aircon-repair' ),
				__( 'いつ頃から・どのような症状が出ているかを控えておくと、修理依頼がスムーズです。', 'gd-aircon-repair' ),
			),
			'notice' => __( '感電や怪我の恐れがあるため、分解・修理は行わず、内部配線・基板・冷媒配管（霜付き部含む）には触れず、専門業者へご依頼ください。', 'gd-aircon-repair' ),
		),
	),
	array(
		'code'    => 'A3',
		'summary' => array(
			__( '冷房運転中にドレンパンの水位上昇を検知しフロートスイッチが作動したため停止しています。', 'gd-aircon-repair' ),
			__( '暖房運転時も同様に作動した場合は停止します。', 'gd-aircon-repair' ),
		),
		'detail' => null,
		'open'   => false,
	),
	array(
		'code'    => 'A6',
		'summary' => __( '室内機のファンモータ異常により運転を停止しています。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
	array(
		'code'    => 'A7',
		'summary' => array(
			__( '冷房運転中にドレンパンの水位上昇を検知しフロートスイッチが作動したため停止しています。', 'gd-aircon-repair' ),
			__( '暖房運転時も同様に作動した場合は停止します。', 'gd-aircon-repair' ),
		),
		'detail' => null,
		'open'   => false,
	),
	array(
		'code'    => 'A8',
		'summary' => __( '室内機のファンモータ異常により運転を停止しています。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
	array(
		'code'    => 'A9',
		'summary' => array(
			__( '冷房運転中にドレンパンの水位上昇を検知しフロートスイッチが作動したため停止しています。', 'gd-aircon-repair' ),
			__( '暖房運転時も同様に作動した場合は停止します。', 'gd-aircon-repair' ),
		),
		'detail' => null,
		'open'   => false,
	),
	array(
		'code'    => 'AF',
		'summary' => __( '室内機のファンモータ異常により運転を停止しています。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
	array(
		'code'    => 'AH',
		'summary' => array(
			__( '冷房運転中にドレンパンの水位上昇を検知しフロートスイッチが作動したため停止しています。', 'gd-aircon-repair' ),
			__( '暖房運転時も同様に作動した場合は停止します。', 'gd-aircon-repair' ),
		),
		'detail' => null,
		'open'   => false,
	),
	array(
		'code'    => 'C1',
		'summary' => __( '室内機のファンモータ異常により運転を停止しています。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
	array(
		'code'    => 'C2',
		'summary' => array(
			__( '冷房運転中にドレンパンの水位上昇を検知しフロートスイッチが作動したため停止しています。', 'gd-aircon-repair' ),
			__( '暖房運転時も同様に作動した場合は停止します。', 'gd-aircon-repair' ),
		),
		'detail' => null,
		'open'   => false,
	),
	array(
		'code'    => 'C3',
		'summary' => __( '室内機のファンモータ異常により運転を停止しています。', 'gd-aircon-repair' ),
		'detail'  => null,
		'open'    => false,
	),
);
?>

<div class="bg-[#f9fcff]">
	<section class="relative overflow-hidden pb-10 pt-24 lg:pb-12 lg:pt-28">
		<div class="pointer-events-none absolute inset-0 mix-blend-overlay opacity-30">
			<img class="h-full w-full object-cover" src="<?php echo esc_url( $hero_texture_url ); ?>" alt="" loading="eager" width="1200" height="800">
		</div>

		<div class="relative mx-auto w-full max-w-[1280px] px-4 lg:px-10">
			<nav class="mb-8 flex flex-wrap items-center gap-2 text-base text-[#4a5565] lg:gap-3 lg:text-xl" aria-label="<?php esc_attr_e( 'パンくず', 'gd-aircon-repair' ); ?>">
				<a class="font-normal text-[#99a1af] no-underline transition hover:text-[#364153]" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php esc_html_e( 'ホーム', 'gd-aircon-repair' ); ?>
				</a>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center text-[#99a1af]" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<?php if ( $breadcrumb_parent_is_current ) : ?>
					<span class="font-normal text-[#4a5565]"><?php esc_html_e( 'エラーコード', 'gd-aircon-repair' ); ?></span>
				<?php else : ?>
					<a class="font-normal no-underline transition hover:text-[#364153]" href="<?php echo esc_url( $breadcrumb_parent_url ); ?>">
						<?php esc_html_e( 'エラーコード', 'gd-aircon-repair' ); ?>
					</a>
				<?php endif; ?>
				<span class="inline-flex h-6 w-6 shrink-0 items-center justify-center text-[#99a1af]" aria-hidden="true">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false"><path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</span>
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( 'ダイキン', 'gd-aircon-repair' ); ?></span>
			</nav>

			<h1 class="max-w-[920px] text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( 'ダイキンのエラーコード一覧', 'gd-aircon-repair' ); ?>
			</h1>
		</div>
	</section>

	<section class="mx-auto flex w-full max-w-[1280px] flex-wrap justify-center gap-6 px-4 pb-6 lg:gap-8 lg:px-10">
		<?php foreach ( $brand_logos as $brand ) : ?>
			<?php if ( 'empty' === $brand['type'] ) : ?>
				<div class="h-[66px] w-[150px] shrink-0 rounded-lg bg-white shadow-[0_10px_15px_0_rgba(0,0,0,0.15),0_4px_6px_0_rgba(0,0,0,0.1)]" aria-hidden="true"></div>
			<?php else : ?>
				<a
					class="<?php echo $brand['active'] ? 'border-[5px] border-[#00598a] shadow-[0_10px_15px_0_rgba(0,104,231,0.15),0_4px_6px_0_rgba(0,0,0,0.1)]' : 'border border-transparent shadow-[0_10px_15px_0_rgba(0,0,0,0.15),0_4px_6px_0_rgba(0,0,0,0.1)]'; ?> flex h-auto min-h-[66px] w-[150px] shrink-0 flex-col items-center justify-center rounded-lg bg-white p-4 no-underline transition hover:opacity-90"
					href="<?php echo esc_url( $brand['url'] ); ?>"
					<?php echo $brand['active'] ? ' aria-current="page"' : ''; ?>
				>
					<?php if ( 'mitsubishi' === $brand['type'] ) : ?>
						<span class="relative block aspect-[500/146] w-full overflow-hidden">
							<img class="absolute inset-[0_66.6%_0.37%_0] block max-w-none" src="<?php echo esc_url( $brand['src'][0] ); ?>" alt="" loading="lazy">
							<img class="absolute inset-[28.83%_0_0_36.6%] block max-w-none" src="<?php echo esc_url( $brand['src'][1] ); ?>" alt="" loading="lazy">
						</span>
					<?php else : ?>
						<span class="block w-full [&_img]:h-auto [&_img]:w-full [&_img]:object-contain">
							<img src="<?php echo esc_url( $brand['src'] ); ?>" alt="<?php echo esc_attr( $brand['label'] ); ?>" loading="lazy" width="120" height="48">
						</span>
					<?php endif; ?>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>

	<section class="mx-auto w-full max-w-[1280px] px-4 pb-16 lg:px-10 lg:pb-20">
		<div class="overflow-hidden rounded-lg border border-[#99a1af] bg-white">
			<div class="flex w-full bg-[#00598a] text-lg font-bold text-white">
				<div class="w-[140px] shrink-0 px-3 py-2"><?php esc_html_e( 'エラーコード', 'gd-aircon-repair' ); ?></div>
				<div class="min-w-0 flex-1 px-3 py-2"><?php esc_html_e( '症状', 'gd-aircon-repair' ); ?></div>
			</div>

			<?php foreach ( $error_rows as $index => $row ) : ?>
				<?php
				$row_bg = ( 0 === $index % 2 ) ? 'bg-white' : 'bg-slate-50';
				$has_detail = ! empty( $row['detail'] );
				?>
				<div class="flex w-full flex-col border-t border-[#99a1af] lg:flex-row">
					<div class="<?php echo esc_attr( $row_bg ); ?> flex w-full shrink-0 items-center justify-center px-2 py-2 lg:w-[140px]">
						<p class="text-xl font-bold text-[#00598a]"><?php echo esc_html( $row['code'] ); ?></p>
					</div>

					<div class="<?php echo esc_attr( $row_bg ); ?> min-w-0 flex-1 border-t border-[#99a1af] lg:border-l lg:border-t-0">
						<details class="group" <?php echo ! empty( $row['open'] ) ? 'open' : ''; ?>>
							<summary class="flex cursor-pointer list-none items-start gap-2 p-2 [&::-webkit-details-marker]:hidden">
								<div class="min-w-0 flex-1 text-base leading-[1.75] text-[#364153]">
									<?php
									if ( is_array( $row['summary'] ) ) {
										foreach ( $row['summary'] as $si => $line ) {
											echo '<p class="' . ( $si > 0 ? 'mt-0 ' : '' ) . 'mb-0">' . esc_html( $line ) . '</p>';
										}
									} else {
										echo '<p class="mb-0">' . esc_html( $row['summary'] ) . '</p>';
									}
									?>
								</div>
								<span class="relative mt-0.5 inline-flex h-6 w-6 shrink-0 items-center justify-center p-1" aria-hidden="true">
									<img class="group-open:hidden" src="<?php echo esc_url( $icon_plus ); ?>" alt="" width="24" height="24">
									<img class="hidden group-open:block" src="<?php echo esc_url( $icon_minus ); ?>" alt="" width="24" height="24">
								</span>
							</summary>

							<?php if ( $has_detail ) : ?>
								<div class="border-t border-[#99a1af] px-4 pb-3 pt-0">
									<div class="mt-2 space-y-3 rounded border border-[#99a1af] bg-white px-4 py-3 text-sm leading-[1.75] text-[#364153]">
										<?php
										$intro_lines = $row['detail']['intro'];
										if ( ! is_array( $intro_lines ) ) {
											$intro_lines = array( $intro_lines );
										}
										foreach ( $intro_lines as $intro_line ) {
											echo '<p class="mb-0">' . esc_html( $intro_line ) . '</p>';
										}
										?>

										<div>
											<p class="mb-1 text-base font-bold text-[#00598a]"><?php esc_html_e( 'よくある原因', 'gd-aircon-repair' ); ?></p>
											<ul class="list-disc space-y-1 pl-5">
												<?php foreach ( $row['detail']['causes'] as $cause ) : ?>
													<li>
														<?php echo esc_html( $cause['title'] ); ?>
														<br>
														<?php echo esc_html( '　' . $cause['text'] ); ?>
													</li>
												<?php endforeach; ?>
											</ul>
										</div>

										<div>
											<p class="mb-1 text-base font-bold text-[#00598a]"><?php esc_html_e( '確認事項', 'gd-aircon-repair' ); ?></p>
											<ol class="list-decimal space-y-1 pl-5">
												<?php foreach ( $row['detail']['checks'] as $check ) : ?>
													<li><?php echo esc_html( $check ); ?></li>
												<?php endforeach; ?>
											</ol>
										</div>

										<div>
											<p class="mb-1 text-base font-bold text-[#00598a]"><?php esc_html_e( '注意事項', 'gd-aircon-repair' ); ?></p>
											<p><?php echo esc_html( $row['detail']['notice'] ); ?></p>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</details>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
</div>

<?php
get_footer();
