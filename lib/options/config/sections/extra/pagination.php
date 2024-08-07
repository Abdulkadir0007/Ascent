<?php
/**
 * Ascent Pagination Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Pagination', 'Ascent' ),
        'id'         => 'pagination',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'pagination-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab Only For Pagination options.This Pagination  is all website main Pagination,that showing blog,project,archive etc.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'pagination-font',
                'type'     => 'text',
                'title'    => esc_html__( 'Pagination Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Control the Pagination Font Size.Enter value including CSS unit (px, em, rem), ex: 16px .', 'Ascent' ),
                'default'  => '16px',

            ),
            array(
                'id'          => 'pagination-text',
                'type'        => 'color',
                'title'       => esc_html__( 'Pagination Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the Pagination Font Color.', 'Ascent' ),
                'default'     => '#1D1E5c',
                'transparent' => false,

            ),
            array(
                'id'          => 'pagination-active-color',
                'type'        => 'color',
                'title'       => esc_html__( 'Pagination Active & Hover Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the Pagination Active Hover Font Color.', 'Ascent' ),
                'default'     => '#FFf',
                'transparent' => false,
            ),
            array(
                'id'          => 'pagination-active-hover',
                'type'        => 'color',
                'title'       => esc_html__( 'Pagination Active & Hover Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the Pagination Active Hover Background Color.', 'Ascent' ),
                'default'     => '#FF4CAA',
                'transparent' => false,
            ),

        ),
    )
);
