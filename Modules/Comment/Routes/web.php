<?php

use Illuminate\Support\Facades\Route;
use Modules\Comment\Http\Controllers\AdminCommentController;
use Modules\Comment\Http\Controllers\CommentController;

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

// admin comment
Route::middleware('auth', 'admin')->prefix('adminity')->group(function () {
    Route::controller(AdminCommentController::class)->prefix('comment')->group(function () {
        Route::get('/', 'index')->name('admin.comment');
        Route::get('/product', 'productComments')->name('admin.product.comment');
        Route::get('/show/{comment}', 'show')->name('admin.comment.show');
        Route::get('/product/show/{comment}', 'productCommentShow')->name('admin.product.comment.show');
        Route::delete('/destroy/{comment}', 'destroy')->name('admin.comment.destroy');
        Route::post('/answer/{comment}', 'answer')->name('admin.comment.answer');
        Route::get('/approve/{comment}', 'approve')->name('admin.comment.approve');
    });
});

// comment
Route::controller(CommentController::class)->prefix('comment')->group(function () {
    Route::post('/store/{post:slug}', 'store')->name('comment.store');
    Route::post('/product/store/{product:slug}', 'productCommentStore')->name('comment.product.store');
    Route::post('/answer/{comment}', 'answer')->name('comment.answer');
});
