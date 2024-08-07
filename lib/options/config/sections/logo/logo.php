<?php
/**
 * Ascent Logo Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Logo', 'Ascent' ),
        'id'         => 'logo',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logo-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Text', 'Ascent' ),
                'subtitle' => 'Write Your Website Logo',
            )
            , array(
                'id'             => 'logo-trifo',
                'type'           => 'typography',
                'title'          => esc_html__( 'Logo Text Typography', 'Ascent' ),
                'subtitle'       => esc_html__( 'Controls the Typography of the Logo Text.', 'Ascent' ),
                'text-transform' => true,
                'text-align'     => false,
                'line-height'    => false,
                'subsets'        => false,
                'default'        => array(
                    'color'          => '#333',
                    'font-weight'    => '700',
                    'font-family'    => 'Poppins',
                    'google'         => true,
                    'font-size'      => '50px',
                    'text-transform' => 'uppercase',
                ),
            ),

            array(
                'id'       => 'logo-img',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo Img', 'Ascent' ),
                'subtitle' => esc_html__( 'Select an image file for your logo.', 'Ascent' ),
                'default'  => array(
                    'url' => get_template_directory_uri() . '/assets/images/logo.png',
                ),
            ),

        ),
    )
);
