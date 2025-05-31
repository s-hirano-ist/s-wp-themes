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
pnpm wp core install --url=http://localhost:8888 --title="EXAMPLE PAGE" --admin_user=admin --admin_password=password --admin_email=me@example.com
```

```bash
pnpm wp theme activate THEME_NAME

# 固定ページ追加
pnpm wp post create --post_type=page --post_title='Test Page 1' --post_status=publish
```
