<?php
    /**
     *Ascent All Content theme functions
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
function abweb_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( "audio", "video", "gallary", "link", "image", "chat" ) );

    register_nav_menus( array(
        'main-manu' => esc_html__( 'Main Menu', 'Ascent' ),
        'top-menu'  => esc_html__( 'Top Header Menu', 'Ascent' ),
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
    load_theme_textdomain( 'Ascent', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'abweb_setup' );

function my_theme_activation_redirect() {
    // Check if the theme is activated for the first time
    if ( get_option( 'my_theme_activation_redirect', false ) ) {
        // Clear the activation redirect option
        delete_option( 'my_theme_activation_redirect' );

        // Redirect to the desired admin page
        wp_redirect( admin_url( 'admin.php?page=ascent_menu' ) );
        exit;
    }
}
add_action( 'admin_init', 'my_theme_activation_redirect' );

// Set the activation redirect option upon theme activation
function my_theme_activation_redirect_set() {
    update_option( 'my_theme_activation_redirect', true );
}
add_action( 'after_switch_theme', 'my_theme_activation_redirect_set' );