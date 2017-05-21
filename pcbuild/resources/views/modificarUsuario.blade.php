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
                @if($errors->has('nombre'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                <input type="text" name="apellidos" value="{{ $usuario->apellidos }}" />
                @if($errors->has('apellidos'))
                    <span class="help-block">
                        <strong>{{ $errors->first('apellidos') }}</strong>
                    </span>
                @endif
                <input type="text" name="fechaNacimiento" value="{{ $usuario->fechaNacimiento }}" />
                @if($errors->has('fechaNacimiento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fechaNacimiento') }}</strong>
                    </span>
                @endif
                <input type="email" name="email" value="{{ $usuario->email }}" />
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input type="tel" name="telefono" value="{{ $usuario->telefono }}" />
                @if($errors->has('telefono'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                @endif
                <input type="text" name="direccion" value="{{ $usuario->direccion }}" />
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