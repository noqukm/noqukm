@extends('layouts.staff_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="/noqukm/public/products/create" class="btn btn-info btn-lg">Create New Product</a>
                    <h3> Your Stall Menu</h3>
                    <hr>
                    @if(count($products)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Food</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <th>{{$product->name}}</th>
                            <th>RM {{$product->price}}</th>
                            <th>{{$product->type}}</th>
                            <th><img src="storage/images/{{$product->photo}}" width=100, height=100></th>
                            <th>
                                <a href="/noqukm/public/products/{{$product->id}}/edit" class="btn btn-primary glyphicon glyphicon-pencil"> Edit</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no products</p>
                    @endif
                    {{ $products->links() }}
                    <p>
                        <a href="{{ url('/staff')}}"><button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-home"></span> Back to Home
                        </button>
                    </a>
                </p>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection