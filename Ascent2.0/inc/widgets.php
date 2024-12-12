<?php
/**
 * Theme Widgets
 *
 * @package Ascent
 * @since 1.0.0
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
function ascent_widgets() {

    // Sidebar Widget Area
    register_sidebar( array(
        "name"          => __( "Sidebar", "ascent" ),
        "id"            => "sidebar",
        "before_widget" => "<article class='sidebar my-4'>",
        "after_widget"  => "</article>",
    ) );

    // Footer Widget One
    register_sidebar( array(
        "name"          => __( "Footer Widgets One", "ascent" ),
        "id"            => "widgets-one",
        "before_widget" => "<article class='footer-widgets'>",
        "after_widget"  => "</article>",
    ) );

    // Footer Widget Two
    register_sidebar( array(
        "name"          => __( "Footer Widgets Two", "ascent" ),
        "id"            => "widgets-two",
        "before_widget" => "<article class='footer-widgets'>",
        "after_widget"  => "</article>",
    ) );

    // Footer Widget Three
    register_sidebar( array(
        "name"          => __( "Footer Widgets Three", "ascent" ),
        "id"            => "widgets-three",
        "before_widget" => "<article class='footer-widgets'>",
        "after_widget"  => "</article>",
    ) );

    // Footer Widget Four
    register_sidebar( array(
        "name"          => __( "Footer Widgets Four", "ascent" ),
        "id"            => "widgets-four",
        "before_widget" => "<article class='footer-widgets'>",
        "after_widget"  => "</article>",
    ) );

}
add_action( "widgets_init", "ascent_widgets" );
