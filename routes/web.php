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

Route::get('fiscalizacao/index', 'FiscalizacaoController@index');

Route::get('fiscalizacao/create', 'FiscalizacaoController@create');  // criar registro
Route::get('fiscalizacao/edit/{id}', 'FiscalizacaoController@edit'); // editar registro
Route::get('fiscalizacao/view/{id}', 'FiscalizacaoController@view'); // ver registro
Route::post('fiscalizacao/store', 'FiscalizacaoController@store');   // salvar novo registro
Route::put('fiscalizacao/{id}', 'FiscalizacaoController@update')->name('fiscalizacao'); // atualizar registro
Route::get('fiscalizacao/delete/{id}', 'FiscalizacaoController@destroy');

Route::get('fiscalizacao/show/{id}', 'FiscalizacaoController@show');