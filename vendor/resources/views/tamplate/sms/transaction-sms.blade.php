@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">Transaction SMS</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#">Bulk SMS</a>
                </li>
                <li>
                    Transaction SMS
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->
     
    
    <!-- =============Price Area============= -->
    @include('tamplate.sms.sidebar.sidebar')
    <!-- =============Price Area============= -->

   
@endsection