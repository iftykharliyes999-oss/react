@extends('backend.master')
@push('styles')

<link href="{{asset('')}}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	
@endpush

@push('scripts')

<script src="{{asset('')}}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	 <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	 </script>
	
@endpush





@section('content')




 <main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

				<h6 class="mb-0 text-uppercase">DataTable Import</h6>
				<hr>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-hover">
								<thead>
									<tr>
										<th>image</th>
										<th>Name</th>
										<th>price</th>
										<th>category</th>
										<th>status</th>
										<th>Action </th>
									
									</tr>
								</thead>
								<tbody>
									@foreach ($items as $item)
										
									
									<tr>
										<td><img src="{{asset('assets/images/demo.png')}}" alt=""></td>
										<td>{{$item->name}}</></td>
										<td>{{$item->price}}</td>
										<td>{{ $item->category?->cat_name ?? 'No Category' }}</td>
										<td>{{$item->status}}5</td>
										<td>EDIT | DELETE</td>
									</tr>
									@endforeach
									
								</tbody>
								<tfoot>
									<tr>
										<th>image</th>
										<th>Name</th>
										<th>price</th>
										<th>category</th>
										<th>status</th>
										<th>action </th>
									
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

     </main>
    
@endsection