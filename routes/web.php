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

Route::get('index', ['as'=>'index', 'uses'=>'PageController@getIndex']);

Route::get('products', ['as'=>'products', 'uses'=>'PageController@getProducts']);

Route::get('shirt', ['as'=>'shirt', 'uses'=>'PageController@getShirt']);

Route::get('t-shirt', ['as'=>'t-shirt', 'uses'=>'PageController@getTshirt']);

