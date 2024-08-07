<?php
/**
 * Ascent Mobaile Menu Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Mobail Menu', 'Ascent' ),
        'id'         => 'mobail-menu',
        'subsection' => true,
        'fields'     => array(
            array(

                'id'            => 'mobail-menu-brack',
                'type'          => 'slider',
                'title'         => esc_html__( 'Menu Breakpoints', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls Menu Brack Point In pixel.', 'Ascent' ),
                "default"       => 1024,
                "min"           => 300,
                "step"          => 1,
                "max"           => 1600,
                'display_value' => 'text',
            ),
            array(

                'id'       => 'mobail_menu_positions',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Menu Slide', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Menu Slide Side.', 'Ascent' ),
                "default"  => 1,
                'options'  => array(
                    '1' => esc_html__( 'Left', 'Ascent' ),
                    '2' => esc_html__( 'Right', 'Ascent' ),
                    '3' => esc_html__( 'Top', 'Ascent' ),
                    '4' => esc_html__( 'Bottom', 'Ascent' ),
                ),
            ),
            array(

                'id'       => 'mobail_menu_label',
                'type'     => 'select',
                'title'    => esc_html__( 'Menu Label', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Menu Label Show Style.', 'Ascent' ),
                "default"  => 1,
                'options'  => array(
                    '1' => esc_html__( 'Over Lep', 'Ascent' ),
                    '2' => esc_html__( 'Expand', 'Ascent' ),
                    '3' => esc_html__( 'Normal', 'Ascent' ),
                ),
                'select2'  => array( 'allowClear' => false ),
            ),
            array(

                'id'       => 'mobail_menu_width',
                'type'     => 'dimensions',
                'title'    => esc_html__( 'Menu Width', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Menu Width In pixel.', 'Ascent' ),
                "default"  => array(
                    'width' => '280',
                ),
                'height'   => false,
                'units'    => false,
                'required' => array( 'menu_positions', '<=', '2' ),

            ),

            array(
                'id'             => 'Mobail_menu_text_typo',
                'type'           => 'typography',
                'title'          => esc_html__( 'Menu Text Typography', 'Ascent' ),
                'subtitle'       => esc_html__( 'These settings control the typography of mobail menu', 'Ascent' ),
                'text-transform' => true,
                'text-align'     => false,
                'subsets'        => false,
                'default'        => array(
                    'color'       => '#fff',
                    'font-weight' => '400',
                    'font-family' => 'Poppins',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px',
                ),

            ),
            array(

                'id'          => 'mobail_menu_icon',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu icon Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Menu Icon Color.', 'Ascent' ),
                "default"     => '#34495E',
                'transparent' => false,
            ),
            array(

                'id'          => 'mobail_menu_border',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu Border Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Menu Border Color.', 'Ascent' ),
                "default"     => '#006FD8',
                'transparent' => false,
            ),
            array(

                'id'          => 'mobail_menu_back',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Menu Background Color.', 'Ascent' ),
                "default"     => '#006FD8',
                'transparent' => false,
            ),
            array(

                'id'          => 'mobail_menu_back_hover',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu Background Hover Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Menu Background hover Color.', 'Ascent' ),
                "default"     => '#006FD8',
                'transparent' => false,
            ),
            array(

                'id'          => 'mobail_menu_text_hover',
                'type'        => 'color',
                'title'       => esc_html__( 'Menu Text Hover/Avtive Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Menu Text Hover/Avtive Color.', 'Ascent' ),
                "default"     => '#f78da7',
                'transparent' => false,
            ),
        ),
    )
);