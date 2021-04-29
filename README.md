<h1 align="center">Tugas Besar PWL</h1>
<p> Enjoy the project
</p>

## PREVIEW
<p>Database</p>
<img src="preview0.png"/>
<p>Login Page</p>
<img src="preview1.png"/>
<p>Dashboard Page</p>
<img src="preview2.png"/>
<p>User Page</p>
<img src="preview3.png"/>

## Install

```sh
npm install
composer install
```
```sh

## Fix if php error  
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

## Account

```sh
Admin
Email    : admin@unsur.com
password : 123456
```

```sh
User
Email    : user@unsur.com
password : 123456
```

```sh
Pegawai
Email    : pegawai@unsur.com
password : 123456
```
