<?php


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


Route::get('/posts', 'PostController@index');//PostControllerの中のindexを実行する
Route::get('/posts/create', 'PostController@create');//画面を表示するためのルーティングの追加
Route::post('/posts', 'PostController@store');//ブログ投稿作成実行用のルーティングの追加
Route::get('/posts/{post}', 'PostController@show');
