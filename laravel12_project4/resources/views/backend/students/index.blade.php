@extends('backend.master')

@push('styles')
<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">

@endpush


@push('content')
<main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Tables</h1>
                <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>
              </div>
            </div>
            
          </div>

          <section class="panel">

            @session('success')
            <div class="alert alert-success role="alert"> 

              {{$value}}

            </div>
                
            @endsession
            <div class="d-flex justify-content-end">
    <a href="{{url('/students/create')}}"  class="btn btn-success">ADD NEW STUDENT</a>
</div>
            <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Advanced Table</span></h2><p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p></div><input class="form-control form-control-sm table-search" type="search" placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders"></div>
            <div class="table-responsive"><table class="table align-middle mb-0" id="ordersTable" data-searchable-table><thead><tr><th>STUDENT ID</th><th>Product</th><th>STUDENT NAME</th><th>Status</th><th>Amount</th><th>Date</th><th class="text-end">Action</th></tr></thead><tbody>
              

                @foreach ($students as $student )
                    
                <form action="{{route('student.destroy',$student->id)}} " method="POST"> 

                <tr><td class="fw-semibold">{{$student->id}}</td><td><div class="table-media"><img class="product-thumb" src="../assets/images/ecommerce/product-1.jpg" alt="Wireless Headset"><span>Wireless Headset</span></div></td><td>{{$student->name}}</td><td><span class="badge text-bg-success">{{$student->gender}}</span></td><td>$1,240</td><td>May 6, 2026</td><td class="text-end"><a href="{{route('student.show',$student->id)}}" class="btn btn-light btn-sm" type="button">View</a>
                
                  @csrf
                  <button onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i> </button>
                  <a class="btn btn-info" href="{{route('student.edit',$student->id)}}">Edit</a>
                
                </form>
                </td></tr>
              @endforeach
            </tbody></table></div>
          </section>
        </div>
      </main>
    
@endpush

@push('scripts')
    <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}assets/js/main.js"></script>
@endpush