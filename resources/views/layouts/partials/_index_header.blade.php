<!-- ##### Header Area Start ##### -->
<header class=" text-center header-area">
    <!-- Navbar Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/core-img/logo.png" alt="">
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> 
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarContent" class="collapse navbar-collapse">
                <ul class="  navbar-nav">
                    <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "/" ? "active" : "" }}"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "apropos" ? "active" : "" }}"><a href="#">Apropos de nous</a></li>
                    <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "blog" ? "active" : "" }}"><a href="#">Blog et mis a jour du site</a></li>
                    <li class=" nav-link col-lg-3 col-md-12 col-xs-12 mr-pourcentage-30 {{ request()->path() === "contact" ? "active" : "" }}"><a href="{{route("contact")}}">Contactez-nous</a></li>
                    
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item text-center">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li class="nav-item text-center">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-center" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu text-center dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a href="{{ url('/home') }}" class="dropdown-item">Home</a>
                            <a class="dropdown-item" href="{{ route('profil') }}">
                                Profil
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ##### Header Area End ##### -->