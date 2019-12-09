@extends('admin/main')

@section('title', 'Memory Catalogue')
@section('container-fluid')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-0">
            <h1 class="h3 mb-0 text-gray-800">Memory Catalogue</h1>
            <a href="/admin/memory/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Add Product
            </a>
          </div>
          <p class="mb-4">Katalog dari produk memory (RAM).</p>

          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Socket DDR4</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Brand</th>
                      <th>Type</th>
                      <th>Spesification</th>
                      <th>Price(Rupiah)</th>
                      <th>Images</th>
                      <th>Control</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($memory as $mem)
                    <tr>
                      <td>{{ $loop->iteration }}.</td>
                      <td>{{ $mem->brand }}</td>
                      <td>{{ $mem->type }}</td>
                      <td>{{ $mem->spec }}</td>
                      <td>{{ number_format($mem->price, 2, ',', '.') }}</td>
                      <td>{{ $mem->images }}</td>
                      <td>
                          <center>
                            <a href="/admin/memory/{{ $mem->id }}/update" class="btn btn-success">Update</a>
                            <form action="/admin/memory/{{ $mem->id }}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </center>
                      </td>    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection