@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

            <main class="p-6">

                <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                    <div class="card">
                        <div class="p-5 flex items-center justify-between">
                            <span>
                                <span class="text-slate-400 font-semibold block">Shipment Accepted</span>
                                <span class="text-xl font-semibold"><span>{{$shipment->where('shipment_status', 'shipment accepted')->count()}}</span></span>
                            </span>

                            <span
                                class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                                <i class="uil uil-user text-xl"></i>
                            </span>
                        </div>

                        <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end-->

                    <div class="card">
                        <div class="p-5 flex items-center justify-between">
                            <span>
                                <span class="text-slate-400 font-semibold block">In Transit</span>
                                <span class="text-xl font-semibold"><span>{{$shipment->where('shipment_status', 'in transit')->count()}}</span></span>
                            </span>

                            <span
                                class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                                <i class="uil uil-dollar-sign-alt text-xl"></i>
                            </span>
                        </div>

                        <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end-->

                    <div class="card">
                        <div class="p-5 flex items-center justify-between">
                            <span>
                                <span class="text-slate-400 font-semibold block">Out For Delivery</span>
                                <span class="text-xl font-semibold"><span>{{$shipment->where('shipment_status', 'out for delivery')->count()}}</span></span>
                            </span>

                            <span
                                class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                                <i class="uil uil-shopping-bag text-xl"></i>
                            </span>
                        </div>

                        <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end-->

                    <div class="card">
                        <div class="p-5 flex items-center justify-between">
                            <span>
                                <span class="text-slate-400 font-semibold block">Delivered</span>
                                <span class="text-xl font-semibold"><span>{{$shipment->where('shipment_status', 'delivered')->count()}}</span></span>
                            </span>

                            <span
                                class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                                <i class="uil uil-store text-xl"></i>
                            </span>
                        </div>

                        <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end-->
                </div>


                <div class="grid xl:grid-cols-1 gap-6">
                    <div class="card overflow-hidden">
                        <div class="card-header flex justify-between items-center">
                            <h4 class="card-title">Shipments</h4>
                            <a href="{{ route('create.shipment') }}" class="btn btn-sm bg-light !text-sm text-gray-800"><span class="fa-solid fa-plus px-2"></span>  Create Shipment</a>
                        </div>

                        <div class="overflow-x-auto">
                            <div class="min-w-full inline-block align-middle whitespace-nowrap">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-light/40 border-b border-gray-200">
                                            <tr>
                                                <th class="px-6 py-3 text-start">Shipment/Package Name</th>
                                                <th class="px-6 py-3 text-start">Tracking Id</th>
                                                <th class="px-6 py-3 text-start">Shipment Status</th>
                                                <th class="px-6 py-3 text-start">Created at</th>
                                                <th class="px-6 py-3 text-start" colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($shipments as $shipment)
                                            <tr class="border-b border-gray-200">
                                                <td class="px-6 py-3">{{ ucfirst($shipment->shipment_name) }}</td>
                                                <td class="px-6 py-3"><a
                                                    href="{{ route('shipment.details', $shipment->id) }}">{{ ucfirst($shipment->tracking_id) }}</a></td>
                                                <td class="px-6 py-3">
                                                    <span
                                                        class="px-2 py-1 bg-success/10 text-success text-xs rounded">{{ ucfirst($shipment->shipment_status) }}</span>
                                                </td>
                                                <td class="px-6 py-3">{{ ucfirst($shipment->created_at) }}</td>
                                                <td class="px-6 py-3"><form action="{{ route('delete.shipment', $shipment->id) }}" method="POST">
                                                    @csrf 
                                                    <a class="btn btn-success fa fa-edit" href="{{route('edit.shipment', $shipment->id)}}"></a>
                                                    <button class="btn btn-danger fa fa-trash" type="submit"></button>
                                                </form></td>
                                            </tr>
                                            @empty
                                        <tr>
                                            <td class="text-center" colspan="5">No Shipment Yet!</td>
                                        </tr>
                                    @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div>

            </main>
@endsection