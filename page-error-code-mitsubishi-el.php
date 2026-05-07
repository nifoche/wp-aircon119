<?php
/**
 * 固定ページテンプレート: エラーコード（三菱電機）
 * URL 例: /error-codes/mitsubishi-el/
 * Template Name: エラーコード（三菱電機）
 *
 * @package gd-aircon-repair
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$assets = get_template_directory_uri() . '/assets/images/error-codes/';
$hero_texture_url = $assets . 'e55f40f59b1f786159e5bc3341126f1ca3a06460.png';

$breadcrumb_parent_url = home_url( '/error-codes/' );
$breadcrumb_parent_is_current = ( trailingslashit( $breadcrumb_parent_url ) === trailingslashit( (string) get_permalink() ) );

$brand_logos = array(
	array(
		'label'  => __( 'ダイキン', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/' ),
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'daikin.webp',
	),
	array(
		'label'  => __( 'パナソニック', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/panasonic/' ),
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'panasonic.webp',
	),
	array(
		'label'  => __( '三菱重工', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/mitsubishi/' ),
		'active' => false,
		'type'   => 'mitsubishi',
		'src'    => $assets . 'mitsubishi.webp',
	),
	array(
		'label'  => __( '日立', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/hitachi/' ),
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'hitachi.webp',
	),
	array(
		'label'  => __( '三菱電機', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/mitsubishi-el/' ),
		'active' => true,
		'type'   => 'image',
		'src'    => $assets . 'mitsubishielectric.webp',
	),
	array(
		'label'  => '',
		'url'    => '',
		'active' => false,
		'type'   => 'empty',
	),
);

$error_rows = array(
	array(
		'code'    => 'E0',
		'summary' => __( 'リモコン通信の受信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'リモコン通信の受信異常を示すコードです。リモコン線の接触不良、主従設定不備、配線条件不適合、ノイズ混入、送受信回路不良などで表示されます。まずは電源を5分以上遮断して再投入し、改善しない場合はリモコン線や基板の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E1',
		'summary' => __( 'リモコン基板異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'リモコン基板異常を示すコードです。リモコン側の基板不良が中心で、表示が続く場合はリモコン交換が必要になることがあります。まずは表示の継続有無を確認し、運転再開できない場合や再発する場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E4',
		'summary' => __( 'リモコン通信の受信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'リモコン通信の受信異常を示すコードです。リモコン線の接触不良、主従設定不備、配線条件不適合、ノイズ混入、送受信回路不良などで表示されます。まずは電源を5分以上遮断して再投入し、改善しない場合はリモコン線や基板の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E6',
		'summary' => __( '室内外通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ユニットと室外ユニット間の通信異常を示すコードです。内外接続線の接触不良・短絡・誤配線、送受信回路不良、ノイズ混入などが候補です。まずは配線の外れや誤配線がないかを確認し、運転を入れ直しても改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P1',
		'summary' => __( '室内機の吸込みセンサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内機の吸込みセンサー異常を示すコードです。サーミスタ特性不良、コネクタ接触不良、配線断線、室内基板不良などで表示されます。まずは運転を入れ直して再発有無を確認し、改善しない場合はセンサー配線や基板まわりの点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P2',
		'summary' => __( '室内機の液管センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内機の液管センサー異常を示すコードです。サーミスタ不良、コネクタ接触不良、配線断線、冷媒回路不良、室内基板不良などで表示されます。まずは運転を入れ直して再発有無を確認し、改善しない場合はセンサー配線や冷媒回路を含めた点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P5',
		'summary' => __( '室内機のドレン排水異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内機のドレン排水異常を示すコードです。ドレンポンプ故障、配管詰まり、ドレンセンサーやフロートスイッチ不良、コネクタ接触不良、基板不良などで表示されます。まずは排水不良や詰まりがないかを確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P6',
		'summary' => __( '凍結保護または過昇保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷房時は凍結保護、暖房時は過昇保護の作動を示すコードです。フィルター目詰まり、ショートサイクル、室内ファン不良、冷媒過充填、冷媒回路詰まりなどで表示されます。まずはフィルターや吸込・吹出口周辺を確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P8',
		'summary' => __( '配管温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '配管温度異常を示すコードです。室温と熱交換器部の温度差が小さいときに表示され、冷媒不足、サーミスタ不良、サーミスタホルダー外れ、逆接続、バルブ開度不良などが候補です。まずは運転を止めて再投入し、改善しない場合は配管・配線・冷媒回路の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P9',
		'summary' => __( '室内機の二相管センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内機の二相管センサー異常を示すコードです。サーミスタ特性不良、コネクタ接触不良、配線断線、冷媒回路不良、室内基板不良などで表示されます。まずは運転を入れ直して再発有無を確認し、改善しない場合はセンサー配線や冷媒回路を含めた点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'U1',
		'summary' => __( '高圧圧力異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '高圧圧力異常を示すコードです。冷房時は室外ファン不良やショートサイクル、熱交換器汚れ、暖房時はフィルター目詰まりや室内ファン不良、ほかに配管詰まりや高圧側回路不良でも表示されます。まずはフィルターや周辺の通風を確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'U2',
		'summary' => __( '吐出温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機の吐出温度異常を示すコードです。フィルター目詰まり、冷媒不足による過熱運転、サーミスタ不良、基板不良、電子膨張弁不良、冷媒回路詰まりなどで表示されます。まずはフィルターや通風状態を確認し、改善しない場合は冷媒回路を含めた点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'U6',
		'summary' => __( '圧縮機の過電流遮断またはパワーモジュール異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機の過電流遮断（過負荷）または電源基板のパワーモジュール異常を示すコードです。電源電圧の低下、圧縮機配線の緩みや外れ、圧縮機不良、室外基板不良、ストップバルブ閉止などが候補です。まずは運転を入れ直して再発有無を確認し、改善しない場合は圧縮機・基板・配線を含む点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'U8',
		'summary' => __( '室外ファンモーター回転数異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ファンモーター回転数の異常を示すコードです。DCファンモーター不良、コネクタ外れ、室外基板不良、ショートサイクルによる保護、外風による回転妨害などで表示されます。まずは吹出口・吸込口周辺を確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'U9',
		'summary' => __( '過電圧または不足電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '過電圧・不足電圧異常を示すコードです。電源電圧低下、三相機種のT相欠相、圧縮機配線の外れや地絡、52C不良、室外基板不良などで表示されます。まずは電源条件や配線の異常有無を確認し、運転を入れ直しても改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'UF',
		'summary' => __( '圧縮機の電流遮断（ロック）を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機の電流遮断（ロック）を示すコードです。電源電圧低下、圧縮機配線の緩みやテレコ、機種設定違い、圧縮機不良、室外パワー基板不良、バルブ閉などで表示されます。まずは運転を入れ直し、改善しない場合は圧縮機や電源系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1102',
		'summary' => __( '圧縮機の温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機まわりの温度異常を示すコードです。機種により吐出温度異常として扱う場合と、圧縮機シェル温度異常として扱う場合があります。ガス漏れ・ガス不足、過負荷運転、電子膨張弁不良、室内ファン不良、温度検知不良などが候補です。まずは運転を入れ直して再発有無を確認し、改善しない場合は冷媒回路や温度検知回路を含む点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1302',
		'summary' => __( '室外ユニットの高圧圧力異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニットの高圧圧力異常を示すコードです。圧力センサーや圧力開閉器不良、電磁弁・電子膨張弁不良、冷媒不足のほか、冷房時の室外ショートサイクルや暖房時の室内フィルター目詰まりなどでも表示されます。まずはフィルターや熱交換器の汚れ、通風を確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1500',
		'summary' => __( '室外ユニットの冷媒過充填異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニットの冷媒過充填異常を示すコードです。冷房時の室内フィルター目詰まりやショートサイクル、暖房時の室外熱交換器汚れのほか、施工後の冷媒過充填、サーミスタ検知不良、電子膨張弁不良などで表示されます。まずはフィルターと通風を確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '2502',
		'summary' => __( '室内ユニットのドレン排水異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ユニットのドレン排水異常を示すコードです。ドレンポンプ故障、ドレン配管詰まり、ドレンセンサーへの水滴付着、フロートスイッチ不良、室内基板不良などで表示されます。まずは排水不良や詰まりがないかを確認し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '4250',
		'summary' => __( 'パワーモジュール異常または圧縮機過電流遮断を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニットのパワーモジュール異常または圧縮機過電流遮断を示すコードです。電源電圧異常、インバータ出力異常、圧縮機配線不良、圧縮機不良、室内外ファン異常、室外基板不良、バルブ閉などが候補です。まずは運転を入れ直し、改善しない場合は室外電装系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5102',
		'summary' => __( '温度センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '温度センサー異常を示すコードです。室内または室外ユニット内の温度センサーがショートまたはオープンを検知した場合に表示されます。サーミスタ不良、コネクタ接触不良、配線断線、室内外基板の検知回路不良などが候補です。まずは運転を入れ直し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5103',
		'summary' => __( '温度センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '温度センサー異常を示すコードです。室内または室外ユニット内の温度センサーがショートまたはオープンを検知した場合に表示されます。サーミスタ不良、コネクタ接触不良、配線断線、室内外基板の検知回路不良などが候補です。まずは運転を入れ直し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5105',
		'summary' => __( '室外ユニットの温度センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニットの温度センサー異常を示すコードです。室外機内部の温度センサーがショートまたはオープンを検知した場合に表示されます。サーミスタ不良、コネクタ接触不良、配線断線、室外基板の検知回路不良などが候補です。まずは運転を入れ直し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5301',
		'summary' => __( '電流センサーまたは回路異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニット内の電流センサーまたはその回路の異常を示すコードです。ACCTセンサーまたはDCCTセンサーが異常値を検出した場合に表示され、インバータ出力欠相、圧縮機不良、電流センサー不良、インバータ基板不良、コネクタ接続不良などが候補です。まずは運転を入れ直して再発有無を確認し、改善しない場合は電流検知回路やインバータ基板の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6607',
		'summary' => __( 'ACK無しエラーを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'ACK無しエラーを示すコードです。通信信号を送信したあと相手から返事が返らない場合に出ます。伝送線やリモコン線の接触不良、ノイズ混入、室内外基板不良、リモコン不良、集中管理用伝送線や給電ユニットの異常などが候補です。まずは室内外電源を5分以上遮断して再投入し、改善しない場合は伝送系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6831',
		'summary' => __( 'MA通信の受信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'MA通信の受信異常を示すコードです。MAリモコンと室内ユニット間の通信が正常に行われていないときに表示されます。リモコン線の接触不良、全リモコンの従設定、配線条件不適合、ノイズ混入、送受信回路不良などが候補です。まずは室内外電源を5分以上遮断して再投入し、改善しない場合は伝送系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6832',
		'summary' => __( 'MA通信の送信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'MA通信の送信異常を示すコードです。MAリモコンと室内ユニット間の通信が正常に行われていないときに表示されます。主リモコンの重複設定、室内ユニットのアドレス重複、リモコン線の接触不良、ノイズ混入、配線条件不適合、送受信回路不良などが候補です。まずは室内外電源を5分以上遮断して再投入し、改善しない場合は伝送系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6833',
		'summary' => __( 'MA通信の送信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'MA通信の送信異常を示すコードです。MAリモコンと室内ユニット間の通信が正常に行われていないときに表示されます。主リモコンの重複設定、室内ユニットのアドレス重複、リモコン線の接触不良、ノイズ混入、配線条件不適合、送受信回路不良などが候補です。まずは室内外電源を5分以上遮断して再投入し、改善しない場合は伝送系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6834',
		'summary' => __( 'MA通信の受信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'MA通信の受信異常を示すコードです。MAリモコンと室内ユニット間の通信が正常に行われていないときに表示されます。リモコン線の接触不良、全リモコンの従設定、配線条件不適合、通電中のリモコン着脱、ノイズ混入、送受信回路不良などが候補です。まずは室内外電源を5分以上遮断して再投入し、改善しない場合は伝送系の点検修理を依頼してください。', 'gd-aircon-repair' ) ) ),
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
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( '三菱電機', 'gd-aircon-repair' ); ?></span>
			</nav>

			<h1 class="max-w-[920px] text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '三菱電機のエラーコード一覧', 'gd-aircon-repair' ); ?>
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
					<span class="block w-full [&_img]:h-auto [&_img]:w-full [&_img]:object-contain">
						<img src="<?php echo esc_url( $brand['src'] ); ?>" alt="<?php echo esc_attr( $brand['label'] ); ?>" loading="lazy" width="120" height="48">
					</span>
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
				$row_control_id = 'error-code-row-' . (int) $index;
				?>
				<div class="flex w-full flex-col border-t border-[#99a1af] lg:flex-row">
					<div class="<?php echo esc_attr( $row_bg ); ?> flex w-full shrink-0 items-center justify-center px-2 py-2 lg:w-[140px]">
						<p class="text-xl font-bold text-[#00598a]"><?php echo esc_html( $row['code'] ); ?></p>
					</div>

					<div class="<?php echo esc_attr( $row_bg ); ?> min-w-0 flex-1 border-t border-[#99a1af] lg:border-l lg:border-t-0">
						<div class="group">
							<input
								class="sr-only"
								type="checkbox"
								id="<?php echo esc_attr( $row_control_id ); ?>"
								<?php echo ! empty( $row['open'] ) ? 'checked' : ''; ?>
							>
							<label class="flex cursor-pointer list-none items-start gap-2 p-2" for="<?php echo esc_attr( $row_control_id ); ?>">
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
								<span class="mr-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00598a] group-has-[input:checked]:hidden" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
								</span>
								<span class="mr-1 hidden h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#00598a] group-has-[input:checked]:flex" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 h-auto" viewBox="0 0 24 24"><title>minus</title><path d="M19,13H5V11H19V13Z" /></svg>
								</span>
							</label>

							<?php if ( $has_detail ) : ?>
								<div class="grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-out group-has-[input:checked]:grid-rows-[1fr]">
									<div class="min-h-0 overflow-hidden">
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
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
</div>

<?php
get_footer();
