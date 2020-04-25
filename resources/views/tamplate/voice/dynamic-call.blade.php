@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">Promotion Call</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
            <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">Voice Call</a>
                </li>
                <li>
                    Promotion Call
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

   
       <!--=================Price Plan================= -->
       @include('tamplate.voice.sidebar.sidebar')
    <!--=================Price Plan================= -->

    @endsection