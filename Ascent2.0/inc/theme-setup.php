<?php
/**
 * Theme Setup
 *
 * @package Ascent
 * @since 1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Set up theme defaults and register support for various WordPress features.
 */
if ( ! function_exists( 'ascent_setup' ) ) {
    function ascent_setup() {
        // Load translation files.
        load_theme_textdomain( 'ascent', ASCENT_THEME_DIR . '/languages' );


        // Add support for various features.
    add_theme_support( 'title-tag' );
    add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( "audio", "video", "gallary", "link", "image", "chat" ) );
    // Get the full-size featured image URL

        // Register navigation menus.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'ascent' ),
            'footer'  => esc_html__( 'Footer Menu', 'ascent' ),
        ) );
        function default_menu() {
            echo "<ul id='nav' class='main-menu'>";
            if ( !is_user_logged_in() ) {
                echo "<li class='current-menu-item' > <a href='" . home_url() . "'>HOME</a>";
            } else {
                echo "<li> <a href='wp-admin/nav-menus.php'>Creat Menu</a>";
            }
            ;
            echo "</ul>";
        }
        ;
        // Add support for HTML5 markup.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'widgets',
        ) );


    }
}
add_action( 'after_setup_theme', 'ascent_setup' );
