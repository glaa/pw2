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

/**Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home2');
});

Route::get('usuario.create', function () {

    return view('cadastrar');
});

Route::get('cliente.create', function () {

    return view('cadastrarCliente3');
});
Route::post('cliente.create', 'ClienteController@cadastrar');

Route::get('estabelecimento.create', function () {

    return view('cadastrarEstabelecimento');
});
Route::post('estabelecimento.create', 'EstabelecimentoController@cadastrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home2', function(){
    return view('home2');
})->name('home2');
