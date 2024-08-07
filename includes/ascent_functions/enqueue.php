<?php
    /**
     *Theme enqueue functions
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;


function ascent_enqueue() {

    wp_enqueue_style( 'css-offcanvas', get_template_directory_uri() . '/assets/css/hc-offcanvas-nav.css' );
    wp_enqueue_style( 'css-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'css-all', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'css-lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css' );
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'css-menu', get_template_directory_uri() . '/assets/css/menu.css' );
    wp_enqueue_style( 'css-main', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'css-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_style( 'sytle', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'stoocky-js', get_template_directory_uri() . '/assets/js/jquery.stoocky-page.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'js-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'offcanvas-js', get_template_directory_uri() . '/assets/js/hc-offcanvas-nav.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'filter-js', get_template_directory_uri() . '/assets/js/category-filter.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'lightbox-plus-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'ascent_enqueue' );

// Google Fonts Enqueue
function ascent_add_google_fonts() {
    wp_enqueue_style( 'ascent_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'ascent_add_google_fonts' );

function custom_admin_styles() {
    // Enqueue custom stylesheet
    wp_enqueue_style( 'custom-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), wp_get_theme()->get( 'Version' ) );
}

// Hook the function to the admin_enqueue_scripts action
add_action( 'admin_enqueue_scripts', 'custom_admin_styles' );
