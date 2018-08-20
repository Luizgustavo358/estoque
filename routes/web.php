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

// Home
Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1>';
});

// Produtos
Route::get('/produtos', 'ProdutoController@lista');