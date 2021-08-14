<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/core-img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="navbar-nav mr-auto footer-area">
                
                    <!-- Footer Nav -->
                    
                        <ul class="row m-0 p-0 text-center">
                            <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "/" ? "active" : "" }}"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "apropos" ? "active" : "" }}"><a href="#">Apropos de nous</a></li>
                            <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "blog" ? "active" : "" }}"><a href="#">Blog et mis a jour du site</a></li>
                            <li class=" nav-link col-lg-3 col-md-12 col-xs-12 {{ request()->path() === "contact" ? "active" : "" }}"><a href="{{route("contact")}}">Contactez-nous</a></li>
                        </ul>

            </div>

            <!-- Right Side Of Navbar -->
            <ul class=" text-center navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                {{-- <li class="nav-item">

                </li> --}}
                @endguest
            </ul>
        </div>
    </div>
</nav>