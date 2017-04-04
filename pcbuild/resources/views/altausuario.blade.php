@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
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
    @endsection
@endsection