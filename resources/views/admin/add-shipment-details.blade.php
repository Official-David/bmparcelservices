@extends('admin.layouts.app')
@section('title', 'Update Shipment Info')
@section('content')
    <!-- CONTAINER -->
    <div class="container content-area relative">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Update Shipment Info</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Shipment Info</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <form class="card" action="{{ route('add.shipment.details', $shipment[0]->id) }}" method="post">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Update Shipment Info</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Shipment/Package Name</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $shipment[0]->shipment_name }}" placeholder="Shipment/Package Name"
                                        disabled>
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div><!-- COL END -->
        </div>
        <!-- ROW CLOSED -->
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
    <!-- SIDE-BAR -->

@endsection