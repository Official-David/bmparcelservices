@extends('admin.layouts.app')
@section('title', 'Edit Shipment Details')
@section('content')
    <!-- CONTAINER -->
    <div class="container content-area relative">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title"><u>{{ $shipment->shipment_name }}</u> ({{ $shipment->tracking_id }})</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipment</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Shipment Detail</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-lg-12">
                <form class="card" action="{{route('update.shipmentDetails', $shipment->id)}}" method="POST">
					@csrf
                    <div class="card-header">
                        <h3 class="card-title">Edit Shipment Detail</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Shipment/Package Name</label>
                                    <input type="text" class="form-control" value="{{ $shipment->shipment_name }}"
                                        placeholder="Shipment/Package Name" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Current Location</label>
                                    <input type="text" class="form-control" name="location" value="{{ $shipmentDetails[0]->location }}"
                                        placeholder="Current Location">
                                </div>	
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Shipment Status</label>
                                    <select class="form-control" name="shipment_status">
                                        <option value="1" @if ($shipment->shipment_status == 'shipment accepted') selected @endif>Shipment Accepted</option>
                                        <option value="2" @if ($shipment->shipment_status == 'on transit') selected @endif>On Transit</option>
                                        <option value="3" @if ($shipment->shipment_status == 'out for delivery') selected @endif>Out for Delivery</option>
                                        <option value="4" @if ($shipment->shipment_status == 'delivered') selected @endif>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Delivery Status</label>
                                    <select class="form-control" name="delivery_status">
                                        <option value="1" @if ($shipmentDetails[0]->delivery_status == 'on transit') selected @endif>On Transit</option>
                                        <option value="2" @if ($shipmentDetails[0]->delivery_status == 'stopped') selected @endif>Stopped</option>
                                        <option value="3" @if ($shipmentDetails[0]->delivery_status == 'delivered') selected @endif>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" name="created_at" value="{{ $shipmentDetails[0]->created_at }}"
                                        placeholder="Date">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Delivery Message</label>
                                    <textarea rows="5" class="form-control" name="message" placeholder="Delivery Message">{{ $shipmentDetails[0]->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div><!-- COL END -->
        </div>
    </div>
    <!-- ROW CLOSED -->
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
    @if (session('shipmentDetailsEdited'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Successful',
                text: '{{ session('shipmentDetailsEdited') }}'
            })
        </script>
@elseif(session('shipmentSaved'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Successful',
        text: '{{ session('shipmentSaved') }}'
    })
</script>
@endif
@endsection