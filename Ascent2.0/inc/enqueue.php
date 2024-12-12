<?php
/**
 * Enqueue theme styles and scripts
 *
 * @package Ascent
 * @since 1.0.0
 */

// Ensure the script is not accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue styles and scripts for Ascent theme
 */
function ascent_enqueue_assets() {
	// Enqueue Google Fonts (Example: Open Sans)
	wp_enqueue_style( 'ascent-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap', false );

	// Enqueue main stylesheet (style.css)
	wp_enqueue_style( 'ascent-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );

	// Enqueue custom CSS (custom.css)
    
	wp_enqueue_style( 'ascent-all-css', ASCENT_THEME_URI . 'assets/css/all.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-bootstrap-css', ASCENT_THEME_URI . 'assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-lightbox-css', ASCENT_THEME_URI . 'assets/css/lightbox.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-menu-css', ASCENT_THEME_URI . 'assets/css/menu.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-style-css', ASCENT_THEME_URI . 'assets/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-responsive-css', ASCENT_THEME_URI . 'assets/css/responsive.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'ascent-main-css', ASCENT_THEME_URI . 'assets/css/main.css', array(), '1.0.0', 'all' );
 
	// Enqueue jQuery (WordPress provides it by default)
	wp_enqueue_script( 'jquery' );

	// Enqueue custom JavaScript (custom.js)
	wp_enqueue_script( 'ascent-custom-js', ASCENT_THEME_URI . 'assets/js/custom.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'ascent-bootstrap-js', ASCENT_THEME_URI . 'assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'ascent-lightbox-js', ASCENT_THEME_URI . 'assets/js/lightbox.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'ascent-lightbox-plus', ASCENT_THEME_URI . 'assets/js/lightbox-plus-jquery.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'ascent-custom-js', ASCENT_THEME_URI . 'assets/js/custom.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'ascent_enqueue_assets' );
