@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Modificar Pedido</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Pedido: {{ $pedido->id }}</h2>
            <form action="{{ route('admin/pedidos/modificar', $pedido->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="fecha"  value="{{ $pedido->fecha }}" />
                <input type="email" name="email" value="{{ $pedido->user->email }}" />

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection