<?php

use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\HomeController as Home;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [Home::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/admin/home', [Admin::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');

    Route::resource('barang', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('kategori', CategorieController::class);
    Route::resource('pegawai', UserController::class);
    Route::resource('jabatan', RoleController::class);
    Route::resource('profil', ProfileController::class);
