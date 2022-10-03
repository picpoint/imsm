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





Route::get('/', 'HomepageController@index')->name('index');
Route::get('/admin', 'Admin\IndexPageController@index');
Route::get('/lk', 'LkController@index')->name('lk');