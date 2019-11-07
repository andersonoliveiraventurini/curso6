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

Route::get('/rota', function () {
    abort(403, 'O tempo se esgotou, não será possível enviar os documentos.');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');