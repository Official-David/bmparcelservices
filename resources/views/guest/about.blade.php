@extends('guest.layouts.app')
@section('title', 'About Us')
@section('content')
        <!-- subheader begin -->
        <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>About Us
							<span>Fast International Cargo Services</span>
                            </h1>
                            <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/pic-1.jpg" class="img-responsive" alt="">
                        <div class="divider-single"></div>
                        <h2>Who We Are</h2>
                        <div class="tiny-border"></div>
                        <p>{{config('app.name')}} is a worldwide Logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide for any type of cargo. We are dedicated to providing satisfaction to all our clients.</p>

                    </div>
                    <div class="col-md-6">
                        <img src="img/pic-2.jpg" class="img-responsive" alt="">
                        <div class="divider-single"></div>
                        <h2>What We Do</h2>
                        <div class="tiny-border"></div>

                        <p>Our global Logistics expertise, advanced supply chain technology & customized Logistics solutions will help you analyze, develope and implement successful supply chain management strategies..</p>
                    </div>

                    
<div class="divider-line"></div>
                    <div class="text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0">Why Choose Us</h2>
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
                </div>
            </div>
        </div>
        <!-- content close -->
       @endsection