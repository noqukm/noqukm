@extends('layouts.app')

@section('content')
    <h1>Create Food</h1>
    <!--form-->
    {!! Form::open(['action' => 'ProductsController@store','method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=> 'form-control','placeholder' => 'Name'])}}
        </div>
    <div class="form-group">
            {{Form::label('photo','Photo')}}
            {{Form::file('photo')}}
           
        </div>
    
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::number('price','',['class'=> 'form-control','placeholder' => 'Price'])}}
        </div>
    
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['id' => 'article-ckeditor','class'=> 'form-control','placeholder' => 'Description'])}}
        </div>
        {{Form ::submit('Submit',['class'=>'btn btn-primary'])}}
   
{!! Form::close() !!}
@endsection