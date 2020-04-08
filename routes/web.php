<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', 'ArticleController@show');
Route::get('/articles/add', 'ArticleController@addArticle');
Route::post('/articles/add', 'ArticleController@saveArticle');
Route::get('/articles/delete/{id}', 'ArticleController@deleteArticle');
Route::get('/articles/edit/{id}', 'ArticleController@editArticle');
Route::post('/articles/edit/{id}', 'ArticleController@updateArticle');




