<?php
/**
 * Ascent Blog Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Blog Page', 'Ascent' ),

        'id'         => 'blog',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'bread-layout',
                'type'     => 'switch',
                'title'    => esc_html__( 'Breadcrumb On Post Page', 'Ascent' ),
                'subtitle' => esc_html__( 'On/off Breadcrumb On Your Blog Page.', 'Ascent' ),
                'default'  => true,

            ),

            array(
                'id'       => 'bl_side',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebare In Blog Page', 'Ascent' ),
                'subtitle' => esc_html__( 'On/off Sidebare On Your blog Page.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'bl_side_side',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebare In Blog Page', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Sidebar Side On Your Blog Page.', 'Ascent' ),
                'default'  => false,
                'on'       => esc_html__( 'Left', 'Ascent' ),
                'off'      => esc_html__( 'Right', 'Ascent' ),
            ),

            array(
                'id'       => 'sblog_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Blog Page width Sidebar.', 'Ascent' ),
                'required' => array( 'bl_side', '=', true ),
                'options'  => array(
                    '1' => '3 Columns',
                    '2' => '2 Columns',
                    '3' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'blog_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Blog Page without Sidebar.', 'Ascent' ),
                'required' => array( 'bl_side', '=', false ),
                'options'  => array(
                    '1' => '4 Columns',
                    '2' => '3 Columns',
                    '3' => '2 Columns',
                    '4' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'blm_side',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebare show Blog Page in Mobail', 'Ascent' ),
                'subtitle' => esc_html__( 'On Off Sidebare Your blog page Sidebare  on Mobail.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'blm_hvr',
                'type'     => 'switch',
                'title'    => esc_html__( 'Media Hover', 'Ascent' ),
                'subtitle' => esc_html__( 'manage Media Hover On Blog Page.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'          => 'medi_hvcl',
                'type'        => 'color',
                'title'       => esc_html__( 'Media Hover Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Media Hover Color on Blog Page.', 'Ascent' ),
                'required'    => array( 'blm_hvr', '=', true ),
                'default'     => '#FF4CAA',
                'transparent' => false,
            ),
            array(
                'id'       => 'pagi_alin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Pagination align', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post Pagination align On Blog page.', 'Ascent' ),
                'required' => array( 'bl_side', '=', true ),
                'options'  => array(
                    '1' => 'Left',
                    '2' => 'Center',
                    '3' => 'Right',
                ),
                'default'  => 2,

            ),
        ),
    ),
);