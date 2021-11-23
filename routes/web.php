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
Route::resource('candle', 'CandleController');
Route::resource('fragrance', 'FragranceController');
Route::resource('scent', 'ScentController');
Route::resource('process', 'ProcessController');
Route::resource('test', 'TestController');
Route::resource('jar', 'JarController');
Route::resource('wick', 'WickController');
Route::resource('wax', 'WaxController');

