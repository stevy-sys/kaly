@extends('layouts.app')

@section('content')

<div class="menu-fixed">
    <div class="menu-abs">
        @include('layouts/partials/_header')
    </div>
</div>
<div class="push-top"></div>

<!-- ##### Catagory Area Start ##### -->
<div class="post-catagory">
    <div class="container">
        <div class="row">
            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
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
            <div class="col-12 col-sm-6 col-lg-4">
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
            <div class="col-12 col-sm-6 col-lg-4">
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

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/17.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Chicken Food</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/18.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Pizza</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/19.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Fast Food</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/20.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Burgers</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/21.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Deserts</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Post Catagory -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-post-catagory mb-30">
                    <img src="img/bg-img/22.jpg" alt="">
                    <!-- Content -->
                    <div class="catagory-content-bg">
                        <div class="catagory-content">
                            <a href="#" class="post-tag">The Best</a>
                            <a href="#" class="post-title">Soups</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pagination-area mt-70">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->
@include('layouts/partials/_footer')
@endsection