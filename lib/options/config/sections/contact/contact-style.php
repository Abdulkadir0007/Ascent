<?php
/**
 * Ascent Form Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Form Styling', 'Ascent' ),

        'id'         => 'contacstyle',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'stylecont-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong>  The options on this tab are only for the Contact Form Style that displays on the "Contact" page template.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'cform_inp_text',
                'title'    => esc_html__( 'Input Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the Input Font Size. Enter value including any valid CSS unit, ex: 16px.', 'Ascent' ),
                'type'     => 'text',
                'default'  => '16px',
            ),
            array(
                'id'          => 'cform_inp_back',
                'title'       => esc_html__( 'Input Background', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the Input Background color.', 'Ascent' ),
                'type'        => 'color',
                'color_alpha' => true,
                'transparent' => false,
                'default'     => '#fff',
            ),
            array(
                'id'          => 'cform_inp_color',
                'title'       => esc_html__( 'Input Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the Input Color.', 'Ascent' ),
                'type'        => 'color',
                'color_alpha' => true,
                'transparent' => false,
                'default'     => '#483d3d',
            ),
            array(
                'id'            => 'cform_inp_border',
                'title'         => esc_html__( 'Input Border', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the Input Border', 'Ascent' ),
                'type'          => 'border',
                'all'           => false,
                'display_units' => false,
                'default'       => array(
                    'border-color'  => 'rgb(201,201,201)',
                    'border-style'  => 'solid',
                    'border-top'    => '1px',
                    'border-bottom' => '1px',
                    'border-right'  => '1px',
                    'border-left'   => '1px',
                ),
            ),
            array(
                'id'            => 'cform_inp_bor_redi',
                'title'         => esc_html__( 'Input Border Radius', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the Input Border Readius', 'Ascent' ),
                'type'          => 'slider',
                'min'           => 0,
                'max'           => 50,
                'default'       => 0,
                'display_value' => 'text',
            ),

            array(
                'id'          => 'cform_inp_back_fuc',
                'title'       => esc_html__( 'Input Focus Shadow Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the Input Focus Shadow Color', 'Ascent' ),
                'type'        => 'color',
                'color_alpha' => true,
                'transparent' => false,
                'default'     => 'rgba(13,110,253,.25)',
            ),
            array(
                'id'            => 'cform_inp_shadow_width',
                'title'         => esc_html__( 'Input Focus Shadow Width', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the Input Focus Shadow width', 'Ascent' ),
                'type'          => 'slider',
                'min'           => 0,
                'max'           => 10,
                'default'       => 2,
                'display_value' => 'text',
            ),

        ),
    )
);