@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Producto: nombre producto</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>modificar Producto</h2>
            <form action="#">
                <input type="text" placeholder="Nombre" />
                <input type="text" placeholder="Descripcion" />
                <input type="email" placeholder="Precio" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection