<?php
/**
 * Ascent Favicon Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Favicon', 'Ascent' ),
        'id'         => 'favicon',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'title'    => esc_html__( 'Favicon', 'Ascent' ),
                'subtitle' => esc_html__( 'Select Your website Favicon', 'Ascent' ),
                'default'  => array(
                    'url' => '',
                ),
            ),

        ),
    )
);


