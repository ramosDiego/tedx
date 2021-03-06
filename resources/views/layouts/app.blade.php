<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TEDxUMSA</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/') }}libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/wata.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style type="text/css">
        h2{
            font-family: 'Miriam Libre', sans-serif;
        }
        p{
            font-family: 'Open Sans', sans-serif;
        }

        footer.page-footer .footer-copyright{
            line-height: 0px;
        }
        ul{
            display: block;
            -webkit-margin-after: .5em;
            -webkit-margin-before: .5em;
        }
        .ic{
            font-size:19px;
        }
    </style>
    <!--Scripts-->
    <script>

    </script>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation bar -->
        <div class="navbar-fixed" id="nav">
            <nav>
                <div class="nav-wrapper">
                    <!-- Site name -->
                    <a href="/">
                        <img src="/images/logo/TEDxUMSA-1.svg" style="margin:4px">
                    </a>
                    <!-- Mobile menu button -->
                    <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                    <!-- Static menu -->
                    <ul class="right hide-on-med-and-down table-of-contents">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Aliados</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <li><a href="{{url('posts')}}">Blog</a></li>
                        <li><a href="{{url('participar')}}">Participar</a></li>
                    </ul>
                    <!-- Mobile menu, make sure it is equal to the statis menu -->
                    <ul class="side-nav" id="mobile-menu">
                        <li><a href="{{url('about')}}">Acerca de</a></li>
                        <li><a href="{{url('aliados')}}">Aliados</a></li>
                        <li><a href="{{url('expositores')}}">Expositores</a></li>
                        <li><a href="{{url('equipo')}}">Equipo</a></li>
                        <li><a href="{{url('posts')}}">Blog</a></li>
                        <li><a href="{{url('participar')}}">Participar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--/navabar-->
        <!--content-->
        @yield('content')
        <!--/content-->
        <!-- Footer section -->
        <footer class="page-footer">
            <div class="footer-copyright" style=" height: auto">
                <div class="container" style="height: auto">
                    <a href="/">
                        <img src="/images/logo/TEDxUMSA-1.svg" style="margin:10px" >
                    </a>
                    <!-- Social icons -->
                    <!--<span class="social right">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-send"></i></a>
                    </span>-->
                    <ul class="icons right">
                        <li><a href="https://www.facebook.com/TEDxUMSA"><i class="fa ic fa-facebook"></i>  facebook.com/TEDxUMSA</a></li>
                        <li><a href="https://www.twitter.com/tedxumsa"><i class="fa ic fa-twitter"></i> @tedxumsa</a></li>
                        <li><a href="mailto:tedxumsa@gmail.com"><i class="fa ic fa-envelope"></i> tedxumsa@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    {{--<script src="https://maps.googleapis.com/maps/api/js"></script>--}}
    <script src="{{ asset('/') }}js/config.js"></script>
    <script src="{{ asset('/') }}js/build.js"></script>
</body>
</html>
