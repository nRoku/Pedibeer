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
*//*
Route::get('/inicio', 'pedibeerController@index');
Route::get('/', 'pedibeerController@index');*/
Route::get('/pedir', 'pedibeerController@index');
Route::get('/administrar', 'miController@create')->middleware('auth', 'role:admin');
//Route::get('/historial', 'pedibeerController@show');

Route::resource('/pedidos', 'pedibeerController');





Auth::routes();

Route::get('/', 'HomeController@index')->name('inicio');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
