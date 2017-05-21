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
                <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" />
                @if($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                <input type="text" name="apellidos" value="{{ old('apellidos') }}" placeholder="Apellidos" />
                @if($errors->has('apellidos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellidos') }}</strong>
                    </span>
                @endif
                <input type="text" name="fechaNacimiento" value="{{ old('fechaNacimiento') }}" placeholder="Fecha de Nacimiento" />
                @if($errors->has('fechaNacimiento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                    </span>
                @endif
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="tel" name="telefono" value="{{ old('telefono') }}" placeholder="Telefono" />
                @if($errors->has('telefono'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
                <input type="text" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección" />
                @if($errors->has('direccion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection