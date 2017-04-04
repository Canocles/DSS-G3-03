@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Categoría: nombrecategoria</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>modificar Categoría</h2>
            <form action="#">
                <input type="text" placeholder="Nombre" />
                <input type="text" placeholder="Descripción" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection