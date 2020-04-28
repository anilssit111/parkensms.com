<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>


	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <title><?php bloginfo('title');?></title>


</head>
<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ajax-loader.png" alt="Parken Solution Pvt. Ltd. - Bulk SMS And Voice Call Reseller.">
        </div>
    </div>
    <!-- ==========Preloader========== -->
    <!-- ==========scrolltotop========== -->
    <a href="#0" class="scrollToTop">
      <i class="fas fa-arrow-up" style="background-color:green;padding:13px"></i>
    </a>

    <!-- ==========scrolltotop========== -->
    <style>
#sidebar{
    position: fixed;
    right: 0px;
    z-index: 99999; 
    margin:250px 0px 0px 0px;
}
#sidebar a{
    position: relative;
}
#sidebar li{
    background-color:#409652;
    padding:10px 55px 10px 15px;
    border-bottom:1px solid #fff;
    transition: all 0.25s ease-in-out;
    transform:translate(40px);
}
#sidebar li:nth-child(1):hover{
    transform:translatex(0px);
}
#sidebar li:nth-child(2):hover{
    transform:translatex(0px);
}
</style>
<!-- right side social media  -->
<ul id="sidebar">
<li ><a href="https://api.whatsapp.com/send?phone=917891378913&amp;text=" target="_blank">                            
        <i class="fab fa-whatsapp" style="color:#fff"></i></a>
</li>
    <li><a href="/contactus" target="_blank">
        <i class="fa fa-phone li2" style="color:#fff"></i></a>
    </li>
</ul>
<!-- right side social media  -->
    <!-- ==========Header Section========== -->
    <header>
        <div class="header-top d-none d-md-block bg-theme">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="row">
                        <div class="col-md-8">
                            <ul>
                                <li class="mr-3">
                                    <a href="Tel:7891378913"><i class="fas fa-phone-square"></i>+91 7891378913</a>
                                </li>
                                <li>
                                    <a href="Mailto:info@par-ken.com"><i class="fas fa-envelope"></i>info@par-ken.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 d-flex flex-wrap align-items-center justify-content-end">
                            <ul class="social">
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=917891378913&amp;text=" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
		
	
            <div class="container">
			
                <div class="header-area" >
				
			
                    <div class="logo">
                        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/logo01.png" alt="logo"></a>
                    </div>
					
					
                    <!-- <ul class="menu"> -->
					 
						
						 <?php 
						 wp_nav_menu(array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'items_wrap'      => '<ul id="" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    ));?>


<style>


@media screen and (min-width: 991px) {
    .sub-menu{
   display:none;
}
li:hover .sub-menu{
    display: block;
    position: absolute;
    z-index: 9;
     background: #ffffff;
    -webkit-border-radius: 0 15px 0 15px;
    -moz-border-radius: 0 15px 0 15px;
    border-radius: 0 15px 0 15px;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    /* padding: 5px; */
    min-width: 220px;
    padding: 12px 0;
    border-top: 5px solid #409652;
   border-bottom: 5px solid #409652;
    /* opacity: 0; */
     /* visibility: hidden; */
    -webkit-transform: translateY(-10px);
   -ms-transform: translateY(-10px);
    transform: translateY(-10px);
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s; */
}
.sub-menu li{
    height:33px
}
}
</style>
                    <!-- <li> -->
                            <!-- <a href="/">Home</a> -->
                        <!-- </li> -->

                    <!-- <li> -->
                            <!-- <a href="/about">About</a> -->
                        <!-- </li> -->
                       
                        <!-- <li> -->
                            <!-- <a href="#0">bulk SMS</a> -->
                            <!-- <ul class="submenu"> -->
                                <!-- <li> -->
                                    <!-- <a href="">Transaction SMS</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('promitional-sms')}}">Promotional SMS</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('otp-sms')}}">OTP SMS</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('promo-sender')}}">Promo Sender id</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('message-api')}}">API</a> -->
                                <!-- </li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                        <!-- <li> -->
                            <!-- <a href="#0">Voice call</a> -->
                            <!-- <ul class="submenu"> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('promotion-call')}}">Promotion Call</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="{{route('dynamic-call')}}">Dynamic Call</a> -->
                                <!-- </li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                        <!-- <li> -->
                            <!-- <a href="/Price-Plan-Bulk-SMS-Voice-Call">Price Plan</a> -->
                        <!-- </li> -->
                        <!-- <li style="display:none"> -->
                            <!-- <a href="#0">service</a> -->
                            <!-- <ul class="submenu"> -->
                                <!-- <li> -->
                                    <!-- <a href="service.html">Services</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="reseller.html">Reseller</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="country-coverage.html">Country Coverage</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="email-service.html">Email Service</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="service-promotion.html">Service Promotion</a> -->
                                <!-- </li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                       
                        <!-- <li> -->
                            <!-- <a href="#0">Feature</a> -->
                            <!-- <ul class="submenu"> -->
                                <!-- <li> -->
                                    <!-- <a href="/bluk-sms-feature">SMS Feature </a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="/voice-call-feature">Voice Call Feature</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="/case">Case</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="/blog">Blog</a> -->
                                <!-- </li> -->
                                <!-- <li> -->
                                    <!-- <a href="/Faq">Faq</a> -->
                                <!-- </li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                        <!-- <li> -->
                            <!-- <a href="/contactus">contact</a> -->
                        <!-- </li>--> 
                    <!-- </ul> -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                 
                    <div class="d-flex select-career justify-content-end">
                    
                        <!-- <a href="http://sms.par-ken.com/login" class="search-bar"> -->
                        <a href="http://sms.par-ken.com/login" class="" style=padding:10px;>
                        <button class="btn btn-success" style="padding: 0px 15px 0px 15px;height:35px">Login
                            <i class="fa fa-user"></i>
                        </button>    
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="search-form-area">
        <span class="hide-form">
            <i class="fas fa-times"></i>
        </span>
        <form class="search-form">
            <input type="text" placeholder="Search Here">
            <button type="submit"><i class="flaticon-login"></i></button>
        </form>
    </div>
    <!-- ==========Header Section========== -->

