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
                            <h2 class="title text-center">Modificar Usuario</h2>
                           <table class="table table-collapsed table-condensed">
                               <tr>
                                   <th>Nombre</th>
                                   <th>Apellidos</th>
                                   <th>Email</th>
                                   <th></th>
                               </tr>
                               <!-- @foreach($usuarios as $usu){
                                   <tr>
                                        <td>$usu->nombre</td>
                                        <td>$usu->apellidos</td>
                                        <td>$usu->email</td>
                                        <td><a href="que lleve a modificarusu/id pasado por parametro">Modificar</a></td>
                                    </tr>
                                    @endforeach -->
                           </table>
                        </div>
                    </div>
    </div>
</div>
@endsection