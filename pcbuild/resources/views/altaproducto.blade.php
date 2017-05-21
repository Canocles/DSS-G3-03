@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Producto</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Producto</h2>
            <form action="{{ url('admin/productos/anadir') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre" />
                @if($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                <input type="number" name="precio" id="precio" value="{{ old('precio') }}" placeholder="Precio" />
                @if($errors->has('precio'))
                    <span class="help-block">
                        <strong>{{ $errors->first('precio') }}</strong>
                    </span>
                @endif
                <input type="file" name="file" id="file" value="{{ old('file') }}" placeholder="URL imágen" />
                @if($errors->has('file'))
                    <span class="help-block">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                @endif
                <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" placeholder="Descripcion" />
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