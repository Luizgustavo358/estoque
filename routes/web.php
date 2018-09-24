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
    view('welcome');
});


// Produtos
Route::get('/produtos', 'ProdutoController@lista');


// Mostra produtos
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');


// Adiciona novo produto
Route::get('/produtos/novo', 'ProdutoController@novo');


// Adiciona no banco de dados
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');


// JSON
Route::get('produtos/json', 'ProdutoController@listaJson');


// Remove produto do Banco de Dados
Route::get('/produtos/excluir/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');


// Edita o produto do Banco de Dados
Route::get('/produtos/editar/{id}', 'ProdutoController@editar')->where('id', '[0-9]+');


// Atualiza o produto
Route::post('/produtos/atualizar', 'ProdutoController@atualizar');


Auth::routes();


// Home
Route::get('/home', 'HomeController@index')->name('home');


// Login
Route::get('/login', 'LoginController@login');



