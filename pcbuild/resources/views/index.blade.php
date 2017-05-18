@extends('master')
@section('title', 'Inicio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Categoría</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    @foreach($categorias as $cat)
                    <div class="panel panel-default miclase">
                        <div class="panel-heading miclase">
                            <h4 class="panel-title"><a href="{{ route('/', $cat->nombre) }}">{{$cat->nombre}}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div><!--/category-products-->
            </div>
        </div>

        <div class="col-sm-9 padding-right">
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Productos</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-form">
                            <form class="form-inline" action="{{url('ordenar')}}" method="GET">
                                <div class="col-md-10 col-xs-10 col-sm-8 col-lg-10">
                                    <select name="precio" id="ordenar">
                                        <option value="desc">Precio: mayor a menor</option>
                                        <option value="asc">Precio: menor a mayor</option>
                                    </select>
                                </div>
                                <div clsas="col-md-2 col-xs-8 col-sm-4 col-lg-8">
                                    <button type="submit" class="btn btn-default">Ordenar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($productos as $item)
                        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-4">
                            <div class="product-image-wrapper">
                                <a href="{{ route('producto',$item->id) }}">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{ asset($item->urlImagen) }}" alt="" style="width:200px;height:200px;"/>
                                        <h2>{{$item->precio}} €</h2>
                                        <p>{{$item->nombre}}</p>
                                        <a href="{{ route('carrito-add', $item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>{{$item->precio}}</h2>
                                            <p>{{$item->nombre}}</p>
                                            <a href="{{ route('carrito-add', $item->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-pencil"></i>Modificar</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i>Borrar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!--features_items-->
            <div style="text-align:center;"> {{ $productos->links() }} </div>
        </div>
    </div>
</div>
@endsection