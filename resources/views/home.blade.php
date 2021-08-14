@extends('layouts.app')

@section('content')
<div class="menu-fixed">
    <div class="menu-abs">
        @include('layouts/partials/_header')
    </div>
</div>
<div class="push-top"></div>

<!-- ##### Posts Area End ##### -->
<div class="bueno-post-area">
    <div class="container">
        <div class="row text-center">
            <!-- Post Area -->
            <div class="col-12 col-lg-8 col-xl-9">
                <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-xs-12">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/bg-img/9.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12">
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
                    </div>
                </div>
                <hr>
                <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-xs-12">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="/img/bg-img/10.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12">
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-tag">The Best</a>
                                <a href="{{ route("receipe.show") }}" class="post-title">Mushrooms with pork chop</a>
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
                </div>
                <hr>
                 <!-- Single Blog Post -->
                <div class="single-blog-post style-1 d-flex flex-wrap mb-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-xs-12">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="/img/bg-img/11.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8 col-xs-12">
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="#" class="post-tag">The Best</a>
                                <a href="{{ route("receipe.show") }}" class="post-title">Mushrooms with pork chop</a>
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
                </div>
            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-sm-9 col-md-12 col-lg-4 col-xl-3">
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