## Summary
Simple microblogging platform

## Features
- Signup & Login
- Create, edit and delete posts
- New post notification

## Usage
1. Run docker
```
cd [project folder]
./vendor/bin/sail up -d
```

2. Run seeders
```
docker compose exec laravel.test bash
php artisan db:seed
```
This will create three dummy users and posts.

3. Login to application
Access http://localhost/login

Email: taro@example.com

Password: password