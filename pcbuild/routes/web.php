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

// Listados de Modelos para Users
Route::get('/', 'ProductosController@dameTodos');
Route::get('ver_por_categoria/{nombreCategoria}', ['as' => '/', 'uses' => 'ProductosController@buscarCategoria']);
Route::get('/productos/ver_producto/{id}', ['as' => 'producto', 'uses' => 'ProductosController@buscaID']);
/*

// Vista de administrador 
Route::get('admin', 'ProductosController@dameAdmin');
Route::get('admin/alta/producto', 'ProductosController@dameCategorias');
Route::get('admin/alta/usuario', function() { return view('altausuario'); });
Route::get('admin/alta/categoria', function() { return view('altacategoria'); });
Route::get('admin/modificar/usuario/{id}', ['as' => 'admin/modificar/usuario', 'uses' => 'UsuariosController@mostrarUsuario']);
Route::get('admin/modificar/categoria/{id}', ['as' => 'admin/modificar/categoria', 'uses' => 'CategoriasController@mostrarCategoria']);
Route::get('admin/modificar/producto/{id}', ['as' => 'admin/modificar/producto', 'uses' => 'ProductosController@update']);
Route::get('admin/baja/usuario', function() { return view('altausuario'); });
Route::get('admin/baja/categoria', function() { return view('altacategoria'); });


// Métodos POST
Route::post('admin/alta/producto', 'ProductosController@anadirProducto');
Route::post('admin/alta/usuario', 'UsuariosController@alta');
Route::post('admin/alta/categoria', 'CategoriasController@alta');
Route::post('admin/modificar/producto/{id}', 'ProductosController@borrar');
Route::post('admin/modificar/usuario/{id}', 'UsuariosController@modificar');
Route::post('admin/modificar/categoria/{id}', 'CategoriasController@update');
*/

Route::get('admin', 'ProductosController@dameAdmin');
Route::get('admin/productos', 'ProductosController@mostrarProductos');
Route::get('admin/usuarios', 'UsuariosController@mostrarUsuarios');
Route::get('admin/categorias', 'CategoriasController@mostrarCategorias');
Route::get('admin/pedidos', 'PedidosController@mostrarPedidos');
Route::get('admin/linpedidos', 'LinPedidosController@mostrarLinpedidos');
Route::get('admin/pedidos/pedido/{id}', ['as' => 'admin/pedidos/pedido', 'uses' => 'PedidosController@mostrarPorPedido']);

Route::get('admin/productos/anadir', 'ProductosController@dameCategorias');
Route::get('admin/usuarios/anadir', function() { return view ('altausuario'); });
Route::get('admin/categorias/anadir', function() { return view ('altacategoria'); });
Route::get('admin/pedidos/anadir', function() { return view ('altapedido'); });
Route::get('admin/linpedidos/anadir', function() { return view('altalinpedido'); });

//Route::get('admin/productos/modificar', 'ProductosController@mostrarProducto');
Route::get('admin/productos/modificar/{id}', ['as' => 'admin/productos/modificar', 'uses' => 'ProductosController@mostrarProducto']);
Route::get('admin/usuarios/modificar/{id}', ['as' => 'admin/usuarios/modificar', 'uses' => 'UsuariosController@mostrarUsuario']);
Route::get('admin/categorias/modificar/{id}', ['as' => 'admin/categorias/modificar', 'uses' => 'CategoriasController@mostrarCategoria']);
Route::get('admin/pedidos/modificar/{id}', ['as' => 'admin/pedidos/modificar', 'uses' => 'PedidosController@mostrarPedido']);
Route::get('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@mostrarLinpedidosPedido']);

Route::get('admin/productos/eliminar/{id}', ['as' => 'admin/productos/eliminar', 'uses' => 'ProductosController@delete']);
Route::get('admin/usuarios/eliminar/{id}', ['as' => 'admin/usuarios/eliminar', 'uses' => 'UsuariosController@delete']);
Route::get('admin/categorias/eliminar/{id}', ['as' => 'admin/categorias/eliminar', 'uses' => 'CategoriasController@delete']);
Route::get('admin/pedidos/eliminar/{id}', ['as' => 'admin/pedidos/eliminar', 'uses' => 'PedidosController@delete']);
Route::get('admin/linpedidos/eliminar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/eliminar', 'uses' => 'LinPedidosController@delete']);

Route::post('admin/productos/anadir', 'ProductosController@create');
Route::post('admin/usuarios/anadir', 'UsuariosController@create');
Route::post('admin/categorias/anadir', 'CategoriasController@create');
Route::post('admin/pedidos/anadir', 'PedidosController@create');
Route::post('admin/linpedidos/anadir', 'LinPedidosController@create');

Route::post('admin/productos/modificar/{id}', 'ProductosController@update');
Route::post('admin/usuarios/modificar/{id}', 'UsuariosController@update');
Route::post('admin/categorias/modificar/{id}', 'CategoriasController@update');
Route::post('admin/pedidos/modificar/{id}', 'PedidosController@update');
Route::post('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@update']);