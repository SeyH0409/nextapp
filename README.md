# テーブル設計

## articlesテーブル

| Column             | Type     | Options                   |
| ------------------ | -------- | ------------------------- |
| id                 | integer  |                           |
| nickname           | varchar  | nullable(false)           |
| title              | varchar  | nullable(false)           |
| content            | longtext | nullable(false)           |

## commentsテーブル

| Column             | Type     | Options                   |
| ------------------ | -------- | ------------------------- |
| id                 | integer  |                           |
| article_id         | varchar  | nullable(false)           |
| nickname           | varchar  | nullable(false)           |
| comment            | longtext | nullable(false)           |

### relation
article(1) : comment(n)