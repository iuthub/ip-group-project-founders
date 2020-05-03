<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="{{ route('getHome') }}">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('getHome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('getMenu') }}">Menu</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('getAddMenu') }}">Add Menu</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="{{ route((Auth::check() && Auth::user()->is_admin)?'getAdminReservation':'getReservation') }}">Reservation</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('getAbout') }}">About</a>
                </li>

                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li> 
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item"> 
                             <input type="submit" value="Logout" class=""> 
                        </li>
                    </form>
                @endif
            </ul>
        </div>  
    </nav>
    