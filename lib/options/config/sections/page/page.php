<?php
/**
 * Ascent Pages Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Genarel Page', 'Ascent' ),

        'id'         => 'g_page',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'g_page-not',
                'type'     => 'info',
                'title'    => esc_html__( 'This Options For Only Default Template Page.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'       => 'bread-page',
                'type'     => 'switch',
                'title'    => esc_html__( 'Breadcrumb On Pages', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Breadcrumb On Genarel Page.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'grpage_title',
                'type'     => 'switch',
                'title'    => esc_html__( 'Title', 'Ascent' ),
                'subtitle' => esc_html__( 'Show/Hide Title On Genarel Page.', 'Ascent' ),
                'default'  => true,
                'on'       => esc_html__( 'Show', 'Ascent' ),
                'off'      => esc_html__( 'Hide', 'Ascent' ),

            ),
            array(
                'id'       => 'grpage_mhover',
                'type'     => 'switch',
                'title'    => esc_html__( 'Media Hover Cover', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Media Hover Cover On Genarel Page.', 'Ascent' ),
                'default'  => true,

            ),
        ),
    )
);