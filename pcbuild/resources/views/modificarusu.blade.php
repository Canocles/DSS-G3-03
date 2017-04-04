@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar {{ $usuario->nombre }}</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Modificar Usuario</h2>
            <form action="#"><!-- funcion de editar en controlador -->
                <input type="text" placeholder="{{ $usuario->nombre }}" />
                <input type="text" placeholder="{{ $usuario->apellidos }}" />
                <input type="email" placeholder="{{ $usuario->email }}" />
                <input type="text" placeholder="{{ $usuario->telefono }}" />
                <input type="text" placeholder="{{ $usuario->dirección }}" />
                <input type="text" placeholder="{{ $usuario->fechaNacimiento }}" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection