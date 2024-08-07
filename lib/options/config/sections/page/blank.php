<?php
/**
 * Ascent Blank Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Blank Page', 'Ascent' ),

        'id'         => 'black_page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'g_page-not',
                'type'     => 'info',
                'title'    => esc_html__( 'This Options For Only Blank Template Page.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'blank_header',
                'type'     => 'switch',
                'title'    => esc_html__( 'Header in Blank Page', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Header in Blank Page', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'blank_footer',
                'type'     => 'switch',
                'title'    => esc_html__( 'Footer in black page', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Header in Footer Page', 'Ascent' ),
                'default'  => true,

            ),
        ),
    )
);