@extends('admin.layouts.app')
@section('title', 'Edit Shipment')
@section('content')
    <!-- CONTAINER -->
    <div class="container content-area relative">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Edit Shipment</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Shipment</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW OPEN -->
        <div class="row">
            <div class="col-lg-12">
                <form class="card" action="{{ route('update.shipment', $shipment[0]->id) }}" method="post">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Edit Shipment</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- SENDER INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Name</label>
                                    <input required type="text" class="form-control" name="sender_name" value="{{$sender[0]->name}}"
                                        placeholder="Sender Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Email</label>
                                    <input required type="email" class="form-control" name="sender_email" value="{{$sender[0]->email}}"
                                        placeholder="Sender Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Phone</label>
                                    <input required type="text" class="form-control" name="sender_phone" value="{{$sender[0]->phone}}"
                                        placeholder="Sender Phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Sender Address</label>
                                    <input required type="text" class="form-control" name="sender_address" value="{{$sender[0]->address}}"
                                        placeholder="Sender Address">
                                </div>
                            </div>
                            <!-- END SENDER INFO -->
                            <!-- RECEIVER INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Name</label>
                                    <input required type="text" class="form-control" name="receiver_name" value="{{$receiver[0]->name}}"
                                        placeholder="Receiver Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Email</label>
                                    <input required type="email" class="form-control" name="receiver_email" value="{{$receiver[0]->email}}"
                                        placeholder="Receiver Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Phone</label>
                                    <input required type="text" class="form-control" name="receiver_phone" value="{{$receiver[0]->phone}}"
                                        placeholder="Receiver Phone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Receiver Address</label>
                                    <input required type="text" class="form-control" name="receiver_address" value="{{$receiver[0]->address}}"
                                        placeholder="Receiver Address">
                                </div>
                            </div>
                            <!-- END RECEIVER INFO -->
                            <!-- SHIPMENT INFO -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Origin</label>
                                    <select required class="form-control" name="origin"
                                        placeholder="Origin">
                                        @foreach ($countries as $country)
                                        <option value="{{$country->name}}" @if($country->name == $shipment[0]->origin) selected @endif>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Destination</label>
                                    <select required class="form-control" name="destination"
                                        placeholder="Destination">
                                        @foreach ($countries as $country)
                                        <option value="{{$country->name}}" @if($country->name == $shipment[0]->destination) selected @endif>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Type Of Shipment</label>
                                    <select required class="form-control" name="type_of_shipment"
                                        placeholder="Type Of Shipment">
                                        <option value='1' @if($shipment[0]->type_of_shipment == 'International Shipment') selected @endif>Internaitional Shipment</option>
                                        <option value='2' @if($shipment[0]->type_of_shipment == 'Local Shipment') selected @endif>Loacal Shipment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Carrier</label>
                                    <input required type="text" class="form-control" name="carrier" value="{{$shipment[0]->carrier}}"
                                        placeholder="Carrier">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Shipment Mode</label>
                                    <select required class="form-control" name="shipment_mode"
                                        placeholder="Shipment Mode">
                                    <option value='1' @if($shipment[0]->shipment_mode == 'Air Freight') selected @endif>Air Freight</option>
                                    <option value='2' @if($shipment[0]->shipment_mode == 'Ocean Freight') selected @endif>Ocean Freight</option>
                                    <option value='3' @if($shipment[0]->shipment_mode == 'Road Freight') selected @endif>Road Freight</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END SHIPMENT INFO -->
                            <!-- SHIPMENT INFO -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Product</label>
                                    <input required type="text" class="form-control" name="product" value="{{$shipment[0]->product}}"
                                        placeholder="Product">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Quantity</label>
                                    <input required type="text" class="form-control" name="quantity" value="{{$shipment[0]->quantity}}"
                                        placeholder="Quantity">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Weight</label>
                                    <input required type="text" class="form-control" name="weight" value="{{$shipment[0]->weight}}"
                                        placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label">Payment Mode</label>
                                    <select required class="form-control" name="payment_mode"
                                        placeholder="Payment Mode">
                                    <option value="1" @if($shipment[0]->payment_mode == 'Cash') selected @endif>Cash</option>
                                    <option value="2" @if($shipment[0]->payment_mode == 'Cheque') selected @endif>Cheque</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label">Expected Delivery Date</label>
                                    <input required type="date" class="form-control" name="expected_delivery_date" value="{{$shipment[0]->expected_delivery_date}}"
                                        placeholder="Expected Delivery Date">
                                </div>
                            </div>
                            <!-- END SHIPMENT INFO -->


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-label">Shipment/Package Name</label>
                                    <input required type="text" class="form-control" name="name" value="{{$shipment[0]->shipment_name}}"
                                        placeholder="Shipment/Package Name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Current Location</label>
                                    <input required type="text" class="form-control" name="location"
                                        placeholder="Current Location" value="{{$shipmentDetails[0]->location}}" disabled>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Shipment Status</label>
                                    <select required class="form-control" name="shipment_status" disabled>
                                        <option value="1" @if($shipment[0]->shipment_status == 'shipment accepted') selected @endif>Shipment Accepted</option>
                                        <option value="2" @if($shipment[0]->shipment_status == 'in transit') selected @endif>In Transit</option>
                                        <option value="3" @if($shipment[0]->shipment_status == 'out for delivery') selected @endif>Out for Delivery</option>
                                        <option value="4" @if($shipment[0]->shipment_status == 'delivery') selected @endif>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Delivery Status</label>
                                    <select required class="form-control" name="delivery_status" disabled>
                                        <option value="1" @if($shipmentDetails[0]->delivery_status == 'on transit') selected @endif>On Transit</option>
                                        <option value="2" @if($shipmentDetails[0]->delivery_status == 'stopped') selected @endif>Stopped</option>
                                        <option value="3" @if($shipmentDetails[0]->delivery_status == 'delivered') selected @endif>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input required type="datetime-local" class="form-control" value="{{$shipment[0]->created_at}}" name="created_at">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Delivery Message</label>
                                    <textarea required rows="5" class="form-control" placeholder="Delivery Message" name="message" disabled>{{$shipmentDetails[0]->message}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
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
    @if (session('updatedShipment'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: '{{ session('updatedShipment') }}'
        })
    </script>
@endif

@if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Successful',
            text: '{{ session('deleted') }}'
        })
    </script>
@endif
@endsection