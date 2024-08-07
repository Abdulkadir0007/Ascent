<?php
/**
 * Ascent author Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Author Page', 'Ascent' ),

        'id'         => 'author_page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'author_page-not',
                'type'     => 'info',
                'title'    => esc_html__( 'This Options For Only Author Page.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'atpage_web',
                'type'     => 'switch',
                'title'    => esc_html__( 'Website Titlebar', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Website Titlebar In Author Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'atpage_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author Info', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Author Info In Author Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'atpage_side',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebare', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Website Titlebar In Author Page.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'satpage_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Archive Page width Sidebar.', 'Ascent' ),
                'required' => array( 'atpage_side', '=', true ),
                'options'  => array(
                    '1' => '3 Columns',
                    '2' => '2 Columns',
                    '3' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'atpage_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Archive Page without Sidebar.', 'Ascent' ),
                'required' => array( 'atpage_side', '=', false ),
                'options'  => array(
                    '1' => '4 Columns',
                    '2' => '3 Columns',
                    '3' => '2 Columns',
                    '4' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'atpage_pagi_alin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Pagination align', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Paginations Align In Archive Page.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Left',
                    '2' => 'Center',
                    '3' => 'Right',
                ),
                'default'  => 2,

            ),
        ),
    )
);