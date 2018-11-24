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

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                @component('components.who')
                 @endcomponent
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
