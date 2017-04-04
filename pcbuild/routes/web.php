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


Route::get('/','ProductosController@dameTodos');
Route::get('ver_por_categoria/{nombreCategoria}', ['as' => '/', 'uses' => 'ProductosController@buscarCategoria']);
Route::get('producto/{id}', ['as' => 'producto', 'uses' => 'ProductosController@buscaID']);
Route::get('admin',function(){
    return view('admin');
});
