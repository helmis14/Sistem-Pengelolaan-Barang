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
    Route::resource('brand', BrandController::class);
    Route::resource('kategori', CategorieController::class);
    Route::resource('pegawai', UserController::class);
    Route::resource('jabatan', RoleController::class);
    Route::get('laporan/barang',[ProductController::class, 'report'])->name('laporan.barang');
    Route::get('laporan/transaksi',[TransactionController::class, 'report'])->name('laporan.transaksi');
    Route::resource('profil', ProfileController::class);
});

require __DIR__ . '/auth.php';
