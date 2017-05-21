@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Línea Pedido</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Línea de Pedido</h2>
            <form action="{{ url('admin/linpedidos/anadir') }}" method="POST">
                {{ csrf_field() }}
                <input type="number" name="num" value="{{ old('num') }}" placeholder="Línea Pedido" />
                @if($errors->has('num'))
                    <span class="help-block">
                        <strong>{{ $errors->first('num') }}</strong>
                    </span>
                @endif
                <input type="number" name="cantidad" value="{{ old('cantidad') }}" placeholder="Cantidad" />
                @if($errors->has('cantidad'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cantidad') }}</strong>
                    </span>
                @endif
                <input type="number" name="producto_id" value="{{ old('producto_id') }}" placeholder="Producto ID" />
                @if($errors->has('producto_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('producto_id') }}</strong>
                    </span>
                @endif
                <input type="number" name="pedido_id" value="{{ old('pedido_id') }}" placeholder="Pedido ID" />
                @if($errors->has('pedido_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pedido_id') }}</strong>
                    </span>
                @endif
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection