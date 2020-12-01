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




Route::get('/', 'MainController@index');
Route::get('/estimation/price','MainController@estimation');
Route::get('/estimation/category','MainController@language_search');
Route::get('/lang/{locale}', 'MainController@lang');
Route::get('/determine/word/minute','MainController@determine');
