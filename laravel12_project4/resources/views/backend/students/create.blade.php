@extends('backend.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
@endpush


@push('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>
                        <h1 class="h3 mb-1">Add User</h1>
                        <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{ url('/students') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
            </div>

            <section class="row g-3">
                <div class="col-12 col-xl-12">

                  @if ($errors->any())
                  <div class="allert altert-danger">

                    <h3>Whoops! There were some problems with your input.</h3>

                    <ul>

                      @foreach ($errors->all() as $errors)

                        <li>{{$error}}</li>
                          
                      @endforeach

                    </ul>
                  </div>
                      
                  @endif
                    <form class="panel needs-validation" method="POST"  action="{{route('student.store')}}" novalidate>

                      @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>User Information</span></h2>
                                <p class="text-muted mb-0">Create a user account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="name">Student Name</label>
                                <input class="form-control" id="name" name="name" type="text" required>
                                <div class="invalid-feedback">Student name is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label d-block">Gender</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male" required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="others"
                                        value="others">
                                    <label class="form-check-label" for="others">Others</label>
                                </div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Email</label><input
                                    class="form-control" id="email" name="email" type="email" required>
                                <div class="invalid-feedback">Enter a valid email.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input
                                    class="form-control" id="phone" name="phone" type="tel" required>
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="district">District</label>

                                <select class="form-select" id="district" name="district" required>
                                    <option value="">Choose District</option>
                                    <option value="1">Dhaka</option>
                                    <option value="2">Chattogram</option>
                                    <option value="3">Rajshahi</option>
                                    <option value="4">Khulna</option>
                                    <option value="5">Barishal</option>
                                    <option value="6">Sylhet</option>
                                    <option value="7">Rangpur</option>
                                    <option value="8">Mymensingh</option>
                                </select>

                                <div class="invalid-feedback">Choose a district.</div>
                            </div>
        
                                <div class="col-md-6">
                                    <label class="form-label d-block">Subjects</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects" value="Bangla"
                                            id="bangla">
                                        <label class="form-check-label" for="bangla">Bangla</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects"
                                            value="English" id="english">
                                        <label class="form-check-label" for="english">English</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects" value="Math"
                                            id="math">
                                        <label class="form-check-label" for="math">Math</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects"
                                            value="Science" id="science">
                                        <label class="form-check-label" for="science">Science</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="subjects" value="ICT"
                                            id="ict">
                                        <label class="form-check-label" for="ict">ICT</label>
                                    </div>
                                
                            </div>

                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                                href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i
                                    class="bi bi-person-check" aria-hidden="true"></i> Create User</button></div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endpush

@push('scripts')
    <script src="{{ asset('') }}assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets/js/main.js"></script>
@endpush
