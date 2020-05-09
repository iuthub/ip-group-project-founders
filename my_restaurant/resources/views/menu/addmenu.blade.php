@extends('layouts.app')
@section('content')

<div class="container">
	<a class="btn btn-success btn-menu-add"  href="{{ route('createMenu') }}">New Food</a>

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
				<hr>
				<div class="btn-group" role="group">
					<a href="{{ route('editMenu', ['id'=> $menu->id]) }}" style="padding-top: 13px;padding-bottom: 13px" class="btn btn-dark">Edit</a>
					{!! Form::open(['action'=>['MenusController@destroy', $menu->id], 'method'=>'POST','class'=>'btn btn-dark', 'style'=>'padding:0']) !!}
					{{Form::hidden('_method', 'Delete')}}
					{{Form::submit('Delete', ['class'=>'btn btn-dark btn-menu-delete'])}}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		@if($counter % 3 == 0 || count($category->menus) == $counter)
		</div>
		@endif
	@endforeach
@endforeach
</div>
@endsection