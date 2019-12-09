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

// Halaman Utama
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', function () {
  $link = '';
    return view('admin/index', ['link' => $link]);
});

Route::get('/admin/memory', function () {
    $link = '../';
    return view('admin/memory', ['link' => $link]);
});
