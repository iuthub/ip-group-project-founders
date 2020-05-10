@extends('layouts.app')
@section('content')
<h1 style="text-align: center">Edit page</h1>

<div class="container">
    {!! Form::open(['action'=>['MenusController@update', $menu->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    	<div class="form-group edit1">
    		{{Form::label('title', 'Title')}}
			{{Form::text('title', $menu->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
			{{Form::textarea('body', $menu->body, ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
    	</div> 
        <div class="form-group">
            {{Form::label('cost', 'Cost')}}
            {{Form::text('cost', $menu->cost, ['class'=>'form-control', 'placeholder'=>'Cost in $'])}}
        </div>
        <div class="form-group">
            {{Form::select('category', $categories, $menu->category_id)}}
        </div>
		<div class="form-group">
            {{Form::file('cover_img')}}
        </div>
		{{Form::hidden('_method', 'PUT')}}
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
</div>
@endsection