@extends('admin.layouts.app')
@section('title', 'Shipments')
@section('content')

    <!-- CONTAINER -->
    <div class="container content-area ">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Shipments</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipments</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Shipments <button class="btn btn-success btn-sm"><a href="{{route('create.shipment')}}" style="color:white">Create Shipment</a></button></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datable-1" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Shipment/Package Name</th>
                                        <th>Tracking Id</th>
                                        <th>Shipment Status</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shipments as $shipment)
                                        <tr>
                                            <td>{{ ucfirst($shipment->shipment_name) }}</td>
                                            <td><a
                                                    href="{{ route('shipment.details', $shipment->id) }}">{{ ucfirst($shipment->tracking_id) }}</a>
                                            </td>
                                            <td>{{ ucfirst($shipment->shipment_status) }}</td>
                                            <td>{{ ucfirst($shipment->created_at) }}</td>
                                            <td class="text-center"><form action="{{route('delete.shipment', $shipment->id)}}" method="POST">@csrf <button class="btn btn-danger fa fa-trash" type="submit"></button></form></td>
                                            </a>
                                        </tr>
                                    @empty
									<tr><td class="text-center" colspan="5">No Shipment Yet!</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="float-sm-end pagination-rounded justify-content-center mt-4">
                                {{ $shipments->onEachSide(1)->links() }}
                            </div>
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
@endsection
