# テーブル設計

## articlesテーブル

| Column             | Type     | Options                   |
| ------------------ | -------- | ------------------------- |
| id                 | integer  |                           |
| nickname           | string   | nullable(false)           |
| title              | string   | nullable(false)           |
| content            | longText | nullable(false)           |

## commentsテーブル

| Column             | Type     | Options                   |
| ------------------ | -------- | ------------------------- |
| id                 | integer  |                           |
| article_id         | integer  | nullable(false)           |
| nickname           | string   | nullable(false)           |
| comment            | longText | nullable(false)           |

### relation
article(1) : comment(n)