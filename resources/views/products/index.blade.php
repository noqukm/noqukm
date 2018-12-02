@extends('layouts.app')

@section('content')
    <h1>Menu</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
            <img src="storage/photos/{{$product->photo}}" width=100, height=100>
            <h3><a href="/noqukm/public/products/{{$product->id}}">{{$product->name}}</a></h3>
            <h3>Price: RM {{$product->price}}</h3>
            <h4>Description: {{$product->description}}</h4>
              
            </div>
            @endforeach
            {{$products->links()}} <!-- pagination -->
    @else
        <p>No posts found</p>
    @endif

@endsection