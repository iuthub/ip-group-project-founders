@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 100px">
	<form method="post" class="" action="{{ route('postReservation') }}">
		@csrf
		<div class="">
			<div class="">
				<input name="name" class="" type="text" placeholder="Your name" >
			</div>
			<div class="">
				<input name="email" class="" type="email" placeholder="Your email" >
			</div>
			<div class="">
				<input name="date" type="date" class="datepicker">
			</div>
			<div class="">
				<select name="time" class="">
					<option value="6:00pm">6:00 pm</option>
					<option value="6:30pm">6:30 pm</option>
					<option value="7:00pm">7:00 pm</option>
					<option value="7:30pm">7:30 pm</option>
					<option value="8:00pm">8:00 pm</option>
					<option value="8:30pm">8:30 pm</option>
					<option value="9:00pm">9:00 pm</option>
					<option value="9:30pm">9:30 pm</option>
					<option value="10:00pm">10:00 pm</option>
					<option value="10:30pm" selected="selected">10:30 pm</option>
				</select>
			</div>
			<div class="">
				<select name="people_count" class="">
					<option value="1">1 person</option>
					<option value="2">2 people</option>
					<option value="3">3 people</option>
					<option value="4" selected="selected">4 people</option>
					<option value="5">5 people</option>
					<option value="6">6 people</option>
					<option value="7">7 people</option>
					<option value="8">8 people</option>
					<option value="9">9 people</option>
					<option value="10">10 people</option>
					<option value="11">11 people</option>
					<option value="12">12 people</option>
					<option value="13">13 people</option>
					<option value="14">14 people</option>
					<option value="15">15 people</option>
				</select>
			</div>
			<div class="">
				<input type="submit" class="" value="Reserve">
			</div>
		</div>
	</form>
</div>
@endsection