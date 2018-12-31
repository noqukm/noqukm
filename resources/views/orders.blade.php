@extends('layouts.staff_navbar')

@section('title', 'Orders')
@section('content')

<div class="container-fluid">
  @if (Session::has('message'))
  <div class="alert alert-{{ Session::get('status') }}">{{ Session::get('message') }}</div>
  @endif

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h3>Order List</h3>
    <table class="table table-bordered table-striped">
      <thead> 
        <th>Order ID</th>
        <th>Order Date</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Contact</th>
        <th>Payment ID</th>
        <th>Status</th>
      </thead>

      <tbody>
        @foreach($orders as $order)
        <tr>
          <td>{{ $order->id }}</td>
          <td>{{ $order->created_at }}</td>
          <td>{{ $order->cust_name }}</td>
          <td>{{ $order->email }}</td>
          <td>{{ $order->contact }}</td>
          <td>{{ $order->payment_id }}</td>
          <!-- actions to take -->
          <td>
            <a class="btn btn-small btn-success" href="{{ URL::to('status/' . $order->id ) }}">Get Order Status</a>
            <a class="btn btn-small btn-primary" href="{{ URL::to('toggle/' . $order->id ) }}">Toggle Order Status</a>
            <a class="btn btn-small btn-warning" href="{{ URL::to('notify/' . $order->id) }}">Notify Customer</a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <p>
      <a href="{{ url('/staff')}}"><button type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-home"></span> Back to Home</button>
      </a>
    </p>
    <hr>
    {{ $orders->links() }}
  </div>
</div>
</div>
@endsection
@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
@endsection