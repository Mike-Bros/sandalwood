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


Route::resource('/', 'HomeController');
Route::resource('home', 'HomeController');

Route::resource('batch', 'BatchController');
Route::get('batch/{id}', 'BatchController@show');

Route::resource('candle', 'CandleController');
Route::get('candle/{id}', 'CandleController@show');

Route::resource('fragrance', 'FragranceController');
Route::get('fragrance/{id}', 'FragranceController@show');

Route::resource('scent', 'ScentController');
Route::get('scent/{id}', 'ScentController@show');

Route::resource('process', 'ProcessController');
Route::get('process/{id}', 'ProcessController@show');

Route::resource('test', 'TestController');
Route::get('test/{id}', 'TestController@show');

Route::resource('jar', 'JarController');
Route::get('jar/{id}', 'JarController@show');

Route::resource('wick', 'WickController');
Route::get('wick/{id}', 'WickController@show');

Route::resource('wax', 'WaxController');
Route::get('wax/{id}', 'WaxController@show');

