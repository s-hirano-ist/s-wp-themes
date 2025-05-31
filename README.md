# 要件

1. Docker
2. Node.js
3. WP-CLI

## 環境構築

```bash
pnpm install
# WordPressの起動
pnpm wp-start
# wp-adminの初期設定
pnpm wp core install --url=http://localhost:8888 --title="YOUR_WP_TITLE" --admin_user=YOUR_USERNAME --admin_password=YOUR_PASSWORD --admin_email=YOUR_EMAIL_ADDRESS
```

```bash
pnpm wp theme activate my-block-theme

# 固定ページ追加
pnpm wp post create --post_type=page --post_title='Test Page Soraki' --post_status=publish
```
