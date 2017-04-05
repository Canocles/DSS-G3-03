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
                <input type="number" name="num" placeholder="Línea Pedido" />
                <input type="number" name="cantidad" placeholder="Cantidad" />
                <input type="number" name="producto_id" placeholder="Producto ID" />
                <input type="number" name="pedido_id" placeholder="Pedido ID" />
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection