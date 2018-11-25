@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Staff Dashboard</div>
                <div class="panel-body">
                        <a href="/noqukm/public/products/create" class="btn btn-primary">Create Food</a>
                        <h3> Your Stall Menu</h3>
                
                       @if(count($products) >0)
                        <table class="table table-striped">
                            <tr>
                                <th>Food</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <th>{{$product->name}}</th>
                                <th>RM {{$product->price}}</th>
                                <th><img src="data:image/jpg;base64,{{ chunk_split(base64_encode($product->photo)) }}" height="100" width="100"></th>
                            <th><a href="/noqukm/public/products/{{$product->id}}/edit" class="btn btn-default">Edit</a></th>
                                <th></th>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no products</p>
                        @endif
                <p>
                 <a href="staff/manageOrder"><button class="btn btn-success"> <h4>Manage Order</h4></button></a>
                 <button class="btn btn-success" ><h4>Manage Menu</h4></button>
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
