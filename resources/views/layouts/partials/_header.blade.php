<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="{{ route("profil") }}" class="nav-link font-weight-bold text-uppercase">Profil</a></li>
                <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-uppercase">Publiez</a></li>
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
                                    style="background: center center url(https://images.unsplash.com/photo-1533637267520-4dfd6aa7ee93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)no-repeat; background-size: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-5"><a href="#" class="nav-link font-weight-bold text-uppercase">Notification/Message</a></li>
                <li class="nav-item" >
                    <div class="top-search-area">
                        <form action="#" method="post">
                            <input type="search" name="top-search" id="topSearch" placeholder="Search">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Logo Area -->
    {{-- <div class="logo-area">
        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
    </div> --}}
</header>
<!-- ##### Header Area End ##### -->