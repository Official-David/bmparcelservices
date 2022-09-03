@extends('guest.layouts.app')
@section('title', 'Services')
@section('content')

        <!-- subheader begin -->
        <section id="subheader" class="no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Our Services
						<span>We Are International Cargo Services</span></h1>
                            <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-container">
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0">
                                <div class="box-with-icon-left">
                                    <i class="fa fa-ship icon-big"></i>
                                    <div class="text">
                                        <h2>Ocean Freight</h2>
                                        <p>With our broad product range we cover different equipment types and consolidation services to ensure your cargo reaches the right place, at the right time in a cost-efficient way. In order to deliver highest reliability we have planned space protection from every major container port in the world.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0">
                                <div class="box-with-icon-left">
                                    <i class="fa fa-send-o icon-big"></i>
                                    <div class="text">
                                        <h2>Air Freight</h2>
                                        <p>Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient. We offer a range of highly flexible products which allow a choice of delivery speeds to best suit your requirements.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="divider-double"></div>

                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0">
                                <div class="box-with-icon-left">
                                    <i class="fa fa-cubes icon-big"></i>
                                    <div class="text">
                                        <h2>Logistics</h2>
                                        <p>Discover exciting stories and get expert insights from the fascinating world of logistics. Leaf through trend reports or explore potential future worlds; read articles about new innovative solutions and study business cases in which {{strToLower(config('app.name'))}} delivered best-in-class logistics solutions </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0">
                                <div class="box-with-icon-left">
                                    <i class="fa fa-train icon-big"></i>
                                    <div class="text">
                                        <h2>Cargo Express</h2>
                                        <p>Expert logistics solution. We have the capacity to ship anything from small envelopes or packages to large truck or container loads of your products anywhere in the world. Not only that, we pride ourselves in offering personal customer service and competitive rates on our services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <section id="section-partners">
                <div class="container">
                    <div class="row">

                        <div class="logo-partners">
                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay=".2s" data-wow-duration=".6s" src="{{asset('assets/img/logo/1.jpg')}}" alt="">
                            </div>

                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".5s" src="{{asset('assets/img/logo/2.jpg')}}" alt="">
                            </div>

                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay=".8s" data-wow-duration=".5s" src="{{asset('assets/img/logo/3.jpg')}}" alt="">
                            </div>

                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay="1.1s" data-wow-duration=".5s" src="{{asset('assets/img/logo/4.jpg')}}" alt="">
                            </div>

                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay="1.4s" data-wow-duration=".5s" src="{{asset('assets/img/logo/5.jpg')}}" alt="">
                            </div>

                            <div class="col-md-2 col-xs-4">
                                <img class="wow fadeInRight" data-wow-delay="1.7s" data-wow-duration=".5s" src="{{asset('assets/img/logo/6.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </section>
			<!-- section close -->

            <div class="call-to-action text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Contact us now to get quote for all your global shipping needs.</h2>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="btn-border-light">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content close -->

     @endsection