<?php
    /**
     *Ascent project Post Type
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
add_action( "after_setup_theme", "project_post_type" );
function project_post_type() {

    register_post_type( "ascent_project", array(
        "public"        => true,
        'menu_position' => 6,
        'menu_icon'     => 'dashicons-database-add',
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'labels'        => array(
            'name'                  => esc_html__( 'Projects', 'Ascent' ),
            'singular_name'         => esc_html__( 'Project', 'Ascent' ),
            'menu_name'             => esc_html__( 'Projects', 'Ascent' ),
            'name_admin_bar'        => esc_html__( 'Projects', 'Ascent' ),
            'add_new'               => esc_html__( 'Add New', 'Ascent' ),
            'add_new_item'          => esc_html__( 'Add New Project', 'Ascent' ),
            'edit_item'             => esc_html__( 'Edit Project', 'Ascent' ),
            'view_posts'            => esc_html__( 'View Project', 'Ascent' ),
            'featured_image'        => esc_html__( 'Project Image', 'Ascent' ),
            'set_featured_image'    => esc_html__( 'Set Project image', 'Ascent' ),
            'remove_featured_image' => esc_html__( 'Remove Project Image', 'Ascent' ),
            'use_featured_image'    => esc_html__( 'Use Project Image', 'Ascent' ),
            'items_list'            => esc_html__( 'Items Project', 'Ascent' ),
            'publish_posts'         => esc_html__( 'Published Project', 'Ascent' ),
            'item_trashed'          => esc_html__( 'Project Trashed', 'Ascent' ),
            'item_updated'          => esc_html__( 'Project Updated', 'Ascent' ),
            'item_link'             => esc_html__( 'Project Link', 'Ascent' ),
            'item_link_description' => esc_html__( 'Project Link Description', 'Ascent' ),
            'new_item'              => esc_html__( 'New Project', 'Ascent' ),
            'view_item'             => esc_html__( 'View Project', 'Ascent' ),
            'search_items'          => esc_html__( 'Search Projects', 'Ascent' ),
            'not_found'             => esc_html__( 'No Projects found', 'Ascent' ),
            'not_found_in_trash'    => esc_html__( 'No Projects found in trash', 'Ascent' ),
            'all_items'             => esc_html__( 'All Projects', 'Ascent' ),
            'parent_item'           => esc_html__( 'Parent Project', 'Ascent' ),
            'parent_item_colon'     => esc_html__( 'Parent Project', 'Ascent' ),
        ),
    ) );

    register_taxonomy( 'port-cat', 'ascent_project', array(
        'hierarchical' => true,
        'labels'       => array(
            'name'          => esc_html__( 'Project Type', 'mytheme' ),
            'add_new'       => esc_html__( 'Add New Project Type', 'mytheme' ),
            'add_new_item'  => esc_html__( 'Add New Project Type', 'mytheme' ),
            'all_items'     => esc_html__( 'All Project Type', 'mytheme' ),
            'edit_item'     => esc_html__( 'Edit Project Type', 'mytheme' ),
            'not_found'     => esc_html__( 'Not found Projects Type', 'Ascent' ),
            'new_item'      => esc_html__( 'New Project Type', 'mytheme' ),
            'back_to_items' => esc_html__( 'Go To Project Type', 'mytheme' ),
            'popular_items' => esc_html__( 'Popular Project Type', 'mytheme' ),
        ),

    ) );
}

?>