<?php


use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )
        ->name('dashboard');

    Route::resource('barang', ProductController::class);
    Route::resource('profil', ProfileController::class);
});

require __DIR__ . '/auth.php';
