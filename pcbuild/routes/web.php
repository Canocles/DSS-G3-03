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
Route::get('admin', 'ProductosController@dameAdmin')->middleware('admin');
Route::get('admin/productos', 'ProductosController@mostrarProductos')->middleware('admin');
Route::get('admin/usuarios', 'UsuariosController@mostrarUsuarios')->middleware('admin');
Route::get('admin/categorias', 'CategoriasController@mostrarCategorias')->middleware('admin');
Route::get('admin/pedidos', 'PedidosController@mostrarPedidos')->middleware('admin');
Route::get('admin/linpedidos', 'LinPedidosController@mostrarLinpedidos')->middleware('admin');
Route::get('admin/pedidos/pedido/{id}', ['as' => 'admin/pedidos/pedido', 'uses' => 'PedidosController@mostrarPorPedido'])->middleware('admin');

// Ordenado de un campo de los listados
Route::get('admin/productos/ordenar/precio/{oredn}', 'ProductosController@ordenar')->middleware('admin');
Route::get('admin/usuarios/ordenar/nombre/{oredn}', 'UsuariosController@ordenar')->middleware('admin');
Route::get('admin/categorias/ordenar/nombre/{oredn}', 'CategoriasController@ordenar')->middleware('admin');
Route::get('admin/pedidos/ordenar/pedido/{oredn}', 'PedidosController@ordenar')->middleware('admin');
Route::get('admin/linpedidos/ordenar/pedido/{oredn}', 'LinPedidosController@ordenar')->middleware('admin');

// Rutas para mostrar los formularios para añadir objetos
Route::get('admin/productos/anadir', 'ProductosController@dameCategorias')->middleware('admin');
Route::get('admin/usuarios/anadir', function() { return view ('altausuario'); })->middleware('admin');
Route::get('admin/categorias/anadir', function() { return view ('altacategoria'); })->middleware('admin');
Route::get('admin/pedidos/anadir', function() { return view ('altapedido'); })->middleware('admin');
Route::get('admin/linpedidos/anadir', function() { return view('altalinpedido'); })->middleware('admin');
Route::get('contacto',function(){ return view('contacto'); });
Route::get('perfil',function(){ return view('perfil'); });
// Rutas para mostrar los formularios para modificar objetos
Route::get('admin/productos/modificar/{id}', ['as' => 'admin/productos/modificar', 'uses' => 'ProductosController@mostrarProducto'])->middleware('admin');
Route::get('admin/usuarios/modificar/{id}', ['as' => 'admin/usuarios/modificar', 'uses' => 'UsuariosController@mostrarUsuario'])->middleware('admin');
Route::get('admin/categorias/modificar/{id}', ['as' => 'admin/categorias/modificar', 'uses' => 'CategoriasController@mostrarCategoria'])->middleware('admin');
Route::get('admin/pedidos/modificar/{id}', ['as' => 'admin/pedidos/modificar', 'uses' => 'PedidosController@mostrarPedido'])->middleware('admin');
Route::get('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@mostrarLinpedidosPedido'])->middleware('admin');

// Eliminado de objetos de la bd
Route::get('admin/productos/eliminar/{id}','ProductosController@delete')->middleware('admin');
Route::get('admin/usuarios/eliminar/{id}', 'UsuariosController@delete')->middleware('admin');
Route::get('admin/categorias/eliminar/{id}', 'CategoriasController@delete')->middleware('admin');
Route::get('admin/pedidos/eliminar/{id}', 'PedidosController@delete')->middleware('admin');
Route::get('admin/linpedidos/eliminar/{num}/{pedido_id}', 'LinPedidosController@delete')->middleware('admin');

// Añadido de objetos a la bd
Route::post('admin/productos/anadir', 'ProductosController@create')->middleware('admin');
Route::post('admin/usuarios/anadir', 'UsuariosController@create')->middleware('admin');
Route::post('admin/categorias/anadir', 'CategoriasController@create')->middleware('admin');
Route::post('admin/pedidos/anadir', 'PedidosController@create')->middleware('admin');
Route::post('admin/linpedidos/anadir', 'LinPedidosController@create')->middleware('admin');
// Modificado de objetos de la bd
Route::post('admin/productos/modificar/{id}', 'ProductosController@update')->middleware('admin');
Route::post('admin/usuarios/modificar/{id}', 'UsuariosController@update')->middleware('admin');
Route::post('admin/categorias/modificar/{id}', 'CategoriasController@update')->middleware('admin');
Route::post('admin/pedidos/modificar/{id}', 'PedidosController@update')->middleware('admin');
Route::post('admin/linpedidos/modificar/{num}/{pedido_id}', ['as' => 'admin/linpedidos/modificar', 'uses' => 'LinPedidosController@update'])->middleware('admin');
Auth::routes();

Route::get('/home', 'HomeController@index');

// Carrito
Route::get('carrito/show', ['as' => 'carrito-show', 'uses' => 'CarritoController@show']);
Route::get('carrito/añadir/{producto}', ['as' => 'carrito-add', 'uses' => 'CarritoController@add']);
Route::get('carrito/eliminar/{producto}', ['as' => 'carrito-delete', 'uses' => 'CarritoController@delete']);
Route::get('carrito/eliminartodo', ['as' => 'carrito-trash', 'uses' => 'CarritoController@trash']);

Route::post('carrito/actualizar/{producto}', ['as' => 'carrito-update', 'uses' => 'CarritoController@update']);
