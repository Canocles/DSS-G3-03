@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Producto</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>{{ $producto->nombre }}</h2>
            <form action="{{ route('admin/productos/modificar', $producto->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" />
                @if($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" />
                @if($errors->has('precio'))
                    <span class="help-block">
                        <strong>{{ $errors->first('precio') }}</strong>
                    </span>
                @endif
                <input type="file" name="file" id="file" value="{{ $producto->url }}" />
                <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}" />
                @if($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
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