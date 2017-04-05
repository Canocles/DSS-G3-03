@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Usuario</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Usuario</h2>
            <form action="{{ url('admin/usuarios/anadir') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre" placeholder="Nombre" />
                <input type="text" name="apellidos" placeholder="Apellidos" />
                <input type="text" name="fechaNacimiento" placeholder="Fecha de Nacimiento" />
                <input type="email" name="email" placeholder="Email" />
                <input type="tel" name="telefono" placeholder="Telefono" />
                <input type="text" name="direccion" placeholder="Dirección" />
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection