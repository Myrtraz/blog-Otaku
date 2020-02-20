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
    return redirect()->to('/home');
});

Route::resource('/home', 'HomeController');
Route::resource('/contenido', 'ContenidoController');
Route::resource('/contact', 'ContactController');
Route::resource('/view', 'ViewController');
Route::resource('/novedad', 'NovedadController');
Route::resource('/login', 'LoginController');

Route::group(['middleware' => 'auth'], function() {
	Route::resource('/admin', 'AdminController');
	Route::resource('/photo', 'PhotoController');
});

