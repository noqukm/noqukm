@extends('layouts.customer_navbar')

@section('content')
<div class="container">
    <div class="row">
    <h1>Menu</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
            <img src="storage/photos/{{$product->photo}}" width=100, height=100>
            <h3>{{$product->name}}</h3>
            <h4>Price: RM {{$product->price}}</h3>
            <h4>Description: {{$product->description}}</h4>

            <p>
                <a href="{{ url('add-to-cart/'.$product->id) }}"><button type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart
                </button>
                </a>
            </p>
              
            </div>
            @endforeach
            {{$products->links()}} <!-- pagination -->
    @else
        <p>No posts found</p>
    @endif
</div>
</div>
@endsection