 <?php
    @if($productos)
    @foreach($productos as $item){
        ?>
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
    <?php
    }
    @else
    ?>
        <div class="col-sm-4">
            <p>No hay productos</p>
        </div>
        <?php
    @endif
    ?>