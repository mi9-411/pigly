# pigly

# 環境構築
1.cd coachtech/laravel/pigly
2.DockerDesktopアプリを立ち上げる
3.docker-compose up -d --build
4.git init

# laravel環境構築
1.docker-compose exec php bash
2.composer install
3..envに以下の環境変数を追加

 DB_CONNECTION=mysql
 DB_HOST=mysql
 DB_PORT=3306
 DB_DATABASE=laravel_db
 DB_USERNAME=laravel_user
 DB_PASSWORD=laravel_pass

5.アプリケーションキーの作成

php artisan key:generate

6.マイグレーションの実行

php artisan migrate

7.シーディングの実行

php artisan db:seed

8.シンボリックリンク作成

php artisan storage:link

# 使用技術（実行環境）
・PHP8.3.0
・Laravel8.83.27
・MySQL8.0.26

# ER図
![index](https://github.com/user-attachments/assets/6e07741e-e54f-4b2d-b744-4022e5bedf4d)
