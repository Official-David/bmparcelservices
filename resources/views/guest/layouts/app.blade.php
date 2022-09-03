<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>
                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/img/logo.png')}}" alt="" class="logo-1">
                                    <img src="{{asset('assets/img/logo-2.png')}}" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <nav id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="{{route('home')}}">Home</a>
                                </li>
                                <li><a href="{{route('services')}}">Services</a>
                                </li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('track')}}">Track</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->

                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->

        @yield('content')

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">



                    <div class="col-md-4">
                        <h3>Our Services</h3>
                        <div class="tiny-border"></div>
                        <ul>
                            <li><a href="#">Ocean Freight</a></li>
                            <li><a href="#">Sky Freight</a></li>
                            <li><a href="#">Cargo Express</a></li>
                            <li><a href="#">Logistics</a></li>
                            <li><a href="#">Warehousing</a></li>
                            <li><a href="#">Custom Brokerage</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>Location</h3>
                        <div class="tiny-border"></div>
                        Somewhere Over Rainbow<br>
                        Green World Rainbow Green World<br>
                        Phone. 0908 100 1000<br>
                        Email: contact@exotheme.com<br>

                        <div class="divider-single"></div>
                    </div>

                    <div class="col-md-4">
                        <h3>Who we are</h3>
                        <div class="tiny-border"></div>
                        <p>{{config('app.name')}} is a worldwide Logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide for any type of cargo.</p>
                    </div>

                </div>
            </div>
            <div class="divider"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="spacer-single"></div>
                        &copy; Copyright 2022 - {{config('app.name')}}
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- LOAD JS FILES -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/easing.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ui.totop.js')}}"></script>
    <script src="{{asset('assets/js/ender.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('assets/js/jquery.plugin.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.js')}}"></script>
    <script src="{{asset('assets/js/typed.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollto.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/js/revslider-custom.js')}}"></script>

</body>

</html>
