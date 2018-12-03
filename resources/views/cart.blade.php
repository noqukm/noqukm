@extends('layouts.customer_navbar')
 
@section('title', 'Cart')
 
@section('content')

<div class="row">
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

    <table id="cart" class="table table-bordered">
        <thead>
        <tr>
           
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th style="width:20%" class="text-center">Subtotal</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
 
        <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
 
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    
                    <td data-th="Price">RM {{ $details['price'] }}</td>

                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity"></td>
                    <td data-th="Subtotal" class="text-center">RM {{ number_format($details['price'] * $details['quantity'], 2) }}</td>

                    <td class="actions" data-th="">
                            <button class="btn btn-success btn-s update-cart" data-id="{{ $id }}">Update</button>
                            <button class="btn btn-danger btn-s remove-from-cart" data-id="{{ $id }}">Delete</button>
                        </td>
                    </tr>
            @endforeach
        @endif
 
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total : RM {{ number_format ($total, 2) }}</strong></td>
        </tr>
        <tr>
            <td colspan="3" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total RM{{ number_format($total, 2) }}</strong></td>
        </tr>
        <tr>
        	<td colspan="4"><a href="{{ url('/product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
        	 <td><a href="#" class="btn btn-primary"><i class="fa fa-angle-left"></i> Check Out</a></td>
        </tr>
        </tfoot>
    </table>
 </div>
</div>



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
 
            if(confirm("Are you sure to remove this item")) {
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

@endsection