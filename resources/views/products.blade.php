@extends('layouts.app')
 
@section('title', 'Products')
 
@section('content')
 

<div class="container">
 
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <div>
              <button type="button" class="btn btn-info" style="color:white;">
                    <a href="{{ url('cart') }}" >Cart

                        <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span></a>
                </button>
                </div>
            </div>
        </div>
    </div> 

 
@endsection