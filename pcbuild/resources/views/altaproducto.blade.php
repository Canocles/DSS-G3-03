@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Producto</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Añadir Producto</h2>
            <form action="{{ url('admin/alta/producto') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                <input type="number" name="precio" id="precio" placeholder="Precio" />
                <input type="file" name="file" id="file" placeholder="URL imágen" />
                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" />
                <select name="categoria">
                    @foreach($categorias as $cat)
                        <option value="{{ $cat->nombre }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection