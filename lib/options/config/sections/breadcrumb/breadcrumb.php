<?php
/**
 * Ascent Breadcrumb Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Breadcrumb layout', 'Ascent' ),
        'id'         => 'brd-lay',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'bread-author',
                'type'     => 'text',
                'title'    => esc_html__( 'Breadcrumbs Separator', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Breadcrumbs Separator Text,ex: "/".', 'Ascent' ),
                'default'  => ' / ',

            ),
            array(
                'id'          => 'bread-text',
                'type'        => 'color',
                'title'       => esc_html__( 'Breadcrumbs Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Breadcrumbs Text Color', 'Ascent' ),
                'default'     => '#1D1E5C',
                'transparent' => false,

            ),
            array(
                'id'          => 'bread-hover',
                'type'        => 'color',
                'title'       => esc_html__( 'Breadcrumbs text Hover Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Breadcrumbs Text Hover Color', 'Ascent' ),
                'default'     => '#FF4CAA',
                'transparent' => false,

            ),
            array(
                'id'       => 'bread-font',
                'type'     => 'text',
                'title'    => esc_html__( 'Breadcrumbs text Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the font size for the breadcrumbs text. Enter value including CSS unit (px, em, rem), ex: 16px.', 'Ascent' ),
                'default'  => '16px',

            ),

        ),
    )
);
