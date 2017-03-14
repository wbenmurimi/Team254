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
                        <div class="pull-right social-icons">
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
                                <li class="scroll active"><a href="#home">Home</a></li>
                                <li class="scroll"><a href="#explore">About us</a></li>                         
                                <li class="scroll"><a href="#event">Projects</a></li>
                                <li class="scroll"><a href="#about">Products</a></li>   
                                <li><a class="no-scroll" href="#" target="_blank"> Blog</a></li>
                                <li class="scroll"><a href="#contact">Contact</a></li>       
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

@yield('content')


<section id="home"> 
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="{{ asset('asset/images/slider/img1.jpg') }}" alt="slider">                       
                <div class="carousel-caption">
                    <h2>Big Data Analysis </h2>
                    <h4>Realize the power of data</h4>
                    <a href="#contact">Read more here <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ asset('asset/images/slider/img2.jpg') }}" alt="slider">   
                <div class="carousel-caption">
                    <h2>Machine learning </h2>
                    <h4>Realize the value of the data in your company</h4>
                    <a href="#contact">Read more here <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ asset('asset/images/slider/img3.jpg') }}" alt="slider">   
                <div class="carousel-caption">
                    <h2>Marketing </h2>
                    <h4>Know your customers better</h4>
                    <a href="#contact" >Read more here <i class="fa fa-angle-right"></i></a>
                </div>
            </div>              
        </div>
    </div>      
</section>
<!--/#home-->
<section id="explore">
    <div class="container">
     <div class="text-center  wowload fadeInUp"  >
                <h2>About us</h2>
            </div>              
          <h3 class="text-center  wowload fadeInUp">Our team</h3>
        <p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
        <div class="row grid team  wowload fadeInUpBig">    
            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/BenjaminM_2917.jpg') }}" alt="img01" class="img-responsive" />
                    <figcaption>
                        <p><b>Benjamin Munyoki</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
                    </figcaption>
                </figure>
            </div>

            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Benson_2928.jpg') }}" alt="img01"/>
                    <figcaption>            
                        <p><b>Benson Wachira</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
                    </figcaption>
                </figure>
            </div>

            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Emmanuel_2909.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Emmanuel Chebukatti</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>
            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/FredO_2713.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Fred Otieno</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>
            <hr class="team_hr">
            <hr style="height:1px;border:none;color:#333;background-color:#333; margin-top: 100px;">

            <div class=" col-sm-3 col-xs-6" >
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Rahab_2942.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Rahab Wairimu</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>
            <div class=" col-sm-3 col-xs-6" >
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Rahab_2942.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Sylvia Makario</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>
            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Victoria_1.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Victoria Munguti</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>
            <div class=" col-sm-3 col-xs-6">
                <figure class="effect-chico">
                    <img src="{{ asset('asset/images/partners/Yvonne_2669.jpg') }}" alt="img01"/>
                    <figcaption>
                        <p><b>Yvonne Wambui</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
                    </figcaption>
                </figure>
            </div>



        </div>
    </div>
</section><!--/#explore-->

<section id="event">
    <div class="container">
    <div class="text-center  wowload fadeInUp"  >
                <h2>Projects</h2>
            </div> 
        <div class="row" style="margin-top:100px;">
            <div class="col-sm-12 col-md-12">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="single-event">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">Kenyan elections-2017</h4>
                            </div>
                            <div class="panel-body" style="color: black;">
                                <h5> Presidential elections</h5>
                                <div class="row">
                                    <p style="margin-left:15px;">Get updated on current Pressidential campaign trends. We analyse citizens perception and comments about all the candidates and present it to you in easy to understand graphics</p>
                                </div>
                                <a href="{{ url('/projects/Kenyan-elections-2017-charts') }}" class="btn btn-primary">View Analysis <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg- col-md-6 col-sm-12">
                    <div class="single-event">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">Kenyan elections-2017</h4>
                            </div>
                            <div class="panel-body" style="color: black;">
                                <h5> Govenor elections</h5>
                                <div class="row">
                                    <p style="margin-left:15px;">Get updated on current Nairobi Govenor campaign trends. We analyse citizens perception and comments about all the candidates and present it to you in easy to understand graphics</p>
                                </div>
                                <a href="{{ url('/projects/Kenyan-elections-2017-charts') }}" class="btn btn-primary">View Analysis <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#event-->

<section id="about">

    <div class="about-content">                 
        <h2>Our products</h2>
        <p>We have created an extremely positive and relaxed environment all geared towards developing your skills whether you are an absolute beginner trying to get off the ground or an accomplished player looking to move to the next level. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <a href="#" class="btn btn-primary">View More Details  <i class="fa fa-angle-right"></i></a>

    </div>
</section>
<!--/#about-->

<section id="sponsor">
    <div id="sponsor-carousel" class="carousel slide" data-interval="false">
        <div class="container">
            <div class="row">     

                <div id=""  class="container spacer ">
                    <h2 class="text-center wowload fadeInUp">Make data driven decisions</h2>  
                    <div class="row">
                        <div class="col-sm-6 wowload fadeInLeft">
                            <h4><i class="fa fa-camera-retro"></i> Technologies </h4>
                            <p> We use the best technology in data science industry to make sure we do not miss any detail and that we deliver quality work.</p>


                        </div>
                        <div class="col-sm-6 wowload fadeInRight">
                            <h4><i class="fa fa-coffee"></i> Methodology</h4>
                            <p>We are creative problem solvers harnessing the power of data to give you insights  and trends you haven't yet discovered in your business. Let's discover and grow together</p>    
                        </div>
                    </div>

                    <div class="services">
                        <h3 class="text-center wowload fadeInUp">Products and Services</h3>
                        <ul class="row text-center list-inline  wowload bounceInUp">
                            <li style="color:white !important; font-weight:bold;">
                                <span><i class="fa fa-gears"></i><b>Big Data</b></span>
                            </li>
                            <li style="color:white !important; font-weight:bold;">
                                <span><i class="fa fa-bar-chart"></i><b>Machine Learning </b></span>
                            </li>
                            <li style="color:white !important; font-weight:bold;">
                                <span><i class="fa fa-database"></i><b>Data mining</b></span>
                            </li>
                            <li style="color:white !important; font-weight:bold;">
                                <span><i class="fa fa-home"></i><b>Data Warehousing</b></span>
                            </li>        
                            <li style="color:white !important; font-weight:bold;">
                                <span><i class="fa fa-bar-chart"></i><b>Visualization</b></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- #Cirlce Ends -->
            </div>             
        </div>

    </div>
</section><!--/#sponsor-->

<section id="contact">
    <div id="map">
        <div id="gmap-wrap">
            <div id="gmap">                 
            </div>              
        </div>
    </div><!--/#map-->
    <div class="contact-section">
        <div class="ear-piece">
            <!-- <img class="img-responsive" src="asset/images/ear-piece.png" alt=""> -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-2">
                    <div class="contact-text">
                        <h3>Contact</h3>
                        <address>
                            E-mail: data@party.com<br>
                            Phone: +254 714 456 790<br>
                        </address>
                    </div>
                    <div class="contact-address">
                        <h3>Contact</h3>
                        <address>
                            PO BOX 1234,<br>
                            Upperhill Road,<br>
                            Nairobi<br>
                            Kenya
                        </address>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="contact-section">
                        <h3>Send a message</h3>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
                            </div>                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Send</button>
                            </div>
                        </form>        
                    </div>
                </div>
            </div>
        </div>
    </div>      
</section>
<!--/#contact-->


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


<!--  <div id="event-carousel" class="carousel slide" data-interval="false">
<h2 class="heading">Current Projects</h2>
<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
<div class="carousel-inner">
<div class="item active">
<div class="row">
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Kenyan elections</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Presidential elections</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Kenyan elections</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Govenor elections</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Kidero </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Sonko </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Kenyan elections</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Senetor elections</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Corruption</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Corruption perception</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Development</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Developments in kenya</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="single-event">
<div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">Kenyan elections</h4>
</div>
<div class="panel-body" style="color: black;">
<h5> Panel content</h5>
<div class="row">
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div>
</div>
<div class="col-lg-6">
<div class="item">
<img src="asset/images/twitter/twitter2.png" alt="">
<p>Uhuru </p>
</div> 
</div>
</div>
<a href="#" class="btn btn-primary">View details <i class="fa fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- <section id="twitter">
<div id="twitter-carousel" class="carousel slide" data-interval="false">
<div class="container">
<div class="row">
<div class="col-sm-10">
<h2>Clients</h2>           


<div id=""  class="container spacer ">
<h2 class="text-center wowload fadeInUp">Creative photographers of London</h2>  
<div class="row">
<div class="col-sm-6 wowload fadeInLeft">
<h4><i class="fa fa-camera-retro"></i> Introduction </h4>
<p>Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs, lead by passionate and uber progressive team that lives and breathes design. Creative digital agency for sleek and sophisticated solutions for mobile, websites and software designs.</p>


</div>
<div class="col-sm-6 wowload fadeInRight">
<h4><i class="fa fa-coffee"></i> Passion</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>    
</div>
</div>

<div class="services">
<h3 class="text-center wowload fadeInUp">Services</h3>
<ul class="row text-center list-inline  wowload bounceInUp">
<li>
<span><i class="fa fa-camera-retro"></i><b>Photography</b></span>
</li>
<li>
<span><i class="fa fa-cube"></i><b>Studio</b></span>
</li>
<li>
<span><i class="fa fa-graduation-cap"></i><b>Trainings</b></span>
</li>
<li>
<span><i class="fa fa-umbrella"></i><b>Travel</b></span>
</li>        
<li>
<span><i class="fa fa-heart-o"></i><b>Wedding</b></span>
</li>
</ul>
</div>
</div>

</div>
</div>              
</div>

</div>
</section> -->
<!--/#twitter-feed-->