<?php
/**
 * Ascent Body typography Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Body Typography', 'Ascent' ),

        'id'         => 'body-typo',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'body_tipo',
                'type'             => 'typography',
                'title'            => esc_html__( 'Body Typpgraphy', 'Ascent' ),
                'subtitle'         => esc_html__( 'These settings control the typography of Body Content.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'       => '#1D1E5c',
                    'font-weight' => '400',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '1.5',
                ),
                'line-height-unit' => '',

            ),
            array(
                'id'       => 'body_link_color',
                'type'     => 'link_color',
                'title'    => esc_html__( 'Body Link Color', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Body Link Color.', 'Ascent' ),
                'default'  => array(
                    'regular' => '#1D1E5c', // blue
                    'hover' => '#FF4CAA',   // red
                    'visited' => '#1D1E5c', // purple
                ),
                'visited'  => true,
                'active'   => false,
            ),
        ),

    )
);
