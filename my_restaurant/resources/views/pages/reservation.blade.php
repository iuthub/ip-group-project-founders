@extends('layouts.app')
@section('content')
<div class="container">
	<form method="post" class="otw-widget-form" action="{{ route('postReservation') }}">
		@csrf
		<div class="otw-wrapper">
			<div class="otw-name-wrap otw-input-wrap">
				<input name="Name" class="otw-reservation-name" type="text" placeholder="Your name" >
			</div>
			<div class="otw-email-wrap otw-input-wrap">
				<input name="Name" class="otw-reservation-email" type="text" placeholder="Your email" >
			</div>
			<div class="otw-date-wrap otw-input-wrap">
				<input name="startDate" class="otw-reservation-date" type="text" value="17/09/2016" autocomplete="off" data-date-format="mm/dd/yyyy">
			</div>
			<div class="otw-time-wrap otw-input-wrap">
				<select name="ResTime" class="otw-reservation-time selectpicker">
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
			<div class="otw-party-size-wrap otw-input-wrap">
				<select name="partySize" class="otw-party-size-select selectpicker">
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
			<div class="otw-button-wrap">
				<input type="submit" class="otw-submit" value="Reserve">
			</div>
		</div>
	</form>
</div>
@endsection