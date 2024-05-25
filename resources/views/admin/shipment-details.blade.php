@extends('admin.layouts.app')
@section('title', 'Shipment Details')
@section('content')

    <!-- CONTAINER -->
    <main class="p-6">
        <div class="grid xl:grid-cols-1 gap-6">
        <!-- PAGE-HEADER -->
        <div class="card overflow-hidden">
            <div class="card-header flex justify-between items-center">
                <h4 class="card-title">Shipment Details for <u>{{ $shipment[0]->shipment_name }}</h4>
                <a href="{{ route('create.shipment') }}" class="btn btn-sm bg-light !text-sm text-gray-800"><span class="fa-solid fa-plus px-2"></span>  Create Shipment</a>
            </div>
            {{-- <h4 class="page-title">Shipment Details for <u>{{ $shipment[0]->shipment_name }}</u>
                ({{ $shipment[0]->tracking_id }})</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('shipments')}}">Shipment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipment Details</li>
            </ol> --}}
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Shipments <button class="btn btn-success btn-sm"><a
                                    href="{{ route('new.shipment.details', $shipment[0]->id) }}" style="color:white">Update
                                    Shipment Info</a></button></div>
                    </div>
                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle whitespace-nowrap">
                            <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead  class="bg-light/40 border-b border-gray-200">
                                    <tr>
                                        <th class="px-6 py-3 text-start">Delivery Status</th>
                                        <th class="px-6 py-3 text-start">Message</th>
                                        <th class="px-6 py-3 text-start">Location</th>
                                        <th class="px-6 py-3 text-start">Created at</th>
                                        <th class="px-6 py-3 text-start">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shipmentDetails as $shipmentDetail)
                                        <tr>
                                            <td>{{ ucfirst($shipmentDetail->delivery_status) }}</td>
                                            <td>
                                                <p style="word-wrap:break-word">{{ ucfirst($shipmentDetail->message) }}</p>
                                            </td>
                                            <td>{{ ucfirst($shipmentDetail->location) }}</td>
                                            <td>{{ $shipmentDetail->created_at }}</td>
                                            <td>
                                                <form action="{{ route('delete.shipmentDetails', $shipmentDetail->id) }}"
                                                    method="POST">@csrf
                                                        <a class="pe-5 btn btn-success fa fa-edit" href="{{ route('edit.shipmentDetails', [$shipment[0]->id, $shipmentDetail->id]) }}"></a>
                                                    <button class="pe-5 btn btn-danger fa fa-trash" type="submit"></button>
                                                </form>
                                            </td>
                                            </a>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="5">No Details Yet!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="float-sm-end pagination-rounded justify-content-center mt-4">
                            {{ $shipmentDetails->onEachSide(1)->links() }}
                        </div> --}}
                    </div>
                    <!-- TABLE WRAPPER -->
                </div>
                <!-- SECTION WRAPPER -->
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
    </div>
    <!-- CONTAINER CLOSED -->
    </div>
    <!-- SIDE-BAR -->

    <!-- SIDE-BAR CLOSED -->
    @if (session('shipmentDetailsSaved'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Successful',
                text: '{{ session('shipmentDetailsSaved') }}'
            })
        </script>
@elseif (session('shipmentDetailsDeleted'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Successful',
                text: '{{ session('shipmentDetailsDeleted') }}'
            })
        </script>
@endif
@endsection

