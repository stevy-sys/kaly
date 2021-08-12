@extends('layouts.app')

@section('content')
<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area bg-img bg-overlay" style="background-image: url(img/bg-img/header.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <div class="col-12 col-sm-6">
                    <!-- Top Social Info -->
                    <div class="top-social-info">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i
                                class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i
                                class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                    <!-- Top Search Area -->
                    <div class="top-search-area">
                        <form action="#" method="post">
                            <input type="search" name="top-search" id="topSearch" placeholder="Search">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area">
        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
    </div>

    <!-- Navbar Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm"> <a href="#"
            class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a> <button type="button"
            data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false"
            aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle font-weight-bold text-uppercase">Mega Menu</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading one</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading two</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading three</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading four</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
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
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">About</a></li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Treading Post Area Start ##### -->

<!-- ##### Treading Post Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel">
        <!-- Single Slide -->
        <div class="single-slide">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="#"><img src="img/bg-img/1.jpg" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content-bg">
                <div class="blog-content">
                    <a href="#" class="post-tag">Healthy Food</a>
                    <a href="#" class="post-title">Chicken Salad</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="#"><img src="img/bg-img/2.jpg" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content-bg">
                <div class="blog-content">
                    <a href="#" class="post-tag">Healthy Food</a>
                    <a href="#" class="post-title">Chicken Salad</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="#"><img src="img/bg-img/3.jpg" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content-bg">
                <div class="blog-content">
                    <a href="#" class="post-tag">Healthy Food</a>
                    <a href="#" class="post-title">Chicken Salad</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="#"><img src="img/bg-img/3.jpg" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content-bg">
                <div class="blog-content">
                    <a href="#" class="post-tag">Healthy Food</a>
                    <a href="#" class="post-title">Chicken Salad</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Catagory Area Start ##### -->
<div class="post-catagory section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Post Catagory -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/4.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Healthy Food</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/5.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Organic Cuisine</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/6.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Vegetarian Food</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Big Posts Area Start ##### -->
<div class="big-posts-area mb-50">
    <div class="container">
        <!-- Single Big Post Area -->
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-thumbnail mb-50">
                    <img src="img/bg-img/7.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <a href="#" class="post-tag">Healthy</a>
                    <a href="#" class="post-title">Friend eggs with ham</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                        bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                        vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque.
                        Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean
                        scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                    <a href="#" class="btn bueno-btn">Read More</a>
                </div>
            </div>
        </div>

        <!-- Single Big Post Area -->
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <a href="#" class="post-tag">The Best</a>
                    <a href="#" class="post-title">Steak with boiled vegetables</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                        bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                        vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque.
                        Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean
                        scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                    <a href="#" class="btn bueno-btn">Read More</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="big-post-thumbnail mb-50">
                    <img src="img/bg-img/8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Big Posts Area End ##### -->

<!-- ##### Posts Area End ##### -->
<div class="bueno-post-area mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Area -->
            <div class="col-12 col-lg-8 col-xl-9">
                <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <img src="img/bg-img/9.jpg" alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="post-tag">The Best</a>
                        <a href="#" class="post-title">Friend eggs with ham</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">July 11, 2018</a>
                            <a href="#" class="post-author">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                            bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                            vitae odio. Sed auctor tellus quis arcu tempus.</p>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <img src="img/bg-img/10.jpg" alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="post-tag">The Best</a>
                        <a href="#" class="post-title">Mushrooms with pork chop</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">July 11, 2018</a>
                            <a href="#" class="post-author">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                            bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                            vitae odio. Sed auctor tellus quis arcu tempus.</p>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <img src="img/bg-img/11.jpg" alt="">
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="post-tag">The Best</a>
                        <a href="#" class="post-title">Birthday cake with chocolate</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">July 11, 2018</a>
                            <a href="#" class="post-author">By Julia Stiles</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                            bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                            vitae odio. Sed auctor tellus quis arcu tempus.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                <div class="sidebar-area">

                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget mb-30">
                        <img src="img/bg-img/add.png" alt="">
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area post-widget">

                        <!-- Single Post Area -->
                        <div class="single-post-area d-flex">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Friend eggs with ham</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">July 11, 2018</a>
                                    <a href="#" class="post-author">By Julia Stiles</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area d-flex mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/13.jpg" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Burger with fries</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">July 11, 2018</a>
                                    <a href="#" class="post-author">By Julia Stiles</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area d-flex">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/14.jpg" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Avocado &amp; Oisters</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">July 11, 2018</a>
                                    <a href="#" class="post-author">By Julia Stiles</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area d-flex">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/15.jpg" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Tortilla prawns</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">July 11, 2018</a>
                                    <a href="#" class="post-author">By Julia Stiles</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="single-post-area d-flex">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">Burger with fries</a>
                                <div class="post-meta">
                                    <a href="#" class="post-date">July 11, 2018</a>
                                    <a href="#" class="post-author">By Julia Stiles</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Posts Area End ##### -->

<!-- ##### Instagram Area Start ##### -->
<div class="instagram-feed-area d-flex flex-wrap">
    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta1.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta1.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta2.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta2.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta3.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta3.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta4.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta4.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta5.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta5.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta6.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta6.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta7.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta7.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta8.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta8.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta9.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta9.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta10.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta10.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>
</div>
<!-- ##### Instagram Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5">
                <!-- Copywrite Text -->
                <p class="copywrite-text"><a href="#">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                        template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
            <div class="col-12 col-sm-7">
                <!-- Footer Nav -->
                <div class="footer-nav">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Recipes</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection