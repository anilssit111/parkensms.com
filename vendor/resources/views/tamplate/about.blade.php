@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">about </h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    About
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!--=================Bulk Sms================= -->
    @include('tamplate.global-bulk.global-bluk')
    <!--=================Bulk Sms================= -->

   <!--=================Request demo================= -->
   @include('tamplate.request-demo.request-demo')
    <!--=================Request Demo================= -->   

    <!--=================Our Service================= -->
    <section class="service-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header">
                <span class="cate">sms type</span>
                <h2 class="title">Types of SMS You Can Send</h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item text-center">
                        <div class="service-thumb">
                            <i class="flaticon-megaphone"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">promotional SMS</h4>
                            <p>Amet mus venenatis dictucator amet, amet amet egetsem team and group</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item text-center">
                        <div class="service-thumb">
                            <i class="flaticon-bell"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">SMS Notification</h4>
                            <p>Amet mus venenatis dictucator amet, amet amet egetsem team and group</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item text-center">
                        <div class="service-thumb">
                            <i class="flaticon-clock"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="title">SMS alert</h4>
                            <p>Amet mus venenatis dictucator amet, amet amet egetsem team and group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Our Service================= -->

    <!--=================Our Offer================= -->
    @include('tamplate.what-we-offer.what-we-offer')
    <!--=================Our Offer================= -->

    <!--=================Client Say================= -->
    @include('tamplate.our-client.client-say')
     <!--=================Client Say================= -->

    <!--=================Sponsor Section================= -->
    @include('tamplate.sponsor.sponsers')
    <!--=================Sponsor Section================= -->

    <!--=================Sponsor Section================= -->
    <section class="blog-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header">
                <span class="cate">our blog post</span>
                <h2 class="title">the latest post & tips</h2>
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="post-item">
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
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae
                                    consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">read More <i
                                        class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-item">
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
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae
                                    consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">read More <i
                                        class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-item">
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
                                <p>pede augue peltesqvolpegesed sed. Et neque rhonctritiqultieam nunc, vitae
                                    consectetueMauorbi aenean non maecenas</p>
                                <a class="read-more" href="blog-details.html">read More <i
                                        class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Sponsor Section================= -->

    @endsection