@extends('layout')
@section('title', 'Admin')
@section('content')
    @section('content2')
    <h2 class="title text-center">Añadir Pedido</h2>
    <div class="col-sm-4 col-sm-offset-1">
        <div class="login-form"><!--login form-->
            <h2>Usuario</h2>
            <form action="{{ url('admin/pedidos/anadir') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" name="email" placeholder="Email Usuario" />
                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
        </div><!--/login form-->
    </div>
    @endsection
@endsection