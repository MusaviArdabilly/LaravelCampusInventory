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

Route::get('/register', 'PageController@register');

Route::get('/login', 'PageController@login')->name('login');

Route::get('/logout', 'AuthController@logout');

Route::post('/postlogin', 'AuthController@login');

Route::post('/postregister', 'AuthController@register');

Route::get('/sendemail','MailController@send');


Route::group(['middleware' => ['auth','role:admin']], function(){

	Route::get('/', 'PageController@dashboard');


	Route::get('fakultas', 'FakultasController@index');
	 
	Route::post('fakultas/import', 'FakultasController@import');

	Route::post('fakultas/store', 'FakultasController@store');

	Route::get('fakultas/edit/{id}', 'FakultasController@edit');

	Route::post('fakultas/update/{id}', 'FakultasController@update');

	Route::get('fakultas/delete/{id}', 'FakultasController@destroy');


	Route::get('jurusan', 'JurusanController@index');
	 
	Route::post('jurusan/store', 'JurusanController@store');

	Route::get('jurusan/edit/{id}', 'JurusanController@edit');

	Route::post('jurusan/update/{id}', 'JurusanController@update');

	Route::get('jurusan/delete/{id}', 'JurusanController@destroy');

	Route::get('jurusan/search', 'JurusanController@search');

	 
	Route::get('ruangan', 'RuanganController@index');
	 
	Route::post('ruangan/store', 'RuanganController@store');

	Route::get('ruangan/edit/{id}', 'RuanganController@edit');

	Route::post('ruangan/update/{id}', 'RuanganController@update');

	Route::get('ruangan/delete/{id}', 'RuanganController@destroy');

	// Route::get('ruangan/search', 'RuanganController@search');

});

 
Route::group(['middleware' => ['auth','role:admin,staff']], function(){

	Route::get('/', 'PageController@dashboard');

	Route::get('barang', 'BarangController@index');

	Route::get('barang/export', 'BarangController@export');
	 
	Route::post('barang/store', 'BarangController@store');

	Route::get('barang/edit/{id}', 'BarangController@edit');

	Route::post('barang/update/{id}', 'BarangController@update');

	Route::get('barang/delete/{id}', 'BarangController@destroy');

	// Route::get('barang/search', 'BarangController@search');

});