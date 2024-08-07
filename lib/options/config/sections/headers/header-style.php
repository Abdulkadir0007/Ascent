<?php
/**
 * Ascent Header Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Header Style', 'Ascent' ),
        'id'         => 'headr-style',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'          => 'headerr_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Header background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Manage Header Background Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#fff',
            ),
            array(
                'id'            => 'header_padding',
                'type'          => 'slider',
                'title'         => esc_html__( 'Header Padding', 'Ascent' ),
                'subtitle'      => esc_html__( 'Manage Header Top/Bottom Padding in pixel.', 'Ascent' ),
                'transparent'   => false,
                'default'       => '15',
                "step"          => 0,
                "max"           => 50,
                'display_value' => 'text',
            ),

        ),

    ),
);
