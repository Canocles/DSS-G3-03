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
Route::get('/productos/ver_producto/{id}', ['as' => 'producto', 'uses' => 'ProductosController@buscaID']);
Route::get('admin', 'ProductosController@dameAdmin');
Route::get('admin/alta/producto', function() { return view('altaproducto'); });
Route::get('admin/alta/usuario', function() { return view('altausuario'); });
Route::get('admin/alta/categoria', function() { return view('altacategoria'); });
Route::get('admin/modificar/usuarios' , 'UsuariosController@mostrarTodos');
Route::get('admin/modificar/usuario/{id}', ['as' => 'admin/modificar/usuario', 'uses' => 'UsuariosController@mostrarUsuario']);
Route::get('admin/modificar/categorias' , function() { return view('modificarCategoria'); });
//Route::get('admin/baja/usuario', function() { return view('altausuario'); });
//Route::get('admin/baja/categoria', function() { return view('altacategoria'); });