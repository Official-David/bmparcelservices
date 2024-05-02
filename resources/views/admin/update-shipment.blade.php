@extends('admin.layouts.app')
@section('title', 'Edit Shipment')
@section('content')
    <main class="p-6">
        <div class="flex flex-col gap-6">
            <div class="card">
                <form class="card" action="{{ route('update.shipment', $shipment[0]->id) }}" method="post">
                    @csrf
                    <div class="p-6">
                        <h4 class="card-title mb-4">Edit Shipment</h4>

                        <div class="grid lg:grid-cols-3 gap-6">
                            <div>
                                <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Sender
                                    Name</label>
                                <input type="text" id="simpleinput" class="form-input" value="{{$sender[0]->name}}" name="sender_name"
                                    placeholder="Sender Name">
                            </div>

                            <div>
                                <label for="example-email"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Email</label>
                                <input type="email" id="example-email" class="form-input" value="{{$sender[0]->email}}" name="sender_email"
                                    placeholder="Sender Email">
                            </div>

                            <div>
                                <label for="example-password"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Phone</label>
                                <input type="text" id="simpleinput" class="form-input" value="{{$sender[0]->phone}}" name="sender_phone"
                                    placeholder="Sender Phone">
                            </div>

                            <div>
                                <label for="example-palaceholder"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Address</label>
                                <input type="text" id="example-palaceholder" class="form-input" value="{{$sender[0]->address}}" name="sender_address"
                                    placeholder="Sender Address">
                            </div>

                            <div>
                                <label for="example-readonly"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Name</label>
                                <input type="text" id="example-readonly" class="form-input" value="{{$receiver[0]->name}}" name="receiver_name"
                                    placeholder="Receiver Name">
                            </div>

                            <div>
                                <label for="example-disable"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Email</label>
                                <input type="email" class="form-input" id="example-disable" value="{{$receiver[0]->email}}" name="receiver_email"
                                    placeholder="Receiver Email">
                            </div>

                            <div>
                                <label for="example-date"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Phone</label>
                                <input class="form-input" id="example-date" type="text" value="{{$receiver[0]->phone}}" name="receiver_phone"
                                    placeholder="Receiver Phone">
                            </div>

                            <div>
                                <label for="example-month"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Address</label>
                                <input class="form-input" id="example-month" type="text" value="{{$receiver[0]->address}}" name="receiver_address"
                                    placeholder="Receiver Address">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Origin</label>
                                <select class="form-select" id="example-select" name="origin" placeholder="Origin">
                                    @foreach ($countries as $country)
                                    <option value="{{$country->name}}" @if($country->name == $shipment[0]->origin) selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Destination</label>
                                <select class="form-select" id="example-select" name="destination"
                                    placeholder="Destination">
                                    @foreach ($countries as $country)
                                    <option value="{{$country->name}}" @if($country->name == $shipment[0]->destination) selected @endif>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="example-time" class="text-gray-800 text-sm font-medium inline-block mb-2">Type
                                    Of Shipment</label>
                                <select class="form-select" id="example-select" name="type_of_shipment"
                                    placeholder="Type Of Shipment">
                                    <option value='1' @if($shipment[0]->type_of_shipment == 'International Shipment') selected @endif>Internaitional Shipment</option>
                                        <option value='2' @if($shipment[0]->type_of_shipment == 'Local Shipment') selected @endif>Loacal Shipment</option>
                                </select>
                            </div>

                            <div>
                                <label for="example-color"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Carrier</label>
                                <input class="form-input h-10" id="example-color" type="text" value="{{$shipment[0]->carrier}}" name="carrier"
                                    placeholder="Carrier">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment Mode</label>
                                <select class="form-select" id="example-select" name="shipment_mode"
                                    placeholder="Shipment Mode">
                                    <option value='1' @if($shipment[0]->shipment_mode == 'Air Freight') selected @endif>Air Freight</option>
                                    <option value='2' @if($shipment[0]->shipment_mode == 'Ocean Freight') selected @endif>Ocean Freight</option>
                                    <option value='3' @if($shipment[0]->shipment_mode == 'Road Freight') selected @endif>Road Freight</option>
                                </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Product</label>
                                <input type="text" id="simpleinput" class="form-input" name="product" value="{{$shipment[0]->product}}" 
                                    placeholder="Product">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Quantity</label>
                                <input type="text" id="simpleinput" class="form-input" name="quantity" value="{{$shipment[0]->quantity}}" 
                                    placeholder="Quantity">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Weight</label>
                                <input type="text" id="simpleinput" class="form-input" name="weight" value="{{$shipment[0]->weight}}" 
                                    placeholder="Weight">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Payment Mode</label>
                                <select class="form-select" id="example-select" name="payment_mode"
                                    placeholder="Payment Mode">
                                    <option value="1" @if($shipment[0]->payment_mode == 'Cash') selected @endif>Cash</option>
                                    <option value="2" @if($shipment[0]->payment_mode == 'Cheque') selected @endif>Cheque</option>
                                </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Expected Delivery
                                    Date</label>
                                <input type="date" id="simpleinput" class="form-input" value="{{$shipment[0]->expected_delivery_date}}" name="expected_delivery_date"
                                    placeholder="Expected Delivery Date">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment/Package
                                    Name</label>
                                <input type="text" id="simpleinput" class="form-input" value="{{$shipment[0]->shipment_name}}" name="name"
                                    placeholder="Shipment/Package Name">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Current Location</label>
                                <input type="text" id="simpleinput" class="form-input" value="{{$shipmentDetails[0]->location}}" name="location"
                                    placeholder="Current Location">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment Status</label>
                                <select class="form-select" id="example-select" name="shipment_status">
                                    <option value="1" @if($shipment[0]->shipment_status == 'shipment accepted') selected @endif>Shipment Accepted</option>
                                        <option value="2" @if($shipment[0]->shipment_status == 'in transit') selected @endif>In Transit</option>
                                        <option value="3" @if($shipment[0]->shipment_status == 'out for delivery') selected @endif>Out for Delivery</option>
                                        <option value="4" @if($shipment[0]->shipment_status == 'delivery') selected @endif>Delivered</option>
                                </select>
                            </div>
                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Delivery Status</label>
                                <select class="form-select" id="example-select" name="delivery_status">
                                    <option value="1" @if($shipmentDetails[0]->delivery_status == 'on transit') selected @endif>On Transit</option>
                                        <option value="2" @if($shipmentDetails[0]->delivery_status == 'stopped') selected @endif>Stopped</option>
                                        <option value="3" @if($shipmentDetails[0]->delivery_status == 'delivered') selected @endif>Delivered</option>
                                </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Date</label>
                                <input type="datetime-local" id="simpleinput" class="form-input" value="{{$shipment[0]->created_at}}" name="created_at">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Delivery Message</label>
                                <textarea required rows="5" class="form-input" placeholder="Delivery Message" name="message">{{$shipmentDetails[0]->message}}</textarea>
                            </div>

                            <div class="col-span-3">
                                <button class="btn bg-primary text-white" type="submit">Update Shipment</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div> <!-- end card -->
        </div>
    </main>
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
