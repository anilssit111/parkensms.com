@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">bulk SMS services</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
            <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">Feature</a>
                </li>
                <li>
                    Bluk SMS Feature
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!--=================Our Service================= -->
    @include('tamplate.service.service')
    <!--=================Our Service================= -->

    <!--=================bluk sms plan================= -->
      @include('tamplate.bluk-sms-price.bluk-sms-price')
    <!--=================bluk sms plan================= -->

       <!--=================Our Offer================= -->
       @include('tamplate.what-we-offer.what-we-offer')
    <!--=================Our Offer================= -->


   @endsection