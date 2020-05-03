@extends('layouts.app')
@section('content')
<h1>Shordan edit atjak bop gor qani:</h1>
{!! Form::open(['action'=>['MenusController@update', $menu->id], 'method'=>'POST']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
			{{Form::text('title', $menu->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
			{{Form::textarea('body', $menu->body, ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
    	</div> 
		
		{{Form::hidden('_method', 'PUT')}}
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}

@endsection