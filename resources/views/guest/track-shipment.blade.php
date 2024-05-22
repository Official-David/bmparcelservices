@extends('guest.layouts.app')
@section('title', 'Track Shipment')
@section('content')
    <!-- Start #page-title-->
    <section class="page-title bg-overlay bg-overlay-dark bg-parallax" id="page-title">
        <div class="bg-section"><img src="assets/images/page-titles/7.jpg" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="title text-lg-left">
                        <div class="title-heading">
                            <h1>track &amp; trace</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Track And Trace</li>
                        </ol>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8 -->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title-->
    <!--
                  ============================
                  Track Shimpent Section
                  ============================
                  -->
    <section class="track-shipment request-quote contact-card" id="track-shipment">
        <div class="container">
            <div class="row">
                <!-- Start .col-lg-4-->
                <div class="col-sm-12 col-md-12 col-lg-4 order-2 order-lg-0">
                    <div class="sidebar sidebar-case-study">
                        <!-- Start .widget-categories-->
                        <div class="widget widget-categories">
                            <div class="widget-title">
                                <h5>transport services</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)">warehouse</a></li>
                                    <li><a href="javascript:void(0)">air freight</a></li>
                                    <li><a href="javascript:void(0)">ocean freight</a></li>
                                    <li><a href="javascript:void(0)">road freight</a></li>
                                    <li><a href="javascript:void(0)">supply chain</a></li>
                                    <li><a href="javascript:void(0)">packaging</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .widget-categories -->
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="track-form quote-form contact-body trackFormActive">
                        <div class="form-status">
                            <p>Need dependable, cost effective transportation of your commodities? Fill out our easy Quote
                                Request Form below to get a fast quote on your job.</p>
                        </div>
                        <form action="{{ route('trackshipment') }}" method="POST">
                            @csrf
                            <div class="form-section">
                                <h5 class="card-heading">Tracking Id</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="select-container">
                                            {{-- <select class="form-control" name="">
                            <option value="Air Freight">Air Freight</option>
                            <option value="Ocean Freight">Ocean Freight</option>
                            <option value="Road Freight">Road Freight</option>
                          </select> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <h5 class="card-heading">tracking id</h5> --}}
                                <div class="row">
                                    <div class="col-12">
                                        <textarea class="form-control" name="tracking_id" cols="30" rows="2"
                                            placeholder="You can enter a tracking ID." required=""></textarea>
                                    </div>
                                    {{-- <div class="col-12">
                        <div class="custom-radio-group">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadioInline1" name="customRadioInline1"/>
                            <label for="customRadioInline1">fragile</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadioInline2" name="customRadioInline1"/>
                            <label for="customRadioInline2">express delivery</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadioInline3" name="customRadioInline1"/>
                            <label for="customRadioInline3">insurance</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" id="customRadioInline4" name="customRadioInline1"/>
                            <label for="customRadioInline4">packaging</label>
                          </div>
                        </div>
                      </div> --}}
                                    <div class="col-12">
                                        <input class="btn btn--secondary" type="submit" value="Track &amp; Trace" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if (isset($shipments))
                        <div class="contact-card">
                            <div class="widget widget-categories">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Sender Information</h5>
                                        <div>Name: {{ $senderInfo[0]->name }}</div>
                                        <div>Email: {{ $senderInfo[0]->email }}</div>
                                        <div>Phone: {{ $senderInfo[0]->phone }}</div>
                                        <div>Address: {{ $senderInfo[0]->address }}</div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>Receiver Information</h5>
                                        <div>Name: {{ $receiverInfo[0]->name }}</div>
                                        <div>Email: {{ $receiverInfo[0]->email }}</div>
                                        <div>Phone: {{ $receiverInfo[0]->phone }}</div>
                                        <div>Address: {{ $receiverInfo[0]->address }}</div>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <h5>Shipment Information for <span class="text-muted">#{{$shipments->tracking_id}}</span></h5>
                                    </div>

                                    <div class="col-md-6">
                                        <div>Origin: {{ $shipments->origin }}</div>
                                        <div>Type Of Shipment: {{ $shipments->type_of_shipment }}</div>
                                        <div>Shipment Mode: {{ $shipments->shipment_mode }}</div>
                                        <div>Quantity: {{ $shipments->quantity }}</div>
                                        <div>Payment Mode: {{ $shipments->payment_mode }}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>Destination: {{ $shipments->destination }}</div>
                                        <div>Carrier: {{ $shipments->carrier }}</div>
                                        <div>Product: {{ $shipments->product }}</div>
                                        <div>Weight: {{ $shipments->weight }}</div>
                                        <div>Expected Delivery Date: {{ $shipments->expected_delivery_date }}</div>
                                    </div>
                                </div>

                                <div class="page-content page-container" id="page-content">
                                  <div class="padding">
                                      <div class="row">
                                          
                                          <div class="col-lg-12">
                                              <p>Status: <span class="text-success">{{$shipments->shipment_status}}</span></p>
                                              <div class="timeline p-4 block mb-4">
                                                @foreach ($shipmentDetails as $shipmentDetail)
                                                  <div class="tl-item active">
                                                      <div class="tl-dot @if ($shipmentDetail->delivery_status == 'stopped') b-danger
                                                        @elseif ($shipmentDetail->delivery_status == 'delivered') b-success @elseif ($shipmentDetail->delivery_status == 'on transit') b-success @endif"></div>
                                                      <div class="tl-content">
                                                          <div class="">{{ $shipmentDetail->message }}</div>
                                                          <div class="tl-date text-muted mt-1">Status: <span class="h-5">{{ $shipmentDetail->delivery_status }}</span></div>
                                                          <div class="tl-content text-muted mt-1">Location: {{ $shipmentDetail->location }}</div>
                                                          <div class="tl-date text-muted mt-1 font-size-85em">{{ \Illuminate\Support\Carbon::parse($shipmentDetail->created_at)->diffForHumans()}}</div>
                                                      </div>
                                                  </div>
                                                @endforeach
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        @endif
        </div>
        </div>
        <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <!--
                  ============================
                  Footer #1
                  ============================
                  -->
@endsection
