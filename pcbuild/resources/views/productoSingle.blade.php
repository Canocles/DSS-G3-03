@extends('master')
@section('title', 'Producto')
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
			<div class="product-details"><!--product-details-->
				<div class="col-sm-5">
					<div class="view-product">
						<img src="{{ asset($producto->urlImagen) }}" alt="" />
					</div>

				</div>
				<div class="col-sm-7">
					<div class="product-information"><!--/product-information-->
						<h2>{{$producto->nombre}}</h2>
						<p>{{$producto->descripcion}}</p>
						<span>
							<span>{{$producto->precio}} €</span>
							<a href="{{ route('carrito-add', $producto->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Añadir al carrito</a>
						</span>
						<a href=""><img src="{{ asset('images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
					</div><!--/product-information-->
				</div>
			</div><!--/product-details-->
		</div>
	</div>
</div>
@endsection
