<?php
/**
 * Ascent Footer Styling Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'footer Style', 'Ascent' ),
        'id'         => 'foots',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'httr-not',
                'type'     => 'info',
                'title'    => esc_html__( 'fotter widgets area background style.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'fttr-background',
                'type'     => 'background',
                'default'  => array(
                    'background-color' => '#FAEBD7',
                ),
                'title'    => __( 'fotter widgets  Background', 'Ascent' ),
                'subtitle' => __( 'Controls fotter widgets  background with image, color, etc.', 'Ascent' ),
            ),
            array(
                'id'             => 'fttr_padding',
                'type'           => 'spacing',
                'units'          => array( 'px', 'em', 'rem' ),
                'units_extended' => true,
                'title'          => esc_html__( 'Footer Padding', 'Ascent' ),
                'subtitle'       => esc_html__( 'Controls Footer Padding.', 'Ascent' ),
                'default'        => array(
                    'padding-top'    => '25px',
                    'padding-bottom' => '20px',
                ),
            ),
            array(
                'id'       => 'httr-sub-not',
                'type'     => 'info',
                'title'    => esc_html__( 'Sub footer background style.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'          => 'sub_fttr_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Sub Footer background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Sub Footer Background Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#006FD8',
            ),
            array(
                'id'          => 'sub_fttr_text',
                'type'        => 'color',
                'title'       => esc_html__( 'Sub Footer text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Sub Footer Text Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#fff',
            ),
            array(
                'id'          => 'sub_fttr_icon',
                'type'        => 'color',
                'title'       => esc_html__( 'Sub Footer icon Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Sub Footer icon Color.', 'Ascent' ),
                'transparent' => false,
                'default'     => '#fff',
            ),
            array(
                'id'       => 'fttr_text_size',
                'type'     => 'text',
                'title'    => esc_html__( 'Fub Footer Text & Icon Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Sub Footer Text And Icon Size, ex: 16px.', 'Ascent' ),
                'default'  => '16px',
            ),
            array(
                'id'             => 'sub_fttr_padd',
                'type'           => 'spacing',
                'title'          => esc_html__( 'Fub Footer Padding', 'Ascent' ),
                'subtitle'       => esc_html__( 'Controls Sub Footer Padding.', 'Ascent' ),
                'default'        => array(
                    'padding-top'    => '10px',
                    'padding-bottom' => '10px',
                ),
                'units'          => array( 'px', 'em', 'rem' ),
                'units_extended' => true,
            ),

        ),
    )
);