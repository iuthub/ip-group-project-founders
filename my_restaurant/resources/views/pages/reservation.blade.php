@extends('layouts.app')
@section('content')
<section class="good" id="good">
<div class="container excellent ">
	<div class="container-time">
		<h2 class="heading">Time Open</h2>
		<hr>
		<h3 class="heading-day">Monday-Friday</h3>
		<p>6am-10am(Breakfast)</p>
		<p>10am-10pm(Launch and Dinner)</p>

		
		<h3 class="heading-day">Saturday and Sunday</h3>
		<p>9am-1am(Breakfast)</p>
		<p>1am-9pm(Launch and Dinner)</p>
		<hr>
		
	</div>
	<div class="container-form">
		<form method="post" class="" action="{{ route('postReservation') }}">
			@csrf
			 <h2 class="heading heading-yellow">Reservation</h2>
			 <div class="form-field">
			 	<p>Your Name</p>
			 	<input type="text" name="name" placeholder="Your Name">
			 </div>
			 <div class="form-field">
			 	<p>Your Email</p>
			 	<input type="email" name="email"  placeholder="Your Email">
			 </div>
			 <div class="form-field">
			 	<p>Date </p>
			 	<input type="date" name="date" >
			 </div>
			 <div class="form-field">
			 	<p>Time</p>
			 	<input type="time" name="time" >
			 </div>
			 <div class="form-field">
			 	<p>Number of People</p>
			 	<select name="select">
			 		<option value="1">1 person</option>
			 		<option value="2">2 persons</option>
			 		<option value="3">3 persons</option>
			 		<option value="3">3 persons</option>
			 		<option value="4">4 persons</option>
			 		<option value="4">4 persons</option>
			 		<option value="5">5 persons</option>
			 		<option value="6">6 persons</option>
			 		<option value="7">7 persons</option>
			 		<option value="8">8 persons</option>
			 		<option value="9">9 persons</option>
			 		<option value="10">10 persons</option>
			 		<option value="11">11 persons</option>
			 		<option value="12">13 persons</option>
			 		<option value="14">14 persons</option>
			 		<option value="15">15 persons</option>

			 	</select>
			 </div>
			 <button  type="submit" class="btn btn-success">Book Table</button>
		</form>
	</div>
</div>
</div>
</section>


@endsection