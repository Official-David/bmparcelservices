@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- CONTAINER -->
    <div class="container content-area relative">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-6 border-right">
                            <div class="card-body text-center">
                                <h6 class="mb-3">Shipment Accepted</h6>
                                <div class="chart-circle chart-circle-md" data-value="0.45" data-thickness="10"
                                    data-color="#564ec1">
                                </div>
                                <h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark">6</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6  col-sm-6 border-right">
                            <div class="card-body text-center">
                                <h6 class="mb-3">In Transit</h6>
                                <div class="chart-circle chart-circle-md" data-value="0.72" data-thickness="10"
                                    data-color="#04cad0">
                                </div>
                                <h2 class="mb-1 mt-3 display-4 font-weight-semibold text-dark">1</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-sm-6 border-right">
                            <div class="card-body text-center">
                                <h6 class="mb-3">Out For Delivery</h6>
                                <div class="chart-circle chart-circle-md" data-value="0.38" data-thickness="10"
                                    data-color="#f5334f">
                                </div>
                                <h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark">8</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6  col-sm-6">
                            <div class="card-body text-center">
                                <h6 class="mb-3">Delivered</h6>
                                <div class="chart-circle chart-circle-md" data-value="0.03" data-thickness="10"
                                    data-color="#f7b731">
                                </div>
                                <h2 class="mb-1 mt-3  display-4 font-weight-semibold text-dark">397</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
@endsection