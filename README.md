# Laravel fortify multi-auth example


## Video Tutorial

 **[ ▶️ Laravel fortify multi-auth Tutorial](https://www.youtube.com/watch?v=x8PfZqMXn5U)**

## Setup

Download or clone this repo
```shell
$ git clone https://github.com/qirolab/laravel-fortify-multi-auth-example.git
```

Install all dependency required by Laravel.
```shell
$ composer install
```

Generate app key, configure `.env` file and do migration.
```shell
# create copy of .env
$ cp .env.example .env

# create Laravel key
$ php artisan key:generate
```

Next, add your database credentials in `.env` file and then run migrations.
```shell
# run migration
$ php artisan migrate --seed
```
