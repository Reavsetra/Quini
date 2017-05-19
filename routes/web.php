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

Route::get('como-jugar', function () {
    return view('como');
})->name('como');

Auth::routes();

Route::get('/home', function () {
    if(Auth::check()) {
        return redirect('/usuario');
    } else {
        return redirect('/register');
    }
});

Route::get('usuario/', 'UsuarioController@index')->name('profile');

Route::get('usuario/{id}/recarga', 'UsuarioController@add_money')->name('profile.recarga');

Route::get('usuario/{id}', 'UsuarioController@show');

Route::resource('usuario/{id}/combinacion', 'CombinacionController');

Route::resource('admin', 'Administrador_controller');
Route::resource('equipos','EquiposController');
Route::resource('sorteos','SorteosController');