<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="/"><i class="fa fa-phone"></i> +96523547</a></li>
                                    <li><a href="/"><i class="fa fa-envelope"></i> dss@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="/"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/"><img src="{{ asset('images/home/logo2.png') }}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="cart.blade.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                    <li><a href="login.blade.php"><i class="fa fa-lock"></i> Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Menu</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="{{ URL::asset('admin/productos') }}" class="active">Administrador</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <form action="{{url('buscar')}}" method="GET">
                            <div class="search_box pull-left">
                                <input type="text" placeholder="Buscar" name="producto" id="producto"/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
    </body>
</html>
