<?php
/**
 * Ascent Search Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Search Page', 'Ascent' ),

        'id'         => 'search',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'search-not',
                'type'     => 'info',
                'title'    => esc_html__( 'This Options For Only Search Page.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'spage_web',
                'type'     => 'switch',
                'title'    => esc_html__( 'Website Titlebar', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Website Titlebar In Search Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'spage_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Search Page Title', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Page Title In Search Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'spage_post',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Column', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post per Column In Search Page', 'Ascent' ),
                'options'  => array(
                    '1' => '1 Columns',
                    '2' => '2 Columns',
                    '3' => '3 Columns',
                    '4' => '4 Columns',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'spage_pagi_alin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Pagination align', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Pagination align In Search Page', 'Ascent' ),
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