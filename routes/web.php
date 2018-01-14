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
// Route to index page
Route::get('index', ['as'=>'index', 'uses'=>'PageController@getIndex']);

// Route to product page
Route::get('products/{type}', ['as'=>'products', 'uses'=>'PageController@getProducts']);

// Route to single page
Route::get('single/{id}', ['as'=>'single', 'uses'=>'PageController@getSingle']);

// Route to checkout page
Route::get('checkout', ['as'=>'checkout', 'uses'=>'PageController@getCheckout']);

//Route to put order information into database
Route::post('payment',['as'=>'payment','uses'=>'PageController@postPayment']);

// Route to add product to checkout page
Route::get('add-to-cart/{id}', ['as'=>'add-to-cart', 'uses'=>'PageController@getAddProductToCart']);

// Route to empty all product in checkout page
Route::get('deleteAll', ['as'=>'deleteAll', 'uses'=>'PageController@getDeleteAll']);

// Route to delete each product in checkout page
Route::get('delete/{id}', ['as'=>'delete', 'uses'=>'PageController@getDeleteCart']);

//// Route to update price when increase or decrease qty
Route::get('update/{id}/{qty}', ['as'=>'update', 'uses'=>'PageController@getUpdateCart']);

// Route to information page
Route::get('information', ['as'=>'information', 'uses'=>'PageController@getInformation']);

// Route to contact page
Route::get('contact', ['as'=>'contact', 'uses'=>'PageController@getContact']);

// Route to account page
Route::get('account', ['as'=>'account', 'uses'=>'PageController@getAccount']);

// Route to register page
Route::get('register', ['as'=>'register', 'uses'=>'PageController@getRegister']);

// Route to put register information to database
Route::post('register', ['as'=>'register', 'uses'=>'PageController@postRegister']);

// Route to login with facebook or google
Route::get('login/{provider}', ['as'=>'provider_login', 'uses'=>'PageController@redirectToProvider']);

// Route to login with facebook or google
Route::get('login/{provider}/callback', ['as'=>'provider_login_callback', 'uses'=>'PageController@handleProviderCallback']);

// Route to login admin page
Route::get('auth/login', ['as'=>'admin.login', 'uses'=>'LoginAdminController@getLogin']);
Route::post('auth/login', ['as'=>'admin.login', 'uses'=>'LoginAdminController@postLogin']);
Route::get('auth/logout', ['as'=>'admin.logout', 'uses'=>'LoginAdminController@getLogout']);

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
<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
//Login with Google
Route::get('auth/google',['as' =>'auth/google','uses' =>'Auth\LoginController@redirectToGoogle']);
Route::get('auth/google/callback', ['as' => 'auth/google/callback','uses' => 'Auth\LoginController@handleGoogleCallback']);
//Login with Facebook
Route::get('auth/facebook',['as' =>'auth/facebook','uses' =>'Auth\LoginController@redirectToFacebook']);
Route::get('auth/facebook/callback', ['as' => 'auth/facebook/callback','uses' => 'Auth\LoginController@handleFacebookCallback']);
>>>>>>> ba8ca093239019d2179696a854c17a7cd6517e11
