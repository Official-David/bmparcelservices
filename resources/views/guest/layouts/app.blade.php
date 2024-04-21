    <!DOCTYPE html>
    <html dir="ltr" lang="en-US">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Ayman Fikry" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Multi-purpose Business html5 template" />
        <title>@yield('title') | {{ config('app.name') }}</title>
        <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="icon" />
        <!--  Fonts ==
        -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
            rel="stylesheet" />
        <!--  Stylesheets==
        -->
        <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="preloader">
            <div class="loader-spinner">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Document Wrapper-->
        <div class="wrapper clearfix" id="wrapperParallax">
            <!-- Start .header-1-->
            <header class="header header-1 header-transparent" id="navbar-spy">
                <nav class="navbar navbar-expand-lg  navbar-bordered navbar-sticky" id="primary-menu">
                    <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img
                                class="logo logo-light" src="assets/images/logo/logo-light.png" alt="{{config('app.name')}} Logo" /><img
                                class="logo logo-dark" src="assets/images/logo/logo-dark.png" alt="{{config('app.name')}} Logo" /></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!--  Collect the nav links, forms, and other content for toggling  -->
                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="{{ route('home') }}"><span>Home</span></a>
                                </li>
                                <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#"
                                        data-toggle="dropdown"><span>company</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{ route('about') }}"><span>about us</span></a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('page-core') }}"><span>core
                                                    values</span></a></li>
                                        <li class="nav-item"><a href="{{ route('page-team') }}"><span>leadership
                                                    team</span></a></li>
                                        <li class="nav-item"><a href="{{ route('page-locations') }}"><span>global
                                                    locations</span></a></li>
                                        <li class="nav-item"><a href="{{ route('page-gallery') }}"><span>our
                                                    gallery</span></a></li>
                                        <li class="nav-item"><a href="{{ route('page-awards') }}"><span>awards &amp;
                                                    recognition</span></a></li>
                                        <li class="nav-item"><a
                                                href="{{ route('page-careers') }}"><span>careers</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item has-dropdown mega-dropdown"><a class="dropdown-toggle"
                                        href="#" data-toggle="dropdown"><span>services</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="row">
                                                <div class="col col-md-6">
                                                    <h5 class="menu-head">transport services</h5>
                                                    <ul>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-warehouse') }}"><span>warehousing</span></a>
                                                        </li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-air-freight') }}"><span>air
                                                                    freight</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-ocean-freight') }}"><span>ocean
                                                                    freight</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-road-freight') }}"><span>road
                                                                    freight</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-supply') }}"><span>supply
                                                                    chain</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('service-packaging') }}"><span>packaging</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col col-md-6">
                                                    <h5 class="menu-head">industry solutions</h5>
                                                    <ul>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-retail') }}"><span>retail
                                                                    &amp; consumer</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-science') }}"><span>sciences
                                                                    &amp; healthcare</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-chemical') }}"><span>industrial
                                                                    &amp; chemical</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-power') }}"><span>power
                                                                    generation</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-food') }}"><span>food &amp;
                                                                    beverage</span></a></li>
                                                        <li class="nav-item"><a
                                                                href="{{ route('industry-oil') }}"><span>oil &amp;
                                                                    gas</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#"
                                        data-toggle="dropdown"><span>news &amp; media</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{ route('blog-grid-fullwidth') }}"><span>our
                                                    blog</span></a></li>
                                        <li class="nav-item"><a
                                                href="{{ route('blog-single-sidebar') }}"><span>single blog
                                                    post</span></a></li>
                                        <li class="nav-item"><a href="{{ route('page-our-services') }}"><span>our
                                                    services</span></a></li>
                                        <li class="nav-item"><a href="{{ route('case-studies-grid') }}"><span>case
                                                    studies grid</span></a></li>
                                        <li class="nav-item"><a
                                                href="{{ route('case-studies-standard') }}"><span>case studies
                                                    standard</span></a></li>
                                        <li class="nav-item"><a href="{{ route('case-study-single') }}"><span>single
                                                    case study</span></a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item has-dropdown"><a class="dropdown-toggle" href="#"
                                        data-toggle="dropdown"><span>features</span></a>
                                    <ul class="dropdown-menu">
                                        {{-- <li class="nav-item"><a href="{{ route('request-quote') }}"><span>request a
                                                    quote</span></a></li> --}}
                                        <li class="nav-item"><a href="{{ route('track-shipment') }}"><span>track
                                                    &amp; trace</span></a></li>
                                        {{-- <li class="nav-item"><a href="{{ route('find-location') }}"><span>find a
                                                    location</span></a></li> --}}
                                        <li class="nav-item"><a href="{{ route('faqs') }}"><span>help &amp;
                                                    fAQs</span></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{route('contact')}}"><span>contact</span></a></li>
                            </ul>
                            <div class="module-container">
                                <!--  Start Module Search  -->
                                <div class="module module-search float-left">
                                    <div class="module-icon search-icon"><i class="icon-search"></i><span
                                            class="title">search</span></div>
                                    <div class="module-content module-fullscreen module-search-box">
                                        <div class="pos-vertical-center">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                                        <form class="form-search">
                                                            <input class="form-control" type="text"
                                                                placeholder="type words then enter" />
                                                            <button></button>
                                                        </form>
                                                        <!-- End .form-search -->
                                                    </div>
                                                    <!-- End .col-lg-8 -->
                                                </div>
                                                <!--  End .row-->
                                            </div>
                                            <!--  End .container-->
                                        </div><a class="module-cancel" href="javascript:void(0)"><i
                                                class="fas fa-times"></i></a>
                                    </div>
                                </div>
                                <!--  End .module-search-->
                                <!-- Start .module-contact-->
                                <div class="module-contact"><a class="btn btn--primary"
                                        href="javascript:void(0)">request a quote</a></div>
                                <!-- Start .module-language-->
                                <div class="module module-language">
                                    <div class="selected"><span>en </span><i class="fas fa-chevron-down"></i></div>
                                    <div class="lang-list">
                                        <ul>
                                            <li> <a href="javascript:void(0)">english</a></li>
                                            <li> <a href="javascript:void(0)">arabic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End .module-container -->
                        </div>
                        <!--  End .navbar-collapse  -->
                    </div>
                    <!-- End .container-->
                </nav>
            </header>
            <!-- header close -->

            @yield('content')

            <!-- footer begin -->
            <footer class="footer footer-1">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-xl-4">
                                <div class="footer-logo"><img class="footer-logo"
                                        src="assets/images/logo/logo-light.png" alt="logo" /></div>
                            </div>
                            <div class="col-12 col-lg-9 col-xl-8">
                                <div class="widget-newsletter">
                                    <div class="widget-content">
                                        <p>Sign up for industry alerts,<br />insights from {{config('app.name')}}.</p>
                                        <form class="form-newsletter mailchimp">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Your Email Address" />
                                            <input class="btn btn--primary" type="submit" value="sign up!" />
                                            <div class="subscribe-alert"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                                <div class="footer-widget-title">
                                    <h5>about</h5>
                                </div>
                                <div class="widget-content">
                                    <p>{{config('app.name')}} is a representative logistics operator providing full range of service in
                                        the sphere of customs cargo and transportation worldwide.</p>
                                    <!-- Start .module-social-->
                                    <div class="module module-social"><a class="share-facebook"
                                            href="javascript:void(0)"><i class="fab fa-facebook-f"> </i></a><a
                                            class="share-instagram" href="javascript:void(0)"><i
                                                class="fab fa-instagram"></i></a><a class="share-twitter"
                                            href="javascript:void(0)"><i class="fab fa-twitter"></i></a></div>
                                    <!-- End .module-social-->
                                </div>
                            </div>
                            <!--  End .col-lg-4 -->
                            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-2 footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5>services</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="javascript:void(0)">warehouse</a></li>
                                        <li><a href="javascript:void(0)">air freight</a></li>
                                        <li><a href="javascript:void(0)">ocean freight</a></li>
                                        <li><a href="javascript:void(0)">road freight</a></li>
                                        <li><a href="javascript:void(0)">supply chain</a></li>
                                        <li><a href="javascript:void(0)">packaging</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--  End .col-lg-2-->
                            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5>industries</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="javascript:void(0)">retail & consumer</a></li>
                                        <li><a href="javascript:void(0)">sciences & healthcare</a></li>
                                        <li><a href="javascript:void(0)">industrial & chemical</a></li>
                                        <li><a href="javascript:void(0)">power generation</a></li>
                                        <li><a href="javascript:void(0)">food & peverage</a></li>
                                        <li><a href="javascript:void(0)">oil & gas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--  End .col-lg-2-->
                            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                                <div class="footer-widget-title">
                                    <h5>quick contact</h5>
                                </div>
                                <div class="widget-content">
                                    <p>If you have any questions or need help, feel free to contact with our team.</p>
                                    <ul>
                                        <li class="phone"><a href="tel:+01061245741"><i
                                                    class="fas fa-phone-alt"></i> 01061245741</a></li>
                                        <li class="address"><a href="javascript:void(0)">2307 Beverley Rd Brooklyn,
                                                New York 11226 United States.</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--  End .col-lg-2-->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--  End .container-->
                </div>
                <!--  End .footer-center-->
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-12 col-md-12 text--center footer-copyright">
                            <div class="copyright"><span>&copy; {{config('app.name')}}, With Love by</span></div>
                        </div>
                    </div>
                    <!--  End .row-->
                </div>
                <!--  End .footer-bottom-->
            </footer>
            <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
        </div>
        <!--  Footer Scripts==
        -->
        <script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
    </body>

    </html>
