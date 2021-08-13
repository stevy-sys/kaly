@extends('layouts.app')

@section('content')

@include('layouts/partials/_header')
<div class="mb-5"></div>
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
                        <a href="{{ route("post.show") }}" class="post-title">Friend eggs with ham</a>
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
@include('layouts/partials/_footer')
@endsection