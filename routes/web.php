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

Auth::routes();
//Route::get('register','Auth\RegisterController@showRegistrationForm');

Route::get('logout','Auth\LoginController@logout');

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('auth/azure', 'Auth\LoginController@redirectToProvider')->name('azure.login');
Route::get('auth/azure/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/subscribe','MainController@postSubscribeAjax');


Route::get('/estimation/price','MainController@estimation');
Route::get('/estimation/category','MainController@language_search');
Route::get('/lang/{locale}', 'MainController@lang');
Route::get('/determine/word/minute','MainController@determine');


Route::get('/clear-cache', function() {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('clear-compiled');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
