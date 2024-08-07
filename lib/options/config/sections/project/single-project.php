<?php
/**
 * Ascent Project single Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Project Single', 'Ascent' ),

        'id'         => 'project_single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'projec_sing_name',
                'type'     => 'text',
                'title'    => esc_html__( 'Name Your Template', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Template ex: Project.', 'Ascent' ),
                'default'  => 'Project',
            ),
            array(
                'id'       => 'projec_sing_pagi',
                'type'     => 'switch',
                'title'    => esc_html__( 'Paginetion', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls previous/next Project pagination.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'project_aut_info',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author Info', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Project Author Info.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'project_aut_rel',
                'type'     => 'switch',
                'title'    => esc_html__( 'Related Project', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Project Author Related Project.', 'Ascent' ),
                'default'  => true,
            ),
        ),
    ),
);