@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 100px">
	@if(isset($info)) 
		<h2>{{$info}}</h2>
	@endif

	<a class="btn btn-info" href="{{ route('getReservation') }}">Add reservation</a>
	@foreach($reservations as $reservation)
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<p>name: {{ $reservation->name }}</p>
				<p>email: {{ $reservation->email }}</p>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<p>date: {{ $reservation->date }}</p>
				<p>time: {{ $reservation->time }}</p>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<p>number of people: {{ $reservation->people_count }}</p>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<a href="{{ route('getDeleteReservation', [ 'id' => $reservation->id ]) }}"><i class="fas fa-trash"></i></a>
			</div>
		</div>
		<hr>
	@endforeach
</div>
@endsection