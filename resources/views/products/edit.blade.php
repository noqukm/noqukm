@extends('layouts.staff_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

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
            {{Form::number('price',$product->price,['class'=> 'form-control','placeholder' => 'Price', 'step' => '.01'])}}
        </div>
        <div class="form-group">
            {{Form::label('type','Type')}}
            {!! Form::select('type', array('special' => 'Special', 'drinks' => 'Drinks', 'desserts' => 'Desserts'), null, ['id' => 'type', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',$product->description,['id' => 'article-ckeditor','class'=> 'form-control','placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form ::submit('Submit',['class'=>'btn btn-success btn-lg'])}}

{!! Form::close() !!}
{!!Form::open(['action' => ['MenuController@destroy', $product->id],'method' => 'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger btn-lg'])}}
        {!!Form::close()!!}
</div>
</div>
</div>
@endsection