@extends('layouts.app')

@section('content')
    <h1>Menu</h1>
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="well">
            <h3><a href="/noqukm/public/products/{{$product->id}}">{{$product->name}}</a></h3>
            <small><img src="data:image/jpg;base64,{{ chunk_split(base64_encode($product->photo)) }}" height="100" width="100">
            </small>
                <h3>Price: RM {{$product->price}}</h3>
                <small>Description: {{$product->description}}</small>
            </div>
            @endforeach
            {{$products->links()}} <!-- pagination -->
    @else
        <p>No posts found</p>
    @endif

@endsection