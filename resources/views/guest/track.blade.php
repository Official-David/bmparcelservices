@extends('guest.layouts.app')
@section('title', 'Track')
@section('content')
        <!-- subheader begin -->
        <section id="subheader" class="page-track no-bottom" data-stellar-background-ratio="0.5">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Track
							<span>Your Package Info</span>
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
        <div id="content"  class="no-padding">
            <!-- section begin -->
            <section id="section-tracking">
                <div class="container">
                    <div class="row">
                        <div class="cta-form wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                            <form action="{{route('track.shipment')}}" method="POST"> @csrf
                            <input type="text" name="tracking_id" placeholder="Insert tracking ID here..." required>
                            <input type="submit" value="TRACK IT">
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div id="section-tracking-result" class="light-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="divider-double"></div>
                                <div class="text-center">
                                    <h3><span class="grey">Product ID:</span> 112345679087328</h3>
                                </div>


                                <div class="divider-double"></div>

                            </div>

                                
                        </div>
                    </div>
                </div>

            </section>
			<!-- section close -->
        </div>
        <!-- content close -->
@endsection