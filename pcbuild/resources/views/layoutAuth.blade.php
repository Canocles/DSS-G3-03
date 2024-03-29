<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Alejandro Oliver Ruiz">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/price-range.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('mages/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
    </head>
    <body>
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

                                    @if(Auth::check())
                                        <li><a href=""><i class="fa"></i> Hola, <b>{{Auth::user()->nombre}}</b></a></li>
                                        <li><a href="{{ URL::asset('/perfil') }}"><i class="fa"></i> Perfil</a></li>
                                        <li><a href="{{ URL::asset('/pedidos') }}"><i class="fa"></i> Pedidos</a></li>
                                        <li><a href="{{ URL::asset('/carrito') }}"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa"></i> Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @else
                                        <li><a href="{{ URL::asset('/register') }}"><i class="fa"></i> Registro</a></li>
                                        <li><a href="{{ URL::asset('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                    @endif
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
                                    
                                     @if(Auth::check())
                                         @if(Auth::user()->esadmin)
                                            <li><a href="{{ URL::asset('admin/productos') }}" class="active">Administrador</a></li>
                                        @endif
                                    @endif
                                         
                                     

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
    </body>
</html>

        @yield('content')
        @include('footer')
    </body>
</html>