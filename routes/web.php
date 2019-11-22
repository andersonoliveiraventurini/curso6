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

Auth::routes(['verify' => true]);

Route::get('perfil', function () {
    // Somente usuários já verificados podem acessar...
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');



// rotas referentes a sala

// listagem
//Route::get('salas','SalaController@index');

// criação
//Route::get('salas/create','SalaController@create');

// salva inserção de registro
//Route::post('salas','SalaController@store');

// Mostra um registro
//Route::get('salas/{sala}','SalaController@show')->middleware('can:view,sala');

// Editar um registro
//Route::get('salas/{sala}/edit','SalaController@edit');

// Envio de valores para edição de um registro
//Route::put('salas/{sala}','SalaController@update');

// Deletar um registro
//Route::delete('salas/{sala}','SalaController@destroy');


Route::middleware(['auth','can:view,sala'])->group(Function(){
    // aqui dentro só podem ser acessadas se usuário estiver logado

    Route::resource('salas','SalaController')->names([
        'index' => 'salas.indice',
        'create' => 'salas.criar',
        'store' => 'salas.salvar',
        'show' => 'salas.ver',
        'update' => 'salas.atualizar',
        'destroy' => 'salas.remover'
    ]);
});


Route::get('/salas-seed',"SalaController@seed");
Route::get("/salas-scope", "SalaController@scope");

// final rotas sala






