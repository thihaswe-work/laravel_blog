<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::post(
    '/comments/add',
    [
        CommentController::class,
        'create'
    ]
);
Route::get('/comments/delete/{id}', [
    CommentController::class,
    'delete'
]);

Route::get('/', ["App\Http\Controllers\ArticleController", 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);
Route::get('/articles/add', [ArticleController::class, 'add']);
Route::post('/articles/add', [
    ArticleController::class,
    'create'
]);
Route::get('/articles/delete/{id}', [
    ArticleController::class,
    'delete'
]);

Route::get('/products', [ProductController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
