@extends('layouts.staff_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Staff Dashboard</div>
                <div class="panel-body">

                    <p>
                        <a href="staff/manageOrder"><button class="btn btn-success"> <h4>Manage Order</h4></button></a>
                        <a href="dashboard"><button class="btn btn-success" ><h4>Manage Menu</h4></button>
                    </p>

                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
