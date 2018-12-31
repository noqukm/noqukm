@extends('layouts.customer_navbar')

@section('content')
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge message" class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
</div>
@endif

<div class="container">
    <i><h2><b>Products Catalogue</b></h2></i>
    <hr>
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="storage/images/{{$product->photo}}" alt="..." width="500" height="500" style="object-fit: scale-down;">
                <div class="caption">
                    <h3>{{$product->name}}</h3>
                    <p class="type">Type: {{$product->type}}</p>
                    <i><p class="description">{{$product->description}}</p></i>
                    <div class="clearfix">
                       <h4><b><div class="pull-left price"> RM {{$product->price}}</div></b></h4>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    {{ $products->links() }}

</div>  

@endsection