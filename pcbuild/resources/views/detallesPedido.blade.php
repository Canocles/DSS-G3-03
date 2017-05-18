@extends('master')
@section('title', 'Carrito')
@section('content')
<div class="container-principal">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
            <li><a href="/">Inicio</a></li>
            <li><a href="{{ route('carrito-show') }}">Carrito de compra</a></li>
            <li class="active">Confirmar compra</li>
            </ol>
        </div>
        <div class"articulos-en-carrito">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div id="bloque-carrito" class="bloque-carrito m-b-3">
                        <div class="white-card-movile">
                            <div class="row">
                                <div class="col-xs-10">
                                    <h1 class="h3 en-linea">
                                        <strong>({{$cantidad}})</strong> Artículos
                                    </h1>
                                </div>
                                <div class="col-xs-2 text-xs-right">
                                    <a href="{{ route('carrito-show') }}" class="btn btn-primary-outline"> Ver cesta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bloque-usuario">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Detalles de Usuario</h3>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Nombre: {{Auth::user()->nombre}}</li>
                                    <li class="list-group-item">Apellidos: {{Auth::user()->apellidos}}</li>
                                    <li class="list-group-item">Email: {{Auth::user()->email}}</li>
                                    <li class="list-group-item">Teléfono: {{Auth::user()->telefono}}</li>
                                    <li class="list-group-item">Fecha de nacimiento: {{Auth::user()->fechaNacimiento}}</li>
                                    <li class="list-group-item">Dirección: {{Auth::user()->direccion}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="bloque-confirmacion">
                        <div class="white-card-movile">
                            <div class="total_area">
                                <ul>
                                    <li>Gastos de envio estimados: <span>{{ $total * 1.5 / 100 }} €</span></li>
                                    <li><strong>Total </strong><span>{{ $total }} €</span></li>
                                </ul>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-lg btn-block btn-finish-cart" href="#">Confirmar compra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection