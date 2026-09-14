# 業務用エアコン修理サイト（gd-aircon-repair テーマ）

ローカル開発環境の構築手順と、引き継ぎ時の注意点をまとめたドキュメントです。
Claude Code で環境構築を進める場合は、テーマ直下で Claude Code を開き、次のように依頼してください。

```
README.md の手順でローカル開発環境を構築して
```

Claude はこのドキュメントの「4-1」が済んでいるかを確認したうえで、「4-2」以降をコマンドで実行します。

## 1. このリポジトリの範囲

このリポジトリは **WordPress テーマディレクトリのみ** をバージョン管理しています。

- 管理対象: `wp-content/themes/gd-aircon-repair/` 配下
- 管理対象外: WordPress 本体、`wp-config.php`、`.htaccess`、データベース、プラグイン、`wp-content/uploads/`

そのため、リポジトリを clone しただけではサイトは動きません。WordPress 本体とプラグインは公式サイトから取得し、**DB ダンプとアップロード画像は引き継ぎ元から受け取ります。**

| 項目 | 値 |
| --- | --- |
| GitHub リポジトリ | `git@github.com:trylink/wp-aircon119.git` |
| メインブランチ | `master` |
| リモート名 | `github`（`origin` ではありません） |
| ローカルの配置先 | `/Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes/gd-aircon-repair/` |
| ローカルの URL | http://localhost:8888/gd-aircon-repair/ |
| 本番 | XServer `trylink.xsrv.jp/public_html/aircon119/` |
| 本番のテーマディレクトリ名 | `wp-aircon119`（ローカルの `gd-aircon-repair` と名前が違います） |

## 2. 動作確認済み環境

| ソフトウェア | バージョン |
| --- | --- |
| macOS | 15 (Darwin 25.6) |
| MAMP | 6.9（Apache 8888 / MySQL 8889） |
| PHP | 8.1.13（MAMP 同梱） |
| MySQL | 5.7.39（MAMP 同梱） |
| WordPress | 6.9.4（日本語版） |
| Contact Form 7 | 6.1.5 |
| Node.js | 22.11.0 |
| npm | 10.9.0 |
| Tailwind CSS | 3.4.17 |

新しい MAMP では PHP や MySQL のバージョンが上がりますが、テーマの要件は PHP 7.4 以上、WordPress 6.9 は PHP 8.x に対応しているため、そのままで動作する見込みです。

## 3. 引き継ぎ元が渡すもの

1. **GitHub リポジトリへのアクセス権**（`trylink/wp-aircon119` の Collaborator に追加）
2. **引き継ぎ用 zip**（`gd-aircon-repair-handover-YYYYMMDD.zip`）。中身は以下の 2 点です。
   - `gd-aircon-repair-YYYYMMDD.sql`: DB ダンプ
   - `uploads/`: `wp-content/uploads/` の中身（ヘッダーのカスタムロゴ画像）

引き継ぎ用 zip の作成手順（引き継ぎ元の Mac で実行）:

```bash
mkdir -p ~/Desktop/gd-aircon-repair-handover
/Applications/MAMP/Library/bin/mysqldump \
  -u root -proot -h 127.0.0.1 -P 8889 \
  --default-character-set=utf8mb4 --single-transaction --add-drop-table \
  'mamp_gd-aircon-repair' > ~/Desktop/gd-aircon-repair-handover/gd-aircon-repair-$(date +%Y%m%d).sql
cp -R /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/uploads ~/Desktop/gd-aircon-repair-handover/
cd ~/Desktop && zip -r gd-aircon-repair-handover-$(date +%Y%m%d).zip gd-aircon-repair-handover
```

ダンプには WordPress 管理ユーザーの情報が含まれます。**個人のパスワードをそのまま渡さないよう、ダンプ前に共有用アカウントへ差し替えてください。** 現在配布しているダンプはユーザー名 `admin`、パスワード `password` に差し替え済みです（引き継ぎ元のローカル DB は元のアカウントに戻してあります）。

ダンプには管理者のメールアドレスも含まれます。**Git にはコミットせず**、社内の安全な経路で受け渡してください。

## 4. セットアップ手順

### 4-1. 手作業で済ませること（Claude Code を開く前）

以下は管理者パスワードの入力や GUI 操作が必要なため、Claude Code では実行できません。先に済ませてください。

**(1) MAMP をインストールする**

1. https://www.mamp.info/ から MAMP（無償版で可）をダウンロードしてインストール
2. MAMP を起動し `Preferences` の `Ports` タブで Apache `8888` / MySQL `8889` になっていることを確認（初期値のままで可。"Set Web & MySQL ports to 80 & 3306" は押さない）
3. `Server` タブで Document Root が `/Applications/MAMP/htdocs` であることを確認
4. `Start Servers` でサーバーを起動

**(2) Git と Node.js を用意する**

```bash
xcode-select --install          # Git が無い場合
brew install node@22            # Homebrew がある場合。nvm を使うなら nvm install 22
```

**(3) GitHub に SSH 鍵を登録する**

`ssh -T git@github.com` で認証が通ることを確認してください。

**(4) テーマを最終的な場所に clone する**

WordPress 本体より先に、テーマだけを最終パスへ置きます。この後 WordPress 本体を周りに展開しても衝突しません。

```bash
mkdir -p /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes
cd /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes
git clone git@github.com:trylink/wp-aircon119.git gd-aircon-repair
cd gd-aircon-repair
git remote rename origin github
```

**(5) 引き継ぎ用 zip をデスクトップに展開する**

`~/Desktop/gd-aircon-repair-handover/` の直下に `.sql` と `uploads/` がある状態にしてください。

ここまで済んだら、テーマ直下で Claude Code を開き「README.md の手順でローカル開発環境を構築して」と依頼します。

### 4-2. Claude Code に任せる手順（手動で行う場合も同じ）

以下はすべてターミナルで完結します。Claude Code はここから先を実行します。手動で進める場合は上から順に実行してください。

**(A) MAMP のサーバーが起動していることを確認する**

```bash
/Applications/MAMP/bin/start.sh
curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8888/   # 200 なら OK
```

**(B) WordPress 本体（日本語版）を展開する**

```bash
curl -L -o /tmp/wordpress-ja.tar.gz https://ja.wordpress.org/latest-ja.tar.gz
tar -xzf /tmp/wordpress-ja.tar.gz -C /tmp
rsync -a /tmp/wordpress/ /Applications/MAMP/htdocs/gd-aircon-repair/
```

`rsync -a` は既存ファイルを残したまま追加するので、clone 済みのテーマはそのまま残ります。

**(C) wp-config.php を作成する**

```bash
cd /Applications/MAMP/htdocs/gd-aircon-repair
cp wp-config-sample.php wp-config.php
sed -i '' \
  -e "s/database_name_here/mamp_gd-aircon-repair/" \
  -e "s/username_here/root/" \
  -e "s/password_here/root/" \
  wp-config.php

# 認証キーを公式 API から取得して差し替える
curl -s https://api.wordpress.org/secret-key/1.1/salt/ > /tmp/wp-salt.txt
sed -i '' '/put your unique phrase here/d' wp-config.php
sed -i '' '/^\$table_prefix/r /tmp/wp-salt.txt' wp-config.php

# 開発用にエラーログを有効化（任意）
sed -i '' "s/define( 'WP_DEBUG', false );/define( 'WP_DEBUG', true );\ndefine( 'WP_DEBUG_LOG', true );\ndefine( 'WP_DEBUG_DISPLAY', false );/" wp-config.php
```

結果として次の値になっていれば正しい状態です。

```php
define( 'DB_NAME', 'mamp_gd-aircon-repair' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
$table_prefix = 'wp_';
```

**(D) .htaccess を作成する**

DB 側でパーマリンクが有効になっているため、これが無いとトップページ以外が 404 になります。

```bash
cat > /Applications/MAMP/htdocs/gd-aircon-repair/.htaccess <<'HTACCESS'
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /gd-aircon-repair/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /gd-aircon-repair/index.php [L]
</IfModule>
# END WordPress
HTACCESS
```

**(E) データベースを作成してダンプをインポートする**

MAMP 同梱の mysql クライアントは、MAMP のバージョンによって配置が異なるため `find` で探します。

```bash
MYSQL=$(find /Applications/MAMP/Library/bin -name mysql -type f -perm +111 | head -1)
echo "$MYSQL"   # 例: /Applications/MAMP/Library/bin/mysql

"$MYSQL" -u root -proot -h 127.0.0.1 -P 8889 \
  -e "CREATE DATABASE \`mamp_gd-aircon-repair\` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

"$MYSQL" -u root -proot -h 127.0.0.1 -P 8889 'mamp_gd-aircon-repair' \
  < ~/Desktop/gd-aircon-repair-handover/gd-aircon-repair-*.sql
```

phpMyAdmin（http://localhost:8888/phpMyAdmin/ ）から DB を作成してインポートしても構いません。

**(F) アップロード画像を配置する**

```bash
cp -R ~/Desktop/gd-aircon-repair-handover/uploads /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/
```

**(G) Contact Form 7 を配置する**

DB 側で有効化済みとして記録されているため、ファイルを置くだけで有効になります。

```bash
curl -L -o /tmp/cf7.zip https://downloads.wordpress.org/plugin/contact-form-7.zip
unzip -q /tmp/cf7.zip -d /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/plugins/
```

**(H) npm パッケージをインストールする**

```bash
cd /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes/gd-aircon-repair
npm install
```

### 4-3. 動作確認

```bash
BASE=http://localhost:8888/gd-aircon-repair
for p in / /symptoms/ /types/ /error-codes/ /error-codes/panasonic/ /contact/; do
  printf "%s -> " "$p"; curl -s -o /dev/null -w "%{http_code}\n" "$BASE$p"
done
curl -s "$BASE/wp-json/wp/v2/pages?slug=privacy-policy" | head -c 120; echo
```

すべて `200` が返り、最後の REST API の応答に JSON が含まれていれば成功です。ブラウザでも以下を確認してください。

| 用途 | URL |
| --- | --- |
| サイト表示 | http://localhost:8888/gd-aircon-repair/ |
| 管理画面 | http://localhost:8888/gd-aircon-repair/wp-admin/ |
| phpMyAdmin | http://localhost:8888/phpMyAdmin/ |

管理画面には、配布ダンプに入っている共有用アカウントでログインできます。

| ユーザー名 | パスワード |
| --- | --- |
| `admin` | `password` |

**最初のログイン時にパスワードとメールアドレスを自分のものへ変更してください。** ヘッダーにロゴ画像が表示され、トップページ、症状一覧、エラーコード各社ページ、お問い合わせページが表示されれば完了です。

## 5. 日々の開発フロー

### CSS のビルド

スタイルは Tailwind CSS で `assets/css/src/input.css` から `assets/css/app.css` を生成しています。編集中は watch を起動しておきます。

```bash
npm run watch    # 変更を監視して assets/css/app.css を再生成
```

`assets/css/app.css` は **Git にコミットします**。本番サーバーでは `git pull` するだけでビルドは走らないため、ビルド済み CSS がコミットされていないと本番のスタイルが崩れます。

`npm run build` は `--minify` 付きで出力するため、現在コミットされている非圧縮の `app.css` と全行差分になります。**通常は `npm run watch` の出力をコミットしてください。** 圧縮版に切り替える場合はチーム内で方針を合わせてから行ってください。

### コミットとデプロイ

`master` に push すると GitHub Actions（`.github/workflows/deploy.yml`）が XServer に SSH 接続し、本番テーマディレクトリで `git pull origin master` を実行します。**master への push はそのまま本番反映です。**

```bash
git add -A
git commit -m "変更内容"
git push github master   # リモート名は github
```

Actions が使う Secrets は `XSERVER_HOST` / `XSERVER_USER` / `XSERVER_SSH_KEY` / `XSERVER_PORT` です。設定済みなので、引き継ぎ時に触る必要はありません。

## 6. 引き継ぎ時の注意点（ハマりどころ）

### 6-1. Contact Form 7 のフォーム ID が DB に依存している

お問い合わせフォームはショートコードのハッシュ ID で埋め込まれており、**DB を作り直すと ID が変わって表示されなくなります**。

| 設置場所 | 記述箇所 | 現在の ID |
| --- | --- | --- |
| TOP ページ | `front-page.php`（テーマ側にハードコード） | `e2578fa`（TOPページお問い合わせ） |
| お問い合わせページ | 固定ページ「contact」の本文 | `e98ecb6`（お問い合わせ） |

DB ダンプをインポートしていれば一致するので問題ありません。フォームを作り直した場合は、上記 2 箇所の ID を新しいものに差し替えてください。

### 6-2. 固定ページとテンプレートの対応

ページテンプレートは固定ページのスラッグ、または管理画面の「テンプレート」設定で紐付いています。ページ自体は DB 側にあるため、**新規 WordPress にテーマだけ入れても各ページは表示されません**。

主な構成は次のとおりです。

- 親: `symptoms`（症状）→ 子: `water-leak` / `not-cooling` / `not-heating` / `stops-unexpectedly` / `strange-noise` / `frost-ice` / `no-airflow` / `remote-control-issues` / `condensation` / `power-outage` / `bad-smell`
- 親: `types`（形状）→ 子: `tenkase` / `tentsuri` / `kabekake` / `yukaoki` / `duct` / `builtin` / `kitchen`
- 親: `error-codes`（エラーコード、ダイキン）→ 子: `panasonic` / `mitsubishi` / `mitsubishi-el` / `hitachi` / `toshiba`（テンプレートは `page-error-code-*.php`）
- `contact` / `privacy-policy`

トップページは固定ページではなく `front-page.php` が直接使われます。

### 6-3. ヘッダーのロゴは uploads に依存している

ヘッダーのロゴはカスタムロゴ機能（`the_custom_logo()`）で `wp-content/uploads/2026/05/logo*.png` を参照しています。uploads を配置していないとロゴが壊れた画像になります。テーマ側の `assets/images/logo.png` は別の用途で使われているもので、代替にはなりません。

### 6-4. Figma のローカルアセット URL が残っている

`footer.php`、`page-symptoms.php`、`page-types.php` に `http://localhost:3845/assets/...` という URL が残っています。これは Figma デスクトップアプリの Dev Mode MCP サーバーが配信するローカル URL で、**Figma を起動していない環境では画像が表示されません**。本番でも同様に表示されないため、恒久対応としてはテーマの `assets/images/` に画像を配置して差し替える必要があります。

### 6-5. プライバシーポリシーは REST API で差し込んでいる

お問い合わせページのプライバシーポリシー本文は、`assets/js/contact-privacy-policy.js` が REST API（`/wp-json/wp/v2/pages?slug=privacy-policy`）から取得して表示しています。パーマリンク設定や REST API が無効だと空欄になります。

### 6-6. サイト URL がローカル環境に固定されている

DB の `siteurl` と `home` は `http://localhost:8888/gd-aircon-repair` です。ポートやディレクトリ名を変えた場合は、DB の `wp_options` を書き換えるか `wp-config.php` に以下を追記してください。

```php
define( 'WP_HOME', 'http://localhost:8888/gd-aircon-repair' );
define( 'WP_SITEURL', 'http://localhost:8888/gd-aircon-repair' );
```

### 6-7. PHP CLI は MAMP のものと別

`php` コマンドが Homebrew 版を指している場合があります。MAMP と同じ PHP で確認したいときは、`/Applications/MAMP/bin/php/php*/bin/php` をフルパスで実行してください。

## 7. Claude Code で開発する場合

Claude Code は**テーマディレクトリをカレントディレクトリにして起動**してください。Git リポジトリのルートと一致し、差分やコミットの操作がそのまま使えます。テーマ直下の `CLAUDE.md` に開発の前提が書いてあり、起動時に自動で読み込まれます。

```bash
cd /Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes/gd-aircon-repair
claude
```

Claude Code はコマンド実行のたびに承認を求めます。環境構築のように連続してコマンドを流す作業では、承認の挙動を理解したうえで進めてください。`master` への push は本番デプロイなので、Claude Code に push を任せる場合は差分を確認してから実行してください。

Figma のデザインを参照する作業では、Figma デスクトップアプリを起動し Dev Mode MCP サーバーを有効にしておく必要があります。

## 7. 記事の自動登録（content/ → WordPress）

記事ページの本文・タイトル・URL・SEO設定・画像は `content/` で管理し、`master` への push 時に GitHub Actions が本番へ同期します（`tools/sync-content.php`）。

```
content/
├── site.json                 サイト名・トップのSEO・既存ページのSEO・ページの移動/ゴミ箱
└── pages/<任意のID>/
    ├── page.json             path（例 guide/where-to-ask）・title・seo_title・description・status・eyecatch・images
    ├── body.html             本文。{{HOME}} はサイトURLに、<!-- image:ファイル名 --> は画像に置換
    └── *.jpg                 アイキャッチ・本文中の画像
```

- **新規ページは `status`（既定 `draft`）で作成**します。既存ページの公開状態は変更しません。公開は管理画面で行ってください。
- 何度実行しても重複しません（ページは URL で、画像はファイル内容のハッシュで照合）。
- 親ページは先に作られます。親が存在しない場合はスキップしてログに出します。
- ローカルでの確認：`php tools/sync-content.php --dry-run`（変更せず予定だけ表示）→ `php tools/sync-content.php`
- 手動で本番に同期したい場合は、GitHub の Actions 画面から「Deploy to XServer」を `Run workflow` で実行できます。
- `tools/` と `content/` は `.htaccess` で Web からのアクセスを禁止し、スクリプト自体も CLI 以外では動きません。
- 管理画面の固定ページ編集画面に「SEO（検索結果の表示）」欄があり、SEOタイトルと説明文を手で直せます。ただし `content/` に同じページがある場合、次回の同期で `content/` の値に戻ります。
