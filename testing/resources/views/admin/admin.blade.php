@extends('admin.layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create User"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Merek</th>
                      <th>Seri</th>
                      <th>Katalog</th>
                      <th>Harga</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  
              </tbody>
              <tfoot>
                  <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Merek</th>
                      <th>Seri</th>
                      <th>Katalog</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.product') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'gambar', name: 'gambar' , render: function(name) {
                    return '<img src="{{ asset('img') }}/'+ name +'" style="height:100px;width:100px;">'
                }},
                {data: 'merek', name: 'merek'},
                {data: 'seri', name: 'seri'},
                {data: 'katalog', name: 'katalog'},
                {data: 'harga', name: 'harga', render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush