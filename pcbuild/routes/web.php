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
Route::get('categorias/{nombreCategoria}', ['as' => '/', 'uses' => 'ProductosController@buscarCategoria']);
Route::get('productos/ver_producto/{id}', ['as' => 'producto', 'uses' => 'ProductosController@buscaID']);
Route::get('buscar','ProductosController@buscarNombre');
Route::get('ordenar','ProductosController@buscarPrecio');

// Listados de todos los objetos
Route::get('admin', 'ProductosController@dameAdmin');
Route::get('admin/productos', 'ProductosController@mostrarProductos');
Route::get('admin/usuarios', 'UsuariosController@mostrarUsuarios');
Route::get('admin/categorias', 'CategoriasController@mostrarCategorias');
Route::get('admin/pedidos', 'PedidosController@mostrarPedidos');
Route::get('admin/linpedidos', 'LinPedidosController@mostrarLinpedidos');
Route::get('admin/pedidos/pedido/{id}', ['as' => 'admin/pedidos/pedido', 'uses' => 'PedidosController@mostrarPorPedido']);

// Ordenado de un campo de los listados
Route::get('admin/productos/ordenar/precio/{oredn}', 'ProductosController@ordenar');
Route::get('admin/usuarios/ordenar/nombre/{oredn}', 'UsuariosController@ordenar');
Route::get('admin/categorias/ordenar/nombre/{oredn}', 'CategoriasController@ordenar');
Route::get('admin/pedidos/ordenar/pedido/{oredn}', 'PedidosController@ordenar');
Route::get('admin/linpedidos/ordenar/pedido/{oredn}', 'LinPedidosController@ordenar');

// Rutas para mostrar los formularios para añadir objetos
Route::get('admin/productos/anadir', 'ProductosController@dameCategorias');
Route::get('admin/usuarios/anadir', function() { return view ('altausuario'); });
Route::get('admin/categorias/anadir', function() { return view ('altacategoria'); });
Route::get('admin/pedidos/anadir', function() { return view ('altapedido'); });
Route::get('admin/linpedidos/anadir', function() { return view('altalinpedido'); });

// Rutas para mostrar los formularios para modificar objetos
Route::get('admin/productos/modificar/{id}', ['as' => 'admin/productos/modificar', 'uses' => 'ProductosController@mostrarProducto']);
Route::get('admin/usuarios/modificar/{id}', ['as' => 'admin/usuarios/modificar', 'uses' => 'UsuariosController@mostrarUsuario']);
Route::get('admin/categorias/modificar/{id}', ['as' => 'admin/categorias/modificar', 'uses' => 'CategoriasController@mostrarCategoria']);
Route::get('admin/pedidos/modificar/{id}', ['as' => 'admin/pedidos/modificar', 'uses' => 'PedidosController@mostrarPedido']);
Route::get('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@mostrarLinpedidosPedido']);

// Eliminado de objetos de la bd
Route::get('admin/productos/eliminar/{id}','ProductosController@delete');
Route::get('admin/usuarios/eliminar/{id}', 'UsuariosController@delete');
Route::get('admin/categorias/eliminar/{id}', 'CategoriasController@delete');
Route::get('admin/pedidos/eliminar/{id}', 'PedidosController@delete');
Route::get('admin/linpedidos/eliminar/{num}/{pedido_id}', 'LinPedidosController@delete');

// Añadido de objetos a la bd
Route::post('admin/productos/anadir', 'ProductosController@create');
Route::post('admin/usuarios/anadir', 'UsuariosController@create');
Route::post('admin/categorias/anadir', 'CategoriasController@create');
Route::post('admin/pedidos/anadir', 'PedidosController@create');
Route::post('admin/linpedidos/anadir', 'LinPedidosController@create');
// Modificado de objetos de la bd
Route::post('admin/productos/modificar/{id}', 'ProductosController@update');
Route::post('admin/usuarios/modificar/{id}', 'UsuariosController@update');
Route::post('admin/categorias/modificar/{id}', 'CategoriasController@update');
Route::post('admin/pedidos/modificar/{id}', 'PedidosController@update');
Route::post('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@update']);