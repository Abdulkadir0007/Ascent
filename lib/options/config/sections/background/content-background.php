<?php
/**
 * Ascent Main Content Background Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Main Content Background', 'Ascent' ),
        'id'         => 'cont-backk',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'cnfoots-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab contains heading typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the menu tab.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'main-content-background',
                'type'     => 'background',
                'default'  => array(
                    'background-color' => '#f4f4f4',
                ),
                'title'    => __( 'Body Background', 'Ascent' ),
                'subtitle' => __( 'Body background with image, color, etc.', 'Ascent' ),
            ),
        ),
    )
);