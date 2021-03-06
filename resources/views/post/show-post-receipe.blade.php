@extends('layouts.app')

@section('content')
<div class="menu-fixed">
    <div class="menu-abs">
        @include('layouts/partials/_header')
    </div>
</div>
<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-4 col-xl-5">
                <div class="post-details-content mb-100">
                    <div class="blog-thumbnail mb-50">
                        <img src="img/bg-img/24.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <a href="#" class="post-tag">Healthy Food</a>
                        <h4 class="post-title">Friend eggs with ham</h4>
                        <div class="post-meta mb-50">
                            <a href="#" class="post-date">July 11, 2018</a>
                            <a href="#" class="post-author">By Julia Stiles</a>
                        </div>

                        <div id="accordion">
                            <div class="card text-center mb-3">
                              <div class="card-header" id="headingOne">
                                  <h5 class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Step 1
                                  </h5>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
                            </div>


                            <div class="card text-center mb-3">
                              <div class="card-header" id="headingTwo">
                                  <h5 class="btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Step 2
                                  </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo
                                        id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed,
                                        commodo vitae odio. Sed auctor tellus quis arcu tempus. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Etiam ac tincidunt nunc. Cras sed mollis erat. Quisque risus
                                        lorem, mattis nec nisl a, efficitur faucibus ligula. Nulla facilisi. Integer sodales, metus
                                        nec finibus lobortis, ex justo pharetra quam, vel vehicula urna turpis ut risus. Sed
                                        dignissim erat sapien, non malesuada justo cursus nec. Nunc porta pulvinar varius.
                                   
                                </div>
                              </div>
                            </div>


                            <div class="card text-center mb-3">
                              <div class="card-header" id="headingThree">
                                
                                  <h5 class="btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> Step 3
                                  </h5>
                               
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                   
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo
                                        id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed,
                                        commodo vitae odio. Sed auctor tellus quis arcu tempus. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Etiam ac tincidunt nunc. Cras sed mollis erat. Quisque risus
                                        lorem, mattis nec nisl a, efficitur faucibus ligula. Nulla facilisi. Integer sodales, metus
                                        nec finibus lobortis, ex justo pharetra quam, vel vehicula urna turpis ut risus. Sed
                                        dignissim erat sapien, non malesuada justo cursus nec. Nunc porta pulvinar varius.
                                   
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <!-- Info -->
                <div class="recipe-info">
                    <h5>Info</h5>
                    <ul class="info-data">
                        <li><img src="img/core-img/eye.png" alt=""> <span>1,577 Views</span></li>
                        <li><img src="img/core-img/alarm-clock.png" alt=""> <span>30 min</span></li>
                        <li><img src="img/core-img/tray.png" alt=""> <span>Serves 4</span></li>
                        <li><img src="img/core-img/sandwich.png" alt=""> <span>Easy</span></li>
                        <li><img src="img/core-img/compass.png" alt=""> <span>200F</span></li>
                    </ul>
                </div>

                <!-- Ingredients -->
                <div class="ingredients">
                    <h5>Ingredients</h5>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">4 Tbsp (57 gr) butter</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">2 large eggs</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">2 yogurt containers granulated
                            sugar</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">1 vanilla or plain yogurt, 170g
                            container</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">2 yogurt containers unbleached white
                            flour</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">1.5 yogurt containers milk</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">1/4 tsp cinnamon</label>
                    </div>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label" for="customCheck8">1 cup fresh blueberries </label>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                <div class="sidebar-area">

                    <!-- Single Widget Area -->
                    <div class="single-widget-area author-widget mb-30">
                        <div class="background-pattern bg-img"
                            style="background-image: url(img/core-img/pattern2.png);">
                            <div class="author-thumbnail">
                                <img src="img/bg-img/23.jpg" alt="">
                            </div>
                            <p>My name is <span>Jessica Smith</span>, I???m a passionate cook with a love for vegan food.
                            </p>
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
                    <div class="single-widget-area post-widget mb-30">
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
                        <div class="single-post-area d-flex">
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
<!-- ##### Post Details Area End ##### -->
@include('layouts.partials._footer')
@endsection