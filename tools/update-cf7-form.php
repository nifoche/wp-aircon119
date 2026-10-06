<?php
/**
 * CF7フォーム更新・作成スクリプト（一回限り・実行後削除）
 * URL: /wp-content/themes/wp-aircon119/tools/update-cf7-form.php?token=gd2026
 */

if ( ! isset( $_GET['token'] ) || $_GET['token'] !== 'gd2026' ) {
	http_response_code( 403 );
	die( 'Forbidden' );
}

require_once dirname( __DIR__, 4 ) . '/wp-load.php';

header( 'Content-Type: text/plain; charset=utf-8' );
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

// ── contactページ用 Form 121 のフォーム本文 ──────────────
$contact_body = '<div class="flex flex-col gap-4">
<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
    <label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-name">お名前 <span class="text-red-500">※</span></label>
    [text* your-name id:contact-name placeholder "山田 太郎"]
</div>
<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
    <label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-email">メールアドレス <span class="text-red-500">※</span></label>
    [email* your-email id:contact-email placeholder "yamada@example.com"]
</div>
<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
    <label class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]" for="contact-phone">お電話番号</label>
    [tel your-phone id:contact-phone placeholder "080-1234-5678"]
</div>
<div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:gap-3">
    <p class="w-[140px] shrink-0 text-base font-bold leading-5 text-[#4a5565]">お問い合わせ項目</p>
    <div class="flex sm:h-12 flex-wrap items-center gap-6">
        [radio contact-type default:1 "見積の依頼" "故障の相談" "その他"]
    </div>
</div>
<div class="flex flex-col gap-2 lg:flex-row lg:items-start lg:gap-3">
    <label class="w-[140px] shrink-0 py-3 text-base font-bold leading-5 text-[#4a5565]" for="contact-message">お問い合わせ内容</label>
    [textarea* your-message id:contact-message rows:10 placeholder "お問い合わせ内容を入力してください"]
</div>
<div class="flex flex-col gap-2 lg:flex-row lg:items-start lg:gap-3">
    <p class="lg:w-[140px] shrink-0 py-[11px] text-base font-bold leading-5 text-[#4a5565]">個人情報の<br class="hidden lg:block">取り扱いについて</p>
    <div class="w-full space-y-4">
        <div id="privacy-policy-content" class="h-40 overflow-y-auto rounded-lg border border-gray-300 bg-gray-100 p-3 text-sm leading-7"></div>
        <div>[acceptance privacy-accept] 個人情報保護方針に同意します [/acceptance]</div>
    </div>
</div>
<div class="flex justify-center pt-5">
    <button type="submit" class="inline-flex w-60 items-center justify-center gap-3 rounded bg-[#0084d1] px-5 py-4 text-xl sm:text-2xl font-bold leading-6 text-white shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]">
        <span class="grow text-center">送信する</span>
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 23.3327V4.66602L25.6667 13.9993M5.83333 19.8327L19.6583 13.9993L5.83333 8.16602V12.2493L12.8333 13.9993L5.83333 15.7493M5.83333 19.8327V8.16602V15.7493V19.8327Z" fill="white"/></svg>
    </button>
</div>
<input class="wpcf7-form-control wpcf7-submit has-spinner hidden" type="submit" value="送信する" />
</div>';

// ── TOPページ用フォーム本文 ──────────────────────────────
$top_body = '<div class="">
    <div class="mb-4">
        [text* your-name placeholder "山田 太郎"]
    </div>
    <div class="mb-4">
        [text* your-phone placeholder "080-1234-5678"]
    </div>
    <div class="mb-4">
        [textarea your-message placeholder "お問い合わせ内容をどうぞ"]
    </div>
    <div class="">
        <button class="w-full rounded-sm bg-[#fe9a00] px-4 py-3 lg:py-4 text-xl font-bold leading-7 text-white shadow-[0px_4px_6px_-1px_rgba(0,0,0,0.1),0px_2px_4px_-2px_rgba(0,0,0,0.1)] transition hover:bg-[#e78d00] lg:text-2xl" type="submit">送信する</button>
    </div>
</div>
<input class="wpcf7-form-control wpcf7-submit has-spinner hidden" type="submit" value="送信する" />';

// ── 1. Form 121 を直接更新 ───────────────────────────────
$updated = update_post_meta( 121, '_form', $contact_body );
echo "Form 121 (_form meta): " . ( $updated !== false ? '✓ 更新' : '変更なし(同値)' ) . "\n";

// ── 2. TOPページ用フォームを作成/更新 ────────────────────
$existing = get_posts( [
	'post_type'   => 'wpcf7_contact_form',
	'post_status' => 'publish',
	's'           => 'TOP',
	'numberposts' => 5,
] );

$top_id = null;
foreach ( $existing as $p ) {
	if ( strpos( $p->post_title, 'TOP' ) !== false ) {
		$top_id = $p->ID;
		break;
	}
}

if ( $top_id ) {
	update_post_meta( $top_id, '_form', $top_body );
	echo "TOPフォーム ID={$top_id} 更新完了\n";
} else {
	$top_id = wp_insert_post( [
		'post_type'   => 'wpcf7_contact_form',
		'post_status' => 'publish',
		'post_title'  => 'TOPページお問い合わせ（簡易）',
	] );
	if ( is_wp_error( $top_id ) ) {
		echo "✗ TOPフォーム作成失敗: " . $top_id->get_error_message() . "\n";
	} else {
		update_post_meta( $top_id, '_form', $top_body );
		// CF7 が必要とする初期メタを設定
		update_post_meta( $top_id, '_locale', 'ja' );
		echo "✓ TOPフォーム新規作成 ID={$top_id}\n";
	}
}

echo "\n--- front-page.php に設定するショートコード ---\n";
echo "[contact-form-7 id=\"{$top_id}\" title=\"TOPページお問い合わせ（簡易）\"]\n";
echo "\n完了。このファイルを削除してください。\n";
