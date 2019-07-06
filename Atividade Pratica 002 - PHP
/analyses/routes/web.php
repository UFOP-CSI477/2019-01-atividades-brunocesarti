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


Route::get('/', 'PaginasController@index');
Route::get('/home', 'PaginasController@index');
Route::get('/alunos/listar', 'PaginasController@listar');

Route::resource('/estados', 'EstadoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
