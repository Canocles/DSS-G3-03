@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Categoría</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>{{ $categoria->nombre }}</h2>
            <form action="{{ route('admin/categorias/modificar', $categoria->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="nombre"  value="{{ $categoria->nombre }}" />
                @if($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" />
                @if($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection