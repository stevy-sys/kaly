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
                <ul class="navbar-nav">
                    <li class=" nav-link mr-1 {{ request()->path() === "/" ? "active" : "" }}"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class=" nav-link mr-1 {{ request()->path() === "apropos" ? "active" : "" }}"><a href="#">Apropos de nous</a></li>
                    <li class=" nav-link mr-1 {{ request()->path() === "blog" ? "active" : "" }}"><a href="#">Blog et mis a jour du site</a></li>
                    <li class=" nav-link pr-5  {{ request()->path() === "contact" ? "active" : "" }}"><a href="{{route("contact")}}">Contactez-nous</a></li>
                
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a href="{{ url('/home') }}" class="dropdown-item"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            <a class="dropdown-item" href="{{ route('profil',['user'=> auth()->user()->id]) }}">
                                <i class="fa fa-user" aria-hidden="true"></i> Profil
                            </a>
                            <a class="dropdown-item" href="{{ route('message.index') }}">
                                <i class="fa fa-comments" aria-hidden="true"></i> Message
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Mon boutique
                            </a>
                            <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
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