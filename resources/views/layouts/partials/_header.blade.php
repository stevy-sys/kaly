<!-- ##### Header Area Start ##### -->
<header class="text-center header-area">
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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            publiez
                        </a>
                        <div class="dropdown-menu text-center dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('post.create-receipe') }}" class="dropdown-item">recette</a>
                            <a href="{{ route('post.create-blog') }}" class="dropdown-item">blog</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ route("categorie.index") }}" class="nav-link font-weight-bold text-uppercase">Categorie</a></li>
                    <li class="nav-item dropdown megamenu">
                        <a id="megamenu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Actualite</a>
                        <div aria-labelledby="megamenu" class="dropdown-menu border-0 p-0 m-0">
                            <div class="container">
                                <div class="row bg-light rounded-0 m-0 shadow-sm">
                                    <div class="col-lg-7 col-xl-8">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Heading one</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="{{ route("home") }}"
                                                                class="nav-link text-small pb-0">Home</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">About</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Help</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Account</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Heading two</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Home</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">About</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Help</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Account</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Heading three</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Home</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">About</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Help</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Account</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <h6 class="font-weight-bold text-uppercase">Heading four</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Home</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">About</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Help</a></li>
                                                        <li class="nav-item"><a href="#"
                                                                class="nav-link text-small pb-0 ">Account</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                                        style="background: center center url(/img/image.jpg)no-repeat; background-size: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-5" >
                        <div class="top-search-area">
                            <form action="#" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
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
                            <a class="dropdown-item" href="#">
                                Message
                            </a>
                            <a class="dropdown-item" href="#">
                                Mon boutique
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