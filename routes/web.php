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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('carinho','CarinhoController@index')->name('carinho');
    Route::get('ofertas','Site\OfertasController@index')->name('ofertas');
    Route::get('contato','CarinhoController@index')->name('contato');
    Route::get('produto/{id}','Site\ProdutoController@index')->name('produto');

});

Route::get('inicio','InicioController@index')->name('inicio');

Route::get('categoria/{categoria}','InicioController@categoria')->name('categoria');





