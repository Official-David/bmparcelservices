@extends('admin.layouts.app')
@section('title', 'Create Shipment')
@section('content')
    <!-- CONTAINER -->
    <div class="container content-area relative">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Create Shipment</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Shipment</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-lg-12">
                <form class="card" action="{{ route('new.shipment') }}" method="post">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Create Shipment</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- SENDER INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Name</label>
                                    <input type="text" class="form-control" name="sender_name"
                                        placeholder="Sender Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Email</label>
                                    <input type="text" class="form-control" name="sender_email"
                                        placeholder="Sender Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Phone</label>
                                    <input type="text" class="form-control" name="sender_phone"
                                        placeholder="Sender Phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Address</label>
                                    <input type="text" class="form-control" name="sender_address"
                                        placeholder="Sender Address">
                                </div>
                            </div>
                            <!-- END SENDER INFO -->
                            <!-- RECEIVER INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Name</label>
                                    <input type="text" class="form-control" name="receiver_name"
                                        placeholder="Receiver Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Email</label>
                                    <input type="text" class="form-control" name="receiver_email"
                                        placeholder="Receiver Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Phone</label>
                                    <input type="text" class="form-control" name="receiver_phone"
                                        placeholder="Receiver Phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Address</label>
                                    <input type="text" class="form-control" name="receiver_address"
                                        placeholder="Receiver Address">
                                </div>
                            </div>
                            <!-- END RECEIVER INFO -->
                            <!-- SHIPMENT INFO -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Origin</label>
                                    <select class="form-control" name="origin"
                                        placeholder="Origin">
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Destination</label>
                                    <select class="form-control" name="destination"
                                        placeholder="Destination">
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Type Of Shipment</label>
                                    <select class="form-control" name="type_of_shipment"
                                        placeholder="Type Of Shipment">
                                        <option value='1'>Internaitional Shipment</option>
                                        <option value='2'>Loacal Shipment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Carrier</label>
                                    <input type="text" class="form-control" name="carrier"
                                        placeholder="Carrier">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Shipment Mode</label>
                                    <select class="form-control" name="shipment_mode"
                                        placeholder="Shipment Mode">
                                    <option value='1'>Air Freight</option>
                                    <option value='2'>Ocean Freight</option>
                                    <option value='3'>Road Freight</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END SHIPMENT INFO -->
                            <!-- SHIPMENT INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Product</label>
                                    <input type="text" class="form-control" name="product"
                                        placeholder="Product">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Quantity</label>
                                    <input type="text" class="form-control" name="quantity"
                                        placeholder="Quantity">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Weight</label>
                                    <input type="text" class="form-control" name="weight"
                                        placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Payment Mode</label>
                                    <select class="form-control" name="payment_mode"
                                        placeholder="Payment Mode">
                                    <option value="1">Cash</option>
                                    <option value="2">Cheque</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Expected Delivery Date</label>
                                    <input type="date" class="form-control" name="expected_delivery_date"
                                        placeholder="Expected Delivery Date">
                                </div>
                            </div>
                            <!-- END SHIPMENT INFO -->


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Shipment/Package Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Shipment/Package Name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Current Location</label>
                                    <input type="text" class="form-control" name="location"
                                        placeholder="Current Location">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Shipment Status</label>
                                    <select class="form-control" name="shipment_status">
                                        <option value="1">Shipment Accepted</option>
                                        <option value="2">On Transit</option>
                                        <option value="3">Out for Delivery</option>
                                        <option value="4">Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Delivery Status</label>
                                    <select class="form-control" name="delivery_status">
                                        <option value="1">On Transit</option>
                                        <option value="2">Stopped</option>
                                        <option value="3">Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="datetime-local" class="form-control" name="created_at">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Delivery Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Delivery Message" name="message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div><!-- COL END -->
        </div>
    </div>
    <!-- ROW CLOSED -->
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
    <!-- SIDE-BAR -->

@endsection
