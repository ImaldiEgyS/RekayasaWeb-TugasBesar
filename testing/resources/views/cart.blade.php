@extends('layouts/main')

@section('title', 'Cart')
@section('csstambahan', 'contact.css')
@section('iniIsi')

<div class="iniIsi">
    <div id="flow">
        <span class="flow-1"></span>
        <span class="flow-2"></span>
        <span class="flow-3"></span>
    </div>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
			<div class="container is-fluid has-text-centered card large ini_regis is-scrollable">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                    </thead>
                    <tbody>            
                        <?php $total = 0 ?>            
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)                
                                <?php $total += $details['harga'] * $details['quantity'] ?>
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs">
                                                    <img src="{{ asset('img') }}/{{ $details['gambar'] }}" class="img-responsive">
                                                </div>
                                                <div class="col-sm-9">
                                                    <h6 class="nomargin">{{ $details['seri'] }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td data-th="Price">
                                            Rp {{ number_format($details['harga'], 2, ',', '.') }}-
                                        </td>
                                        <td data-th="Quantity">
                                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                        </td>
                                        <td data-th="Subtotal" class="text-center">
                                        Rp {{ number_format($details['harga'] * $details['quantity'], 2, ',', '.') }}-
                                        </td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center">
                            Total Rp {{ number_format($total, 2, ',', '.') }}-
                        </td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
			</div>
		</div>
    </section>
</div>
 
@endsection

@section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection