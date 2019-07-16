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

Route::get('/home', function () {
    return view('welcome');
});

Route::resource('/tipo', 'TipoController');
Route::resource('/trans', 'TransController');
Route::resource('/cliente', 'ClienteController');
Route::get('/adm', 'HomeController@index')->name('adm');
Route::resource('/ambgeral', 'AreaGeralController');



Auth::routes();