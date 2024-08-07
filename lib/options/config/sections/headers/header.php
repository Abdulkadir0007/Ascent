<?php
/**
 * Ascent Header Top Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Header Top', 'Ascent' ),
        'id'         => 'headr',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'switch_hbdead',
                'title'    => esc_html__( 'Header Top', 'Ascent' ),
                'type'     => 'switch',
                'subtitle' => esc_html__( 'If you switch on/off here, the header top will show/off on your website.', 'Ascent' ),
                'default'  => false,
            ),
            array(
                'id'       => 'sbheader-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header Top style', 'Ascent' ),
                'subtitle' => esc_html__( 'Select Your Header top The way You want.', 'Ascent' ),
                'required' => array( 'switch_hbdead', '=', true ),
                'options'  => array(
                    '0' => array(
                        'alt' => '1 Column',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/sh-1.png',
                    ),
                    '1' => array(
                        'alt' => '2 Column Left',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/sh-2.png',
                    ),

                ),
                'default'  => '0',
            ),
            array(
                'id'       => 'sbheader_cont1',
                'type'     => 'select',
                'title'    => esc_html__( 'Left Site Content', 'Ascent' ),
                'subtitle' => esc_html__( 'Select Left Site Content on Your Header top.', 'Ascent' ),
                'required' => array( 'switch_hbdead', '=', true ),
                'options'  => array(
                    '1' => 'Contact Info',
                    '2' => 'Socail Link',
                    '3' => 'Navigation',
                    '4' => 'Hide',
                ),
                'default'  => '3',
                'select2'  => array( 'allowClear' => false ),
            ),
            array(
                'id'       => 'sbheader_cont2',
                'type'     => 'select',
                'title'    => esc_html__( 'Right Site Content', 'Ascent' ),
                'subtitle' => esc_html__( 'Select Right Site Content on Your Header top.', 'Ascent' ),
                'required' => array( 'switch_hbdead', '=', true ),
                'options'  => array(
                    '1' => 'Contact Info',
                    '2' => 'Socail Link',
                    '3' => 'Navigation',
                    '4' => 'Hide',
                ),
                'default'  => '2',
                'select2'  => array( 'allowClear' => false ),
            ),

            array(
                'id'          => 'shead_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Background Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', false ),
                'default'     => '#006FD8',
                'transparent' => false,
            ),
            array(
                'id'          => 'sconav_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Navigation And Content Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Navigation And Content Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', false ),
                'default'     => '#fff',
                'transparent' => false,
            ),
            array(
                'id'          => 'scicon_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Icon color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Navigation And Content Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', false ),
                'default'     => '#fff',
                'transparent' => false,
            ),
            array(
                'id'          => 'shead_mncl',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu Border Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Menu Border Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', false ),
                'default'     => '#fff',
                'transparent' => false,
            ),

            array(
                'id'          => 'shead_back2',
                'type'        => 'color',
                'title'       => esc_html__( 'Top Header Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Background Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', true ),
                'default'     => '#fff',
                'transparent' => false,
            ),
            array(
                'id'          => 'shead_tbor',
                'type'        => 'color',
                'title'       => esc_html__( 'Top Header Border Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Border Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', true ),
                'default'     => '#006FD8',
                'transparent' => false,
            ),
            array(
                'id'          => 'sconav_color2',
                'type'        => 'color',
                'title'       => esc_html__( 'Navigation And Content Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Navigation And Content Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', true ),
                'default'     => '#333',
                'transparent' => false,
            ),
            array(
                'id'          => 'scicon_color2',
                'type'        => 'color',
                'title'       => esc_html__( 'Top Header Icon Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Icon Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', true ),
                'default'     => '#333',
                'transparent' => false,
            ),
            array(
                'id'          => 'shead_mncl2',
                'type'        => 'color',
                'title'       => esc_html__( 'Top Header Menu Border Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Your Header Top Menu Border Color.', 'Ascent' ),
                'required'    => array( 'sbheader-layout', '=', true ),
                'default'     => '#333',
                'transparent' => false,
            ),

            array(
                'id'       => 'shead_cot',
                'type'     => 'text',
                'title'    => esc_html__( 'Contact Info One', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Header Top Contact info One.', 'Ascent' ),
                'required' => array( 'switch_hbdead', '=', true ),
                'default'  => 'Call Us Today! 01333333333',
            ),
            array(
                'id'       => 'shead_cot2',
                'type'     => 'text',
                'title'    => esc_html__( 'Contact Info Two', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Header Top Contact info Two.', 'Ascent' ),
                'required' => array( 'switch_hbdead', '=', true ),
                'default'  => 'example@gmail.com',
            ),
        ),

    ),
);
