<?php
    /**
     * Slider Post Type.
     *
     *  @package Ascent
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;

add_action( 'after_setup_theme', 'ascent_slider' );
function ascent_slider() {
    register_post_type( "ascent_slider", array(
        "public"       => true,
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'show_ui'      => true,
        'show_in_menu' => false,
        'labels'       => array(
            'name'                  => esc_html__( 'Slider', 'Ascent' ),
            'singular_name'         => esc_html__( 'Slider', 'Ascent' ),
            'add_new'               => esc_html__( 'Add New Slider', 'Ascent' ),
            'add_new_item'          => esc_html__( 'Add New Slider', 'Ascent' ),
            'all_items'             => esc_html__( 'All Sliders', 'Ascent' ),
            'edit_item'             => esc_html__( 'Edit Slider', 'Ascent' ),
            'new_item'              => esc_html__( 'New Slider', 'Ascent' ),
            'view_item'             => esc_html__( 'View Slider', 'Ascent' ),
            'view_posts'            => esc_html__( 'View Sliders', 'Ascent' ),
            'search_items'          => esc_html__( 'Search Slider', 'Ascent' ),
            'not_found'             => esc_html__( 'Not Found Slider', 'Ascent' ),
            'not_found_in_trash'    => esc_html__( 'Not Found Slider In Trash', 'Ascent' ),
            'insert_into_item'      => esc_html__( 'Inset Into Slider', 'Ascent' ),
            'uploaded_to_this_item' => esc_html__( 'Uploaded Slider', 'Ascent' ),
            'featured_image'        => esc_html__( 'Slider Image', 'Ascent' ),
            'set_featured_image'    => esc_html__( 'Set Slider image', 'Ascent' ),
            'remove_featured_image' => esc_html__( 'Remove Slider Image', 'Ascent' ),
            'use_featured_image'    => esc_html__( 'Use Slider Image', 'Ascent' ),
            'items_list'            => esc_html__( 'Items Slider', 'Ascent' ),
            'publish_posts'         => esc_html__( 'Published Slider', 'Ascent' ),
            'item_trashed'          => esc_html__( 'Slider Trashed', 'Ascent' ),
            'item_updated'          => esc_html__( 'Slider Updated', 'Ascent' ),
            'item_link'             => esc_html__( 'Slider Link', 'Ascent' ),
            'item_link_description' => esc_html__( 'Slider Link Description', 'Ascent' ),
        ),
    ) );
}