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

Route::get('cliente.create', function () {

    return view('cadastrarCliente2');
});

Route::get('create.cliente/{endereco}', function ($endereco) {
    return var_dump($endereco);
    //return view('cadastrarCliente');
});

Route::post('cliente.create', 'ClienteController@cadastrar');