<?php
    /**
     *Ascent Theme widgets functions
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
function ascent_widgets() {

    register_sidebar( array(
        "name"          => __( "Sidebare", "Abweb" ),
        "id"            => "sidebar",
        "before_widget" => "<article class='sidebar my-4'>",
        "after_widget"  => "</article>",
    ) );
    register_sidebar( array(
        "name"          => __( "Fotter Widgets One", "Abweb" ),
        "id"            => "widgets-one",
        "before_widget" => "<article class='footer-wigets'>",
        "after_widget"  => "</article>",

    ) );
    register_sidebar( array(
        "name"          => __( "Fotter Widgets Two", "Abweb" ),
        "id"            => "widgets-two",
        "before_widget" => "<article class='footer-wigets'>",
        "after_widget"  => "</article>",

    ) );
    register_sidebar( array(
        "name"          => __( "Fotter Widgets Three", "Abweb" ),
        "id"            => "widgets-three",
        "before_widget" => "<article class='footer-wigets'>",
        "after_widget"  => "</article>",

    ) );
    register_sidebar( array(
        "name"          => __( "Fotter Widgets Four", "Abweb" ),
        "id"            => "widgets-four",
        "before_widget" => "<article class='footer-wigets'>",
        "after_widget"  => "</article>",

    ) );

}
add_action( "widgets_init", "ascent_widgets" );