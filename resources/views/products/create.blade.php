@extends('layouts.staff_navbar')

@section('content')

<div class="container">
    <div class="row">
    <h1>Create Food</h1>
    <!--form-->
    {!! Form::open(['action' => 'MenuController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=> 'form-control','placeholder' => 'Name'])}}
        </div>
   <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['id' => 'article-ckeditor','class'=> 'form-control','placeholder' => 'Description'])}}
        </div>
    <div class="form-group">
            {{Form::label('photo','Photo')}}
            {{Form::file('photo')}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::number('price','',['class'=> 'form-control','placeholder' => 'Price'])}}
        </div>
    
        {{Form ::submit('Submit',['class'=>'btn btn-primary'])}}
   
{!! Form::close() !!}
</div>
</div>
@endsection