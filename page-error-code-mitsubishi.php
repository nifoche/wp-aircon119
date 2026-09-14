<?php
/**
 * 固定ページテンプレート: エラーコード（三菱重工）
 * URL 例: /error-codes/mitsubishi/
 * Template Name: エラーコード（三菱重工）
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
		'code'    => 'E1',
		'summary' => __( 'リモコンと室内機の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリモコンと室内機の通信異常を示します。制御信号のやり取りが正常に成立していないときに表示される系統です。まずは対象系統の電源状態とリモコン表示を確認し、表示コードと機種形式を控えてください。改善しない場合は通信配線や制御基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E2',
		'summary' => __( '室内アドレスの重複を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内アドレスの重複を示します。複数台構成で設定番号が重なっているときに表示される系統です。まずは最近の設定変更や増設の有無、対象系統のアドレス設定を確認してください。改善しない場合は設定内容や配線を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E3',
		'summary' => __( '室外側または信号系統の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外側または信号系統の異常を示します。室外機まわりの制御や信号系統で異常を検知したときに表示される区分です。まずはブレーカ状態と他の表示の有無を確認し、無理に再運転しないでください。改善しない場合は室外機の電装部を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E4',
		'summary' => __( '室内アドレス設定の超過を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内アドレス設定の上限超過を示します。接続や設定条件が合っていないときに表示される系統です。まずは対象系統の接続台数とアドレス設定を確認し、設定変更を繰り返さないでください。改善しない場合は設定内容や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E5',
		'summary' => __( '室内外の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内外通信異常を示します。通信や設定、接続条件が正しく成立していないときに表示される系統です。まずは対象系統の電源状態、接続台数、設定変更の有無を確認し、表示コードを控えてください。改善しない場合は配線や設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E6',
		'summary' => __( '室内熱交換器センサの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内熱交センサ不良を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E7',
		'summary' => __( '室内吸込センサの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内吸込センサ不良を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E8',
		'summary' => __( '暖房時の過負荷を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは暖房時の過負荷運転を示します。暖房系統に負荷がかかり保護動作に入っているときの表示です。まずは吸込口や吹出口のふさがり、フィルタの汚れ、周囲環境に無理がないかを確認してください。改善しない場合は室内外機の運転状態を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E9',
		'summary' => __( 'ドレン系の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはドレン系の異常を示します。排水がうまくできないときに表示される系統のため、まずは室内機周辺の水漏れやドレンまわりの異常の有無を確認してください。改善しない場合は排水系統や関連部品を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E10',
		'summary' => __( 'リモコンの接続台数超過を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリモコン側の接続台数超過を示します。想定を超える台数が接続されているときに表示される系統です。まずは接続されているリモコン台数と配線構成を確認し、不要な増設がないかを確認してください。改善しない場合は設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E11',
		'summary' => __( 'リモコンアドレス設定の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリモコンアドレス設定の異常を示します。リモコンの設定値が正しくないときに表示される系統です。まずは対象リモコンの設定内容と重複の有無を確認し、表示コードを控えてください。改善しない場合は設定内容や配線を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E12',
		'summary' => __( '室内アドレスの組合せ不良を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内アドレスの組合せ不良を示します。室内機どうしの設定条件が正しく組み合わないときに表示される系統です。まずは接続構成とアドレス設定を確認し、最近の工事や設定変更がないかを確認してください。改善しない場合は設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E13',
		'summary' => __( '空気清浄機の異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは空気清浄機の異常を示します。接続されている空気清浄機側または連携系統で異常を検知したときの表示です。まずは関連機器の運転状態と接続状態を確認し、表示コードを控えてください。改善しない場合は周辺機器と連携配線を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E14',
		'summary' => __( '親子室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは親子室内機間の通信異常を示します。複数の室内機が連携している構成で、相互の信号が正常にやり取りできないときに表示されます。まずは対象系統の電源状態と配線接続を確認し、設定変更を控えてください。改善しない場合は通信配線や基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E15',
		'summary' => __( '室内吹出センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内吹出センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E16',
		'summary' => __( '室内ファンモータ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内ファンモータ異常を示します。送風系の動作が正常に行えないときに表示される系統です。まずは通風の妨げや異物の有無を確認し、異音がある場合は使用を控えてください。改善しない場合はファンモータや駆動回路を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E19',
		'summary' => __( '運転チェックモードの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは運転チェックモードの異常を示します。試運転や点検時の状態が正常に成立していないときに表示される系統です。まずは通常運転中か点検中かを確認し、操作手順に誤りがないかを見直してください。改善しない場合は設定状態や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E20',
		'summary' => __( '室内ファンモータの回転異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内ファンモータ回転異常を示します。送風系の動作が正常に行えないときに表示される系統です。まずは通風の妨げや異物の有無を確認し、異音がある場合は使用を控えてください。改善しない場合はファンモータや駆動回路を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E21',
		'summary' => __( 'ラクリーナパネルの収納不良を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはラクリーナパネルの収納不良を示します。パネルの戻り動作や収納状態が正常に完了しないときに表示されます。まずはパネルの引っ掛かりや異物の有無を確認し、無理に手で押し込まないでください。改善しない場合はパネル機構や駆動部を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E23',
		'summary' => __( '冷媒漏えいを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは冷媒漏えいの検知を示します。冷媒回路の異常が疑われるため、安全を優先して運転を停止してください。まずは異臭や周辺の異常の有無を確認し、むやみに運転を続けないでください。改善しない場合は冷媒回路や接続部を含めた点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E24',
		'summary' => __( '他室内ユニットでの冷媒漏えいを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは他室内ユニット側での冷媒漏えい検知を示します。同一系統内の別ユニットに異常がある可能性を含む表示です。まずは同じ系統の他室内機に異常表示が出ていないかを確認し、使用を続けないでください。改善しない場合は冷媒回路全体の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E28',
		'summary' => __( 'リモコン温度センサの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはリモコン温度センサ不良を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E30',
		'summary' => __( '室内外接続のアンマッチ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内外接続のアンマッチ異常を示します。組合せや接続条件が合っていないときに表示される系統です。まずは機器の組合せ、配線先、設定内容に食い違いがないかを確認してください。改善しない場合は接続構成や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E31',
		'summary' => __( '室外アドレスの重複を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外アドレス重複を示します。通信や設定、接続条件が正しく成立していないときに表示される系統です。まずは対象系統の電源状態、接続台数、設定変更の有無を確認し、表示コードを控えてください。改善しない場合は配線や設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E32',
		'summary' => __( '電源の逆相または欠相を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは電源の逆相または欠相を示します。電源条件が適正でないときに表示される保護系統のコードです。まずは受電状態やブレーカ状態を確認し、無理に再投入を繰り返さないでください。改善しない場合は電源回路や相順を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E33',
		'summary' => __( '過電流異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは過電流異常を示します。機器に過大な電流が流れたときに表示される保護系統のコードです。まずは異音、異臭、ブレーカの状態を確認し、そのまま連続運転しないでください。改善しない場合は電装部や駆動部を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E34',
		'summary' => __( '欠相異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは欠相異常を示します。電源の一部が欠けているときに表示される保護系統のコードです。まずは受電状態やブレーカ状態を確認し、電源異常がないかを見てください。改善しない場合は配線や受電設備を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E35',
		'summary' => __( '室外熱交換器の温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外熱交温度異常を示します。機器内部の温度が基準から外れたときに表示される保護系統です。まずは通風や周辺温度条件に無理がないかを確認し、連続運転を控えてください。改善しない場合は関連部位や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E36',
		'summary' => __( '吐出管温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは吐出管温度異常を示します。機器内部の温度が基準から外れたときに表示される保護系統です。まずは通風や周辺温度条件に無理がないかを確認し、連続運転を控えてください。改善しない場合は関連部位や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E37',
		'summary' => __( '室外熱交換器温度センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外熱交温度センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E38',
		'summary' => __( '外気温度センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは外気温度センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E39',
		'summary' => __( '吐出温度センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは吐出温度センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E40',
		'summary' => __( '高圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは高圧異常を示します。冷媒回路の高圧側で保護が働いたときに表示される系統です。まずは通風を妨げる物がないか、極端な汚れや負荷がないかを確認し、無理に再運転しないでください。改善しない場合は冷媒回路や室外機側の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E41',
		'summary' => __( 'パワートランジスタの過熱を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはパワートランジスタの過熱を示します。電装部の温度上昇が大きいときに表示される保護系統です。まずは周囲の通風状態や異常な発熱の有無を確認し、連続運転を控えてください。改善しない場合はインバータや電装部の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E42',
		'summary' => __( 'カレントカットを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはカレントカットを示します。電流保護が働いて出力を抑えている、または保護停止したときの表示です。まずは負荷が高すぎる使い方になっていないかを確認し、無理な再起動を繰り返さないでください。改善しない場合は電装部や駆動部の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E43',
		'summary' => __( '室内機の接続台数超過を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室内機の接続台数超過を示します。許容を超える台数が接続されているときに表示される系統です。まずは接続されている室内機台数と構成を確認し、増設後であれば設定条件も見直してください。改善しない場合は系統構成を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E44',
		'summary' => __( '液バックまたはドーム下温度異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは液バックまたはドーム下温度の異常を示します。冷媒回路や圧縮機まわりの状態に異常があるときに表示される系統です。まずは異音や異常振動の有無を確認し、運転を続けないでください。改善しない場合は冷媒回路や圧縮機周辺の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E45',
		'summary' => __( 'インバータと室外機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはインバータと室外機間の通信異常を示します。制御信号が正常にやり取りできないときに表示される系統です。まずは室外機側の電源状態と表示の有無を確認し、表示コードを控えてください。改善しない場合は通信配線や電装部の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E46',
		'summary' => __( 'アドレス設定の混在を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはアドレス設定の混在を示します。系統内で設定方式や値が混在しているときに表示される系統です。まずは対象機器のアドレス設定を見直し、異なる設定が混ざっていないかを確認してください。改善しない場合は設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E47',
		'summary' => __( '圧縮機油圧異常またはインバータ過電圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機油圧異常またはインバータ過電圧異常を示します。圧縮機保護か電装保護のどちらかで停止している可能性があります。まずは異音や電源状態の異常がないかを確認し、無理に運転を続けないでください。改善しない場合は圧縮機やインバータの点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E48',
		'summary' => __( '室外ファンモータ異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外ファンモータ異常を示します。室外機の送風が正常にできないときに表示される系統です。まずはファンまわりの異物や通風の妨げの有無を確認し、異音がある場合は使用を控えてください。改善しない場合はファンモータや電装部の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E49',
		'summary' => __( '低圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは低圧異常を示します。冷媒回路の低圧側で異常を検知したときに表示される保護系統です。まずは運転を継続せず、表示コードと発生状況を控えてください。改善しない場合は冷媒回路や圧力検知系統の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E50',
		'summary' => __( '氷蓄熱ユニットの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは氷蓄熱ユニットの異常を示します。関連ユニット側の異常や連携不良を含む表示です。まずは接続されている関連ユニットの状態と他の異常表示の有無を確認してください。改善しない場合は関連機器を含めた点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E51',
		'summary' => __( 'パワートランジスタの過熱を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはパワトラ過熱を示します。機器内部の温度が基準から外れたときに表示される保護系統です。まずは通風や周辺温度条件に無理がないかを確認し、連続運転を控えてください。改善しない場合は関連部位や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E53',
		'summary' => __( '吸入温度またはドーム下センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは吸入温度・ドーム下センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E54',
		'summary' => __( '圧力センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧力センサ断線を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E56',
		'summary' => __( 'パワトラ温度センサの異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはパワトラ温度センサ異常を示します。温度や圧力などの検知が正しくできないときに表示される系統です。まずは表示コードと発生状況を控え、むやみに再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E57',
		'summary' => __( '冷媒量不足または冷媒回路異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは冷媒量不足を示す系統で、機種によっては操作弁閉検出を含む冷媒回路異常として扱われる場合があります。まずは冷えや暖まりの低下がないかを確認し、施工直後であれば弁の開閉状態も含めて確認してください。改善しない場合は冷媒回路や接続部を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E58',
		'summary' => __( 'カレントセーフを検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはカレントセーフを示します。電流保護に関わる制御が働いたときに表示される系統です。まずは電源状態や負荷条件に無理がないかを確認し、再起動を繰り返さないでください。改善しない場合は電装部や駆動部の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E59',
		'summary' => __( '圧縮機の起動不良を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機の起動不良を示します。圧縮機が正常に立ち上がれないときに表示される系統です。まずは異音やブレーカ作動の有無を確認し、無理に再運転しないでください。改善しない場合は圧縮機や起動回路の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E60',
		'summary' => __( '圧縮機ロータ位置検出異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは圧縮機ロータ位置検出の異常を示します。圧縮機の駆動制御が正常に行えないときに表示される系統です。まずは表示コードを控え、異常音がある場合は使用を止めてください。改善しない場合は圧縮機や制御回路の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E61',
		'summary' => __( '室外親機と子機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外親機と子機間の通信異常を示します。複数室外機で構成する系統で連携信号が正常に成立していないときの表示です。まずは対象系統の電源状態と接続配線を確認してください。改善しない場合は通信配線や設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E63',
		'summary' => __( '緊急停止入力を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは緊急停止を示します。外部停止信号や保護停止条件が入力されたときに表示される系統です。まずは非常停止や外部連動機器が作動していないかを確認し、解除条件を確認してください。改善しない場合は外部入力系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E64',
		'summary' => __( '冷却水異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは冷却水異常を示します。冷却水の流れや状態に問題があるときに表示される系統です。まずは冷却水の供給状態や循環の異常の有無を確認し、運転を継続しないでください。改善しない場合は水系統や関連機器の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E65',
		'summary' => __( 'PACI/F使用時の関連ユニット異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはPACI/Fを使用する系統で関連ユニットの異常を示します。周辺機器との連携や設定が影響する表示です。まずは対象系統の構成と関連機器の状態を確認し、他の異常表示がないかも見てください。改善しない場合は接続機器や制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E66',
		'summary' => __( 'I/Fアドレスの重複を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはI/Fアドレスの重複を示します。インターフェース機器の設定番号が重なっているときに表示される系統です。まずは関連機器の設定内容を確認し、重複や設定漏れがないかを見直してください。改善しない場合は設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E67',
		'summary' => __( 'Vマルチの接続台数超過を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはVマルチの接続台数超過を示します。接続されている台数が許容範囲を超えたときに表示される系統です。まずは機器構成と接続台数を確認し、増設後であれば設定条件も見直してください。改善しない場合は構成全体を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E68',
		'summary' => __( 'Vマルチと室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはVマルチと室内機間の通信異常を示します。対象機器間の信号が正常にやり取りできないときに表示される系統です。まずは各機器の電源状態と配線接続を確認し、表示コードを控えてください。改善しない場合は通信配線や基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E70',
		'summary' => __( 'CC1と室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはCC1と室内機間の通信異常を示します。集中制御系と室内機の連携が正常に成立していないときに表示される系統です。まずは関連機器の電源状態と通信配線を確認し、他の表示もあわせて控えてください。改善しない場合は制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E71',
		'summary' => __( 'NRと室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはNRと室内機間の通信異常を示します。関連制御機器との信号のやり取りが正常にできないときに表示される系統です。まずは関連機器の電源状態と配線接続を確認してください。改善しない場合は通信配線や制御機器を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E72',
		'summary' => __( 'CC2と室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはCC2と室内機間の通信異常を示します。集中制御系と室内機の連携が正常に成立していないときに表示される系統です。まずは関連機器の電源状態と通信配線を確認し、表示状況を控えてください。改善しない場合は制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E73',
		'summary' => __( 'CC3と室内機間の通信異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはCC3と室内機間の通信異常を示します。集中制御系と室内機の連携が正常に成立していないときに表示される系統です。まずは関連機器の電源状態と通信配線を確認し、他の機器の表示も確認してください。改善しない場合は制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E74',
		'summary' => __( 'NR・CC1・CC2のアドレス重複を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはNR・CC1・CC2のアドレス重複を示します。関連制御機器の設定番号が重なっているときに表示される系統です。まずは対象機器のアドレス設定を確認し、重複や設定漏れがないかを見直してください。改善しない場合は設定内容を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E75',
		'summary' => __( 'NR・CC1・CC2の通信回路不良を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはNR・CC1・CC2の通信回路不良を示します。関連制御機器側の通信回路に不具合があるときに表示される系統です。まずは関連機器の電源状態と配線のゆるみの有無を確認してください。改善しない場合は通信回路や制御基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E80',
		'summary' => __( 'エンジン水温異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン水温異常を示します。エンジン関連の保護が働いている可能性があるため、まずは運転を停止し、再始動を繰り返さないでください。表示コードと発生状況を控え、改善しない場合はエンジン系統と冷却系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E81',
		'summary' => __( 'エンジン油圧異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン油圧異常を示します。エンジン保護に関わる重要な表示のため、まずは運転を停止し、継続使用を避けてください。表示コードと発生状況を控え、改善しない場合はエンジン系統の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E82',
		'summary' => __( 'エンジンの過回転を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン過回転を示します。エンジン回転数が正常範囲を外れたときに表示される保護系統です。まずは無理に再始動せず、表示コードを控えてください。改善しない場合はエンジン制御系を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E83',
		'summary' => __( 'エンジンの過小回転を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン過小回転を示します。エンジン回転数が不足して正常運転ができないときに表示される系統です。まずは運転を停止し、再始動を繰り返さないでください。改善しない場合はエンジン制御系を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E84',
		'summary' => __( 'エンジン始動失敗を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン始動失敗を示します。始動動作が正常に完了していないときに表示される系統です。まずは表示コードを控え、連続して再始動を試さないでください。改善しない場合は始動系統やエンジン周辺の点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E85',
		'summary' => __( 'エンジン停止を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン停止を示します。運転中のエンジンが停止したときに表示される系統です。まずは無理に再始動せず、発生状況を控えてください。改善しない場合はエンジン系統と制御系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E86',
		'summary' => __( 'エンジン油圧スイッチの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン油圧スイッチの断線を示します。油圧検知が正常にできないときに表示される系統です。まずは運転を停止し、表示コードを控えてください。改善しない場合はスイッチ、配線、関連回路を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E87',
		'summary' => __( 'エンジン水温センサの断線を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジン水温センサの断線を示します。水温検知が正しくできないときに表示される系統です。まずは運転を停止し、表示コードを控えてください。改善しない場合はセンサ、配線、関連回路を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E88',
		'summary' => __( 'エンジンオイル異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードはエンジンオイル異常を示します。エンジン保護に関わる重要な表示のため、まずは運転を停止し、継続使用を避けてください。改善しない場合はエンジン系統を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
		'open'    => false,
	),
	array(
		'code'    => 'E89',
		'summary' => __( '室外機のセンサ系異常を検知しています。', 'gd-aircon-repair' ),
		'detail'  => array(
			'intro' => array(
				__( 'このコードは室外機のセンサ系異常を示します。室外機側の各種センサ検知が正常に行えないときの区分表示です。まずは表示コードと発生状況を控え、無理に再運転しないでください。改善しない場合はセンサ、配線、基板を含めて点検を依頼してください。', 'gd-aircon-repair' ),
			),
		),
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
				<span class="font-normal text-[#4a5565]"><?php esc_html_e( '三菱重工', 'gd-aircon-repair' ); ?></span>
			</nav>

			<h1 class="max-w-[920px] text-4xl font-bold leading-tight tracking-tight text-[#364153] lg:text-[60px] lg:leading-[60px]">
				<?php esc_html_e( '三菱重工のエラーコード一覧', 'gd-aircon-repair' ); ?>
			</h1>
		</div>
	</section>

	<?php gd_aircon_repair_render_error_code_brand_logos( 2 ); ?>

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

												<?php if ( ! empty( $row['detail']['causes'] ) ) : ?>
												<div>
													<p class="mb-1 text-base font-bold text-[#16374F]"><?php esc_html_e( 'よくある原因', 'gd-aircon-repair' ); ?></p>
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
													<p class="mb-1 text-base font-bold text-[#16374F]"><?php esc_html_e( '確認事項', 'gd-aircon-repair' ); ?></p>
													<ol class="list-decimal space-y-1 pl-5">
														<?php foreach ( $row['detail']['checks'] as $check ) : ?>
															<li><?php echo esc_html( $check ); ?></li>
														<?php endforeach; ?>
													</ol>
												</div>
												<?php endif; ?>

												<?php if ( ! empty( $row['detail']['notice'] ) ) : ?>
												<div>
													<p class="mb-1 text-base font-bold text-[#16374F]"><?php esc_html_e( '注意事項', 'gd-aircon-repair' ); ?></p>
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
