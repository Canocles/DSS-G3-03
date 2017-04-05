@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Usuario</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2> {{ $usuario->nombre }}</h2>
            <form action="{{ route('admin/usuarios/modificar', $usuario->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" />
                <input type="text" name="apellidos" value="{{ $usuario->apellidos }}" />
                <input type="text" name="fechaNacimiento" value="{{ $usuario->fechaNacimiento }}" />
                <input type="email" name="email" value="{{ $usuario->email }}" />
                <input type="tel" name="telefono" value="{{ $usuario->telefono }}" />
                <input type="text" name="direccion" value="{{ $usuario->direccion }}" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection