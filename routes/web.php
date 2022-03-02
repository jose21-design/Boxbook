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

Auth::routes();

Route::resource('libros',LibrosController::class);

// Route::get('/libros', 'LibrosController@index')->name('libros');
// Route::get('/libros/create', 'LibrosController@create')->name('create');
// Route::post('/libros/store', 'LibrosController@store')->name('store');
// Route::POST('/libros/{id}/edit', 'LibrosController@edit')->name('edit');
// Route::patch('/libros/{libro}', 'LibrosController@update')->name('update');
//Route::resource('libros', 'LibrosController');
Route::get('/home', 'HomeController@index')->name('home');
