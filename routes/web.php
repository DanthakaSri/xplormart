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


Auth::routes();

Route::resource('/shop','MarketController');
Route::resource('/rating','RatingController');

Route::get('/searchT/{type}','SearchController@getMarketByType')->name('searchT');
Route::post('/search','SearchController@getAllSearch')->name('search');

// get routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('contact/', 'CompanyController@contact' );
Route::get('terms/', 'CompanyController@terms' );
Route::get('howitworks/', 'CompanyController@howitworks' );
