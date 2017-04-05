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

// Listados de Modelos
Route::get('/','ProductosController@dameTodos');
Route::get('admin/modificar/usuarios' , 'UsuariosController@mostrarTodos');
Route::get('admin/modificar/categorias' , 'CategoriasController@mostrarTodas');

// Listados para Usuarios
Route::get('ver_por_categoria/{nombreCategoria}', ['as' => '/', 'uses' => 'ProductosController@buscarCategoria']);
Route::get('/productos/ver_producto/{id}', ['as' => 'producto', 'uses' => 'ProductosController@buscaID']);

// Vista de administrador (modificar, añadir y borrar)
Route::get('admin', 'ProductosController@dameAdmin');
Route::get('admin/alta/producto', 'ProductosController@dameCategorias');
Route::get('admin/alta/usuario', function() { return view('altausuario'); });
Route::get('admin/alta/categoria', function() { return view('altacategoria'); });
Route::get('admin/modificar/usuario/{id}', ['as' => 'admin/modificar/usuario', 'uses' => 'UsuariosController@mostrarUsuario']);
Route::get('admin/modificar/categoria/{id}', ['as' => 'admin/modificar/categoria', 'uses' => 'CategoriasController@mostrarCategoria']);
Route::get('admin/modificar/producto/{id}', ['as' => 'admin/modificar/producto', 'uses' => 'ProductosController@update']);
//Route::get('admin/baja/usuario', function() { return view('altausuario'); });
//Route::get('admin/baja/categoria', function() { return view('altacategoria'); });

// Métodos POST
Route::post('admin/alta/producto', 'ProductosController@anadirProducto');
Route::post('admin/alta/usuario', 'UsuariosController@alta');
Route::post('admin/alta/categoria', 'CategoriasController@alta');
Route::post('admin/modificar/producto/{id}', 'ProductosController@borrar');
Route::post('admin/modificar/usuario/{id}', 'UsuariosController@modificar');
Route::post('admin/modificar/categoria/{id}', 'CategoriasController@update');