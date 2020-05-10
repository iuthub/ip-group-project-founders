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
              <h3 class="name1" >Quick Chicken Piccata</h3>
              <p >Quick chicken recipes make dinner a breeze. Laced with lemon and simmered in white wine, this stovetop entree is super easy and elegant. Almost any side—noodles, veggies or bread—tastes better next to this lovely chicken. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a1.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a2.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Pan-Roasted Chicken and Vegetables</h3>
              <p >This one-dish roast chicken with vegetables tastes as if it took hours of hands-on time to put together, but the simple ingredients can be prepped in mere minutes. The rosemary gives it a rich flavor, and the meat juices cook the veggies to perfection.</p>
              
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
              <h3 class="name1" >Flavorful Pot Roast</h3>
              <p >On hectic days, this is so quick and easy to prep! Convenient packages of dressing and gravy combine to create a sauce worthy of a fall-apart roast. For a filling meal-in-one, serve with mashed potatoes and ladle the juices over top. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a3.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a4.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Roasted Chicken with Rosemary</h3>
              <p >Roasting chickens this way is simple but gives you that rich roast flavor. The rosemary gives it a sweet taste and blends well with the garlic, butter and parsley.</p>
              
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
              <h3 class="name1" >Shrimp Monterey</h3>
              <p >For a special occasion or when company's coming, this delicious seafood dish makes a lasting impression. You'll be surprised at how fast you can prepare it. A mild, fresh-tasting sauce and the Monterey Jack cheese nicely complement the shrimp </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a5.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a6.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Taco Salad Casserole</h3>
              <p >This taco casserole recipe tastes like a taco salad and is a breeze to assemble. I crush tortilla chips to form a bottom layer, then spread on refried beans, a spicy meat mixture and cheese.</p>
              
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
              <h3 class="name1" >Brown Sugar-Glazed Salmon</h3>
              <p >Pop these protein-packed salmon fillets in the oven before whipping up a sweet basting sauce. This tangy entree cooks up in minutes making it a perfect meal for busy families and unexpected weekend guests. </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a7.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a8.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Melt-in-Your-Mouth Chuck Roast</h3>
              <p >1 can (14-1/2 ounces) Italian stewed tomatoes, undrained 1/2 cup beef broth 1/2 cup ketchup 3 tablespoons brown sugar 2 tablespoons Worcestershire sauce 4 teaspoons prepared mustard 3 garlic cloves, minced 1 tablespoon soy sauce
</p>
              
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
              <h3 class="name1" >Basil Pork Chops</h3>
              <p >Just a few ingredients give a tender pork loin chop all the glazed goodness it needs. Serve with your favorite roasted veggies and you’ve got a meal bursting with flavor </p>
            </div>
            
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a9.jpg') }}"  />
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-sm-6 ">
        <div class="container">
          
          <div class="row">
            <div class="col-md-3 col-sm-3 imagaskil">
              <img src="{{ URL::to('images/a10.jpg') }}"  />
            </div>
            
            <div class="col-md-9 col-sm-9 text-left   ">
              
              <h3 class="name1">Shrimp Tortellini Pasta Toss</h3>
              <p >No matter how you toss 'em up, shrimp and thyme play nicely with any spring-fresh vegetable.</p>
              
            </div>
            
            
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>











<div id="carouselExampleControls" class="carousel slide " style="margin-top: 100px;"  data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
               
                <div class="row">
                   
                    <div class="col-md-6 col-sm-6">
                        <img src="{{ URL::to('images/enjoy uto.png') }}">
                    </div>
                   
                    <div class="col-md-6 col-sm-6  text-left ">
                        <div>
                            <h3 id="para1">Foods on discounts.</h3>
                        </div>
                         <div>
                          <img src="{{ URL::to('images/line4.png') }}">
                        </div>
                        <h3 class="name1">Chicken for Two</h3>
                   

                        <p id="bodyChange"> Her chicken (which is still the restaurant’s top seller) starts with a dry brine before being dried, seasoned and cooked in a very hot oven. It’s served over a warm salad of arugula and chunks of bread, and there’s still no other dish quite like it.</p>
                        <a href="{{ route('register') }}" class="btn btn-secondary" role="button"><span>Be Member</span></a>

                    </div>
                </div>
            </div>
    </div>
    <div class="carousel-item">
      <div class="container">
               
                <div class="row">
                   
                    <div class="col-md-6 col-sm-6">
                        <img src="{{ URL::to('images/food4car3.png') }}">
                    </div>
                   
                    <div class="col-md-6 col-sm-6  text-left ">
                        <div>
                            <h3 id="para1">Foods on discounts.</h3>
                        </div>
                         <div>
                          <img src="{{ URL::to('images/line4.png') }}">
                        </div>
                        <h3 class="name1">Black Label </h3>
                   

                        <p id="bodyChange"> Prime dry-aged beef, carefully sourced and aged for six to seven weeks, is well seasoned and given an enviable sear on a griddle before being nestled onto a sesame-studded brioche bun, topped with caramelized onions and served with pommes frites.</p>
                        <a href="{{ route('register') }}" class="btn btn-secondary" role="button"><span>Be Member</span></a>

                    </div>
                </div>
            </div>
    </div>
    <div class="carousel-item">
      <div class="container">
               
                <div class="row">
                   
                    <div class="col-md-6 col-sm-6">
                        <img src="{{ URL::to('images/carphoto.png') }}">
                    </div>
                   
                    <div class="col-md-6 col-sm-6  text-left ">
                        <div>
                            <h3 id="para1">Foods on discounts.</h3>
                        </div>
                         <div>
                          <img src="{{ URL::to('images/line4.png') }}">
                        </div>
                        <h3 class="name1">Blackened Redfish</h3>
                   

                        <p id="bodyChange">he dish starts with a blend of spices including cayenne, paprika, garlic and onion powders, thyme and oregano, applied liberally to the Gulf fish before it’s seared with a little clarified butter in a ripping-hot cast-iron pan. </p>
                       <a href="{{ route('register') }}" class="btn btn-secondary" role="button"><span>Be Member</span></a>

                    </div>
                </div>
            </div>
    </div>
     <div class="carousel-item">
      <div class="container">
               
                <div class="row">
                   
                    <div class="col-md-6 col-sm-6">
                        <img src="{{ URL::to('images/foodlal.png') }}">
                    </div>
                   
                    <div class="col-md-6 col-sm-6  text-left ">
                        <div>
                            <h3 id="para1">Foods on discounts.</h3>
                        </div>
                         <div>
                          <img src="{{ URL::to('images/line4.png') }}">
                        </div>
                        <h3 class="name1">Dick’s Deluxe</h3>
                   

                        <p id="bodyChange">To make the dish, heavy cream is lightly whipped with cayenne, salt and a touch of vodka and fresh lemon juice, and the mixture is added into a piping bag. Egg, salt, cayenne, cream and butter are whisked into a very soft scramble, and this mixture is spooned into the bottom of an eggshell.</p>
                       <a href="{{ route('register') }}" class="btn btn-secondary" role="button"><span>Be Member</span></a>

                    </div>
                </div>
            </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>













