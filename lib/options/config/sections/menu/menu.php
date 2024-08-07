<?php
/**
 * Ascent Menu Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Main Menu', 'Ascent' ),
        'id'         => 'menuclor',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'               => 'menu-trifo',
                'type'             => 'typography',
                'title'            => esc_html__( 'Menu Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'Controls the Typography of the menu.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'line-height-unit' => '',
                'default'          => array(
                        'color'       => '#333',
                        'font-weight' => '600',
                        'font-family' => 'Poppins',
                        'google'      => true,
                        'font-size'   => '18px',
                        'line-height' => '1.3',
                ),
            ),
            array(
                'id'            => 'menu-padding',
                'type'          => 'slider',
                'title'         => esc_html__( 'Menu Padding', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the top/bottom padding for menu items. In pixels.', 'Ascent' ),
                "default"       => 20,
                "min"           => 1,
                "step"          => 1,
                "max"           => 100,
                'display_value' => 'text',
            ),
            array(
                'id'          => 'menu-active',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu  Font Active / hover Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the active color of the menu.', 'Ascent' ),
                'default'     => '#FF4CAA',
                'transparent' => false,
            ),

            array(
                'id'       => 'menu-search',
                'type'     => 'switch',
                'title'    => esc_html__( 'Menu Search Icon', 'Ascent' ),
                'subtitle' => esc_html__( 'Turn on to display Menu Search Icon.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'menu-not',
                'type'     => 'info',
                'title'    => esc_html__( 'Controls the color of the menu dropdown.', 'Ascent' ),
                'subtitle' => '',
            ),

            array(
                'id'            => 'drop-width',
                'type'          => 'slider',
                'title'         => esc_html__( 'Dropdown Menu Width', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls the Dropdown Menu Width. In pixels.', 'Ascent' ),
                "default"       => 200,
                "min"           => 1,
                "step"          => 1,
                "max"           => 500,
                'display_value' => 'text',
            ),
            array(
                'id'       => 'drp-font-size',
                'type'     => 'text',
                'title'    => esc_html__( 'Dropdown Menu Font size', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls the font size for main menu dropdown text. Enter value including any valid CSS unit, ex: 15px.', 'Ascent' ),
                'default'  => '15px',
            ),
            array(
                'id'          => 'drp-font-cl',
                'type'        => 'color',
                'title'       => esc_html__( 'Dropdown Menu  Font Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the font color of the menu dropdown.', 'Ascent' ),
                'default'     => '#333',
                'transparent' => false,
            ),
            array(
                'id'          => 'drp-back-cl',
                'type'        => 'color',
                'title'       => esc_html__( 'Dropdown Menu background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the background color of the menu dropdown.', 'Ascent' ),
                'default'     => '#e0d7d7',
                'transparent' => false,
            ),
            array(
                'id'          => 'drp-hv-font',
                'type'        => 'color',
                'title'       => esc_html__( 'Dropdown Menu Font Hover Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the font hover color of the menu dropdown.', 'Ascent' ),
                'default'     => '#ffffff',
                'transparent' => false,
            ),
            array(
                'id'          => 'drp-hov-back',
                'type'        => 'color',
                'title'       => esc_html__( 'Dropdown Menu Hover background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls the Hover background color of the menu dropdown.', 'Ascent' ),
                'default'     => '#464780',
                'transparent' => false,
            ),
        ),
    )
);
