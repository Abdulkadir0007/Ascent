<?php
/**
 * Ascent Heading typography Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Heading Typography', 'Ascent' ),
        'subtitle'   => esc_html__( 'These settings control the typography for all H2 headings.', 'Ascent' ),
        'id'         => 'heading-title',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'post-title',
                'type'             => 'typography',
                'title'            => esc_html__( 'Post Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'These settings control the typography of post title and single post title.','Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'       => '#1D1E5c',
                    'font-weight' => '600',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '35px',
                    'line-height' => '1.5',
                ),
                'line-height-unit' => '',

            ),

            array(
                'id'               => 'page-title',
                'type'             => 'typography',
                'title'            => esc_html__( 'Page Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'These settings control the typography of page title.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'       => '#1D1E5c',
                    'font-weight' => '600',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '30px',
                    'line-height' => '1.5',
                ),
                'line-height-unit' => '',

            ),
            array(
                'id'               => 'side-title',
                'type'             => 'typography',
                'title'            => esc_html__( 'Sidebare Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'These settings control the typography of Sidebare Widgets title.', 'Ascent' ),
                'text-transform'   => true,
                'margin-bottom'    => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '24px',
                    'line-height'   => '1.5',
                    'margin-bottom' => '5px',
                ),
                'line-height-unit' => '',

            ),
            array(
                'id'               => 'fotter-title',
                'type'             => 'typography',
                'title'            => esc_html__( 'Footer widgets Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'These settings control the typography of Footer Widgets title.', 'Ascent' ),
                'text-transform'   => true,
                'margin-bottom'    => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '24px',
                    'line-height'   => '1.5',
                    'margin-bottom' => '5px',
                ),
                'line-height-unit' => '',

            ),
        ),
    )
);
