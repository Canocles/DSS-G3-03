@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Categoría</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Añadir Categoría</h2>
            <form action="{{ url('admin/categorias/anadir') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre" placeholder="Nombre" />
                <input type="text" name="descripcion" placeholder="Descripción" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection                            
@endsection