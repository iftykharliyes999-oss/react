@extends('backend.master')

@section('content')
    <main class="page-content">

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">eCommerce</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                            <a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="mb-3">Product Name</h5>
                                <input name="name" type="text" class="form-control"
                                    placeholder="write title here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Product Description</h5>
                                <textarea name="description" class="form-control" cols="4" rows="6"
                                    placeholder="write a description here.."></textarea>
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Price</h5>
                                <input name="price" type="text" class="form-control"
                                    placeholder="write price here....">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Display images</h5>
                                <input id="fancy-file-upload" type="file" name="image"
                                    accept=".jpg, .png, image/jpeg, image/png">
                            </div>
                            <div class="mb-4">
                                <h5 class="mb-3">Product Status</h5>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" id="inlineRadio"
                                        value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">In Stock</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" id="inlineRadio"
                                        value="0">
                                    <label class="form-check-label" for="inlineCheckbox1">Out of Stock</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Organize</h5>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="AddCategory" class="form-label fw-bold">Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select One</option>

                                            @foreach ($items as $item)
                                                <option value="{{$item->id }}">
                                                    {{ $item->cat_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!--end row-->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">

                                    <button type="submit" class="btn btn-primary px-4">Publish</button>
                                </div>
                            </div>
                        </div>


                    </div><!--end row-->

        </form>

    </main>
@endsection
