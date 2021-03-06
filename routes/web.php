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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/carrera','CarreraController');
Route::resource('/usuario','userController');
Route::post('/admin-usuario/asociar-programa','AdminUsuarioController@asociarPrograma');
Route::resource('/programa/{rol?}','ProgramaController',['except'=>'index']);
Route::get('/programa','ProgramaController');
//Route::resource('/carrera','CarreraController@index');
//Route::resource('/carrera/nueva','CarreraController@create');
//Route::post('/carrera','usuarioController@user')