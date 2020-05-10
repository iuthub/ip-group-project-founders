@extends('layouts.app')
@section('content')
<div class="container" id='menu'>
	<div class="alert alert-danger" id="alert">You don't have anything on your cart!</div>
@foreach($categories as $category)
@php $counter = 0 @endphp
<hr style="margin-top: 20px">
<h2 class="category-title-menu">{{ $category->kind }}</h2>
<hr style="margin-bottom: 50px">
	@foreach($category->menus as $menu)
		@php $counter++ @endphp
		@if($counter % 3 == 1)
		<div class="row">
		@endif

		<div class="col-lg-4 col-md-6 col-sm-12">
			<div id="{{$menu->id}}" class="card bg-light menu-item" style="height: 600px">
				<img style="width:100%; height: 250px"  src="/storage/cover_imgs/{{$menu->cover_img}}">
				<div class="card-body">
					<h3 class="card-title menu-item-title">{{$menu->title}}</h3>
					<p class="card-text">{{$menu->body}}</p>
					<h5 class="menu-cost">{{$menu->cost}} $</h5>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-secondary btn-sub">-</button>
					<input type="text" name="{{$menu->id}}" style="text-align: center;" value="0">
					<button type="button" class="btn btn-secondary btn-add">+</button>
				</div>
			</div>
		</div>
		@if($counter % 3 == 0 || count($category->menus) == $counter)
		</div>
		@endif
	@endforeach
@endforeach
<button class="btn btn-danger fixed-bottom-button" id='cart-bottom'> 
	<i class="fas fa-shopping-cart"></i>
</button>
</div>

<div class="container" id="hidden-cart">
	<div id="cart-content">
	</div>
	<div class="btn-group row" style="width: 100%" role="group">
		<button type="button" class="btn btn-success btn-order col-lg-6 col-6 col-sm-12" id="btn-show-qr">Generate QR order</button>
	</div>
	<div class="qr">
		<h2 id="qr-instruction">Show this QR code to the restaurant staff. They'll immediately process your order</h2>
		<img id="qr" src="">
		</img>
	</div>
</div>
@endsection