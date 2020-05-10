@extends('layouts.app')
<?php
$menu_link= route((Auth::check() && Auth::user()->is_admin)?'getAddMenu':'getMenu')
?>
@section('content')
@if(isset($reservation))
<h1 style="margin-top: 100px">Hello, {{ $reservation->name}}. Your reservation was accepted!</h1>
@endif
<div >
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ URL::to('images/caro.png') }}" alt="First slide">
        <div class="carousel-caption carusel1 d-none d-md-block text-left">
          <h1 id="para4">Welcome</h1>
          <h2  id="para5" style="margin-left: 10%">to the place </h2>
          <h2  id="para5" style="margin-left: 20%">where you have</h2>
          <h2  id="para5" style="margin-left: 30%">been only in your</h2>
          <h2  id="para6" style="margin-left: 40%">dreams</h2>
          <p id="para7">[ Déja vu ] - the feeling that one has lived<br> through the present situation before,the phrase<br> translates literally as "already seen"</p>
          <a href="{{ route('getAbout') }}" class="btn btn-secondary" role="button"><span>More About Us</span></a>
        </div>
      </div>
      
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ URL::to('images/caro5.png') }}" alt="Second slide">
        <div class="carousel-caption carusel2 d-none d-md-block text-center">
          <div>
            <h1 id="para8">Smart Food Ordering</h1>
            <h2  id="para9">No time is wasted for waiters, <br>order foods right here and <br> meet us with the generated QR code.</h2>
          </div>
          <div class="text-right " style="margin-top: 100px">
            <a href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAddMenu':'getMenu') }}" class="btn btn-secondary secondbtn" role="button"><span>Try It Now</span> </a>
          </div>
          
        </div>
      </div>
      
      
      <div class="carousel-item ">
        <img class="d-block w-100" src="{{ URL::to('images/car9.png') }}"  alt="Third slide">
        <div class="carousel-caption carusel3 d-none d-md-block text-left">
          <h1 id="para10">Wide range of options!</h1>
          <h2 id="para11">Become the member of our family<br>and get weekly discounts</h2>
          <a href="{{ route('register') }}" class="btn btn-secondary" role="button"><span>Sign Up Now</span></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>






<div class="about">
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  text-center ">
        <div >
          <h3 id="para6">Weekly Top 5</h3>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-6 text-center">
       <h3 id="para6">Monthly Top 5</h3>
      </div>
    </div>
  </div>
</div>





<div >
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  ">
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-9 col-sm-9  text-right ">
              <h3 class="name1" >Courgetti</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/image5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/beet.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Spring tabbouleh</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>





<div >
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  ">
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-9 col-sm-9  text-right ">
              <h3 class="name1" >Courgetti</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/image5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/beet.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Spring tabbouleh</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>






<div >
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  ">
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-9 col-sm-9  text-right ">
              <h3 class="name1" >Courgetti</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/image5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/beet.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Spring tabbouleh</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>





<div >
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  ">
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-9 col-sm-9  text-right ">
              <h3 class="name1" >Courgetti</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/image5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/beet.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Spring tabbouleh</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>






<div >
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-sm-6  ">
        <div class="container">
          
          <div class="row">
            
            <div class="col-md-9 col-sm-9  text-right ">
              <h3 class="name1" >Courgetti</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/image5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/beet.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Spring tabbouleh</h3>
              <p >Slow-grilling over indirect heat keeps this chicken moist and tender. Giving the drumsticks a long rub with seasonings makes them taste great.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>














