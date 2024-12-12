<?php
/**
 * Ascent functions and definitions
 *
 * @link https://github.com/Abdulkadir0007/Ascent
 *
 * @package Ascent
 * @since 1.0.0
 */


// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASCENT_THEME_VERSION', '1.0.0' );
//define( 'ASCENT_THEME_SETTINGS', 'ascent-settings' );
define( 'ASCENT_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASCENT_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


// Theme setup file 
require_once ASCENT_THEME_DIR . '/inc/theme-setup.php';

// Theme css, Js File enqueue 
require_once ASCENT_THEME_DIR . '/inc/enqueue.php';
// Theme Widgets  
require_once ASCENT_THEME_DIR . '/inc/Widgets.php';
