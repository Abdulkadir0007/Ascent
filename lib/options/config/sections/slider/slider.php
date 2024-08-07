<?php
/**
 * Ascent Slider Template Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'  => esc_html__( 'Slider', 'Ascent' ),

        'id'     => 'a_slider',
        'icon'   => 'el el-picture',
        'fields' => array(
            array(
                'id'     => 'slider-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This slider can be used anywhere you want with shotcode, just use shotcode where you want to use the slider. Your shotcode is  <strong> [slider] </strong>', 'Ascent' ) ),
            ),
            array(
                'id'       => 'a_slider_style',
                'type'     => 'select',
                'title'    => esc_html__( 'Sliding Style', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider Sliding Style.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Slide',
                    '2' => 'Fade',
                ),
                'default'  => '2',
                'select2'  => array( 'allowClear' => false ),
            ),
            array(
                'id'       => 'a_slider_time',
                'type'     => 'select',
                'title'    => esc_html__( 'Slder trinsition Style', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider trinsition Style.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Fast',
                    '2' => 'Normal',
                    '3' => 'Slow',
                ),
                'default'  => '2',
                'select2'  => array( 'allowClear' => false ),
            ),
            array(
                'id'       => 'a_slider_btoom',
                'title'    => esc_html__( 'Slider Indicators', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider Indicators style.', 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'a_slider_indselect',
                'type'     => 'select',
                'title'    => esc_html__( 'Slider Indicator Style', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider Indicators style.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Long',
                    '2' => 'Round',
                ),
                'required' => array( 'a_slider_btoom', '=', true ),
                'default'  => '1',
                'select2'  => array( 'allowClear' => false ),
            ),
            array(
                'id'          => 'a_slider_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Slider Indicator Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Slider Indicators Color.', 'Ascent' ),
                'required'    => array( 'a_slider_btoom', '=', true ),
                'default'     => '#fff',
                'transparent' => false,
            ),
            array(
                'id'       => 'a_slider_title_switch',
                'title'    => esc_html__( 'Slider Title', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider Title.', 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'               => 'a_slider-title',
                'type'             => 'typography',
                'title'            => esc_html__( 'Slider Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'Controls Slider Title typography.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'required'         => array( 'a_slider_title_switch', '=', true ),
                'subsets'          => false,
                'line-height-unit' => '',
                'default'          => array(
                    'color'       => '#fff',
                    'font-weight' => '500',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '20px',
                    'line-height' => '1.3',
                ),

            ),
            array(
                'id'       => 'a_slider_text_switch',
                'title'    => esc_html__( 'Slider text', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Slider text', 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'               => 'a_slider-text',
                'type'             => 'typography',
                'title'            => esc_html__( 'Slider Text Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'Controls Slider Title typography.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'required'         => array( 'a_slider_text_switch', '=', true ),
                'subsets'          => false,
                'line-height-unit' => '',
                'default'          => array(
                    'color'       => '#fff',
                    'font-weight' => '400',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '1.2',
                ),

            ),
        ),
    )
);
