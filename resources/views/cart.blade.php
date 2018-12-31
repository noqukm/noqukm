@extends('layouts.customer_navbar')
 
@section('title')
Cart
@endsection

@section('content')
    
    @if(Session::has('cart'))

    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

            <table class="table table-bordered" border="1">
                <i><b><h2>Cart</h2></b></i>
                <hr>
                <thead>
                    <tr>    
                        <th scope="col">Item ID.</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
            <tbody>
               @foreach($products as $product)
                <tr>
                    <td data-th="No.">{{ $product['item']['id'] }}</td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $product['item']['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">RM {{ number_format( $product['price'], 2) }}</td>
                    <td data-th="Quantity"> {{ $product['qty'] }}</td>
                    <td data-th=" " class="text-center">
                        <a href="{{ route('product.item', ['id' => $product['item']['id']])}}"> <button class="btn btn-success" >Add 1 Item</button></a>
                        <a href="{{ route('product.removeByOne', ['id' => $product['item']['id']]) }}"><button class="btn btn-danger btn-s">Remove 1 Item</button></a>
                        <a href="{{ route('product.removeItem', ['id' => $product['item']['id']]) }}"><button class="btn btn-danger btn-s">Remove All</button></a>
                    </td>
                </tr>
                @endforeach
        </div>
    </div>
    </tbody>
    <tfoot>
        <tr>
            
            <td data-th=" " colspan="5" class="text-left">
                <h4><strong>Total Price:RM {{ number_format( $totalPrice, 2) }}</strong></h4>
            </td>
        </tr>      
    <tr>
        <td colspan="4"><a href="{{ url('/product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>

            <td colspan="4"><a href="{{ route('checkout') }}" type="button" class="btn btn-primary">Checkout</a>
        </tr>    
        @else
</tfoot>
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <h2>No Items In Cart</h2>
        </div>
    </div>
@endif
</table>
@endsection

