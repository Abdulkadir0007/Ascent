<?php
/**
 * Ascent Button Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Primary Button', 'Ascent' ),
        'id'         => 'putton',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'pbutton-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab is only for website primary button options. This button is used by redmore to submit contact form and comments.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'button-font',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Control Button Font size. Enter value including CSS unit (px, em, rem), ex: 16px.', 'Ascent' ),
                'default'  => '16px',

            ),
            array(
                'id'            => 'pbutton-padding',
                'type'          => 'spacing',
                'mode'          => 'padding',
                'units'         => true,
                'display_units' => false,
                'title'         => esc_html__( 'Button Padding', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls Button Padding.', 'Ascent' ),
                'default'       => array(
                    'padding-top'    => '10px',
                    'padding-right'  => '25px',
                    'padding-bottom' => '10px',
                    'padding-left'   => '25px',
                ),
            ),
            array(
                'id'       => 'button-radi',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Border Radius', 'Ascent' ),
                'subtitle' => esc_html__( 'Control Button border Redius. Enter value including CSS unit (px, em, rem), ex: 0px.', 'Ascent' ),
                'default'  => '0px',

            ),
            array(
                'id'          => 'button-text',
                'type'        => 'color',
                'title'       => esc_html__( 'Button Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control Button Text Color.', 'Ascent' ),
                'default'     => '#fff',
                'transparent' => false,

            ),
            array(
                'id'          => 'button-back',
                'type'        => 'color',
                'title'       => esc_html__( 'Button Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control Button Bckground Color.', 'Ascent' ),
                'default'     => '#FF4CAA',
                'transparent' => false,

            ),
            array(
                'id'          => 'button-hover-color',
                'type'        => 'color',
                'title'       => esc_html__( 'Button Hover Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control Button Hover Text Color.', 'Ascent' ),
                'default'     => '#1D1E5c',
                'transparent' => false,
            ),
            array(
                'id'          => 'button-hover-back',
                'type'        => 'color',
                'title'       => esc_html__( 'Button Hover Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control Button Hover Background Color.', 'Ascent' ),
                'default'     => '#f252a7',
                'transparent' => false,
            ),

        ),
    )
);
