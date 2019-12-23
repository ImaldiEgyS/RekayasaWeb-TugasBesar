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

Route::get('/', 'ProductsController@index');
Route::get('cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/detail/{product}', 'ProductsController@show');
Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');

Route::resource('/admin', 'AdminController');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('admin/admin', 'HomeController@admin');

//Admin
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/admin', function() {
        return view('admin/admin');
    });
});

