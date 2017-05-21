@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Linea Pedido</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Línea: {{ $linpedido->num }}</h2>
            <form action="{{ route('admin/linpedidos/modificar', [$linpedido->num, $linpedido->pedido_id]) }}" method="POST">
                {{ csrf_field() }}
                <input type="number" name="cantidad" value="{{ $linpedido->cantidad }}" />
                @if($errors->has('cantidad'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cantidad') }}</strong>
                    </span>
                @endif
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection