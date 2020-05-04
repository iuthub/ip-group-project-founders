@extends('layouts.app')
@section('content')
<h1 >Menu:</h1>
<a class="btn btn-dark "  href="/addmenu/create">New Food</a>
@if(count($menus)>0)
<!--Salades-->
<h2>Salades</h2>
@foreach($menus as $menu)
@if($menu->category->kind=='Salad')
<div class="card card-body bg-light">
	<div class="row">
		<div class="col-md-2 col-sm-2">
			<img style="width:100%"  src="/storage/cover_imgs/{{$menu->cover_img}}">
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>{{$menu->title}}</h3>
			<div>
				<p>{{$menu->body}}</p>
			</div>
			<hr>
			<small>Last update: {{$menu->updated_at}}</small>
		</div>
		<div  class="col-md-2 col-sm-2">
			<h2>{{$menu->cost}}$</h2>
		</div>
	</div>
</div>
<a href="/addmenu/{{$menu->id}}/edit" class="btn btn-dark">Edit</a>
{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'float-right']) !!}
{{Form::hidden('_method', 'Delete')}}
{{Form::submit('Delete', ['class'=>'btn btn-dark'])}}
{!! Form::close() !!}
@endif
@endforeach
<!--Main Food-->

<h2>Main Dishes</h2>
@foreach($menus as $menu)
@if($menu->category->kind=='Main Dish')
<div class="card card-body bg-light">
	<div class="row">
		<div class="col-md-2 col-sm-2">
			<img style="width:100%"  src="/storage/cover_imgs/{{$menu->cover_img}}">
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>{{$menu->title}}</h3>
			<div>
				<p>{{$menu->body}}</p>
			</div>
			<hr>
			<small>Last update: {{$menu->updated_at}}</small>
		</div>
		<div  class="col-md-2 col-sm-2">
			<h2>{{$menu->cost}}$</h2>
		</div>
	</div>
</div>
<a href="/addmenu/{{$menu->id}}/edit" class="btn btn-dark">Edit</a>
{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'float-right']) !!}
{{Form::hidden('_method', 'Delete')}}
{{Form::submit('Delete', ['class'=>'btn btn-dark'])}}
{!! Form::close() !!}
@endif
@endforeach

<!--Deserts-->

<h2>Deserts</h2>
@foreach($menus as $menu)
@if($menu->category->kind=='Desert')
<div class="card card-body bg-light">
	<div class="row">
		<div class="col-md-2 col-sm-2">
			<img style="width:100%"  src="/storage/cover_imgs/{{$menu->cover_img}}">
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>{{$menu->title}}</h3>
			<div>
				<p>{{$menu->body}}</p>
			</div>
			<hr>
			<small>Last update: {{$menu->updated_at}}</small>
		</div>
		<div  class="col-md-2 col-sm-2">
			<h2>{{$menu->cost}}$</h2>
		</div>
	</div>
</div>
<a href="/addmenu/{{$menu->id}}/edit" class="btn btn-dark">Edit</a>
{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'float-right']) !!}
{{Form::hidden('_method', 'Delete')}}
{{Form::submit('Delete', ['class'=>'btn btn-dark'])}}
{!! Form::close() !!}
@endif
@endforeach


<!--Beverages-->

<h2>Beverages</h2>
@foreach($menus as $menu)
@if($menu->category->kind=='Beverage')
<div class="card card-body bg-light">
	<div class="row">
		<div class="col-md-2 col-sm-2">
			<img style="width:100%"  src="/storage/cover_imgs/{{$menu->cover_img}}">
		</div>
		<div class="col-md-8 col-sm-8">
			<h3>{{$menu->title}}</h3>
			<div>
				<p>{{$menu->body}}</p>
			</div>
			<hr>
			<small>Last update: {{$menu->updated_at}}</small>
		</div>
		<div  class="col-md-2 col-sm-2">
			<h2>{{$menu->cost}}$</h2>
		</div>
	</div>
</div>
<a href="/addmenu/{{$menu->id}}/edit" class="btn btn-dark">Edit</a>
{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'float-right']) !!}
{{Form::hidden('_method', 'Delete')}}
{{Form::submit('Delete', ['class'=>'btn btn-dark'])}}
{!! Form::close() !!}
@endif
@endforeach






@else
<p>No Menus So far</p>
@endif
@endsection