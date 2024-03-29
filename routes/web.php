<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArticleController::class, 'index']);

Route::get('/create', [ArticleController::class, 'create']);

Route::post('/store', [ArticleController::class, 'store']);

Route::get('/article', [ArticleController::class, 'article']);

Route::get('/show/{id}', [ArticleController::class, 'show']);

Route::delete('/delete/{id}', [ArticleController::class, 'destroy']);

Route::get('/pricing', [ArticleController::class, 'pricing']);
