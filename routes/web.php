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

    return view('cadastrarCliente3');
});

Route::post('cliente.create', 'ClienteController@cadastrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('buscar',function(){
    return view('buscar');
});
=======
Route::get('/home2', function(){
    return view('home2');
})->name('home2');
>>>>>>> a61feff47e06bab2d03f5831e13d26662c7ad441
