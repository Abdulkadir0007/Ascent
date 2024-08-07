<?php
/**
 * Ascent Project Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Project Page', 'Ascent' ),

        'id'         => 'project',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'pblg-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> The options on this tab are only for the Project Template ,This Template You Can Use Project And Protfolio.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'project_top',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show Project template Top', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Project Template Top On/off.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'pro_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Project Title', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Project Title.', 'Ascent' ),
                'required' => array( 'project_top', '=', true ),
                'default'  => 'Wellcome Project Page',
            ),
            array(
                'id'       => 'project_link_button',
                'type'     => 'switch',
                'title'    => esc_html__( 'Link Project Button', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Project Link Button.', 'Ascent' ),
                'default'  => true,
                'required' => array( 'project_top', '=', true ),
            ),
            array(
                'id'       => 'project_button_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Project Button Text', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Project Text.', 'Ascent' ),
                'default'  => 'Go To All Project',
                'required' => array( 'project_link_button', '=', true ),
            ),
            array(
                'id'       => 'project_button_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Project Button Link', 'Ascent' ),
                'subtitle' => esc_html__( 'Past Your Project Custom Link.', 'Ascent' ),
                'default'  => '#',
                'required' => array( 'project_link_button', '=', true ),

            ),
            array(
                'id'            => 'project_post_show',
                'type'          => 'slider',
                'title'         => esc_html__( 'Show Project Per Page', 'Ascent' ),
                'subtitle'      => esc_html__( 'Controls Show Project Per Page.', 'Ascent' ),
                'default'       => 16,
                'min'           => 4,
                'max'           => 36,
                'display_value' => 'text',

            ),
            array(
                'id'       => 'project_button_filtering',
                'type'     => 'switch',
                'title'    => esc_html__( 'Project Filtering', 'Ascent' ),
                'subtitle' => esc_html__( 'On Off Your Project Type Filtering.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'project_hover_covoe',
                'type'     => 'switch',
                'title'    => esc_html__( 'Project Hover Cover', 'Ascent' ),
                'subtitle' => esc_html__( 'On Off Your Project Hover Cover.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'project_pagination',
                'type'     => 'switch',
                'title'    => esc_html__( 'Project Pagination', 'Ascent' ),
                'subtitle' => esc_html__( 'On Off Your Project Pagination.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'pro_pagi_alin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Pagination align', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Project Pagination align.', 'Ascent' ),
                'required' => array( 'project_pagination', '=', true ),
                'options'  => array(
                    '1' => 'Left',
                    '2' => 'Center',
                    '3' => 'Right',
                ),
                'default'  => 2,

            ),
            array(
                'id'          => 'project_text_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Project Text Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Project Text Color.', 'Ascent' ),
                'default'     => '#fff',
                'transparent' => false,
            ),
            array(
                'id'          => 'project_back_color',
                'type'        => 'color',
                'title'       => esc_html__( 'Project Image Bottom Background Color', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Project Bottom Background Color.', 'Ascent' ),
                'default'     => '#E7D0AE',
                'transparent' => false,
            ),
        ),
    ),
);