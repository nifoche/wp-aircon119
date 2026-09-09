# gd-aircon-repair テーマ

業務用エアコン修理サイトの WordPress テーマ。このリポジトリはテーマディレクトリのみを管理している。
環境情報、構築手順、ハマりどころの詳細はすべて `README.md` にある。作業前に必ず読むこと。

## ローカル開発環境の構築を頼まれたら

- `README.md` の「4. セットアップ手順」に従う。
- まず「4-1」の前提が揃っているか確認する（MAMP がインストール済みで起動している、Git と Node.js がある、テーマが `/Applications/MAMP/htdocs/gd-aircon-repair/wp-content/themes/gd-aircon-repair/` に clone 済み、`~/Desktop/gd-aircon-repair-handover/` に `.sql` と `uploads/` がある）。足りないものは手順を提示してユーザーの作業を待つ。
- 「4-2」の (A) から (H) はコマンドで完結するので順に実行する。各ステップの前に既存のファイルや DB が無いか確認し、あるものは上書きせずユーザーに確認する。
- MAMP のインストールや設定画面の操作など、管理者パスワードや GUI が必要なものは実行せず、手順だけ案内する。
- 最後に「4-3」の疎通確認を実行し、結果を報告する。

## 開発の前提

- スタイルは Tailwind CSS 3。ユーティリティクラスをテンプレートに直接書く。共通パーツだけ `assets/css/src/input.css` の `@layer components` に定義する。
- `assets/css/app.css` はビルド成果物だがコミット対象。`npm run watch` の出力（非圧縮）をそのままコミットする。`npm run build` は `--minify` 付きで全行差分になるので使わない。
- 動的に組み立てるクラス名は Tailwind が検出できない。`tailwind.config.js` の `safelist` に追加する。
- 固定ページは DB 側に存在する。テーマに `page-{slug}.php` を追加するだけでは表示されず、管理画面での固定ページ作成が必要。
- Contact Form 7 のフォーム ID はハッシュで DB に依存する。`front-page.php` と固定ページ「contact」の本文に埋め込まれている。
- `footer.php` / `page-symptoms.php` / `page-types.php` に `http://localhost:3845/` の Figma ローカル URL が残っている。既知の課題で、Figma 未起動時は画像が出ない。
- MAMP の mysql クライアントは `/Applications/MAMP/Library/bin/` 配下にある。接続は `-u root -proot -h 127.0.0.1 -P 8889`、DB 名は `mamp_gd-aircon-repair`。

## Git とデプロイ

- リモート名は `github`（`origin` ではない）。ブランチは `master`。
- `master` への push は GitHub Actions で本番（XServer）に即時デプロイされる。push は必ずユーザーの確認を取ってから行う。
- `*.sql` はコミットしない（`.gitignore` 済み）。
