@extends('admin/main')

@section('title', 'Insert Data Memory')
@section('container-fluid')

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="container">
                <!-- Outer Row -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Insert Product</h1>
                                            </div>
                                            <form class="user" method="post" action="/admin/memory">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('brand') is-invalid @enderror" id="brand" name="brand" placeholder="Brand Name" value="{{ old('brand') }}">
                                                    @error('brand')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('type') is-invalid @enderror" id="type" name="type" placeholder="Product Type" value="{{ old('type') }}">
                                                    @error('type')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('spec') is-invalid @enderror" id="spec" name="spec" placeholder="Product Specification" value="{{ old('spec') }}">
                                                    @error('spec')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('price') is-invalid @enderror" id="price" name="price" placeholder="Price" value="{{ old('price') }}">
                                                    @error('price')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div><div class="form-group">
                                                    <input type="text" class="form-control form-control-user @error('images') is-invalid @enderror" id="images" name="images" placeholder="Images" value="{{ old('images') }}">
                                                    @error('images')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <center>
                                                    <button type="submit" class="btn btn-primary btn-user btn-block col-lg-6">Insert Data</button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

@endsection