@extends('guest.layouts.app')
@section('title', 'Home')
@section('content')
        <!-- slider -->
        <div id="slider">
            <!-- revolution slider begin -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{asset('assets/img-rev-slider/bg-1.jpg')}}" alt="">

                            <div class="tp-caption h-line lft"
                                data-x="20"
                                data-y="130"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption sfr custom-font-1"
                                data-x="20"
                                data-y="180"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                BY LAND 
                            </div>

                            <div class="tp-caption sfr custom-font-1"
                                data-x="20"
                                data-y="235"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic">
                                BY SEA 
                            </div>

                            <div class="tp-caption sfr custom-font-1"
                                data-x="20"
                                data-y="290"
                                data-speed="800"
                                data-start="1200"
                                data-easing="easeInOutCubic">
                                BY AIR 
                            </div>

                            <div class="tp-caption sfb custom-font-2"
                                data-x="20"
                                data-y="345"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                Freight Solutions For All Industry
                            </div>

                           
                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{asset('assets/img-rev-slider/bg-2.jpg')}}" alt="">

                            <div class="tp-caption h-line lft"
                                data-x="center"
                                data-y="170"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption lft custom-font-1"
                                data-x="center"
                                data-y="220"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Delivering Excellence 
                            </div>

                            <div class="tp-caption sfb custom-font-2"
                                data-x="center"
                                data-y="270"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                We Deliver Fast International Cargo Services
                            </div>

                        </li>

                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{asset('assets/img-rev-slider/bg-5.jpg')}}" alt="">

                            <div class="tp-caption h-line lft"
                                data-x="center"
                                data-y="170"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption lft custom-font-1"
                                data-x="center"
                                data-y="220"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Makes You Smile 
                            </div>

                            <div class="tp-caption sfb custom-font-2"
                                data-x="center"
                                data-y="270"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                On Time Delivery Don't Worry Be Happy
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
        </div>
        <!-- slider close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">
            <div class="box-container">
                <div id="bg-service-1" class="box-one-third light-text">
                    <div class="inner wow" data-wow-delay="0s">
                        <h2 class="wow fadeIn" data-wow-delay=".2s">Ocean Freight</h2>
                        <p class="wow fadeIn" data-wow-delay=".3s">With our broad product range we cover different equipment types and consolidation services to ensure your cargo reaches the right place, at the right time in a cost-efficient way. In order to deliver highest reliability we have planned space protection from every major container port in the world.</p>
                    </div>
                </div>



                <div id="bg-service-3" class="box-one-third light-text">
                    <div class="inner">
                        <h2 class="wow fadeIn" data-wow-delay=".4s">Logistics</h2>
                        <p class="wow fadeIn" data-wow-delay=".5s">Discover exciting stories and get expert insights from the fascinating world of logistics. Leaf through trend reports or explore potential future worlds; read articles about new innovative solutions and study business cases in which {{strToLower(config('app.name'))}} delivered best-in-class logistics solutions </p>
                    </div>
                </div>

                <div id="bg-service-2" class="box-one-third light-text">
                    <div class="inner">
                        <h2 class="wow fadeIn" data-wow-delay=".6s">Air Freight</h2>
                        <p class="wow fadeIn" data-wow-delay=".7s">Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient. We offer a range of highly flexible products which allow a choice of delivery speeds to best suit your requirements.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
			<!-- section begin -->
            <section id="section-tracking">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <form action="{{route('track.shipment')}}" method="POST"> @csrf
                                <input type="text" name="tracking_id" placeholder="Insert tracking ID here..." required>
                                <input type="submit" value="TRACK IT">
                                </form>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- section close -->

			<!-- section begin -->
            <section id="section-features">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="wow fadeIn" data-wow-delay="0">Why Choose Us?
						<span>Find reasons to choose us as your freight partner</span>
                            </h2>
                            <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="icon-tools wow zoomIn" data-wow-delay="0s"></i>
                                <div class="text wow fadeIn" data-wow-delay=".2s">
                                    <h3>Customer Satisfication Tools</h3>
                                    <p>We delight in giving our clients all over the world the best Services and attending to their problems 24/7.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="icon-bargraph wow zoomIn" data-wow-delay=".2s"></i>
                                <div class="text wow fadeIn" data-wow-delay=".4s">
                                    <h3>Excellent Management</h3>
                                    <p>We realize how important decision making in any organization and having you in mind we strive to have the best people in our management team.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="icon-pricetags wow zoomIn" data-wow-delay=".4s"></i>
                                <div class="text wow fadeIn" data-wow-delay=".6s">
                                    <h3>Freight Payment Options</h3>
                                    <p>We are flexible enough to accept severial means of payments because we are always more than ready to do business with you.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="icon-refresh wow zoomIn" data-wow-delay=".6s"></i>
                                <div class="text wow fadeIn" data-wow-delay=".8s">
                                    <h3>Compliance</h3>
                                    <p>An important tradition in our company is making sure we follow all Compliances ranging from saftey to government to monetary e.t.c</p>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </section>
			<!-- section close -->
			
			<!-- section begin -->
            <section id="section-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="gallery" class="gallery full-gallery ex-gallery zoom-gallery">

                                <!-- gallery item -->
                                <div class="item">
                                    <div class="picframe">
                                        <a href="{{asset('assets/img/gallery/pic-1.jpg')}}" data-source="{{asset('assets/img/gallery/pic-1.jpg')}}" title="Service with a Smile">
                                            <span class="overlay"></span>

                                            <span class="pf_text">
                                                <span class="project-name">Service with a Smile</span>
                                                <span class="small-border"></span>
                                            </span>

                                            <img src="{{asset('assets/img/gallery/pic-1.jpg')}}" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <div class="picframe">
                                        <a href="{{asset('assets/img/gallery/pic-2.jpg')}}" data-source="{{asset('assets/img/gallery/pic-2.jpg')}}" title="Land Delivery by Truck">
                                            <span class="overlay"></span>

                                            <span class="pf_text">
                                                <span class="project-name">Land Delivery by Truck</span>
                                                <span class="small-border"></span>
                                            </span>

                                            <img src="{{asset('assets/img/gallery/pic-2.jpg')}}" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <!-- close gallery item -->

                                <!-- gallery item -->
                                <div class="item">
                                    <div class="picframe">
                                        <a href="{{asset('assets/img/gallery/pic-3.jpg')}}" data-source="{{asset('assets/img/gallery/pic-3.jpg')}}" title="Land Delivery by Train">
                                            <span class="overlay"></span>

                                            <span class="pf_text">
                                                <span class="project-name">Land Delivery by Train</span>
                                                <span class="small-border"></span>
                                            </span>

                                            <img src="{{asset('assets/img/gallery/pic-3.jpg')}}" alt="" />
                                        </a>

                                    </div>
                                </div>
                                <!-- close gallery item -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- section close -->

			<!-- section begin -->
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
        @endsection