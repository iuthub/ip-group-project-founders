@extends('layouts.app')
@section('content')
<div class="container">
@foreach($categories as $category)
@php $counter = 0 @endphp
<h2 class="category-title-menu">{{ $category->kind }}</h2>
	@foreach($category->menus as $menu)
		@php $counter++ @endphp
		@if($counter % 3 == 1)
		<div class="row">
		@endif

		<div class="col-lg-4 col-md-6 col-sm-12 menu-item">
			<div class="card bg-light" style="height: 600px">
				<img style="width:100%; height: 250px"  src="/storage/cover_imgs/{{$menu->cover_img}}">
				<div class="card-body">
					<h3 class="card-title menu-item-title">{{$menu->title}}</h3>
					<p class="card-text">{{$menu->body}}</p>
					<h5>{{$menu->cost}} $</h5>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-secondary">-</button>
					<input type="text" style="text-align: center;" value="0">
					<button type="button" class="btn btn-secondary">+</button>
				</div>
				<hr>
			</div>
		</div>
		@if($counter % 3 == 0 || count($category->menus) == $counter)
		</div>
		@endif
	@endforeach
@endforeach
</div>
@endsection