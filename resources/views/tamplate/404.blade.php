@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">page not found</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    404
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!--=================404 Section================= -->
    <section class="four-0-four-section padding-top padding-bottom">
        <div class="container">
            <div class="four-0-wrapper">
                <div class="four-0-thumb wow bounceInDown" data-wow-duration="1s" data-wow-delay=".3s">
                    <img src="assets/images/404.png" alt="404">
                </div>
                <div class="four-0-content">
                    <h2 class="title">oops! this page not found</h2>
                    <p>maecenas amet mollis, tincidunt vestibulum suscipit nostra, ac gravida a nndum. Aquam id blandit
                    sapien sollicitudinultrices pulvinar, magna tependisse convallis aenean, amet et <a href="index.html"> back to home </a> </p>
                </div>
                <form class="four-0-search">
                    <input type="text" placeholder="Type Keyword">
                    <button type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--=================404 Section================= -->

    @endsection