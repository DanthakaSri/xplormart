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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::resource('/shop','MarketController');
Route::get('/shop','MarketController@index');
Route::get('/view','MarketController@show');
Route::get('/home', 'HomeController@index')->name('home');
