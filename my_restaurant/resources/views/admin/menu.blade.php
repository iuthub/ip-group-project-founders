@extends('layouts.app')

@section('content')
<div class="menu">
	<li>
		<ul>
			<div class="food">
				<div class="img"> 
					<img src="{{ url('public/images/kosh.jpg') }}" width="100px" height="100px" alt="tasty food"> </div>
				<div class="name">Eatable food</div>
				<div class="ingredients">You can look at the picture</div>
				<div class="price">$100</div>
				<div class="minus">-</div>
				<div class="quantity">5</div>
				<div class="plus">+</div>
			</div>
		</ul>
	</li>	
</div>
@endsection