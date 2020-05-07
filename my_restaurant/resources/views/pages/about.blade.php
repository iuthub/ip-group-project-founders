@extends('layouts.app')

@section('content')

	<main>
	<section class="about" id="about">
		<div class="container">
			<div class="row align-items-lg-center">
				<div class="col-12 col-md-6 text-center text-md-left">
					<div class="section-heading mb-3">
						<h1 class="display-4">Our Story</h1>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
				<div class="col-12 col-md-6">
					<img class="img-fluid" src="{{ URL::to('images/res_about.jpg') }}" width="800">
				</div>
			</div>
			
		</div>
	</section>
</main>
<section class="yep">
<div class="container">
<h1 class="display">Our Team</h1>
</div>
</section>
<section class="yes">
	<div class="row">
		<dir class="col-lg-4 col-md-6">
			<div class="card">
				<div class="card-body">
					
					<img  class="img-fluid rounded-circle w-50 mb-3 forker" src="{{ URL::to('images/cooker1.jpg') }}" >
					<h4 class="fazlidd-TITLE">
						Jack Daniels
					</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<div class="d-flex flex-row justify-content-center">
						<div class="p-4">
							<a href="https://www.instagram.com">
								<i class="fab fa-instagram fa-2x"></i>
							</a>
							
							<a href="https://www.telegram.com">
								<i class="fab fa-telegram fa-2x"></i>
							</a>
							
							<a href="https://www.facebook.com">
								<i class="fab fa-facebook fa-2x"></i>
							</a>
							</div>
							</div>
				</div>
			</div>
		</dir>
		
		
		<dir class="col-lg-4 col-md-6">
			<div class="card">
				<div class="card-body">
					
					<img  class="img-fluid rounded-circle w-50 mb-3 forker" src="{{ URL::to('images/cooker2.jpg') }}"  >
					<h4 class="fazlidd-TITLE">
					Steve Jackson	
					</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<div class="d-flex flex-row justify-content-center">
						<div class="p-4">
							<a href="https://www.instagram.com">
								<i class="fab fa-instagram fa-2x"></i>
							</a>
							<a href="https://www.telegram.com">
								<i class="fab fa-telegram fa-2x"></i>
							</a>
							<a href="https://www.facebook.com">
								<i class="fab fa-facebook fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</dir> 
		<dir class="col-lg-4 col-md-6">
			<div class="card">
				<div class="card-body">
			
					<img class="img-fluid rounded-circle w-50 mb-3 forker" src="{{ URL::to('images/cooker3.jpg') }}"   >
					<h4 class="fazlidd-TITLE">
					Riley Reid
					</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
					<div class="d-flex flex-row justify-content-center">
						<div class="p-4">
							<a href="https://www.instagram.com">
								<i class="fab fa-instagram fa-2x"></i>
							</a>
							<a href="https://www.telegram.com">
								<i class="fab fa-telegram fa-2x"></i>
							</a>
							<a href="https://www.facebook.com">
								<i class="fab fa-facebook fa-2x"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</dir>
	</div>
</section>
@endsection