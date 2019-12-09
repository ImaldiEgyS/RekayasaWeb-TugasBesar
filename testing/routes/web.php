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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'PagesController@home');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/memory', 'MemoryController@index');
Route::get('/admin/memory/create', 'MemoryController@create');
Route::post('/admin/memory', 'MemoryController@store');

Route::delete('/admin/memory/{memory}', 'MemoryController@destroy');
Route::get('/admin/memory/{memory}/update', 'MemoryController@edit');
Route::patch('/admin/memory/{memory}', 'MemoryController@update');

// Route::resource('memory', ''MemoryController');