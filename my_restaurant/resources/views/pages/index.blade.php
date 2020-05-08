@extends('layouts.app')
<?php 
$menu_link= route((Auth::check() && Auth::user()->is_admin)?'getAddMenu':'getMenu') 
 ?>
@section('content')
	@if(isset($reservation))
		<h1 style="margin-top: 100px">Hello, {{ $reservation->name}}. Your reservation was accepted!</h1>
	@endif
<div class="body1">
   <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col1">
                    <h4>You can find delicious foods in our restaurant</h4>
                    <h2>IUT Restaurant</h2>
                    <p><strong>You can order food and place beforehand</strong></p>
                    <div class="primary-button">
                        <a href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAdminReservation':'getReservation') }}" class="scroll-link" data-id="book-table">Order Right Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="images/food1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>Delecious meals</h4>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>+99890 117-44-74</h6>
                        </div>
                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAdminReservation':'getReservation') }}" class="scroll-link" data-id="book-table">Orders</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="images/food2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="{{ $menu_link }}">
                        <img src="images/cook_breakfast.png" alt="Breakfast">
                        <h4>Breakfast</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="service-item">
                        <a href="{{ $menu_link }}">
                        <img src="images/cook_lunch.png" alt="Lunch">
                        <h4>Lunch</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="service-item">
                        <a href="{{ $menu_link }}">
                        <img src="images/cook_dinner.png" alt="Dinner">
                        <h4>Dinner</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="service-item">
                        <a href="{{ $menu_link }}">
                        <img src="images/cook_dessert.png" alt="Desserts">
                        <h4>Desserts</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>New Featured Foods</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Breakfast</h2>
                        <img src="images/breakfast_item2.jpg" alt="">
                        <div class="price">$3.50</div>
                        <div class="text-content">
                            <h4>Scrambled Eggs</h4>
                            <p>The protein from the eggs makes them especially appealing as a breakfast option and the eggs can offer a hearty start....</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Lunch</h2>
                        <img src="images/lunch_item1.jpg" alt="">
                        <div class="price">$6.50</div>
                        <div class="text-content">
                            <h4>California roll</h4>
                            <p>California roll is a typical American dinner menu meal prepared with sticky rice</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Dinner</h2>
                        <img src="images/dinner_item2.jpg" alt="">
                        <div class="price">$12.50</div>
                        <div class="text-content">
                            <h4>Thanksgiving turkey dinner</h4>
                            <p>The yummy turkey can be grilled or deep-fried and dressed in cornbread, onion, celery, fruits, chestnuts or oysters...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2020 Inha University in Tashkent</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.facebook.com/ibrokhimjon.makhamadaliev"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://t.me/coolman99"><i class="fa fa-telegram"></i></a></li>
                        <li><a href="https://www.instagram.com/mr_coolman_23"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://wa.me/998901174474"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa fa-snapchat"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Design: By Founders</p>
                </div>
            </div>
        </div>
    </footer>
</div>







          
@endsection