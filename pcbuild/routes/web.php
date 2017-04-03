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

Route::get('/','ProductosController@dameTodos',function() {
    return view('index');
});
Route::get('/{nombreCategoria}','ProductosController@buscarCategoria',function(){
    return view('index');
});
Route::get('productoSingle/{id}','ProductosController@buscaID',function(){
    return view('productoSingle/{id}');
});
Route::get('admin',function(){
    return view('admin');
});
Route::get('/','ProductosController@dameAdmin',function() {
    return view('admin');//para mandarle las categorias a admin
});