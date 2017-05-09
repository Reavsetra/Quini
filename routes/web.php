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
    return view('index');
});

Route::get('resultados', function () {
    return view('resultados');
})->name('resultados');

Auth::routes();

Route::get('usuario/', 'UsuarioController@index')->name('profile');

Route::get('usuario/{id}', 'UsuarioController@show');

Route::resource('usuario/{id}/sorteos', 'SorteoController');

//Route::get('/home', 'HomeController@index')->name('home');