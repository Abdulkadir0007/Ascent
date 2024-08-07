<?php
/**
 * Ascent Website Titlebare Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Website Title Aria', 'Ascent' ),
        'id'         => 'web-t',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'web-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __
                    ( '<strong>IMPORTANT NOTE:</strong> This option is only for the title area of ​​the website, which contains the website title description and searchbar.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'web_search',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Searchbare', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Searchbare On/off On Website Title Aria.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'       => 'web_desc',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Website Descripton', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Website Descripton On/off On Website Title Aria.', 'Ascent' ),
                'default'  => true,

            ),
            array(
                'id'               => 'web_title_typo',
                'type'             => 'typography',
                'title'            => esc_html__( 'Website Title Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'Controls Website Title Typography.', 'Ascent' ),
                'text-transform'   => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '30px',
                    'line-height'   => '1.5',
                ),
                'line-height-unit' => '',
                'required'         => array( 'web_desc', '=', true ),
            ),
            array(
                'id'               => 'web_desc_typo',
                'type'             => 'typography',
                'title'            => esc_html__( 'Website Descpription Typography', 'Ascent' ),
                'subtitle'         => esc_html__( 'Controls Website Descpription Typography.', 'Ascent' ),
                'text-transform'   => true,
                'margin-bottom'    => true,
                'text-align'       => false,
                'subsets'          => false,
                'default'          => array(
                    'color'         => '#1D1E5c',
                    'font-weight'   => '600',
                    'font-family'   => 'Poppins',
                    'google'        => true,
                    'font-size'     => '24px',
                    'line-height'   => '1.5',
                ),
                'line-height-unit' => '',
                'required'         => array( 'web_desc', '=', true ),
            ),
            array(
                'id'       => 'search-not',
                'type'     => 'info',
                'title'    => esc_html__( 'Style of search input.', 'Ascent' ),
                'subtitle' => '',
            ),

            array(
                'id'       => 'search-background',
                'type'     => 'color',
                'title'    => esc_html__( 'Search Input Background', 'Ascent' ),
                'subtitle' => esc_html__( 'Control the search input background color.', 'Ascent' ),
                'default'  => '#F7F7F7',
            ),
            array(
                'id'          => 'search-color',
                'type'        => 'color',
                'title'       => esc_html__( 'Search Input text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the search input text color.', 'Ascent' ),
                'default'     => '#333',
                'transparent' => false,

            ),
            array(
                'id'       => 'search-font',
                'type'     => 'text',
                'title'    => esc_html__( 'Search Input Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Control the search input Font Size.', 'Ascent' ),
                'default'  => '17px',

            ),
            array(
                'id'       => 'search-input-padding',
                'type'     => 'dimensions',
                'units'    => false,
                'title'    => __( 'Padding Option', 'Ascent' ),
                'subtitle' => __( 'Control the search input Padding.', 'Ascent' ),
                'default'  => array(
                    'width'  => '10',
                    'height' => '10',
                ),
            ),
            array(
                'id'          => 'search-bordre',
                'type'        => 'border',
                'all'         => true,
                'color_alpha' => true,
                'title'       => esc_html__( 'Search Input Border', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the search input Border.', 'Ascent' ),
                'default'     => array(
                    'border-color'  => '#F7F7F7',
                    'border-style'  => 'solid',
                    'border-top'    => '1px',
                    'border-right'  => '1px',
                    'border-bottom' => '1px',
                    'border-left'   => '1px',
                ),
            ),

            array(
                'id'       => 'search-button-not',
                'type'     => 'info',
                'title'    => esc_html__( 'Style of search input button.', 'Ascent' ),
                'subtitle' => '',
            ),
            array(
                'id'          => 'search-button-background',
                'type'        => 'color',
                'title'       => esc_html__( 'Search button Background', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the search input Button background Color.', 'Ascent' ),
                'default'     => '#F252A7',
                'transparent' => false,
            ),
            array(
                'id'          => 'search-button-color',
                'type'        => 'color',
                'title'       => esc_html__( 'Search button Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the search input Button text color.', 'Ascent' ),
                'default'     => '#fff',
                'transparent' => false,

            ),
            array(
                'id'       => 'search-button-font',
                'type'     => 'text',
                'title'    => esc_html__( 'Search button Font Size', 'Ascent' ),
                'subtitle' => esc_html__( 'Control the search input Button Font size.Enter value including CSS unit (px, em, rem), ex: 17px .', 'Ascent' ),
                'default'  => '17px',

            ),
            array(
                'id'       => 'search-button-padding',
                'type'     => 'dimensions',
                'units'    => false,
                'height'   => false,
                'title'    => __( 'Padding Option', 'Ascent' ),
                'subtitle' => __( 'Control the search input Button Padding Right/left.', 'Ascent' ),
                'default'  => array(
                    'width' => '11',
                ),
            ),
            array(
                'id'          => 'search-button-bordre',
                'type'        => 'border',
                'color_alpha' => true,
                'title'       => esc_html__( 'Search button Border', 'Ascent' ),
                'subtitle'    => esc_html__( 'Control the search input Button Border.', 'Ascent' ),
                'output'      => array( '.site-header' ),
                'default'     => array(
                    'border-color'  => '#F252A7',
                    'border-style'  => 'solid',
                    'border-top'    => '1px',
                    'border-right'  => '1px',
                    'border-bottom' => '1px',
                    'border-left'   => '1px',
                ),
            ),
        ),
    )
);
