<h1 align="center">Tugas Besar PWL</h1>
<p> Helmi Sulaeman 5520119018 IF A 19</p>
<p> Enjoy The Project </p>


## PREVIEW
<p>Link Demo Web yang sudah dihosting</p>
<a href="http://immense-river-47392.herokuapp.com/">Klik Web</a>
<p>Link Demo Video</p>
<a href="https://youtu.be/_3ySWTGIR-A">Klik Youtube</a>
<p>Database</p>
<img src="preview0.png"/>
<p>Login Page</p>
<img src="preview1.png"/>
<p>Dashboard Page</p>
<img src="preview2.png"/>
<p>User Page</p>
<img src="preview3.png"/>
<p>Pengelolaan Barang Page</p>
<img src="preview4.png"/>
<p>Kategori Barang Page</p>
<img src="preview5.png"/>
<p>Merek Barang Page</p>
<img src="preview6.png"/>
<p>Laporan Barang Masuk Page</p>
<img src="preview7.png"/>
<p>Laporan Barang Keluar Page</p>
<img src="preview8.png"/>

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
