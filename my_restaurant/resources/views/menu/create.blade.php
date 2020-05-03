@extends('layouts.app')
@section('content')
<h1>You can enter the detailes of the food:</h1>

{!! Form::open(['action'=>'MenusController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
			{{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
    	</div> 
        <div class="form-group">
            {{Form::label('cost', 'Cost')}}
            {{Form::text('cost', '', ['class'=>'form-control', 'placeholder'=>'Cost in $'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_img')}}
        </div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
	
@endsection