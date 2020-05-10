<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" >


    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

    
    <div class="collapse navbar-collapse"  id="collapsibleNavbar" >

    <div class="navbar-collapse  w-100 order-1 " >
        <a class="navbar-brand mr-auto " href="{{ route('getHome') }}"><img src="{{ URL::to('images/logo.png') }}" class="logo"></a>
    </div>


    <div class="navbar-collapse  w-100 order-2 "  >
            <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('getHome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAddMenu':'getMenu') }}">Menu</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAdminReservation':'getReservation') }}">Reservation</a>
                </li>  
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('getAbout') }}">About</a>
                </li>
            </ul>
    </div>
    <div class="navbar-collapse w-100 order-3">
        @if(Route::currentRouteName() == 'getMenu')
            <a id="cart" class="nav-link">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-quantity">  0  </span>
            </a>
        @endif
    </div>
    <div class="navbar-collapse w-100 order-4">
            <ul class="navbar-nav ml-auto">

                @if(!Auth::check())
                    <li class="nav-item " >
                        <a class="nav-link sign_in" href="{{ route('login') }}">Login</a>
                    </li> 
                    <li class="nav-item ">
                        <a class="nav-link sign_up" href="{{ route('register') }}">Sign Up</a>
                    </li>
                @else
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item "> 
                             <input type="submit" value="Logout" class = "log_out"> 
                        </li>
                    </form>

                @endif
            </ul>
    </div> 
</div>
</nav>
    