<?php
/**
 * フロントページ（静的ページが設定されている場合）
 *
 * @package gd-aircon-repair
 */

get_header();
?>

<section
	class="relative overflow-hidden bg-[#006ca2] pb-16 pt-24 text-white lg:pb-20 lg:pt-32"
	style="background-image: linear-gradient(rgba(0, 108, 162, 0.78), rgba(0, 108, 162, 0.78)), url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/top/fv.jpg' ); ?>'); background-size: cover; background-position: center;"
>
	<div class="mx-auto flex w-full max-w-[1280px] flex-col gap-10 px-4 lg:flex-row lg:items-start lg:gap-12 lg:px-6">
		<div class="w-full lg:max-w-[760px]">
			<p class="mb-6 inline-flex rounded-sm bg-[#7d0005] px-4 py-1 text-base font-bold leading-6 text-white">
				<?php esc_html_e( '調査・見積り無料!', 'gd-aircon-repair' ); ?>
			</p>
			<h1 class="text-5xl font-bold leading-tight lg:text-5xl">
				<?php esc_html_e( '業務用エアコンの工事・修理', 'gd-aircon-repair' ); ?><br>
				<?php esc_html_e( 'お任せください', 'gd-aircon-repair' ); ?>
			</h1>
			<p class="mt-6 text-xl font-medium leading-7 text-white/90">
				<?php esc_html_e( '即日・土日も対応！ 他社で断られた難工事も一度ご相談ください。', 'gd-aircon-repair' ); ?><br>
				<?php esc_html_e( 'ルームエアコン1台から大型施設の大規模工事(集中管理システム)まで対応しています。', 'gd-aircon-repair' ); ?>
			</p>
			<div class="mt-6 flex flex-wrap gap-4 pt-2">
				<div class="inline-flex items-center gap-2 rounded bg-white/10 px-4 py-3 backdrop-blur-sm">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none" aria-hidden="true" focusable="false">
						<path d="M8 0L0 3V8.4C0 13.2 3.28 17.68 8 20C12.72 17.68 16 13.2 16 8.4V3L8 0ZM8 2.14L14 4.39V8.4C14 12.2 11.57 15.95 8 17.94C4.43 15.95 2 12.2 2 8.4V4.39L8 2.14Z" fill="#FE9A00"/>
					</svg>
					<span class="text-base font-medium leading-6 text-white"><?php esc_html_e( '安心の特徴1', 'gd-aircon-repair' ); ?></span>
				</div>
				<div class="inline-flex items-center gap-2 rounded bg-white/10 px-4 py-3 backdrop-blur-sm">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none" aria-hidden="true" focusable="false">
						<path d="M9 0.5C4.03 0.5 0 4.53 0 9.5C0 14.47 4.03 18.5 9 18.5C13.97 18.5 18 14.47 18 9.5C18 4.53 13.97 0.5 9 0.5ZM9 16.5C5.14 16.5 2 13.36 2 9.5C2 5.64 5.14 2.5 9 2.5C12.86 2.5 16 5.64 16 9.5C16 13.36 12.86 16.5 9 16.5ZM8 5.5H10V10.5H8V5.5ZM8 12.5H10V14.5H8V12.5Z" fill="#FE9A00"/>
					</svg>
					<span class="text-base font-medium leading-6 text-white"><?php esc_html_e( '安心の特徴2', 'gd-aircon-repair' ); ?></span>
				</div>
			</div>
		</div>

		<div class="relative w-full rounded-lg bg-white p-6 text-slate-900 shadow-[0px_25px_50px_-12px_rgba(0,0,0,0.25)] lg:w-[410px]">
			<div class="mb-4 flex items-end justify-center gap-1 border-b-4 border-[#fe9a00] pb-3 text-center">
				<span class="text-2xl font-bold leading-8 text-[#00598a]"><?php esc_html_e( 'WEBでカンタン', 'gd-aircon-repair' ); ?></span>
				<span class="text-4xl font-black leading-[1] text-[#fe9a00]"><?php esc_html_e( '無料', 'gd-aircon-repair' ); ?></span>
				<span class="text-2xl font-bold leading-8 text-[#00598a]"><?php esc_html_e( 'お見積り', 'gd-aircon-repair' ); ?></span>
			</div>
			<form class="space-y-4" action="<?php echo esc_url( apply_filters( 'gd_aircon_repair_quote_url', home_url( '/' ) ) ); ?>" method="get">
				<input class="w-full rounded-sm border-2 border-[#c2c6d3] px-3 py-2 text-base leading-6 text-slate-700 placeholder:text-slate-500" type="text" name="name" placeholder="<?php esc_attr_e( 'お名前', 'gd-aircon-repair' ); ?>">
				<input class="w-full rounded-sm border-2 border-[#c2c6d3] px-3 py-2 text-base leading-6 text-slate-700 placeholder:text-slate-500" type="tel" name="phone" placeholder="<?php esc_attr_e( '電話番号', 'gd-aircon-repair' ); ?>">
				<textarea class="h-24 w-full rounded-sm border-2 border-[#c2c6d3] px-3 py-2 text-base leading-6 text-slate-700 placeholder:text-slate-500" name="message" placeholder="<?php esc_attr_e( 'お問い合わせ内容', 'gd-aircon-repair' ); ?>"></textarea>
				<button class="w-full rounded-sm bg-[#fe9a00] px-4 py-4 text-2xl font-bold leading-7 text-white shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] transition hover:bg-[#e78d00]" type="submit">
					<?php esc_html_e( '送信する', 'gd-aircon-repair' ); ?>
				</button>
			</form>
		</div>
	</div>
</section>


<?php
$symptom_cards = array(
	array(
		'title' => __( '水漏れ', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/water-leak/01.jpg',
		'url'   => home_url( '/symptoms/water-leak/' ),
	),
	array(
		'title' => __( '冷えない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/not-cooling/01.jpg',
		'url'   => home_url( '/symptoms/not-cooling/' ),
	),
	array(
		'title' => __( '異臭がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/bad-smell/01.jpg',
		'url'   => home_url( '/symptoms/bad-smell/' ),
	),
	array(
		'title' => __( '異音がする', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/strange-noise/01.jpg',
		'url'   => home_url( '/symptoms/strange-noise/' ),
	),
	array(
		'title' => __( '暖まらない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/not-heating/01.jpg',
		'url'   => home_url( '/symptoms/not-heating/' ),
	),
	array(
		'title' => __( '途中で止まる', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/stops-unexpectedly/01.jpg',
		'url'   => home_url( '/symptoms/stops-unexpectedly/' ),
	),
	array(
		'title' => __( '霜・氷がつく', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/frost-ice/01.jpg',
		'url'   => home_url( '/symptoms/frost-ice/' ),
	),
	array(
		'title' => __( '風が出ない', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/symptoms/no-airflow/01.jpg',
		'url'   => home_url( '/symptoms/no-airflow/' ),
	),
);

$ac_types_cards = array(
	array(
		'title' => __( '天井カセット型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tenkase.jpg',
		'url'   => home_url( '/types/tenkase/' ),
	),
	array(
		'title' => __( '天井吊型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/tentsuri.jpg',
		'url'   => home_url( '/types/tentsuri/' ),
	),
	array(
		'title' => __( '床置型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/yukaoki.jpg',
		'url'   => home_url( '/types/yukaoki/' ),
	),
	array(
		'title' => __( '壁掛型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/kabekake.jpg',
		'url'   => home_url( '/types/kabekake/' ),
	),
	array(
		'title' => __( 'ビルトイン', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/builtin.jpg',
		'url'   => home_url( '/types/builtin/' ),
	),
	array(
		'title' => __( '天井埋込ダクト型', 'gd-aircon-repair' ),
		'image' => get_template_directory_uri() . '/assets/images/types/duct.jpg',
		'url'   => home_url( '/types/duct/' ),
	),
);
?>

<section class="bg-white py-16 lg:py-[60px]">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-6">
		<div class="mb-8 flex flex-col items-center gap-3 lg:mb-12">
			<p class="text-center text-[32px] font-bold leading-[1.2] tracking-[-0.03em] text-[#00598a]">
				<?php esc_html_e( 'こんなお困りごとはありませんか？', 'gd-aircon-repair' ); ?>
			</p>
			<h2 class="text-center text-[40px] font-bold leading-[1.15] tracking-[-0.03em] text-[#00598a] lg:text-[56px]">
				<?php esc_html_e( '業務用エアコン修理会社が解決します', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="mt-2 block h-2 w-24 bg-[#fe9a00]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
			<?php foreach ( $symptom_cards as $symptom_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.15),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $symptom_card['url'] ); ?>"
				>
					<div class="h-[201px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $symptom_card['image'] ); ?>"
							alt="<?php echo esc_attr( $symptom_card['title'] ); ?>"
							loading="lazy"
							width="290"
							height="201"
						>
					</div>
					<div class="flex min-h-[60px] items-center justify-center px-4 py-3">
						<p class="text-center text-[32px] font-bold leading-[1.2] text-[#00598a] lg:text-[20px]">
							<?php echo esc_html( $symptom_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#0084d1] px-6 py-3 text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]"
				href="<?php echo esc_url( home_url( '/symptoms/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての症状を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<section class="bg-white py-16 lg:py-20">
	<div class="mx-auto w-full max-w-[1280px] px-4 lg:px-10">
		<div class="mb-8 flex flex-col items-center gap-5 lg:mb-12">
			<h2 class="text-center text-[36px] font-bold leading-[1.1] text-[#00598a]">
				<?php esc_html_e( '業務用エアコンの種類', 'gd-aircon-repair' ); ?>
			</h2>
			<span class="block h-2 w-24 bg-[#fe9a00]" aria-hidden="true"></span>
		</div>

		<div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
			<?php foreach ( $ac_types_cards as $type_card ) : ?>
				<a
					class="block overflow-hidden rounded-lg bg-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.16),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:-translate-y-0.5"
					href="<?php echo esc_url( $type_card['url'] ); ?>"
				>
					<div class="h-[280px] overflow-hidden">
						<img
							class="h-full w-full object-cover"
							src="<?php echo esc_url( $type_card['image'] ); ?>"
							alt="<?php echo esc_attr( $type_card['title'] ); ?>"
							loading="lazy"
							width="420"
							height="280"
						>
					</div>
					<div class="p-6">
						<p class="text-[32px] font-bold leading-[1.2] text-[#00598a] lg:text-[24px]">
							<?php echo esc_html( $type_card['title'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="mt-10 flex items-center justify-center lg:mt-12">
			<a
				class="inline-flex items-center gap-3 rounded bg-[#0084d1] px-6 py-3 text-2xl font-bold text-white no-underline shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]"
				href="<?php echo esc_url( home_url( '/types/' ) ); ?>"
			>
				<span><?php esc_html_e( 'すべての種類を見る', 'gd-aircon-repair' ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" aria-hidden="true" focusable="false">
					<path d="M10 18H26" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<path d="M19 11L26 18L19 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
