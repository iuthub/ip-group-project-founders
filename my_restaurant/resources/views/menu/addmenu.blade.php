@extends('layouts.app')
@section('content')
<h1>Menu:</h1>
<a class="btn btn-dark" href="/addmenu/create">Toza ovqat kow</a>

	@if(count($menus)>0)
		@foreach($menus as $menu)
			<div class="card card-body bg-light">
				<h3>{{$menu->title}}</h3>
				<div>
					<p>{{$menu->body}}</p>
				</div>
				<hr>
				<small>Last update: {{$menu->updated_at}}</small>
				<hr>
			</div>
			<a href="/addmenu/{{$menu->id}}/edit" class="btn btn-dark">Edit</a>
			{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'float-right']) !!}
				{{Form::hidden('_method', 'Delete')}}
				{{Form::submit('Delete', ['class'=>'btn btn-dark'])}}

			{!! Form::close() !!}
		@endforeach
		{{$menus->links()}}
	@else
		<p>No Menus So far</p>
	@endif
@endsection