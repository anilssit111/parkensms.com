@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">Voice Call Feature</h1>
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
                    Voice Call Feature
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

  
    <!--=================Our Service================= -->
    @include('tamplate.service.service')
    <!--=================Our Service================= -->

    <!--=================voice call Plan================= -->
    @include('tamplate.voice-call-plan.voice-call-plan')
    <!--=================voice call Plan================= -->

  <!--=================Our Offer================= -->
  @include('tamplate.what-we-offer.what-we-offer')
    <!--=================Our Offer================= -->



   @endsection