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

Route::get('/', function () { return view('home'); });
Route::get('/home', function () { return view('home'); });
Route::resource('/candidato', 'CandidatoController');
Route::resource('/professor', 'ProfessorController');
Route::resource('/processoseletivo', 'ProcessoseletivoController');
Route::resource('/users', 'UserController');
Route::resource('/indev', 'IndevController');

Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
