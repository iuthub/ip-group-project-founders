@extends('layouts.app')
@section('content')
<section class="good" id="good">

<div class="container excellent ">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

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
		<form method="post" class="form-reservation" action="{{ route('postReservation') }}">
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
				<select name="time" class="selectpicker">
					<option value="11:00am">11:00 am</option>
					<option value="11:30am">11:30 am</option>
					<option value="12:00pm">12:00 pm</option>
					<option value="12:30pm">12:30 pm</option>
					<option value="1:00pm">1:00 pm</option>
					<option value="1:30pm">1:30 pm</option>
					<option value="2:00pm">2:00 pm</option>
					<option value="2:30pm">2:30 pm</option>
					<option value="3:00pm">3:00 pm</option>
					<option value="3:30pm">3:30 pm</option>
					<option value="4:00pm">4:00 pm</option>
					<option value="4:30pm">4:30 pm</option>
					<option value="5:00pm">5:00 pm</option>
					<option value="5:30">5:30 pm</option>
					<option value="6:00pm">6:00 pm</option>
					<option value="6:30pm">6:30 pm</option>
					<option value="7:00pm">7:00 pm</option>
					<option value="7:30pm">7:30 pm</option>
					<option value="8:00pm">8:00 pm</option>
					<option value="8:30pm">8:30 pm</option>
					<option value="9:00pm">9:00 pm</option>
					<option value="9:30pm">9:30 pm</option>
					<option value="10:00pm">10:00 pm</option>
					<option value="10:30pm">10:30 pm</option>
				</select>
			 </div>
			 <div class="form-field">
			 	<p>Number of People</p>
			 	<select name="people_count">
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