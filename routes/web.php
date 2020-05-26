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
use App\Cliente;


Route::get('/', function () {

	$cliente = Cliente::all;


    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contratos', 'ContratoController@contratos')->name('contrato');
Route::get('/clientes', 'ClienteController@clientes')->name('cliente');

Route::get('/alta-cliente', 'ClienteController@index')->name('cliente.index');
Route::post('/cliente/save', 'ClienteController@save')->name('cliente.save');

Route::get('/alta-contrato', 'ContratoController@contratos')->name('contratos.contratos');
Route::post('/contrato/save', 'ContratoController@save')->name('contratos.save');

Route::get('/listado', 'ClienteController@listado')->name('cliente.listado');