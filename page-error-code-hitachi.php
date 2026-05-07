<?php
/**
 * 固定ページテンプレート: エラーコード（日立）
 * URL 例: /error-codes/hitachi/
 * Template Name: エラーコード（日立）
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

$error_rows = array(
	array(
		'code'    => '1',
		'summary' => __( '室内側の保護装置が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の保護装置が働いた状態です。高水位や水受けの異常、配管異常によるフロートスイッチ作動、ドレンポンプ異常などで表示されます。まずは排水不良やドレンまわりの詰まり、水受けの異常がないか確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '2',
		'summary' => __( '室外側の保護装置が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の保護装置が働いた状態です。高圧遮断装置の作動や、冷房時の室外ファンモーターのロックなどで表示されます。まずは運転を止め、室外機まわりの通風障害やファンの引っ掛かりがないか確認し、再表示する場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '3',
		'summary' => __( '室内外の伝送異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内外の伝送が正常にできていない状態です。操作回路配線の端子ゆるみ・断線・誤配線、室外側の電源断やヒューズ溶断、冷媒系統設定の不一致、基板やインバーター側の異常などで表示されます。まずは配線外れや電源状態を確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '4',
		'summary' => __( '室外側の基板間伝送異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の制御基板とインバーター基板などの間で伝送異常が出ている状態です。基板間の伝送不良、動力ヒューズ溶断、ファンモーター異常などで表示されます。まずは運転を止めて電源状態やヒューズ、配線外れの有無を確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5',
		'summary' => __( '三相電源の相検出異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '三相電源の欠相や相検出異常を示すコードです。室外ユニット電源の端子ゆるみや配線不良などで表示されます。まずは電源端子の緩みや配線状態に明らかな異常がないか確認し、無理な再運転は避けて、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '6',
		'summary' => __( '室外ユニットの電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外ユニット側の電圧条件が異常な状態です。インバーター電圧不足や過電圧、電源配線容量不足、室外ユニットの電圧低下などで表示されます。まずは電源の瞬低やブレーカー異常がないか確認し、再発する場合は受電状態や基板を含めた点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '7',
		'summary' => __( '吐出ガスのスーパーヒート低下異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機吐出ガスのスーパーヒートが低下した状態です。電子膨張弁のロックなどで表示されます。まずは運転を止め、異音や急な能力低下がないかを確認してください。冷媒回路や膨張弁まわりの判断は難しいため、再表示する場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '8',
		'summary' => __( '圧縮機上温度の過昇を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機上部の温度が上がり過ぎた状態です。冷媒不足や冷媒漏れ、冷媒配管詰まりなどで表示されます。まずは運転を止め、室外機まわりの通風障害や極端な汚れがないか確認してください。冷媒回路の確認が必要になることが多いため、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '11',
		'summary' => __( '吸込温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の吸込温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずはフィルターや吸込部に異常な詰まりがないかを確認し、配線やセンサー部の目視確認が難しい場合は、そのまま点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '12',
		'summary' => __( '吹出温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の吹出温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずは吹出口の目詰まりや極端な風量低下がないかを確認し、改善しない場合はセンサーや配線、基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '13',
		'summary' => __( '液管温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の液管温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずは急な能力低下や不自然な運転停止がないか確認してください。冷媒配管付近の部品確認は専門対応が前提になるため、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '14',
		'summary' => __( '熱交換器ガス管温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の熱交換器ガス管温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずはフィルター詰まりや極端な風量低下がないかを確認し、センサーや配線の不具合が疑われる場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '16',
		'summary' => __( 'リモートサーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'リモートサーミスターの異常を示すコードです。短絡・断線、コネクターの外れや緩みなどで表示されます。まずは温度検知の位置や外れがないかを確認してください。改善しない場合はセンサー本体や配線、接続部の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '17',
		'summary' => __( 'リモコン内蔵サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'リモコンに内蔵されたサーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずはリモコン周辺が極端な熱源や直射の影響を受けていないか確認し、改善しない場合はリモコンや配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '18',
		'summary' => __( '室内送風機系の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内の送風機系統に異常が出ている状態です。室内ファンモーターの脱調・故障や、室内ファンコントローラー故障などで表示されます。まずは風が極端に弱い、異音が出る、回転が不安定といった症状がないか確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '19',
		'summary' => __( '室内保護装置が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内側の保護装置が働いた状態です。ファンモーター用プロテクターの作動で表示されます。まずは吸込・吹出しが塞がれていないか、フィルターが目詰まりしていないかを確認してください。再表示する場合は送風機系統や保護部品の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1A',
		'summary' => __( '室内ファンコントローラーの温度上昇を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラーのフィン温度が上がっている状態です。送風機の異常や熱交換器詰まり、ファンサーミスター異常などで表示されます。まずはフィルター詰まりや風量低下がないか確認し、改善しない場合はコントローラーや関連部品の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1B',
		'summary' => __( '室内ファンコントローラーで過電流保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラー側で過電流保護が働いた状態です。室内ファンモーター異常などで表示されます。まずは異音やファンの回転不良がないかを確認し、無理な連続運転は避けてください。改善しない場合はモーターやコントローラーの点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1C',
		'summary' => __( '室内ファンコントローラーの電流センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラーの電流センサー系統の異常を示します。センサー不良や基板異常で表示されます。まずは一度運転を止めて再投入後の再発有無を確認し、改善しない場合はセンサーや基板、関連配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1D',
		'summary' => __( '室内ファンコントローラーの保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラーの保護機能が働いた状態です。ドライバーICのエラー信号検出や瞬時過電流などで表示されます。まずは運転を止め、異音や焦げ臭さがないか確認してください。再表示する場合はコントローラー基板やモーター側の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '1E',
		'summary' => __( '室内ファンコントローラーの電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラーに供給される電圧条件が異常な状態です。電源配線容量不足や室内ユニットの電圧低下などで表示されます。まずはブレーカーや電源の不安定さがないか確認し、再発する場合は電源条件や基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '20',
		'summary' => __( '圧縮機上温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の圧縮機上温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずは室外機まわりの通風や汚れの状態を確認し、改善しない場合はセンサーや配線、基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '21',
		'summary' => __( '高圧圧力センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '高圧圧力センサーの異常を示します。センサーの短絡・断線、コネクターの外れや緩みなどで表示されます。まずは室外機の通風障害や極端な汚れがないか確認してください。改善しない場合はセンサーや配線、制御基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '22',
		'summary' => __( '外気温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の外気温度サーミスターの異常を示します。短絡・断線、コネクターの外れや緩みなどで表示されます。まずは室外機まわりの温度条件や風の吸い込みが極端に妨げられていないか確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '24',
		'summary' => __( '配管または凝縮器温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の配管または凝縮（熱交）温度サーミスターの異常を示します。コネクター部のゆるみ・外れ、断線のほか、暖房運転時の室外ファンモーターロックで表示される場合があります。まずは室外機まわりの通風やファンの引っ掛かりを確認し、改善しない場合はセンサーや関連配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '26',
		'summary' => __( '一部機種で凝縮（熱交）温度サーミスター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '一部機種で、室外側の凝縮（熱交）温度サーミスター異常を示すコードです。主にコネクター部のゆるみ・外れ、断線などで表示されます。まずは目視できる範囲で配線の外れや傷みがないか確認し、改善しない場合はセンサーや関連配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '31',
		'summary' => __( '室内外の容量組み合わせ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内外ユニットの容量組み合わせや能力コード設定が条件から外れている状態です。能力コードの誤設定、室内合計能力の過大・過小、対応できない配線方式の組み合わせなどで表示されます。最近の機器交換や設定変更がある場合は内容を確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '35',
		'summary' => __( '室内号機設定異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ユニットの号機設定に不整合がある状態です。室内ユニットの台数が仕様範囲外、号機設定の重複などで表示されます。増設や入れ替え後に起こりやすいため、最近の施工・設定変更の有無を確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '36',
		'summary' => __( '室内ユニットの組み合わせ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '接続した室内ユニットの組み合わせ条件が合っていない状態です。対応条件外の室内ユニット接続などで表示されます。機器の増設や交換直後は組み合わせ条件を見直し、改善しない場合は接続構成と設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '38',
		'summary' => __( '保護検出回路異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側の保護検出回路に異常がある状態です。室外ユニットの保護検出回路故障で表示されます。まずは運転を止めて再投入後の再発有無を確認してください。回路異常はユーザー側での切り分けが難しいため、再発する場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '45',
		'summary' => __( '高圧上昇防止の保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '高圧圧力が上がり過ぎないよう保護が働いた状態です。熱交換器の目詰まりやショートパスなどの過負荷運転、不凝縮ガス混入、冷媒過多、配管詰まりなどで表示されます。まずはフィルターや室外熱交換器の汚れ、通風障害を確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '47',
		'summary' => __( '低圧低下防止の保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '低圧側が下がり過ぎないよう保護が働いた状態です。蒸発温度の異常低下による停止が1時間以内に3回発生した場合や、暖房運転時の室外ファンモーターロックなどで表示されます。まずは通風障害や熱交換器の汚れ、ファンの引っ掛かりがないか確認し、再発する場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '48',
		'summary' => __( '過負荷運転の保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '運転負荷が大きくなり過ぎたため保護が働いた状態です。冷媒過多、冷媒配管詰まり、サイクル部品の異常による圧力上昇、圧縮機の過負荷・ロック・過電流などで表示されます。まずは室内外の通風と汚れを確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '49',
		'summary' => __( '冷媒量異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷媒量が適正範囲から外れている状態です。主に冷媒不足で表示されます。まずは能力低下や霜付きなどの症状がないかを確認し、冷媒回路の判断は専門対応が必要になるため、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '51',
		'summary' => __( '電流検出異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '電流検出系で異常を検知した状態です。熱交換器の目詰まりなどによる過負荷運転で表示されます。まずはフィルターや熱交換器の汚れ、通風不足がないかを確認してください。再表示する場合は電流検出回路や圧縮機系統を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '53',
		'summary' => __( 'トランジスタモジュールの保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'トランジスタモジュールを保護するため停止した状態です。インバーターの過負荷・過電流・回転異常・起動失敗や、圧縮機異常で表示されます。まずは連続再起動を避け、異音や焦げ臭さがないかを確認してください。改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '54',
		'summary' => __( 'インバーターフィン温度系の保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'インバーターフィン温度の監視で保護が働いた状態です。フィンサーミスター異常、熱交換器の目詰まり、送風機異常などで表示されます。まずは室外熱交換器の汚れや通風不足がないかを確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '55',
		'summary' => __( 'インバーターが正常に動作していません。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'インバーター基板が正常に動作していない状態です。インバーター基板異常で表示されます。ユーザー側での切り分けは難しいため、無理な再運転は避け、電源再投入後も再表示する場合は基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '57',
		'summary' => __( 'ファンモーター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室外側のファンモーター系に異常がある状態です。連絡配線の断線・誤配線、ファンモーター故障、インバーター基板異常などで表示されます。まずはファンの回転不良や異音、通風障害がないか確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5B',
		'summary' => __( 'ファンモーターの過電流保護が作動しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'ファンモーター側で過電流保護が働いた状態です。ファンモーター故障で表示されます。まずはファンの引っ掛かりや異音、外気側の詰まりがないか確認してください。再表示する場合はファンモーターや駆動回路の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => '5C',
		'summary' => __( '電流センサー異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'ファンモーター系の電流センサー異常を示します。ファンモーター故障や室外プリント基板異常で表示されます。まずは運転を止めて再投入後の再発有無を確認し、改善しない場合はセンサーや基板、ファンモーターの点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'A1',
		'summary' => __( 'アクティブフィルター異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'アクティブフィルター系に異常がある状態です。対象機能を使用している場合に表示されます。まずは周辺機器の電源や接続状態に異常がないかを確認し、改善しない場合はアクティブフィルター本体や接続部の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'B0',
		'summary' => __( '室内機種・容量設定の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ユニットの機種や容量設定が正しくない状態です。容量未設定や機種・容量の設定誤りなどで表示されます。機器交換や基板交換の後に起こりやすいため、最近の作業履歴があれば内容を確認し、改善しない場合は設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'B1',
		'summary' => __( 'アドレスまたは冷媒系統設定の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'アドレス設定や冷媒系統設定が条件から外れている状態です。アドレス重複や冷媒系統の設定誤りなどで表示されます。最近の増設や設定変更がある場合は見直しを行い、改善しない場合はアドレス設定と系統設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'B5',
		'summary' => __( '室内ユニットの接続台数異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '接続した室内ユニットの台数が条件を外れている状態です。対応外の室内ユニットを多台数接続した場合などに表示されます。増設や入れ替えを行った直後は接続台数と対応条件を確認し、改善しない場合は接続構成の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'B6',
		'summary' => __( '室内ファンコントローラー基板間の伝送異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ファンコントローラー基板間で通信できていない状態です。接続異常、未接続、電文不一致、無応答などで表示されます。まずはコネクター外れや配線ゆるみがないか確認し、改善しない場合は基板や配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'B7',
		'summary' => __( '室内ファン用基板間の伝送異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内のファン用基板間で通信異常が出ている状態です。短絡、断線、コネクター外れやゆるみなどで表示されます。まずは配線接続の外れや損傷がないか確認し、改善しない場合はファン用基板や配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'D1',
		'summary' => __( '冷媒漏えいを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷媒ガスの漏えいを検知した状態です。安全確保を優先し、運転を止めて十分に換気してください。再運転の判断は避け、においや体調変化がある場合はその場を離れて、速やかに点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'D2',
		'summary' => __( '冷媒漏えいセンサーの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷媒漏えいを検知するセンサー自体の故障を示します。センサー不良で表示されます。安全機能に関わるため、運転継続は避けてください。改善確認より先に、センサー本体や関連回路の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'D3',
		'summary' => __( '冷媒漏えいセンサーの未接続を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷媒漏えいセンサーが接続されていない、または配線が外れている状態です。センサー接続配線の断線やコネクター抜けなどで表示されます。まずは配線外れの有無を確認し、安全機能に関わるため改善しない場合は早めに点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'D4',
		'summary' => __( '冷媒漏えいセンサーI/F基板の記憶部異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '冷媒漏えいセンサーI/F基板のEEPROM故障を示します。センサーI/F基板の記憶部異常で表示されます。ユーザー側での復旧は難しいため、電源再投入後も再表示する場合は基板交換を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'D0',
		'summary' => __( '室内ユニットと冷媒漏えいセンサーI/F基板間の伝送異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '室内ユニットと冷媒漏えいセンサーI/F基板の間で伝送異常が出ている状態です。配線接続不良やセンサーI/F基板の故障などで表示されます。安全機能に関わるため、配線外れがないか確認し、改善しない場合は点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'EE',
		'summary' => __( '圧縮機保護アラームを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( '圧縮機要因のアラームが短時間に繰り返し発生した状態です。02・07・08・45・47系統のアラームが一定時間内に複数回発生すると表示され、リモコンからのリセットはできません。連続再起動は避け、速やかに点検を依頼してください。', 'gd-aircon-repair' ) ) ),
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
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( '日立', 'gd-aircon-repair' ); ?></span>
			</nav>

			<h1 class="max-w-[920px] text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '日立のエラーコード一覧', 'gd-aircon-repair' ); ?>
			</h1>
		</div>
	</section>

	<?php gd_aircon_repair_render_error_code_brand_logos( 3 ); ?>

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
