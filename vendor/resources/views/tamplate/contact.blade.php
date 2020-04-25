@extends('layouts.master')
@section('tamplate')

    <!-- =============Hero Area============= -->
    <section class="hero-area bg_img" data-background="assets/images/page-header.jpg">
        <div class="container">
            <h1 class="title m-0">Contact Us</h1>
        </div>
    </section>
    <div class="breadcrumb-section">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
    <!-- =============Hero Area============= -->

    <!--=================Account Section================= -->
    <section class="account-section padding-top padding-bottom bg_img bg_bottom_center bg_contain"
        data-background="assets/images/contact/contact-bg.png">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-area">
                    <h3 class="account-title">send us a message</h3>
                    <form class="contact-form" id="contact_form_submit">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=================Account Section================= -->
    
    <!--=================Contact Info Section================= -->
    <section class="office-info padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">
                    office contact info
                </h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <!-- <img src="./assets/images/contact/destination.png" alt="contact"> -->
                            <i class="flaticon-route"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="title">office address</h4>
                            <ul>
                                <li> Sunny Mart 212-213 2nd Floor</li>
                                <li>Mansarovar, New Aatish Market</li>
                                <li>Jaipur 302020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <!-- <img src="./assets/images/contact/call.png" alt="contact"> -->
                            <i class="flaticon-call-center"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="title">mobile number</h4>
                            <ul>
                                <li><a href="Tel:7891378913">+91 78913 78913</a></li>
                                <br>
                                <br>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-10 col-lg-4">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <!-- <img src="./assets/images/contact/worldwide.png" alt="contact"> -->
                            <i class="flaticon-global"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="title">email address</h4>
                            <ul>
                                <li>
                                    <a href="Mailto:info@par-ken.com">info@par-ken.com</a>
                                </li>
                             <br>
                             <br>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================Contact Info Section================= -->

    <!--=================Maps Section================= -->
    <!-- <div class="maps"></div> -->
    <iframe class="mapss embed-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.761002315109!2d75.75667791468848!3d26.879333383141972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db6973c82b07d%3A0x935933f65ad4c53b!2sParken%20Solution%20PVT.%20LTD%20-%20Bulk%20SMS%20Reseller%20Jaipur%20%7C%20Bulk%20SMS%20Company%20%7C%20Bulk%20SMS%20Services%20Provider%20Company%20Jaipur!5e0!3m2!1sen!2sin!4v1587570502543!5m2!1sen!2sin" width="1530" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!--=================Maps Section================= -->

    <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script> -->
@endsection