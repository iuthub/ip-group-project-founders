@extends('layouts.app')
@section('content')

<h1 >Menu:</h1>
@if(count($menus)>0)
<!--For Salads-->
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
<!--This just buttons without functions this is how u should do-->
	<div class="btn-group" role="group" aria-label="Basic example">
		<button type="button" class="btn btn-secondary">-</button>
		<button type="button" class="btn btn-secondary">Number</button>
		<button type="button" class="btn btn-secondary">+</button>
	</div>
@endif
@endforeach

<!--For Main Dishes-->
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
<!--This just buttons without functions this is how u should do-->
	<div class="btn-group" role="group" aria-label="Basic example">
		<button type="button" class="btn btn-secondary">-</button>
		<button type="button" class="btn btn-secondary">Number</button>
		<button type="button" class="btn btn-secondary">+</button>
	</div>
@endif
@endforeach

<!--For Desert-->
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
<!--This just buttons without functions this is how u should do-->
	<div class="btn-group" role="group" aria-label="Basic example">
		<button type="button" class="btn btn-secondary">-</button>
		<button type="button" class="btn btn-secondary">Number</button>
		<button type="button" class="btn btn-secondary">+</button>
	</div>
@endif
@endforeach

<!--For Beverage-->
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
<!--This just buttons without functions this is how u should do-->
	<div class="btn-group" role="group" aria-label="Basic example">
		<button type="button" class="btn btn-secondary">-</button>
		<button type="button" class="btn btn-secondary">Number</button>
		<button type="button" class="btn btn-secondary">+</button>
	</div>
@endif
@endforeach



@else
<p>No Menus So far</p>
@endif
@endsection