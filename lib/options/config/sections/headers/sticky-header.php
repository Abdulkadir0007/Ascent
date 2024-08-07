<?php
/**
 * Ascent sticky Header Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Sticky Header', 'Ascent' ),
        'id'         => 'headr-sticky',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'sti_headerr',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sticky Header', 'Ascent' ),
                'subtitle' => esc_html__( 'If you switch on/off here, the header top will show/off on your website.', 'Ascent' ),
                'default'  => false,
            ),
            array(
                'id'          => 'sti_headerr_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Sticky Header background', 'Ascent' ),
                'subtitle'    => esc_html__( 'Manage Sticky Header Background Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#fff',
                'required'    => array( 'sti_headerr', '=', true ),

            ),
            array(
                'id'            => 'sticky_header_padding',
                'type'          => 'slider',
                'title'         => esc_html__( 'Header Padding', 'Ascent' ),
                'subtitle'      => esc_html__( 'Manage sticky Header Top/Bottom Padding in pixel.', 'Ascent' ),
                'transparent'   => false,
                'default'       => '',
                "step"          => 0,
                "max"           => 50,
                'display_value' => 'text',
                'required'      => array( 'sti_headerr', '=', true ),
            ),
            array(
                'id'          => 'sti_headerr_menu',
                'type'        => 'color',
                'title'       => esc_html__( 'Sticky Header Menu Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Manage Sticky Header Menu Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#333',
                'required'    => array( 'sti_headerr', '=', true ),
            ),
        ),

    ),
);
