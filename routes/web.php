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
    return view('welcome');
});

Route::post('/login','Login\LoginController@loginInfo');
Route::get('/goods','Goods\GoodsController@goods');
Route::get('/goodsList/{goods_id}','Goods\GoodsController@goodsList');
Route::get('/cart/{goods_id}','Goods\GoodsController@cart');
Route::get('/cartlist','Goods\GoodsController@cartlist');