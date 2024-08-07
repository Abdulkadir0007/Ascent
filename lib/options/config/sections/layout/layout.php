<?php
/**
 * Ascent Layout Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'  => esc_html__( 'Layout', 'Ascent' ),
        'icon'   => 'el el-website',
        'id'     => 'Layout',
        'fields' => array(
            array(
                'id'       => 'layout_switch',
                'type'     => 'switch',
                'title'    => esc_html__( 'Layout', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the site layout.', 'Ascent' ),
                'default'  => false,
                'off'      => esc_html__( 'Wide', 'Ascent' ),
                'on'       => esc_html__( 'Boxed', 'Ascent' ),
            ),
            array(
                'id'            => 'Layout-margin',
                'type'          => 'spacing',
                'mode'          => 'margin',
                'display_units' => false,
                'unit'          => true,
                'left'          => false,
                'right'         => false,
                'title'         => esc_html__( 'Boxed Mode Top/Bottom Offset', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the top/bottom offset of the boxed background. Enter values including any number, ex: 0, 0.', 'Ascent' ),
                'required'      => array( 'layout_switch', '=', true ),
                'default'       => array(
                    'margin-top'    => '0',
                    'margin-bottom' => '0',
                ),
            ),
            array(
                'id'            => 'Layout_padding',
                'type'          => 'spacing',
                'mode'          => 'padding',
                'display_units' => false,
                'unit'          => true,
                'left'          => false,
                'right'         => false,
                'title'         => esc_html__( 'Page Content Padding', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the top/bottom padding for page content. Enter values including any number ex: 30, 30.', 'Ascent' ),
                'default'       => array(
                    'padding-top'    => '30px',
                    'padding-bottom' => '30px',
                ),
            ),
            array(
                'id'       => 'layout_width',
                'type'     => 'text',
                'title'    => esc_html__( 'Site Width', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the overall site width. Enter value including any valid CSS unit, ex: 1200px.', 'Ascent' ),
                'default'  => '1250px',
            ),
        ),
    ),
);