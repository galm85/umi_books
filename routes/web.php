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
use App\Book;

Route::get('/', 'BookController@index');
Route::get('/create', 'BookController@create');
Route::post('/store', 'BookController@store');
Route::get('/show/{id}', 'BookController@show');
Route::post('/update/{id}', 'BookController@update');
Route::delete('/delete/{id}','BookController@destroy');

