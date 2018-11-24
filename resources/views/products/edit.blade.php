@extends('layouts.app')

@section('content')
    <h1>Edit Food</h1>
    <!--form-->
    {!! Form::open(['action' => ['ProductsController@update',$product->id],'method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name',$product->name,['class'=> 'form-control','placeholder' => 'Name'])}}
        </div>
    <div class="form-group">
            <!--<h2><img src="data:image/png;base64,{{ chunk_split(base64_encode($product->photo)) }}" height="100" width="100">
            </h2>-->
            {{Form::label('photo','Photo')}}
            {{Form::file('photo')}}
           
        </div>
    
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::number('price',$product->price,['class'=> 'form-control','placeholder' => 'Price'])}}
        </div>
    
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',$product->description,['id' => 'article-ckeditor','class'=> 'form-control','placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form ::submit('Submit',['class'=>'btn btn-primary'])}}
   
{!! Form::close() !!}
@endsection