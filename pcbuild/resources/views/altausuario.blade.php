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
                            <h4 class="panel-title"><a href="{{ 'altaproducto.blade.php...' }}">Alta Producto</a></h4>
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
                            <h2 class="title text-center">Añadir Usuario</h2>
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="login-form"><!--login form-->
                                    <h2>Añadir Usuario</h2>
                                    <form action="#">
                                        <input type="text" placeholder="Nombre" />
                                        <input type="text" placeholder="Apellidos" />
                                        <input type="email" placeholder="Email" />
                                        <input type="text" placeholder="Telefono" />
                                        <input type="text" placeholder="Dirección" />

                                        <button type="submit" class="btn btn-default">Guardar</button>
                                    </form>
                                </div><!--/login form-->
                            </div>
                           
                        </div>
                    </div>
    </div>
</div>
@endsection