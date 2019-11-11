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

// rotas referentes a sala

// listagem
Route::get('salas','SalaController@index');

// criação
Route::get('salas/create','SalaController@create');

// salva inserção de registro
Route::post('salas','SalaController@store');

// Mostra um registro
Route::get('salas/{sala}','SalaController@show');

// Editar um registro
Route::get('salas/{sala}/edit','SalaController@edit');

// Envio de valores para edição de um registro
Route::put('salas/{sala}','SalaController@update');

// Deletar um registro
Route::delete('salas/{sala}','SalaController@destroy');

// final rotas sala






