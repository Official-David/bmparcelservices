@extends('admin.layouts.app')
@section('title', 'Create Shipment')
@section('content')
    <!-- CONTAINER -->
    <main class="p-6">
        <div class="flex flex-col gap-6">
            <div class="card">
                <form class="card" action="{{ route('new.shipment') }}" method="post">
                    @csrf
                    <div class="p-6">
                        <h4 class="card-title mb-4">Create Shipment</h4>

                        <div class="grid lg:grid-cols-3 gap-6">
                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Name</label>
                                <input type="text" id="simpleinput" class="form-input" name="sender_name" placeholder="Sender Name">
                            </div>

                            <div>
                                <label for="example-email"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Email</label>
                                <input type="email" id="example-email" class="form-input"
                                name="sender_email"
                                placeholder="Sender Email">
                            </div>

                            <div>
                                <label for="example-password"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Phone</label>
                                <input type="text" id="simpleinput" class="form-input" name="sender_phone"
                                placeholder="Sender Phone">
                            </div>

                            <div>
                                <label for="example-palaceholder"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Sender Address</label>
                                <input type="text" id="example-palaceholder" class="form-input"
                                name="sender_address"
                                placeholder="Sender Address">
                            </div>

                            <div>
                                <label for="example-readonly"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Name</label>
                                <input type="text" id="example-readonly" class="form-input" name="receiver_name"
                                placeholder="Receiver Name">
                            </div>

                            <div>
                                <label for="example-disable"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Email</label>
                                <input type="email" class="form-input" id="example-disable" name="receiver_email"
                                placeholder="Receiver Email">
                            </div>

                            <div>
                                <label for="example-date"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Phone</label>
                                <input class="form-input" id="example-date" type="text" name="receiver_phone"
                                placeholder="Receiver Phone">
                            </div>

                            <div>
                                <label for="example-month"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Receiver Address</label>
                                <input class="form-input" id="example-month" type="text" name="receiver_address"
                                placeholder="Receiver Address">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Origin</label>
                                    <select class="form-select" id="example-select" name="origin"
                                    placeholder="Origin">
                                    @foreach ($countries as $country)
                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                    </select>
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Destination</label>
                                    <select class="form-select" id="example-select" name="destination"
                                    placeholder="Destination">
                                    @foreach ($countries as $country)
                                    <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                    </select>
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Type Of Shipment</label>
                                    <select class="form-select" id="example-select" name="type_of_shipment"
                                    placeholder="Type Of Shipment">
                                    <option value='1'>Internaitional Shipment</option>
                                        <option value='2'>Loacal Shipment</option>
                                    </select>
                            </div>

                            <div>
                                <label for="example-color"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Carrier</label>
                                <input class="form-input h-10" id="example-color" type="text" name="carrier"
                                placeholder="Carrier">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment Mode</label>
                                    <select class="form-select" id="example-select" name="shipment_mode"
                                    placeholder="Shipment Mode">
                                    <option value='1'>Air Freight</option>
                                    <option value='2'>Ocean Freight</option>
                                    <option value='3'>Road Freight</option>
                                    </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Product</label>
                                <input type="text" id="simpleinput" class="form-input" name="product"
                                placeholder="Product">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Quantity</label>
                                <input type="text" id="simpleinput" class="form-input" name="quantity"
                                placeholder="Quantity">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Weight</label>
                                <input type="text" id="simpleinput" class="form-input" name="weight"
                                placeholder="Weight">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Payment Mode</label>
                                    <select class="form-select" id="example-select" name="payment_mode"
                                    placeholder="Payment Mode">
                                    <option value="1">Cash</option>
                                    <option value="2">Cheque</option>
                                    </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Expected Delivery Date</label>
                                <input type="date" id="simpleinput" class="form-input" name="expected_delivery_date"
                                placeholder="Expected Delivery Date">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment/Package Name</label>
                                <input type="text" id="simpleinput" class="form-input" name="name"
                                placeholder="Shipment/Package Name">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Current Location</label>
                                <input type="text" id="simpleinput" class="form-input" name="location"
                                placeholder="Current Location">
                            </div>

                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Shipment Status</label>
                                    <select class="form-select" id="example-select" name="shipment_status">
                                        <option value="1">Shipment Accepted</option>
                                        <option value="2">On Transit</option>
                                        <option value="3">Out for Delivery</option>
                                        <option value="4">Delivered</option>
                                    </select>
                            </div>
                            <div>
                                <label for="example-time"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Delivery Status</label>
                                    <select class="form-select" id="example-select" name="delivery_status">
                                        <option value="1">On Transit</option>
                                        <option value="2">Stopped</option>
                                        <option value="3">Delivered</option>
                                    </select>
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Date</label>
                                <input type="datetime-local" id="simpleinput" class="form-input" name="created_at">
                            </div>

                            <div>
                                <label for="simpleinput"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Delivery Message</label>
                                    <textarea required rows="5" class="form-input" placeholder="Delivery Message" name="message"></textarea>
                            </div>

                            <div class="col-span-3">
                                <button class="btn bg-primary text-white" type="submit">Create Shipment</button>
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
