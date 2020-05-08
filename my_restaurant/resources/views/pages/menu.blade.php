@extends('layouts.app')
@section('content')
<div class="body2">
	<div class="h1">
		<h1 >Menu</h1>
	</div>
	@foreach($categories as $category)
	<div class="h2">
		<h2 class="class1">{{ $category->kind }}</h2>
	</div>
	@foreach($category->menus as $menu)
	<div class="card card-body bg-light menu1">
		<div class="row">
			<div class="col-md-2 col-sm-2 image">
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
			<div class="col-md-2 col-sm-2">>
				<div  class="row cost">
					<h2>{{$menu->cost}}$</h2>
				</div>
				<div class="btn-group row button1" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary">-</button>
					<button type="button" class="btn btn-secondary">Number</button>
					<button type="button" class="btn btn-secondary">+</button>
				</div>
			</div>
		</div>
	</div>


@endforeach
@endforeach
</div>
@endsection