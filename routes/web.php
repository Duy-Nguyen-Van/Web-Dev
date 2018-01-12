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

Route::get('index', ['as'=>'index', 'uses'=>'PageController@getIndex']);

Route::get('products', ['as'=>'products', 'uses'=>'PageController@getProducts']);

Route::get('single', ['as'=>'single', 'uses'=>'PageController@getSingle']);

Route::get('checkout', ['as'=>'checkout', 'uses'=>'PageController@getCheckout']);

Route::get('contact', ['as'=>'contact', 'uses'=>'PageController@getContact']);

Route::get('account', ['as'=>'account', 'uses'=>'PageController@getAccount']);

Route::get('register', ['as'=>'register', 'uses'=>'PageController@getRegister']);
