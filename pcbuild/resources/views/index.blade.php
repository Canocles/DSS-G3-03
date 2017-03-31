
@extends('header')
<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">CPU</a></h4>
                                    </div>
                                    
                                </div>
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Tarjeta Gráfica</a></h4>
                                    </div>
                                </div>

                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Torres</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default miclase">
                                    <div class="panel-heading miclase">
                                        <h4 class="panel-title"><a href="#">Otros...</a></h4>
                                    </div>
                                </div>

                            </div><!--/category-products-->
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            
                            @foreach($productos as $item)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/product1.jpg" alt="" />
                                            <h2>{{$item->precio}}</h2>
                                            <p>{{$item->nombre}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{$item->precio}}</h2>
                                                <p>{{$item->nombre}}</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                         
                        </div><!--features_items-->
                    </div>
                </div>
            </div>
        </section>

@extends('footer')
