@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar {{ $categoria->nombre }}</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>modificar Categoría</h2>
            <form action="{{ route('admin/modificar/categoria', $categoria->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre"  value="{{ $categoria->nombre }}" />
                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection