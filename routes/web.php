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
Route::get('product', function () {
    return view('product/all');
});
Route::get('shirt', function () {
    return view('product/shirt');
});
Route::get('t-shirt', function () {
    return view('product/t-shirt');
});
