@extends('welcome')

@section('content')
<div>
    <div class="menu-fixed">
        <div class="menu-abs">
            @include('layouts.partials._index_header')
        </div>
    </div>
    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="contact-content mb-100">
                        <h4 class="mb-50">We love seeing your feedback</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                            bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                            vitae odio. Sed auctor tellus quis arcu tempus. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Etiam ac tincidunt nunc. Cras sed mollis erat.</p>

                        <div class="row align-items-center mt-30 mb-50">
                            <div class="col-12 col-lg-4">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="icon mr-15">
                                        <img src="img/core-img/placeholder.png" alt="">
                                    </div>
                                    <p>1481 Creekside Lane Avila Beach, CA 931</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="icon mr-15">
                                        <img src="img/core-img/smartphone.png" alt="">
                                    </div>
                                    <p>+53 345 7953 32453</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex align-items-center">
                                    <div class="icon mr-15">
                                        <img src="img/core-img/message.png" alt="">
                                    </div>
                                    <p>yourmail@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <!-- ##### Google Maps ##### -->
                                <div class="map-area">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-70">
                            <h4 class="mb-50">Get In Touch</h4>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn bueno-btn mt-30" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                    <div class="sidebar-area">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area author-widget mb-30">
                            <div class="background-pattern bg-img"
                                style="background-image: url(img/core-img/pattern2.png);">
                                <div class="author-thumbnail">
                                    <img src="img/bg-img/23.jpg" alt="">
                                </div>
                                <p>My name is <span>Jessica Smith</span>, I???m a passionate cook with a love for vegan
                                    food.</p>
                            </div>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        {{-- <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget mb-30">
                            <img src="img/bg-img/add.png" alt="">
                        </div> --}}

                        <!-- Single Widget Area -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h6>Subscribe to newsletter</h6>
                            <form action="#" method="post">
                                <input type="search" name="widget-search" id="widgetSearch" placeholder="E-mail">
                                <button type="submit" class="btn bueno-btn w-100">Subscribe</button>
                            </form>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.partials._footer')
    <!-- ##### Footer Area End ##### -->
</div>
@endsection