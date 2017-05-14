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
Route::resource('admin', 'Administrador_controller');
Route::resource('equipos','EquiposController');
Route::resource('sorteos','SorteosController');










<<<<<<< HEAD
=======
// Rutas solo permitidas a usuarios registrados
Route::group(['middleware'=>'auth'], function(){
});




>>>>>>> refs/remotes/origin/Apineda
Route::get('/', function () {
    return view('index');
});

Route::get('resultados', function () {
    return view('resultados');
})->name('resultados');

Auth::routes();

Route::get('usuario/', 'UsuarioController@index')->name('profile');

Route::get('usuario/{id}/recarga', 'UsuarioController@add_money')->name('profile.recarga');

Route::get('usuario/{id}', 'UsuarioController@show');

<<<<<<< HEAD
Route::resource('usuario/{id}/sorteos', 'SorteoController');

//Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> refs/remotes/origin/Apineda
