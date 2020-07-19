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

Route::get('/shop', 'ShopController@index');
Route::get('/shop/buy', 'ShopController@buy');
Route::get('/shop/mypage', 'ShopController@myPage');
Route::get('/shop/thk', 'ShopController@thk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
