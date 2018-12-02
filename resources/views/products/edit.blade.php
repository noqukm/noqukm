@extends('layouts.app')

@section('content')
    <h1>Edit Food</h1>
    <!--form-->
    {!! Form::open(['action' => ['MenuController@update',$product->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name',$product->name,['class'=> 'form-control','placeholder' => 'Name'])}}
        </div>
    <div class="form-group">
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
{!!Form::open(['action' => ['MenuController@destroy', $product->id],'method' => 'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
@endsection