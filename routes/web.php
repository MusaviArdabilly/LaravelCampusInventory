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
//     return view('welcome');
// });

Route::get('/', 'PageController@dashboard');


Route::get('fakultas', 'FakultasController@index');
 
Route::post('fakultas/store', 'FakultasController@store');

Route::get('fakultas/edit/{id}', 'FakultasController@edit');

Route::post('fakultas/update/{id}', 'FakultasController@update');

Route::get('fakultas/delete/{id}', 'FakultasController@destroy'); //

 
Route::get('jurusan', 'JurusanController@index');

Route::get('jurusan/search', 'JurusanController@search');
 
Route::post('jurusan/store', 'JurusanController@store');

Route::get('jurusan/edit/{id}', 'JurusanController@edit');

Route::post('jurusan/update/{id}', 'JurusanController@update');

Route::get('jurusan/delete/{id}', 'JurusanController@destroy');



Route::get('/login', 'PageController@login');

Route::get('/register', 'PageController@register');