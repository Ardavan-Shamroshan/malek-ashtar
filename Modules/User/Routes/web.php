<?php

use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\ProfileController;

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


use Modules\User\Http\Controllers\AdminUserController;


Route::middleware('auth', 'admin')->prefix('adminity')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.user');
        Route::get('/create', [AdminUserController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [AdminUserController::class, 'store'])->name('admin.user.store');
        Route::get('/edit/{user}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/update/{user}', [AdminUserController::class, 'update'])->name('admin.user.update');
        Route::delete('/destroy/{user}', [AdminUserController::class, 'destroy'])->name('admin.user.destroy');
        Route::get('/activate/{user}', [AdminUserController::class, 'activate'])->name('admin.user.activate');
        // get permissions for ajax
        Route::get('/get-permissions/{id}', [AdminUserController::class, 'getPermissions'])->name('admin.user.get-permissions');
    });
});


// Profile
Route::middleware('auth')->controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/', 'index')->name('profile');
    Route::get('/orders', 'orders')->name('profile.orders');
    Route::get('/addresses', 'addresses')->name('profile.addresses');
    Route::get('/favorites', 'favorites')->name('profile.favorites');
});


// Profile Completion
Route::controller(ProfileCompletionController::class)->prefix('profile-completion')->group(function () {
    Route::get('/', 'profileCompletion')->name('profile-completion');
    Route::post('/', 'completion')->name('profile-completion.completion');
});
