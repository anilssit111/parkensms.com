@extends('layouts.master')
@section('tamplate')

    <!-- =============Banner Section============= -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-content  wow fadeInUp" data-wow-delay=".3s">
                <span class="category">
                    Build a better customer experience
                </span>
                <h1 class="title">reach more customers with faster, more reliable SMS messaging</h1>
                <div class="video-button-group">
                    <a href="#0" class="custom-button active">request demo</a>
                    <div class="v-button">
                        <!-- <span>watch video</span> -->
                        <a data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video-button"><i class="flaticon-play-button"></i></a>
                    </div>
                </div>
                <div class="round-shape">
                </div>
            </div>
        </div>
        <div class="maps-shape bg_img bg-contain" data-background="assets/images/banner/banner-bg01.png"></div>
        <div class="shape-thumb">
            <img class="wow slideInUp" data-wow-delay=".7s" src="assets/images/banner/banner-shape01.png" alt="banner">
        </div>
    </section>
    <!-- =============Banner Section============= -->

    <!--=================Sponsor Section================= -->
    @include('tamplate.sponsor.sponsers')
    <!--=================Sponsor Section================= -->
    
    <!--=================Chooose Us================= -->
    <section class="choose-us-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <span class="cate">our feature</span>
                <h2 class="title">why choose us</h2>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-thumb">
                            <i class="flaticon-global"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">Global reach and local presence</h5>
                            <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                            eget sempertatio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-thumb">
                            <i class="flaticon-ui"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">customer user experience</h5>
                            <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                            eget sempertatio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="choose-item text-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-thumb">
                            <i class="flaticon-clock"></i>
                        </div>
                        <div class="choose-content">
                            <h5 class="title">fast & Flexible solutions</h5>
                            <p>Amet mus venenatis diccauctor amet amet eget seeacit over
                            eget sempertatio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="bb-dashed"></div>
    </div>
    <!--=================Chooose Us================= -->

    <!--=================Bulk Sms================= -->
    @include('tamplate.global-bulk.global-bluk')
    <!--=================Bulk Sms================= -->
    
    <!--=================Our Service================= -->
    @include('tamplate.service.service')
    <!--=================Our Service================= -->

    <!--=================Our Offer================= -->
    @include('tamplate.what-we-offer.what-we-offer')
    <!--=================Our Offer================= -->

    <!--=================Client Say================= -->
    @include('tamplate.our-client.client-say')
    <!--=================Client Say================= -->

    <!--=================Counter================= -->
    <section class="counter-up-section">
        <div class="container">
            <div class="counter-wrapper">
                <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-header">
                        <i class="flaticon-call-center"></i>
                        <h2 class="title">
                            <span class="counter">1000</span>+
                        </h2>
                    </div>
                    <p>Support Countries</p>
                </div>
                <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-header">
                        <i class="flaticon-happiness"></i>
                        <h2 class="title">
                            <span class="counter">35</span>k
                        </h2>
                    </div>
                    <p>happy customers</p>
                </div>
                <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-header">
                        <i class="flaticon-project"></i>
                        <h2 class="title">
                            <span class="counter">230</span>
                        </h2>
                    </div>
                    <p>total project done</p>
                </div>
                <div class="counter-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="counter-header">
                        <i class="flaticon-collaboration"></i>
                        <h2 class="title">
                            <span class="counter">658</span>
                        </h2>
                    </div>
                    <p>team members</p>
                </div>
            </div>
        </div>
    </section>
    <!--=================Counter================= -->

    <!--=================Request demo================= -->
                @include('tamplate.request-demo.request-demo')
    <!--=================Request Demo================= -->    

    <!--=================Sponsor Section================= -->
    <section class="blog-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <span class="cate">our blog post</span>
                <h2 class="title">the latest post & tips</h2>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="blog.html">
                                    <img src="assets/images/blog/blog01.jpg" alt="blog">
                                </a>
                                <div class="post-date">
                                    <span>22</span>
                                    <span>dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h4 class="title">
                                    <a href="blog.html">Business ipsum dolor cursus amet.</a>
                                </h4>
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">read More <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="blog.html">
                                    <img src="assets/images/blog/blog02.jpg" alt="blog">
                                </a>
                                <div class="post-date">
                                    <span>28</span>
                                    <span>dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h4 class="title">
                                    <a href="blog.html">Ectus aliquet nunc est massa nunc placerat</a>
                                </h4>
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">Read More <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="blog.html">
                                    <img src="assets/images/blog/blog03.jpg" alt="blog">
                                </a>
                                <div class="post-date">
                                    <span>31</span>
                                    <span>dec</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <h4 class="title">
                                    <a href="blog.html">Condimentum magni velit mperdiet</a>
                                </h4>
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">Read More <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Sponsor Section================= -->

@endsection