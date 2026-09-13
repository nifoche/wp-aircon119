<?php
/**
 * 固定ページテンプレート: エラーコード（東芝キャリア）
 * URL 例: /error-codes/toshiba/
 * Template Name: エラーコード（東芝キャリア）
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
		'code'    => 'E01',
		'summary' => __( '制御機器・リモコンでリモコン側の通信・親機設定異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、リモコン側で室内機との通信や親機設定に問題を検知したことを示します。「リモコン親なし」や「室内-リモコン間通信異常（リモコン側検出）」と表記されることがある表示です。まずは親リモコン設定、渡り線、対象室内機の通電状態を確認してください。改善しない場合はリモコン、配線、室内基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E02',
		'summary' => __( '制御機器・リモコンでリモコン送信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、リモコンから室内機への送信に問題があることを示します。「リモコン送信不良」「リモコン送信異常」と表記されることがある表示です。まずはリモコンの接続状態、渡り線、室内機の電源投入状態を確認してください。再表示する場合はリモコン、通信配線、室内側の制御基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E03',
		'summary' => __( '室内機で室内側のリモコン通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機側でリモコンとの通信異常を検知したことを示します。「室内⇔リモコン間定期通信エラー」や「室内-リモコン間通信異常（室内側検出）」と表記されることがある表示です。まずはリモコン配線、接続コネクタ、通電状態を確認してください。改善しない場合は室内基板やリモコン系統の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E04',
		'summary' => __( '室内機で室内外通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機と室外機の間でシリアル通信が正常に成立していないことを示します。「室内外シリアル異常」や「IPDU-CDB間通信異常」と表記されることがある表示です。まずは室内外の渡り配線、ブレーカー、接続台数の変化有無を確認してください。復旧しない場合は通信配線や室内外基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E06',
		'summary' => __( '室外機で室内側との通信受信異常・接続台数異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機側で室内側からの通信受信不良や接続台数減少を検知したことを示します。補助コードで意味が分かれる機種もあります。まずは全室内機の通電、渡り線、最近の機器追加や取り外しの有無を確認してください。改善しない場合は通信配線、アドレス設定、室内外基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E07',
		'summary' => __( '室外機で室内外通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機側で室内機との通信回路に異常を検知したことを示します。「室内外通信回路異常（室外側検出）」と表記されることがあり、機種によって送受信の表現差が出る場合があります。まずは室内外の配線、端子の緩み、通電状態、最近の機器交換や配線変更の有無を確認してください。改善しない場合は通信配線や室外基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E08',
		'summary' => __( '室内機で室内アドレス重複を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機アドレスが重複していることを示します。現場で室内機を増設した後や基板交換後に発生しやすい設定系エラーです。まずは最近の設定変更有無、室内アドレス、自動アドレス実施状況を確認してください。復旧しない場合は設定内容と配線系統を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E09',
		'summary' => __( '制御機器・リモコンでリモコン親重複を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、親リモコン設定が重複していることを示します。複数のリモコンを接続する系統で親子設定が競合した場合に表示されます。まずは親リモコンの割り当て、グループ設定、渡り配線を確認してください。改善しない場合はリモコン設定と通信系統の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E10',
		'summary' => __( '室内機で室内MCU/CPU間通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機内部のCPUまたはMCU間通信に問題があることを示します。メインMCUとモータMCU間の通信異常を示す機種もあります。まずは電源再投入後の再発有無を確認してください。繰り返し表示する場合は室内基板、ファン駆動回路、関連ハーネスの点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E11',
		'summary' => __( '室内機で室内-オプション間通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機とオプション基板の間で通信異常が起きていることを示します。加湿器や外部制御基板などの接続時に影響することがあります。まずはオプション機器の接続有無、コネクタ、配線状態を確認してください。改善しない場合は室内基板、オプション基板、配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E12',
		'summary' => __( '室外機で自動アドレス開始エラーを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、自動アドレス開始時に通信条件が整っていないことを示します。室内外通信異常や室外機間通信異常の補助コードを伴う場合があります。まずは全機の通電状態、配線極性、室外機間配線を確認してください。改善しない場合はアドレス設定条件と通信回路の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E15',
		'summary' => __( '室外機で自動アドレス中の室内不在を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、自動アドレス中に対象系統の室内機が見つからないことを示します。配線抜け、未通電、誤接続のときに発生しやすい表示です。まずは全室内機のブレーカー、端子接続、渡り線、機器の接続有無を確認してください。改善しない場合は配線系統とアドレス設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E16',
		'summary' => __( '室外機で室内接続台数・容量オーバーを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機の接続台数または接続容量が許容範囲を超えていることを示します。機種により台数オーバーと容量オーバーのどちらかで表示されます。まずは接続構成、室内機能力、系統の組合せを確認してください。改善しない場合は機種選定や設定内容を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E18',
		'summary' => __( '室内機で室内親子間定期通信エラーを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機の親子ユニット間で定期通信ができていないことを示します。複数室内機を親子構成で使う機種に関係する表示です。まずは親子間配線、通電、設定変更の有無を確認してください。改善しない場合は室内機間の通信配線や基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E19',
		'summary' => __( '室外機でセンター室外台数異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、センター室外の台数条件が仕様と一致していないことを示します。センター室外なし、または2台以上接続などの補助コードを伴う場合があります。まずは室外機構成とセンター室外設定を確認してください。改善しない場合は設定内容と機器接続の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E20',
		'summary' => __( '室外機で自動アドレス中の冷媒配管通信不一致を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、自動アドレス設定中に冷媒配管系統と通信系統の対応が一致していないことを示します。誤配管や誤配線の可能性がある表示です。まずは室内外の組合せ、冷媒配管と通信配線の対応、施工後の変更有無を確認してください。改善しない場合は施工系統全体の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E23',
		'summary' => __( '室外機で室外ユニット間通信送信不良を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外ユニット間の送信通信に問題があることを示します。モジュール構成の室外機で発生しやすい通信エラーです。まずは室外機間の渡り線、通電、端子緩みを確認してください。改善しない場合は室外機間通信配線と制御基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E25',
		'summary' => __( '室外機でターミナル室外アドレス重複を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、ターミナル側の室外機アドレスが重複していることを示します。室外機の構成変更や基板交換後に発生しやすい設定異常です。まずは室外アドレス設定、ユニット構成、設定変更履歴を確認してください。改善しない場合は設定内容と室外側基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E26',
		'summary' => __( '室外機で室外ユニット間通信受信不良・接続台数減少を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外ユニット間の受信通信に問題があるか、室外接続台数が減少したことを示します。補助コードで意味が分かれる機種もあります。まずは各室外機の通電、渡り線、機器脱落の有無を確認してください。改善しない場合は室外機間通信回路と基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E28',
		'summary' => __( '室外機でターミナル室外異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、ターミナル側の室外ユニットで異常を検知したことを示します。親機ではなく子機側・末端側の異常を拾うコードとして扱われます。まずはどの室外機系統で表示したかを確認し、再起動を繰り返さないでください。改善しない場合は対象ユニットの詳細診断を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'E31',
		'summary' => __( '室外機でIPDU通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、IPDUと関連基板の間で通信が正常にできていないことを示します。機種により補助コードで通信方向や対象が分かれる場合があります。まずは接続ケーブル、端子、通電状態を確認してください。復旧しない場合はIPDU、配線、室外側制御基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F01',
		'summary' => __( '室内機で熱交換器センサ(TCJ)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、熱交換器センサ(TCJ)異常を示します。「熱交センサ(TCJ)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F02',
		'summary' => __( '室内機で熱交換器センサ(TC)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、熱交換器センサ(TC)異常を示します。「熱交センサ(TC)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F04',
		'summary' => __( '室外機で吐出温度センサ(TD1)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度センサ(TD1)異常を示します。「吐出温度センサ(TD1)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F06',
		'summary' => __( '室外機で熱交換器・配管温度センサ(TE/TS)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、熱交換器・配管温度センサ(TE/TS)異常を示します。機種により「熱交センサ(TE)異常」「室外機 温度センサ(TE・TS)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F07',
		'summary' => __( '室外機で液温センサ(TL)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、液温センサ(TL)異常を示します。「TLセンサ異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F08',
		'summary' => __( '室外機で外気温センサ(TO)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、外気温センサ(TO)異常を示します。「外気温センサ(TO)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F10',
		'summary' => __( '室内機で室温センサ(TA)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室温センサ(TA)異常を示します。「室温センサ(TA)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F12',
		'summary' => __( '室外機で吸込温度センサ(TS/TS1)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吸込温度センサ(TS/TS1)異常を示します。「吸込温度センサ(TS)異常」「TS1センサ異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F13',
		'summary' => __( '室外機でヒートシンクセンサ(TH)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、ヒートシンクセンサ(TH)異常を示します。「ヒートシンクセンサ(TH)異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F15',
		'summary' => __( '室外機で温度センサ誤配線(TE/TL)を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機の温度センサ配線が入れ替わっていることを示します。熱交換器センサ(TE)と液温センサ(TL)の配線入れ替わりを示す表示です。施工直後や部品交換後に発生しやすいため、まずはコネクタ接続位置を確認してください。改善しない場合はセンサ配線と基板接続の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F16',
		'summary' => __( '室外機で圧力センサ誤配線(Pd/Ps)を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機の圧力センサ配線が入れ替わっていることを示します。圧力センサPdとPsの配線入れ替わりを示す表示です。まずは最近の施工・修理履歴とセンサ配線位置を確認してください。改善しない場合は圧力センサ、ハーネス、基板接続の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F22',
		'summary' => __( '室外機で吐出温度センサ(TD3)異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度センサ(TD3)異常を示します。「TD3センサ異常」と表記されることがある表示です。機種シリーズにより検出対象や補助コードが分かれる場合があります。断線、短絡、配線ミス、コネクタ抜けなどで発生しやすいため、まずは最近の施工や修理履歴とセンサ配線を確認してください。ユーザー側で断定しにくい異常のため、表示コードと対象機を記録し、センサ、ハーネス、関連基板を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F29',
		'summary' => __( '室内機で室内EEPROM・他の室内基板異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機側の基板記憶領域や他の室内基板との関係で異常を検知したことを示します。機種により室内EEPROM不良、または他の室内基板異常を示す場合があります。まずは対象系統と発生機を特定してください。改善しない場合は室内基板、設定データ、通信系統の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'F31',
		'summary' => __( '室外機で室外EEPROM異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機基板のEEPROMに関わる異常を示します。室外PC板のEEPROM異常を示す表示です。ユーザー側で復旧判断しにくい表示のため、まずは表示コードと対象系統を記録してください。改善しない場合は室外基板交換を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H01',
		'summary' => __( '室外機で圧縮機ブレークダウンを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、圧縮機がブレークダウン状態と判定されたことを示します。起動や運転継続ができない重い保護系エラーです。まずは無理な再起動を避け、電源条件や異音・焼損臭の有無を確認してください。再表示する場合は圧縮機本体、駆動回路、冷媒回路を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H02',
		'summary' => __( '室外機で圧縮機ロックを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、圧縮機ロックを検知したことを示します。圧縮機が回転できない、または始動できない状態に近い保護コードです。まずは再起動を繰り返さず、電源電圧や相順条件を確認してください。改善しない場合は圧縮機、インバータ、電源回路を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H03',
		'summary' => __( '室外機で電流検出回路異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、電流検出回路に異常があることを示します。電流検出回路異常を示す表示で、センサ回路や基板側不良が疑われます。まずは運転を停止し、対象系統の発生状況を記録してください。改善しない場合は電流検出回路、配線、制御基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H04',
		'summary' => __( '室外機で圧縮機1ケースサーモ動作を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、圧縮機1のケースサーモが作動したことを示します。室外機側で圧縮機周辺の温度条件が保護基準に達した際に表示される代表的な保護コードです。まずは通風不良、周囲温度上昇、熱交換器汚れ、着霜や目詰まりがないか確認してください。再発する場合は圧縮機、冷媒回路、温度検知系を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H05',
		'summary' => __( '室外機で吐出温度センサ(TD1)の配線・接続異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度センサTD1の配線・接続異常を示します。機種により「TD1センサ誤配線」または「TD1誤接続」と表記されることがある表示です。まずは施工直後や修理後の配線位置、コネクタ番号、ハーネス状態、関連端子の差し間違いがないか確認してください。改善しない場合はセンサ配線や基板端子を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H06',
		'summary' => __( '室外機で低圧保護動作を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、低圧側の圧力低下を検知して保護が働いたことを示します。低圧低下異常や低圧保護動作を示す表示です。まずはサービスバルブ、フィルタ詰まり、冷媒不足が疑われる状況の有無を確認してください。改善しない場合は冷媒回路と圧力検出系の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H07',
		'summary' => __( '室外機で油面低下検出保護を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、油面低下を検知して保護が働いたことを示します。圧縮機の潤滑状態に関わる重要な保護コードです。まずは無理な再運転を避け、発生時の負荷条件や異音の有無を記録してください。改善しない場合は油回路、冷媒回路、圧縮機の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H08',
		'summary' => __( '室外機で均油・油面検出用温度センサ異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、均油回路や油面検出に使う温度センサ系の異常を示します。機種によりTK1〜TK4のいずれか、または油面検出用温度センサ異常を示す場合があります。まずは最近の修理履歴、コネクタ接続、断線の有無を確認してください。改善しない場合はセンサ配線と基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H14',
		'summary' => __( '室外機で圧縮機2ケースサーモ動作を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、圧縮機2のケースサーモが作動したことを示します。機種によっては補助表示や対象圧縮機の確認が必要ですが、室外機側の保護条件に達した際に表示されるコードです。まずは通風不良、周囲温度上昇、熱交換器汚れ、着霜や目詰まりを確認してください。再発する場合は圧縮機、冷媒回路、温度検知系を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H15',
		'summary' => __( '室外機で吐出温度センサ(TD2)の配線・接続異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度センサTD2の配線・接続異常を示します。機種により「TD2センサ誤配線」または「TD2誤接続」と表記されることがある表示です。まずは施工直後や部品交換後の配線位置、コネクタ番号、ハーネス状態、関連端子の差し間違いがないか確認してください。改善しない場合はセンサ配線や基板端子を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H16',
		'summary' => __( '室外機で均油回路系異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、均油回路系に異常があることを示します。TK1〜TK4を含む均油回路系異常を示す表示です。まずは均油関連配管、温度センサ、接続状態を確認してください。改善しない場合は均油回路、検出回路、基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'H25',
		'summary' => __( '室外機で吐出温度センサ(TD3)の配線・接続異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度センサTD3の配線・接続異常を示します。機種により「TD3センサ誤配線」または「TD3誤接続」と表記されることがある表示です。まずは施工直後や修理後の配線位置、コネクタ番号、ハーネス状態、関連端子の差し間違いがないか確認してください。改善しない場合はセンサ配線や基板端子を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L03',
		'summary' => __( '室内機で室内親重複を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、同一系統で親に設定された室内機が重複していることを示します。グループ制御や親子設定の競合時に発生します。まずは親機設定、グループ設定、最近の基板交換有無を確認してください。改善しない場合は設定内容と室内機間通信の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L04',
		'summary' => __( '室外機で室外系統アドレス重複を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機の系統アドレスが重複していることを示します。室外機増設や基板交換後に起きやすい設定系エラーです。まずは系統アドレス設定、ユニット構成、設定変更履歴を確認してください。改善しない場合はアドレス設定と室外基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L05',
		'summary' => __( '室内機で優先室内重複（優先室内に表示）を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、優先室内ユニットの設定が重複していることを示します。優先させる室内機側に表示される想定のコードです。まずは優先設定を担当する室内機の割り当てを確認してください。改善しない場合は室内設定と通信系統の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L06',
		'summary' => __( '室内機で優先室内重複（優先室内以外に表示）を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、優先室内ユニット設定の重複を、優先設定されていない側の室内機が検知したことを示します。まずは同一系統内の優先設定状況を見直してください。設定を修正しても改善しない場合はアドレス・グループ設定と通信配線の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L07',
		'summary' => __( '室内機で個別室内にグループ線接続ありを検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、個別制御の室内機にグループ線が接続されていることを示します。意図しないグループ配線がある場合に発生します。まずはリモコン配線方式とグループ制御の有無を確認してください。改善しない場合は配線系統と室内設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L08',
		'summary' => __( '室内機で室内グループ・アドレス未設定を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内グループ設定またはアドレス設定が未了であることを示します。施工途中や設定初期化後に発生しやすいコードです。まずは室内アドレス、自動アドレス実施状況、グループ設定を確認してください。改善しない場合は設定内容と配線系統の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L09',
		'summary' => __( '室内機で室内能力未設定を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機能力の設定が入っていないことを示します。基板交換後や設定データ不整合時に発生しやすい表示です。まずは能力設定データ、機種選定、設定アダプタの状態を確認してください。改善しない場合は基板設定と機種構成の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L10',
		'summary' => __( '室外機で能力未設定異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、能力設定が未設定または設定条件が合っていないことを示します。機種により「室内能力未設定」「室外能力未設定」、またはサービス用室外PC板のジャンパー設定違いを示す場合があります。まずは基板交換履歴、ジャンパー設定、能力設定内容に相違がないか確認してください。改善しない場合は能力設定と基板条件を含む点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L20',
		'summary' => __( 'システムで集中管理・LAN系通信異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、集中管理やLAN系の通信条件に異常があることを示します。機種によって集中アドレス重複、LAN系通信異常など表現が分かれます。まずは中央監視接続、アドレス設定、LAN配線やゲートウェイ周りの状態を確認してください。改善しない場合は管理系通信と設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L29',
		'summary' => __( '室外機で他の室外機異常・電力制御系異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機側で他の室外機や電力制御系の異常を検知したことを示します。機種によりIPDU台数異常や室外機その他異常を示す場合があります。まずはどの室外ユニットが主因かを切り分けてください。改善しない場合は室外機間通信、IPDU、制御基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L30',
		'summary' => __( '室内機で外部異常入力・インターロック異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機への外部異常入力やインターロック入力が有効になっていることを示します。換気機や外部安全接点との連動時に発生することがあります。まずは外部接点、連動機器、インターロック設定を確認してください。改善しない場合は外部入力回路と設定の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'L31',
		'summary' => __( '室外機で相順・位相検出保護系異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、相順や位相検出保護系で異常を検知したことを示します。三相電源の相順誤りや位相検出回路の問題が関係する機種もあります。まずは受電相順、欠相、電源工事後の変更有無を確認してください。改善しない場合は電源系と室外基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P01',
		'summary' => __( '室内機で室内ファン異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内ファン系で異常を検知したことを示します。ファン異常や保護動作を示す表示です。まずは吸込口・吹出口の閉塞、異物噛み込み、フィルタ目詰まりを確認してください。改善しない場合はファンモータ、駆動回路、室内基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P03',
		'summary' => __( '室外機で吐出温度異常(TD1)を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度TD1が異常高温になったことを示します。圧縮機負荷増大や冷媒条件悪化で発生しやすい保護コードです。まずは通風不良、熱交換器の汚れ、サービスバルブ状態を確認してください。改善しない場合は冷媒回路、圧縮機、温度検知系の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P04',
		'summary' => __( '室外機で高圧スイッチ系動作を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、高圧スイッチ系が動作したことを示します。高圧側の圧力上昇や検知回路異常により停止する代表的な保護コードです。まずは室外機周辺の通風、熱交換器汚れ、バルブ状態を確認してください。改善しない場合は冷媒回路と高圧検知系の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P05',
		'summary' => __( '室外機で欠相・停電・相順異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、欠相・停電・相順など電源条件の異常を示します。三相機で電源工事後や瞬停後に発生しやすいコードです。まずは受電相順、欠相、電圧のばらつき、端子緩みを確認してください。改善しない場合は電源回路と室外基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P07',
		'summary' => __( '室外機でヒートシンク過熱異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、ヒートシンクが過熱したことを示します。インバータ周辺の放熱不足や冷却不良が関係する保護コードです。まずは通風経路、熱交換器汚れ、周囲温度条件を確認してください。改善しない場合は放熱部、ファン、インバータ基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P10',
		'summary' => __( '室内機で室内溢水異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内機で溢水を検知したことを示します。フロートスイッチ動作や室内溢水異常を示す表示です。まずはドレンパン、ドレン配管の詰まり、ポンプ動作、据付勾配を確認してください。改善しない場合は排水系と室内基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P11',
		'summary' => __( '室外機で室外熱交換器凍結異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外熱交換器の凍結を検知したことを示します。熱交換条件の悪化や冷媒循環不良が関係する保護コードです。まずは着霜状況、通風、外気条件、熱交換器汚れを確認してください。改善しない場合は冷媒回路や各種センサの点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P12',
		'summary' => __( '室内機で室内ファンモータ異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室内ファンモータで異常を検知したことを示します。DCファン機種ではモータ自体や駆動回路の異常が疑われます。まずは異物噛み込み、回転不良、フィルタ詰まりを確認してください。改善しない場合はファンモータ、ハーネス、室内基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P13',
		'summary' => __( '室外機で液バック検出異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外機で液バックを検知したことを示します。圧縮機に液冷媒が戻る状態が疑われる保護コードです。まずは運転条件、膨張弁や冷媒量の不適合が疑われる状況を記録してください。改善しない場合は冷媒回路、弁類、圧縮機の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P15',
		'summary' => __( '室外機でガスリーク検出を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、ガスリーク条件を検知したことを示します。冷媒封入量不足などの補助コードを伴う場合があります。まずは無理な再運転を避け、表示コードと発生時の運転モードを記録してください。改善しない場合は冷媒漏れ点検と回路修理を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P17',
		'summary' => __( '室外機で吐出温度異常(TD2)を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度TD2が異常高温になったことを示します。複数圧縮機構成の一方で負荷が高くなった際に発生することがあります。まずは通風、熱交換器汚れ、冷媒条件を確認してください。改善しない場合は対象圧縮機と冷媒回路の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P18',
		'summary' => __( '室外機で吐出温度異常(TD3)を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、吐出温度TD3が異常高温になったことを示します。対象機種では第三圧縮機系の保護停止に関わるコードです。まずは周辺温度、通風、熱交換器状態を確認してください。改善しない場合は対象圧縮機、冷媒回路、温度検知系の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P19',
		'summary' => __( '室外機で四方弁反転異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、四方弁の反転動作に異常があることを示します。暖房・冷房切替時の弁不良や配線不良で発生しやすいコードです。まずは切替直後の異音、切替不能、コイル通電の有無を確認してください。改善しない場合は四方弁、コイル、制御回路の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P20',
		'summary' => __( '室外機で高圧保護異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、高圧保護が働いたことを示します。高圧スイッチ系のP04と関連しつつ、機種により別の高圧保護条件で表示されます。まずは通風、熱交換器汚れ、サービスバルブ状態を確認してください。改善しない場合は冷媒回路と高圧検知系の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P22',
		'summary' => __( '室外機で室外DCファン異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、室外DCファンで異常を検知したことを示します。回転不良や駆動回路異常で発生する代表的な室外側保護コードです。まずはファンの回転阻害、異物、周囲通風を確認してください。改善しない場合はファンモータ、ドライバ、室外基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P26',
		'summary' => __( '室外機でインバータIdc動作を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、インバータの直流電流保護が働いたことを示します。機種によって過電流保護や主回路不足電圧動作を含む場合があります。まずは瞬停や電源変動、通風条件を確認してください。改善しない場合はインバータ基板、電源回路、圧縮機負荷の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P29',
		'summary' => __( '室外機でIPDU位置検出回路異常を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、IPDU位置検出回路に異常があることを示します。IPDU関連の検出回路や接続不良が疑われるコードです。まずはコネクタ、端子、修理履歴を確認してください。改善しない場合はIPDU、検出回路、室外基板の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
	array(
		'code'    => 'P31',
		'summary' => __( '室内機で他の室内異常による子機停止を検知しています。内容は機種シリーズにより異なります。', 'gd-aircon-repair' ),
		'detail'  => array( 'intro' => array( __( 'このコードは、同一グループ内の他の室内機異常により子機側が停止したことを示します。自機単独の故障とは限らず、他号機のコード確認が重要です。まずは同一系統内の他室内機表示を確認してください。原因機を特定できない場合はグループ全体の点検を依頼してください。', 'gd-aircon-repair' ) ) ),
		'open'    => false,
	),
);
?>

<div class="bg-[#FFFBF9]">
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
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( '東芝キャリア', 'gd-aircon-repair' ); ?></span>
			</nav>

			<h1 class="max-w-[920px] text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '東芝キャリアのエラーコード一覧', 'gd-aircon-repair' ); ?>
			</h1>
		</div>
	</section>

	<?php gd_aircon_repair_render_error_code_brand_logos( 5 ); ?>

	<section class="mx-auto w-full max-w-[1280px] px-4 pb-16 lg:px-10 lg:pb-20">
		<div class="overflow-hidden rounded-lg border border-[#99a1af] bg-white">
			<div class="flex w-full bg-[#16374F] text-lg font-bold text-white">
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
						<p class="text-xl font-bold text-[#16374F]"><?php echo esc_html( $row['code'] ); ?></p>
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
								<span class="mr-1 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#16374F] group-has-[input:checked]:hidden" aria-hidden="true">
									<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 h-auto" viewBox="0 0 24 24"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
								</span>
								<span class="mr-1 hidden h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-5xl leading-none text-[#16374F] group-has-[input:checked]:flex" aria-hidden="true">
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
