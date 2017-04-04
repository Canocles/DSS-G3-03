@extends('master')
@section('title', 'Admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Menú</h2>
                <div class="panel-group category-products" id="accordian">
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ 'altaproducto' }}">Alta Producto</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'altausuario'}}">Alta Usuario</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'modificarusuario'}}">Modificar Usuario</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'bajausuario'}}">Baja Usuario</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'altacategoria'}}">Alta Categoría</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'modificarcategoria'}}">Modificar Categoría</a></h4>
                        </div>
                    </div>
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{'bajacategoria'}}">Baja Categoria</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Añadir</h2>
                <div class="col-sm-4 col-sm-offset-1">
                    
                    @if(Request::is('admin/altaproducto')){
                        <div class="login-form"><!--login form-->
                        <h2>Añadir Producto</h2>
                        <form action="#">
                            <input type="text" placeholder="Nombre" />
                            <input type="text" placeholder="Descripcion" />
                            <input type="email" placeholder="Precio" />

                            <button type="submit" class="btn btn-default">Guardar</button>
                        </form>
                        </div><!--/login form-->
                    }
                    @if(Request::is('admin/altausuario')){
                        <div class="login-form"><!--login form-->
                        <h2>Añadir Usuario</h2>
                        <form action="#" method="post"><!--en action=" aqui va la ruta del formulario a la accion del controlador"-->
                            <input type="text" placeholder="Nombre" />
                            <input type="text" placeholder="Apellidos" />
                            <input type="email" placeholder="Email" />
                            <input type="text" placeholder="Telefono" />
                            <input type="text" placeholder="Dirección" />

                            <button type="submit" class="btn btn-default">Guardar</button>
                        </form>
                        </div><!--/login form-->
                    }
                
                @if(Request::is('admin/altacategoria')){
                    <div class="login-form"><!--login form-->
                    <h2>Añadir Categoría</h2>
                        <form action="#" method="post"><!--en action=" aqui va la ruta del formulario a la accion del controlador"-->
                            <input type="text" placeholder="Nombre Categoria" />
                            <input type="text" placeholder="Descripción" />

                            <button type="submit" class="btn btn-default">Guardar</button>
                        </form>
                        </div><!--/login form-->
                }
                
                    
                @if(Request::is('admin/modificarusuario')) {
                    <h2>Modificar Usuario</h2>
                        <!--tabla con todos los usuarios y boton de modificar -->
                        <table class="table table-hover table-condensed">
                            <tr>
                                <th>Nombre<th>
                                <th>Apellidos<th>
                                <th>Email<th>
                                <th>Telefono</th>
                                <th>Dirección</th>
                                <th></th>
                            </tr>
                            @foreach($usuarios as $usu){
                                <tr>
                                    <td>{{$usu->nombre}}</td>
                                    <td>{{$usu->apellidos}}</td>
                                    <td>{{$usu->email}}</td>
                                    <td>{{$usu->telefono}}</td>
                                    <td>{{$usu->direccion}}</td>
                                    <td><a href="aqui va la ruta a la vista de editarusuario">Modificar</a></td>
                                </tr>
                            }
                        </table>
                }
                @if(Request::is('admin/bajausuario')){
                    <!--tabla con todos los usuarios -->
                    <table class="table table-hover table-condensed">
                            <tr>
                                <th>Nombre<th>
                                <th>Apellidos<th>
                                <th>Email<th>
                                <th>Telefono</th>
                                <th>Dirección</th>
                                <th></th>
                            </tr>
                            @foreach($usuarios as $usu){
                                <tr>
                                    <td>{{$usu->nombre}}</td>
                                    <td>{{$usu->apellidos}}</td>
                                    <td>{{$usu->email}}</td>
                                    <td>{{$usu->telefono}}</td>
                                    <td>{{$usu->direccion}}</td>
                                    <td><a href="aqui va la ruta a la funcion de borrar usuario">Baja</a></td>
                                </tr>
                            }
                        </table>
                }
                @if(Request::is('admin/modificarcategoria')){
                    <table class="table table-hover table-condensed">
                            <tr>
                                <th>Nombre<th>
                                <th>Descripción<th>
                                <th></th>
                            </tr>
                            @foreach($categorias as $cat){
                                <tr>
                                    <td>{{$cat->nombre}}</td>
                                    <td>{{$cat->descripcion}}</td>
                                    <td><a href="aqui va la ruta a la vista de editarcategoria">Modificar</a></td>
                                </tr>
                            }
                        </table>
                }
                @if(Request::is('admin/bajacategoria')){
                    <table class="table table-hover table-condensed">
                            <tr>
                                <th>Nombre<th>
                                <th>Descripcion<th>
                                <th></th>
                            </tr>
                            @foreach($categorias as $cat){
                                <tr>
                                    <td>{{$cat->nombre}}</td>
                                    <td>{{$cat->descripcion}}</td>
                                    <td><a href="aqui va la ruta a la funcion bajacategoria">Baja</a></td>
                                </tr>
                            }
                        </table>
                }
                </div>
            </div>
        </div>
    </div>
</div>
@endsection