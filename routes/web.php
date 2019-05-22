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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/misPedidos', 'pedibeerController@pedidosUsuario')->middleware('auth', 'role:user');
Route::get('/pedir', 'pedibeerController@index')->middleware('auth', 'role:user');
Route::get('/contacto', 'miController@create')->middleware('auth', 'role:user');
Route::get('/historial', 'pedibeerController@show')->middleware('auth', 'role:admin');//para usuario administrador
Route::get('/stock', 'pedibeerController@mostrarStock')->middleware('auth', 'role:admin');
Route::resource('/pedidos', 'pedibeerController')->middleware('auth', 'role:user');




Auth::routes();

Route::get('/', 'HomeController@index')->name('inicio')->middleware('auth', 'role:user');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
