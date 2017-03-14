    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Team254</title>
        <!-- Fonts -->
        @yield('importcss')

        <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/font-awesome/css/font-awesome.min.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/custom.css') }}">
        <style>
            {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        </style>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('asset/images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('asset/images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('asset/images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('asset/images/ico/apple-touch-icon-57-precomposed.png') }}">
    </head>

    <body id="app-layout">
        <div class="mynav">
            @yield('navigation')
            <!--/#header-->
            <header id="header" role="banner">      
                <div class="main-nav">
                    <div class="container">
                        <div class="header-top">
                            <div class="pull-right social-icons navIcons" >
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>     
                        <div class="row">                   
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img class="img-responsive" src="{{ asset('asset/images/logo.png') }}" alt="logo">
                                </a>                    
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">                 
                                    <li class=""><a href="{{ url('/') }}">Home</a></li>
                                    <li class=""><a href="{{ url('/') }}">Predisent</a></li>
                                    <li class=""><a href="{{ url('/') }}">Govener</a></li>  
                                    <li class=""><a href="{{ url('/') }}">Contact</a></li>       
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                    
            </header>
            <!--/#header-->
        </div>
    </div>
    <!-- end of nav bar -->

     @yield('spacer')
<div class="row">
    <div class="col-lg-12" style="color:black; ">
        </div>
</div>
  @yield('content')



<!-- Footer starts -->
@yield('footer')
<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p> Copyright  &copy;2016<a target="_blank" href="#"> Team254 </a> All Rights Reserved. <br> Designed by <a target="_blank" href="#">Ben100</a></p>                
        </div>
    </div>
</footer>
<!--End of footer -->
<!-- JavaScripts -->

@yield('importjs')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/gmaps.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/smoothscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery.parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/coundown-timer.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery.scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/main.js') }}"></script>



<!-- {{-- <script src="{{ elixir('js/app.js') }}"></script> --}} -->
@yield('extrajs')
</body>
</html>
