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
					
						<div class="col-lg-12">
							<form class="card">
								<div class="card-header">
									<h3 class="card-title">Create Shipment</h3>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label class="form-label">Shipment/Package Name</label>
												<input type="text" class="form-control"  placeholder="Shipment/Package Name" >
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Current Location</label>
												<input type="text" class="form-control" placeholder="Current Location" >
											</div>
										</div>
										
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Shipment Status</label>
												<select class="form-control">
													<option value="">Shipment Accepted</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Delivery Status</label>
												<select class="form-control">
													<option value="">Shipment Accepted</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">Date</label>
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
										</div>
										
										<div class="col-md-12">
											<div class="form-group mb-0">
												<label class="form-label">Delivery Message</label>
												<textarea rows="5" class="form-control" placeholder="Delivery Message" ></textarea>
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
					<!-- ROW CLOSED -->
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
			@if (session('saved'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Successful',
                text: '{{ session('saved') }}'
            })
        </script>
@elseif (session('deleted'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Successful',
                text: '{{ session('deleted') }}'
            })
        </script>
@endif
@endsection

