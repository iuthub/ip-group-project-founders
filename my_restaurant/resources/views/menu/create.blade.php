@extends('layouts.app')
@section('content')
<h1>Shordan ovqat qoshasan:</h1>

{!! Form::open(['action'=>'MenusController@store', 'method'=>'POST']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
			{{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
    	</div> 

    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
	
@endsection