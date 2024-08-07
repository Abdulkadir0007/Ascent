<?php
/**
 * Ascent Metaboxes.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

if ( !class_exists( 'Redux_Metaboxes' ) ) {
    return;
}

Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'opt-metaboxes',
        'title'      => esc_html__( 'Slider Link', 'Ascent' ),
        'post_types' => array( 'ascent_slider' ),
        'position'   => 'advanced', // normal, advanced, side.
        'priority' => 'high',       // high, core, default, low.
        'sections' => array(

            array(
                'title'  => esc_html__( 'Link', 'Ascent' ),
                'desc'   => esc_html__( '', 'Ascent' ),
                'icon'   => 'el-icon-cog',
                'id'     => 'Custop_post_gh',
                'fields' => array(
                    array(
                        'title' => esc_html__( 'Your Slider Custom Link', 'Ascent' ),
                        'id'    => 'Custop_post_link',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
    )
);
Redux_Metaboxes::set_box(
    $opt_name,
    array(
        'id'         => 'opt-metaboxe',
        'title'      => esc_html__( 'Projet Link', 'Ascent' ),
        'post_types' => array('ascent_project' ),
        'position'   => 'advanced', // normal, advanced, side.
        'priority' => 'high',       // high, core, default, low.
        'sections' => array(

            array(
                'title'  => esc_html__( 'Link', 'Ascent' ),
                'icon'   => 'el-icon-cog',
                'id'     => 'project',
                'fields' => array(
                    array(
                        'title' => esc_html__( 'Your Project Link', 'Ascent' ),
                        'id'    => 'project_post_link',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
    )
);

