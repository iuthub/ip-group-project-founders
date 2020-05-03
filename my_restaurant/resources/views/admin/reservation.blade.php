@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 100px">
	@if(isset($info)) 
		<h2>{{$info}}</h2>
	@endif

	<a class="btn btn-info" href="{{ route('getReservation') }}">Add reservation</a>
	@foreach($reservations as $reservation)
	<li>
		<div class="reservation_name">
			name: {{ $reservation->name }}
		</div>
		<div class="reservation_email">
			email: {{ $reservation->email }}
		</div>
		<div class="reservation_date">
			date: {{ $reservation->date }}
		</div>
		<div class="reservation_time">
			time: {{ $reservation->time }}
		</div>
		<div class="reservation_name">
			number of people: {{ $reservation->people_count }}
		</div>
		<div class="action">
			<a href="{{ route('getDeleteReservation', [ 'id' => $reservation->id ]) }}"><i class="fas fa-trash"></i></a>
		</div>
	</li>
	@endforeach
@endsection