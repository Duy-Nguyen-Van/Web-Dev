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
Route::get('single', ['as'=>'single', 'uses'=>'PageController@getSingle']);
Route::get('checkout', ['as'=>'checkout', 'uses'=>'PageController@getCheckout']);
Route::get('information', ['as'=>'information', 'uses'=>'PageController@getInformation']);
Route::get('contact', ['as'=>'contact', 'uses'=>'PageController@getContact']);
Route::get('account', ['as'=>'account', 'uses'=>'PageController@getAccount']);
Route::get('register', ['as'=>'register', 'uses'=>'PageController@getRegister']);

// Route to login admin page
// Route::get('auth/login', ['as'=>'admin.login', 'uses'=>'LoginAdminController@getLogin']);
// Route::post('auth/login', ['as'=>'admin.login', 'uses'=>'LoginAdminController@postLogin']);
// Route::get('auth/logout', ['as'=>'admin.logout', 'uses'=>'LoginAdminController@getLogout']);

Route::group(['prefix'=>'admin','middleware'=>'checkLoginAdmin'], function(){
    // Manage products
    Route::group(['prefix'=>'product'], function(){
        Route::get('list', ['as'=>'admin.product.list', 'uses'=>'ProductController@getList']);	
        Route::get('add', ['as'=>'admin.product.getAdd', 'uses'=>'ProductController@getAdd']);
        Route::post('add', ['as'=>'admin.product.postAdd', 'uses'=>'ProductController@postAdd']);
        Route::get('delete/{id}', ['as'=>'admin.product.getDelete', 'uses'=>'ProductController@getDelete']);
        Route::get('edit/{id}', ['as'=>'admin.product.getEdit', 'uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}', ['as'=>'admin.product.postEdit', 'uses'=>'ProductController@postEdit']);
    });

    // Manage categories
    Route::group(['prefix'=>'cate'], function(){
        Route::get('list', ['as'=>'admin.cate.list', 'uses'=>'CateController@getList']);	
        Route::get('add', ['as'=>'admin.cate.getAdd', 'uses'=>'CateController@getAdd']);
        Route::post('add', ['as'=>'admin.cate.postAdd', 'uses'=>'CateController@postAdd']);
        Route::get('delete/{id}', ['as'=>'admin.cate.getDelete', 'uses'=>'CateController@getDelete']);
        Route::get('edit/{id}', ['as'=>'admin.cate.getEdit', 'uses'=>'CateController@getEdit']);
        Route::post('edit/{id}', ['as'=>'admin.cate.postEdit', 'uses'=>'CateController@postEdit']);
      
    });
    // Manage user
    Route::group(['prefix'=>'user'], function(){
        Route::get('list', ['as'=>'admin.user.list', 'uses'=>'UserController@getList']);	
        Route::get('add', ['as'=>'admin.user.getAdd', 'uses'=>'UserController@getAdd']);
        Route::post('add', ['as'=>'admin.user.postAdd', 'uses'=>'UserController@postAdd']);     
    });

    // Manage admin account
    Route::group(['prefix'=>'userAdmin'], function(){
        Route::get('list', ['as'=>'admin.userAdmin.list', 'uses'=>'AdminController@getList']);
        Route::get('add', ['as'=>'admin.userAdmin.getAdd', 'uses'=>'AdminController@getAdd']);
        Route::post('add', ['as'=>'admin.userAdmin.postAdd', 'uses'=>'AdminController@postAdd']);  	  
        Route::get('delete/{id}', ['as'=>'admin.userAdmin.getDelete', 'uses'=>'AdminController@getDelete']);
        Route::get('edit/{id}', ['as'=>'admin.userAdmin.getEdit', 'uses'=>'AdminController@getEdit']);
        Route::post('edit/{id}', ['as'=>'admin.userAdmin.postEdit', 'uses'=>'AdminController@postEdit']); 
    });
});