<h1 align="center">Tugas Besar PWL</h1>
<p> Enjoy th project
</p>

<h3>#PREVIEW#<h3>
<p>Login Page</p>
<img src="preview1.jpg" />

## Install

```sh
npm install
composer install
```
```sh
## fix if php error  
composer self-update
composer clear-cache
rm -rf vendor
rm composer.lock
composer install --ignore-platform-reqs
```
## Usage

```sh
cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
php artisan storage:link
```

## Run tests

```sh
php artisan serve
```

## Show your support

Give a ⭐️ if this project helped you!
