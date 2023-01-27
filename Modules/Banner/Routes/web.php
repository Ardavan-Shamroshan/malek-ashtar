<?php

use Modules\Banner\Http\Controllers\AdminBannerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Banner
Route::middleware('auth', 'admin')->prefix('adminity')->group(function () {
    Route::prefix('banner')->group(function () {
        Route::get('/', [AdminBannerController::class, 'index'])->name('admin.banner');
        Route::get('/create', [AdminBannerController::class, 'create'])->name('admin.banner.create');
        Route::post('/store', [AdminBannerController::class, 'store'])->name('admin.banner.store');
        Route::get('/edit/{banner}', [AdminBannerController::class, 'edit'])->name('admin.banner.edit');
        Route::put('/update/{banner}', [AdminBannerController::class, 'update'])->name('admin.banner.update');
        Route::delete('/destroy/{banner}', [AdminBannerController::class, 'destroy'])->name('admin.banner.destroy');
        Route::get('/status/{banner}', [AdminBannerController::class, 'status'])->name('admin.banner.status');
    });
});

// Banner
Route::prefix('banner')->group(function () {
    Route::get('/', 'BannerController@index');
});
