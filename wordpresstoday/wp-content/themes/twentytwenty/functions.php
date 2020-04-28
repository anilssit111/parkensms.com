<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage parkensms
 * @since Twenty Twenty 1.0
 */
function get_setup() {
    // wp_enqueue_style( 'style-name', '/assets/css/bootstrap.min.css');    
    // wp_enqueue_style( 'style',  get_stylesheet_directory_uri(),'/assets/css/bootstrap.min.css', FALSE,array(), 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'allmain', get_template_directory_uri().'/assets/css/all.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css');
    wp_enqueue_style( 'lightcase', get_template_directory_uri().'/assets/css/lightcase.css');
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
    wp_enqueue_style( 'niceselect', get_template_directory_uri().'/assets/css/nice-select.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css');

    // wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js"');
    wp_enqueue_script( 'script-modernizr', get_template_directory_uri() . '/assets/js/modernizr-3.6.0.min.js');
    wp_enqueue_script( 'script-plugins', get_template_directory_uri() . '/assets/js/plugins.js');
    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script( 'script-waypoint', get_template_directory_uri() . '/assets/js/waypoint.js');
    wp_enqueue_script( 'script-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js');
    wp_enqueue_script( 'script-lightcase', get_template_directory_uri() . '/assets/js/lightcase.js');
    wp_enqueue_script( 'script-swiper', get_template_directory_uri() . '/assets/js/swiper.min.js');
    wp_enqueue_script( 'script-wow', get_template_directory_uri() . '/assets/js/wow.min.js');
    wp_enqueue_script( 'script-countdown', get_template_directory_uri() . '/assets/js/countdown.min.js');
    wp_enqueue_script( 'script-counterup', get_template_directory_uri() . '/assets/js/counterup.min.js');
    wp_enqueue_script( 'script-nice', get_template_directory_uri() . '/assets/js/nice-select.js');
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'get_setup' );


// menu function
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
 
 
 
 