<?php
/**
 * Ascent Hover Cover Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access
defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Hover Cover', 'Ascent' ),
        'id'         => 'hover_cover',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'phover-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab is only for media hover cover options. This hover cover is for all websites.', 'Ascent' ) ),
            ),
            array(
                'id'          => 'hovercover_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Hover Cover Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Hover Cover Background Color.', 'Ascent' ),
                'default'     => '#ff4caa',
                'transparent' => false,

            ),
            array(
                'id'       => 'hovercover_opacity',
                'type'     => 'text',
                'title'    => esc_html__( 'Hover Cover Opacity', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Hover Cover Opacity,which is between 0 and 1 Ex: 0.85.', 'Ascent' ),
                'default'  => '0.85',

            ),
            array(
                'id'       => 'hovercover_transition',
                'type'     => 'text',
                'title'    => esc_html__( 'Hover Cover Time', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Hover Cover Opacity। Here 1 is 1 second, ex: 0.3.', 'Ascent' ),
                'default'  => '0.3',

            ),
            array(
                'id'       => 'hovercover_button_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Hover Icon Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the Icon size. Enter value including CSS unit (px, em, rem), ex: 16px.', 'Ascent' ),
                'default'  => '16px',

            ),
            array(
                'id'       => 'Hover_title_sixe',
                'type'     => 'text',
                'title'    => esc_html__( 'Hover Cover Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the Font size. Enter value including CSS unit (px, em, rem), ex:24px.', 'Ascent' ),
                'default'  => '24px',

            ),
            array(
                'id'       => 'Hover_title_wide',
                'type'     => 'text',
                'title'    => esc_html__( 'Hover Cover Font Weight', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the Font Weight. Enter value including 100 to 900, ex:600.', 'Ascent' ),
                'default'  => '600',

            ),
            array(
                'id'          => 'Hover_title_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Controls the Font Color.', 'Ascent' ),
                'default'     => '#1D1E5c',
                'transparent' => false,

            ),

        ),
    )
);
