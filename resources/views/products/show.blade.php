@extends('layouts.staff_navbar')

@section('content')
<div class="container">
    <div class="row">
    <a href="/noqukm/public/products" class="btn btn-default">Go Back</a>
    <h1>{{$product-> name}}</h1>
    <div class="well">
            <h2><img src="data:image/jpg;base64,{{ chunk_split(base64_encode($product->photo)) }}" height="100" width="100">
            </h2>
                <h2>Price: RM {{$product->price}}</h2>
                <small>Description: {{$product->description}}</small>
            </div>
    <hr>
        <a href="/noqukm/public/products/{{$product->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['MenuController@destroy', $product->id],'method' => 'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</div>
@endsection