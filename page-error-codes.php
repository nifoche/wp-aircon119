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

$assets = get_template_directory_uri() . '/assets/images/error-codes/';
$hero_texture_url = $assets . 'e55f40f59b1f786159e5bc3341126f1ca3a06460.png';

$breadcrumb_parent_url = home_url( '/error-codes/' );
$breadcrumb_parent_is_current = ( trailingslashit( $breadcrumb_parent_url ) === trailingslashit( (string) get_permalink() ) );

$brand_logos = array(
	array(
		'label'  => __( 'ダイキン', 'gd-aircon-repair' ),
		'url'    => home_url( '/error-codes/' ),
		'active' => true,
		'type'   => 'image',
		'src'    => $assets . 'daikin.webp',
	),
	array(
		'label'  => __( 'パナソニック', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'panasonic.webp',
	),
	array(
		'label'  => __( '三菱重工', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'mitsubishi',
		'src'    => $assets . 'mitsubishi.webp',
	),
	array(
		'label'  => __( '日立', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
		'type'   => 'image',
		'src'    => $assets . 'hitachi.webp',
	),
	array(
		'label'  => __( '三菱電機', 'gd-aircon-repair' ),
		'url'    => '#',
		'active' => false,
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
		'code'    => 'A0',
		'summary' => __( '室内機で保護装置または冷媒漏えい関連の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の外部保護装置作動、または一部機種では冷媒漏えいセンサー検知を示します。現行機でも機種シリーズで意味が分かれます。まずは運転を止め、機種名と発生時の状況を控えてください。ガス検知が疑われる場合は無理に使用せず、改善しないときは点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A1',
		'summary' => __( '室内機でプリント基板マイコン異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機のプリント基板マイコンが正常動作していない状態を示します。現行機では基板不良や外的ノイズが関係します。まずは表示コードと停止したタイミングを控え、再運転を繰り返さないでください。改善しない場合や再発する場合は、室内基板を含む点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A3',
		'summary' => __( '室内機でドレン水位上昇を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはドレンパン内の水位上昇でフロートスイッチが作動した状態を示します。現行機では排水詰まり、ドレンポンプ不良、フロートスイッチ不良などが関係します。まずは運転を止め、周囲への水漏れ有無と発生状況を確認してください。継続使用は避け、改善しない場合は排水系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A6',
		'summary' => __( '室内機でファンモータ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機ファンモータの異常で送風できない状態を示します。現行機ではファンモータ、ハーネス、コネクタ、基板、異物噛み込みが関係します。まずは運転を止め、異音や吹出し不良の有無を控えてください。再運転を繰り返さず、改善しない場合は送風系統の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A7',
		'summary' => __( '室内機でスイングモータ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の水平羽根を動かすスイングモータ系の異常を示します。現行機ではモータ不良、ケーブル接続不良、フラップ機構の噛み込みなどが関係します。まずは羽根の動きや引っ掛かりの有無を確認し、無理に手で動かさないでください。改善しない場合は羽根駆動部の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A8',
		'summary' => __( '室内機で電源電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機側で電源電圧の異常を検知した状態を示します。現行機では定格外電圧、連絡配線の誤配線、瞬時停電による変動などが関係します。まずはブレーカーや周辺機器の電源状況、直前の停電有無を確認してください。改善しない場合は電源・配線系統を含む点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'A9',
		'summary' => __( '室内機で電子膨張弁コイル異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機側の電子膨張弁コイル不良を示します。現行機ではコイル本体、コネクタ接続、室内基板側の不良が関係します。まずは冷えや暖まりの乱れ、停止前後の症状を控えてください。ユーザー側で切り分けしにくいため、改善しない場合は膨張弁系と基板の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'AF',
		'summary' => __( '室内機で排水系の警報を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはドレンポンプ停止条件中にも水位上昇が続き、フロートスイッチが繰り返し作動した警報です。現行機では排水不良やドレンポンプ不良などが関係し、運転は継続する場合があります。まずは水漏れの有無を確認し、表示コードを控えてください。放置せず、早めに点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'AH',
		'summary' => __( '室内機でオプション機器異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは空気清浄ユニット、ストリーマ脱臭、オートクリーンパネルなど室内機オプションの異常を示します。現行機では接続機器側の不良が中心です。まずはどの別売オプションを装着しているかを確認し、表示コードを控えてください。改善しない場合はオプション機器を含む点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'AJ',
		'summary' => __( '室内機で能力設定異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内基板の能力設定に不整合がある状態を示します。現行機では能力設定アダプタの未装着や接続不良、基板不良が関係します。まずは基板交換歴や工事直後かどうかを確認し、表示コードを控えてください。設定系の確認が必要なため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'C1',
		'summary' => __( '室内機で基板間通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機プリント基板とファン用基板の通信異常を示します。現行機ではコネクタ接続不良、基板不良、外的ノイズが関係します。まずは停止前の異音や送風不良の有無を控えてください。ユーザー側での復旧は難しいため、改善しない場合は室内基板系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'C4',
		'summary' => __( '室内機で液管サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内熱交換器の液管温度を検知するサーミスタ異常を示します。現行機ではセンサー本体、コネクタ接続、基板不良が関係します。まずは冷暖房の効きや停止した運転モードを控えてください。センサー系の切り分けが必要なため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'C5',
		'summary' => __( '室内機で熱交換器温度系サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の中間温度またはガス管温度を検知するサーミスタ異常を示します。現行機では機種により対象部位が異なります。まずは機種名と運転モードを控え、冷暖房の効きに異常がないか確認してください。改善しない場合はセンサー系統と基板の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'C6',
		'summary' => __( '室内機で基板間通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは、室内機のプリント基板とファン用プリント基板の通信不具合で停止した状態を示します。現行機では基板の組合せ不具合、能力設定アダプタの接続不備、ファン用基板の型式違いが関係します。まずは基板交換や修理直後かを確認し、無理な再運転は避けてください。改善しない場合は室内基板系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'C9',
		'summary' => __( '室内機で吸込空気サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の吸込温度を検知するサーミスタ異常を示します。現行機ではセンサー本体、コネクタ接続、基板不良が関係します。まずは室温表示や運転停止のタイミングを控えてください。温度検知異常は制御に影響するため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'CC',
		'summary' => __( '室内機で湿度センサー警報を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の湿度センサー異常警報を示します。現行機では湿度センサーや基板不良が関係し、運転は継続する場合があります。まずは除湿制御や湿度表示に乱れがないか確認し、表示コードを控えてください。放置せず、改善しない場合はセンサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'CE',
		'summary' => __( '室内機で輻射・人検知系センサー警報を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは輻射センサー、または人検知・床温度センサー系の警報を示します。現行機ではセンサー本体、ハーネス接続、室内基板不良が関係し、運転は継続する場合があります。まずは関連機能の動作に異常がないか確認してください。改善しない場合はセンサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'CH',
		'summary' => __( '室内機で冷媒漏えいセンサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の冷媒漏えいセンサー自体の異常を示します。現行機ではセンサー不良、ハーネス断線、接続不良、基板不良が関係します。まずは冷媒漏れ検知コードと混同しないよう機種名と表示を控えてください。安全確認を優先し、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'CJ',
		'summary' => __( '室内機でリモコン内サーミスタ警報を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリモコン内部の室内空気サーミスタ異常警報を示します。現行機ではリモコン側センサーや基板不良、ノイズが関係し、運転は継続する場合があります。まずは表示異常や設定温度とのズレを確認してください。改善しない場合はリモコン系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E0',
		'summary' => __( '室外機で保護装置の総合異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機の何らかの保護装置が働いた総合停止を示します。現行機では圧縮機、冷媒系、電磁開閉器、膨張弁、基板、熱交換器汚れなど広い範囲が関係します。まずは運転モードと停止前の症状を控えてください。原因の切り分けが必要なため、再運転を繰り返さず点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E1',
		'summary' => __( '室外機で内外通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機と室外機の通信状態が正常でないため停止した状態を示します。現行機でも店舗・オフィス、ビル用マルチ、設備用で大枠は共通し、基板や連絡線、ノイズが関係します。まずは停電や瞬低の有無、工事直後かを確認してください。改善しない場合は通信系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E3',
		'summary' => __( '室外機で高圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは運転中に高圧圧力が上がりすぎて停止した状態を示します。現行機では冷媒詰まり・過充てん、膨張弁不良、基板不良、熱交換器汚れ、ショートサーキットが関係します。まずは室外機周辺の吸込・吹出しを塞いでいないか確認し、再発する場合は冷媒系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E4',
		'summary' => __( '室外機で低圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは運転中に低圧圧力が下がりすぎて停止した状態を示します。現行機では低圧スイッチまたはセンサー不良、冷媒不足や詰まり、膨張弁不良、閉鎖弁の状態が関係します。まずは工事直後か、バルブ操作履歴がないか確認してください。改善しない場合は冷媒回路の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E5',
		'summary' => __( '室外機で圧縮機過電流を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機圧縮機の過電流により停止した状態を示します。現行機では圧縮機不良、均圧不足、閉鎖弁状態、インバータ基板不良が関係します。まずは停止までの時間や異音の有無を控えてください。圧縮機系の保護動作なので、再運転を繰り返さず点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E6',
		'summary' => __( '室外機で定速圧縮機過電流を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは定速圧縮機の過電流による停止を示します。現行機では圧縮機、膨張弁、室外基板、閉鎖弁状態、熱交換器汚れやショートサーキットが関係します。まずは停止前の運転モードと周囲の通風条件を控えてください。改善しない場合は圧縮機系と冷媒系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E7',
		'summary' => __( '室外機でファンモータ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機ファンモータ不良による停止を示します。現行機ではモータ本体、基板、中継コネクタ接続不良、異物噛み込みが関係します。まずは室外機に異物や異音がないかを確認し、ファンに触れないでください。改善しない場合は送風系統の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E9',
		'summary' => __( '室外機で電子膨張弁コイル異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機側の電子膨張弁コイル不良による停止を示します。現行機では店舗・オフィス、ビル用マルチ、設備用で大枠は共通し、コイル断線やコネクタ抜け、基板不良が関係します。まずは工事・修理直後かを確認し、改善しない場合は膨張弁系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'F3',
		'summary' => __( '室外機で吐出管温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機の吐出管温度が上がりすぎたため停止した状態を示します。現行機では冷媒不足や詰まり、膨張弁不良、サーミスタ不良、熱交換器汚れなどが関係します。まずは室外機周辺の通風や熱交換器汚れの有無を確認してください。再発する場合は冷媒系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'F6',
		'summary' => __( '試運転時に冷媒過充てん判定を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは試運転・チェック運転時に冷媒過充てんと判定して停止した状態を示します。現行機では冷媒量過多や外気・液管・熱交換器サーミスタ異常が関係します。まずは試運転条件と施工状態、冷媒充てん量を確認してください。通常の故障コードとして扱わず、改善しない場合は施工点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'H3',
		'summary' => __( '室外機で高圧スイッチ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは停止時に高圧圧力開閉器の導通がなく、高圧スイッチ異常を検出した状態です。現行機ではスイッチ本体、コネクタ、中継ハーネス、基板が関係します。まずは直前に高圧異常が出ていないかを確認し、表示コードを控えてください。改善しない場合は高圧スイッチ系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'H4',
		'summary' => __( '室外機で低圧スイッチ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは低圧圧力スイッチの不具合を検知した停止状態を示します。現行機ではスイッチ本体、コネクタ、中継ハーネス、基板が関係します。まずは低圧異常コードとの併発履歴がないかを確認してください。センサー系の切り分けが必要なため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'H7',
		'summary' => __( '室外機でファンモータ保護異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機ファンモータの不具合を検知して停止した状態を示します。現行機ではモータ、ハーネスやコネクタ、インバータ基板が関係します。まずはファン停止や異音の有無を確認し、手や工具を近づけないでください。改善しない場合は送風系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'H9',
		'summary' => __( '室外機で外気サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機の外気温度を検知するサーミスタ異常を示します。現行機ではセンサー接続部不良、サーミスタ本体不良、基板不良が関係します。まずは外気温や運転条件とのズレがないかを確認し、表示コードを控えてください。改善しない場合はセンサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J1',
		'summary' => __( '室外機で高圧圧力センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは高圧圧力センサー不良による停止を示します。現行機では高圧・低圧センサーの誤接続、接続部不良、基板不良が関係します。まずは最近の修理や配線変更の有無を確認し、表示コードを控えてください。改善しない場合は圧力センサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J2',
		'summary' => __( '室外機で定速圧縮機用電流センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは定速圧縮機用電流センサーの異常による停止を示します。現行機では電流センサー本体、基板、圧縮機コイル断線、電磁開閉器不良が関係します。まずは起動直後か運転中か発生タイミングを控えてください。改善しない場合は電流検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J3',
		'summary' => __( '室外機で吐出管サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機の吐出管サーミスタ異常による停止を示します。現行機ではサーミスタ本体、コネクタ接続、基板不良が関係します。まずはF3など温度上昇系コードとの併発がないか確認してください。改善しない場合は吐出温度検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J5',
		'summary' => __( '室外機で吸入管サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機の吸入管、またはアキュームレータ入口サーミスタ異常による停止を示します。現行機ではセンサー本体、コネクタ接続、基板不良が関係します。まずは冷え不足や霜付きの有無を控えてください。改善しない場合は吸入温度検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J6',
		'summary' => __( '室外機で熱交換器サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外熱交換器温度を検知するサーミスタ異常による停止を示します。現行機ではセンサー本体、コネクタ接続、基板不良が関係します。まずは室外熱交換器の汚れや通風不良の有無も合わせて確認してください。改善しない場合はセンサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J7',
		'summary' => __( '室外機で熱交換器中間サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機熱交換器の中間サーミスタ異常による停止を示します。現行機ではサーミスタ本体、コネクタ接続、室外基板不良が関係します。まずは停止した運転モードと周囲温度を控えてください。改善しない場合は熱交換器温度検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'J8',
		'summary' => __( '室外機で液管サーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機液管温度を検知するサーミスタ異常による停止を示します。現行機ではサーミスタ本体、コネクタ接続、基板不良が関係します。まずは冷媒配管まわりの直近修理有無を確認してください。改善しない場合は液管温度検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'JA',
		'summary' => __( '室外機で高圧圧力センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは高圧圧力センサー不良による停止を示します。現行機ではセンサー本体、低低圧圧力センサーとの誤接続、接続部不良、基板不良が関係します。まずは工事・修理直後かを確認し、表示コードを控えてください。改善しない場合は圧力センサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'JC',
		'summary' => __( '室外機で低圧圧力センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは低圧圧力センサー不良による停止を示します。現行機ではセンサー本体、誤接続、接続部不良、基板不良が関係します。まずは冷媒不足コードと混同しないよう発生履歴を確認してください。改善しない場合は低圧圧力センサー系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L1',
		'summary' => __( '室外機でインバータ基板異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機インバータ基板の不具合を検知した停止を示します。現行機ではインバータ基板、ファン用インバータ基板、ファンモータ、圧縮機絶縁劣化、ノイズが関係します。まずは停電や雷など外的要因の有無を控えてください。改善しない場合は電装系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L3',
		'summary' => __( '室外機でリアクタサーミスタ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリアクタ表面温度を検知するサーミスタ異常による停止を示します。現行機ではサーミスタ不良、ハーネス外れ、接触不良、インバータ基板不良が関係します。まずは修理直後かどうかを確認し、表示コードを控えてください。改善しない場合は電装系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L4',
		'summary' => __( '室外機でインバータ放熱部過熱を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ基板の放熱フィン温度が上がりすぎて停止した状態を示します。現行機ではフィンサーミスタ不良、基板不良、室外ファン不良、放熱不良が関係します。まずは室外機の通風を妨げていないか確認してください。改善しない場合は電装・送風系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L5',
		'summary' => __( '室外機でインバータ圧縮機過電流を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ圧縮機の過電流検知による停止を示します。現行機では圧縮機本体、圧縮機ハーネス、インバータ基板不良が関係します。まずは起動直後か運転中か発生タイミングを控えてください。圧縮機保護に関わるため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L8',
		'summary' => __( '室外機でインバータ圧縮機過負荷を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ圧縮機の過負荷電流を検知した停止を示します。現行機では圧縮機過負荷、ハーネス接続不良、インバータ基板不良が関係します。まずは長時間運転直後かどうかを確認し、異音の有無を控えてください。改善しない場合は圧縮機系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'L9',
		'summary' => __( '室外機でインバータ圧縮機起動異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ圧縮機の起動が完了しなかったため停止した状態を示します。現行機では冷媒量不適正、通電時間不足、閉鎖弁状態、ハーネス外れなどが関係します。まずは工事直後か通電後6時間未満かを確認してください。改善しない場合は圧縮機系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'LC',
		'summary' => __( '室外機で基板間通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ基板と制御基板の通信不具合による停止を示します。現行機では機内配線不良、基板不良、ファンモータ、ノイズフィルタ、外的ノイズが関係します。まずは停電や雷の有無を確認し、表示コードを控えてください。改善しない場合は電装系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P1',
		'summary' => __( '室外機で電源電圧不平衡の警報を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは三相電源の供給電圧不平衡を検出した警報です。現行機では運転継続の場合もありますが、電源側の異常や主回路コンデンサ、インバータ基板不良が関係します。まずは電源品質に問題がないか確認し、表示コードを控えてください。放置せず、早めに点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P2',
		'summary' => __( '試運転時に冷媒循環阻害を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはチェック運転が中止され、冷媒循環を妨げる要因を検出した状態を示します。現行機では閉鎖弁未全開、ボンベバルブ未開放、吸込・吹出口閉塞、低室温、手順違いが関係します。まずは据付説明書どおりに試運転条件を確認してください。改善しない場合は施工点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P3',
		'summary' => __( '室外機で放熱フィン高温異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはフィンサーマル部の温度が高くなりすぎて停止した状態を示します。現行機ではフィンサーミスタ不良、基板不良、室外ファン不良、熱交換器汚れ、室外ショートサーキットが関係します。まずは室外機の通風と熱交換器の目詰まりを確認してください。改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P4',
		'summary' => __( '室外機で停止中放熱フィン温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機停止中に放熱フィン温度の異常を検知した状態を示します。現行機ではフィンサーミスタ、接続部、基板不良が関係します。まずは発生が連続するか、停止中にも表示が続くかを確認してください。改善しない場合は温度検知系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P8',
		'summary' => __( '自動充てん試運転で凍結防止停止を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは冷媒自動充てん運転中に室内熱交換器の凍結防止のため停止した状態を示します。現行機では通常故障ではなく、自動充てん手順の再実施が前提です。まずは据付説明書の条件を確認し、再度自動充てん運転を行ってください。通常運転で表示が続く場合は施工点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'P9',
		'summary' => __( '自動充てん試運転時の案内表示です。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは試運転・冷媒自動充てん運転時の表示で、機器不具合を直ちに示すものではありません。現行機では据付説明書どおりの作業確認が前提です。まずは施工手順と運転条件を確認してください。通常運転で再表示する、または施工条件に問題がなければ点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'PA',
		'summary' => __( '自動充てん試運転時の案内表示です。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは試運転・冷媒自動充てん運転時の表示で、機器不具合を直ちに示すものではありません。現行機では据付説明書に従った作業継続が前提です。まずは施工手順と設定条件を確認してください。通常運転でも表示が続く場合や判断が難しい場合は、施工・点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'PE',
		'summary' => __( '自動充てん試運転時の案内表示です。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは試運転・冷媒自動充てん運転時の表示で、機器不具合ではないと公式案内されています。現行機では据付説明書の指示どおりに作業を進める場面の表示です。まずは施工手順と条件を確認してください。通常運転で再発する、または施工条件に問題がなければ点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'PJ',
		'summary' => __( '室外機で基板能力設定・組合せ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機プリント基板の能力設定不良、または基板組合せ不良を示します。現行機では基板交換後の能力設定アダプタ未接続や組合せ不備、基板不良が関係します。まずは修理直後かどうかを確認してください。設定確認が必要なため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U0',
		'summary' => __( 'システムで冷媒循環不足を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは、システム全体の冷媒循環量不足を示します。現行機では冷媒不足や詰まり、閉鎖弁の開け忘れ、低圧圧力センサー不良、吸入管サーミスタ・熱交換器サーミスタ不良、冷媒配管の誤接続などが関係します。まずは工事直後か、冷暖房の効きが急に落ちていないかを確認してください。改善しない場合は冷媒系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U1',
		'summary' => __( 'システムで逆相・欠相を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは三相電源の逆相または欠相を検知して停止した状態を示します。現行機では電源不平衡、ブレーカ不良、基板不良、ノイズが関係します。まずは電源工事直後か停電後かを確認してください。電源条件の確認が必要なため、改善しない場合は点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U2',
		'summary' => __( '室外機で電源電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータ電源回路の不足電圧または過電圧を検知して停止した状態を示します。現行機では電圧異常、欠相、電磁接触器やファンモータ不良、瞬時停電が関係します。まずは停電や電圧変動の有無を確認してください。改善しない場合は電源・電装系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U3',
		'summary' => __( '試運転未完了を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはチェック運転、いわゆる試運転が未完了のため運転できない状態を示します。現行機では施工手順上の未完了が主因です。まずは据付説明書に沿ってチェック運転を完了したか確認してください。通常の故障と決めつけず、改善しない場合は施工・点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U4',
		'summary' => __( 'システムで室内外通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機と室外機の通信不具合により停止した状態を示します。現行機では内外基板、室外ファン、連絡線接続、別売品配線、外的ノイズが関係します。まずは停電や工事直後かどうかを確認し、表示コードを控えてください。改善しない場合は通信系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U5',
		'summary' => __( '室内機でリモコン通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機とワイヤードリモコンの通信不具合により停止した状態を示します。現行機では配線不備、室内基板不良、リモコン不良、ノイズが関係します。まずはリモコン表示の乱れや直近の配線作業有無を確認してください。改善しない場合はリモコン通信系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U8',
		'summary' => __( '室内機で主従リモコン通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはメインリモコンとサブリモコン間の通信不具合による停止を示します。現行機ではリモコン不良、基板不良、2リモコン設定未実施、ノイズが関係します。まずは2リモコン構成かどうかと設定変更有無を確認してください。改善しない場合はリモコン系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'U9',
		'summary' => __( '室内機で同一系統の他室内機異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは同一系統内の別の室内機で発生した異常を検出して停止した状態を示します。現行機ではU4、U5、A9など他室内機側のコード確認が先になります。まずは同一系統の他室内機に別のエラー表示がないか確認してください。根本原因側の機器を特定し、点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'UA',
		'summary' => __( 'システムで機器組合せ・設定異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機と室外機の組合せ不適合、または台数設定不一致の可能性を示します。現行機では同時運転マルチ設定、NP端子配線、対応機種違い、基板交換後の再設定が関係します。まずは工事・修理直後かを確認してください。改善しない場合は設定・接続条件の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'UC',
		'summary' => __( 'システムで集中アドレス重複を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは集中制御機器用の集中アドレス設定重複の警告を示します。現行機では個別リモコン運転が継続する場合がありますが、集中制御からは操作できません。まずは最近の設定変更や増設有無を確認してください。放置せず、改善しない場合は集中制御設定の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'UE',
		'summary' => __( 'システムで集中制御通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機と集中制御機器の通信不具合を示します。現行機では個別リモコン運転が継続する場合がありますが、集中管理からは操作できません。まずは室内機や室外機の電源遮断、集中管理機器との配線状態を確認してください。改善しない場合は集中制御系の点検修理を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'UF',
		'summary' => __( 'システムで系統未設定またはチェック運転異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは機種により、系統未設定で停止した状態、またはチェック運転時の不具合停止を示します。現行機では配管接続、連絡配線、閉鎖弁状態、室内基板が関係します。まずは工事直後か、設定未完了かを確認してください。改善しない場合は施工・点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
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

												<?php if ( ! empty( $row['detail']['causes'] ) ) : ?>
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
												<?php endif; ?>

												<?php if ( ! empty( $row['detail']['checks'] ) ) : ?>
												<div>
													<p class="mb-1 text-base font-bold text-[#00598a]"><?php esc_html_e( '確認事項', 'gd-aircon-repair' ); ?></p>
													<ol class="list-decimal space-y-1 pl-5">
														<?php foreach ( $row['detail']['checks'] as $check ) : ?>
															<li><?php echo esc_html( $check ); ?></li>
														<?php endforeach; ?>
													</ol>
												</div>
												<?php endif; ?>

												<?php if ( ! empty( $row['detail']['notice'] ) ) : ?>
												<div>
													<p class="mb-1 text-base font-bold text-[#00598a]"><?php esc_html_e( '注意事項', 'gd-aircon-repair' ); ?></p>
													<p><?php echo esc_html( $row['detail']['notice'] ); ?></p>
												</div>
												<?php endif; ?>
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
