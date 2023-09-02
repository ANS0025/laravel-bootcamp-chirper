## Summary
Simple microblogging platform

## Features
- Signup & Login
- Create, edit and delete posts
- New post notification

## Usage
(1) Install Dependencies
```
cd [project folder]
composer install
```

(2) Run docker
```
cd [project folder]
./vendor/bin/sail up -d
```

(3) Create .env file

Duplicate the `.env.example` file and rename to `.env`.

(4) Generate key
```
docker compose exec laravel.test bash
php artisan key:generate
```

(5) Run seeders
```
php artisan db:seed
```
This will create three dummy users and posts.

(6) Login to application

Access http://localhost/login

Email: taro@example.com

Password: password
