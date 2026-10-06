<?php
/**
 * 一回限りのCF7フォーム更新スクリプト
 * 使用後は削除すること
 *
 * 実行: https://repair-aircon.com/wp-content/themes/wp-aircon119/tools/update-cf7-form.php?token=gd2026
 */

// シンプルなトークン保護
if ( ! isset( $_GET['token'] ) || $_GET['token'] !== 'gd2026' ) {
	http_response_code( 403 );
	exit( 'Forbidden' );
}

// WordPress を読み込む
$wp_load = dirname( __DIR__, 4 ) . '/wp-load.php';
if ( ! file_exists( $wp_load ) ) {
	exit( 'wp-load.php not found: ' . $wp_load );
}
require_once $wp_load;

$form_id = 121;
$form_body = '<div class="flex flex-col gap-4">
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
        <div>
            [acceptance privacy-accept] 個人情報保護方針に同意します [/acceptance]
        </div>
    </div>
</div>

<div class="flex justify-center pt-5">
    <button type="submit" class="inline-flex w-60 items-center justify-center gap-3 rounded bg-[#0084d1] px-5 py-4 text-xl sm:text-2xl font-bold leading-6 text-white shadow-[0px_10px_15px_-3px_rgba(0,0,0,0.1),0px_4px_6px_-4px_rgba(0,0,0,0.1)] transition hover:bg-[#0076bc]">
        <span class="grow text-center">送信する</span>
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.5 23.3327V4.66602L25.6667 13.9993M5.83333 19.8327L19.6583 13.9993L5.83333 8.16602V12.2493L12.8333 13.9993L5.83333 15.7493M5.83333 19.8327V8.16602V15.7493V19.8327Z" fill="white"/>
        </svg>
    </button>
</div>

<div class="hidden">
    [submit "送信する"]
</div>
</div>';

// CF7フォームを取得
$contact_form = WPCF7_ContactForm::get_instance( $form_id );
if ( ! $contact_form ) {
	exit( "CF7 form {$form_id} not found." );
}

// フォームテンプレートを更新
$contact_form->set_properties( [
	'form' => [
		'body' => $form_body,
	],
] );
$result = $contact_form->save();

if ( $result ) {
	echo "✓ CF7フォームID={$form_id} を更新しました。\n";
	echo "このファイルは削除してください: tools/update-cf7-form.php\n";
} else {
	echo "✗ 更新に失敗しました。\n";
}
