# 要件

1. Docker
2. Node.js

## 環境構築

```bash
pnpm install
pnpm wp-start
```

- Username: admin
- Password: password

```bash
# テーマ野有効化
pnpm wp theme activate minimum-theme

# 固定ページ追加
pnpm wp post create --post_type=page --post_title='Test Page 1' --post_status=publish
```
