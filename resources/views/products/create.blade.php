@extends('layouts.staff_navbar')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

    <h1>Create New Food</h1>
    <hr>
    <!--form-->
    {!! Form::open(['action' => 'MenuController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=> 'form-control','placeholder' => 'Name', 'required'])}}
        </div>
      <div class="form-group">
            {{Form::label('photo','Photo')}}
            {{Form::file('photo')}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::number('price','',['class'=> 'form-control','placeholder' => 'Price', 'step' => '.01', 'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('type','Type')}}
            {!! Form::select('type', array('special' => 'Special', 'drinks' => 'Drinks', 'desserts' => 'Desserts'), null, ['id' => 'type', 'class' => 'form-control', 'required']) !!}
        </div>
         <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['id' => 'article-ckeditor','class'=> 'form-control','placeholder' => 'Description', 'required'])}}
        </div>
    
        {{Form ::submit('Submit',['class'=>'btn btn-success btn-lg'])}}
   
{!! Form::close() !!}
</div>
</div>
</div>
@endsection