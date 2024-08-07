<?php
/**
 * Ascent Archive Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Archive Page', 'Ascent' ),

        'id'         => 'archive_page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'archive_page-not',
                'type'     => 'info',
                'title'    => esc_html__( 'This Options For Only Archive Page.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'arpage_web',
                'type'     => 'switch',
                'title'    => esc_html__( 'Website Titlebar', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Website Titlebar In Archive Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'arpage_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Page Title', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Page Title In Archive Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'arpage_side',
                'type'     => 'switch',
                'title'    => esc_html__( 'Sidebare', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Sidebare In Archive Page.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'sarpage_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Archive Page width Sidebar.', 'Ascent' ),
                'required' => array( 'arpage_side', '=', true ),
                'options'  => array(
                    '1' => '3 Columns',
                    '2' => '2 Columns',
                    '3' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'arpage_n',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Manage Post Per column in Archive Page without Sidebar.', 'Ascent' ),
                'required' => array( 'arpage_side', '=', false ),
                'options'  => array(
                    '1' => '4 Columns',
                    '2' => '3 Columns',
                    '3' => '2 Columns',
                    '4' => '1 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'arpage_pagi_alin',
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