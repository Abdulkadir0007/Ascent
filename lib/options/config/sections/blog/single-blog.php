<?php
/**
 * Ascent Single Blog Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Blog Single', 'Ascent' ),

        'id'         => 'blog_single',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'sing_pagi',
                'type'     => 'switch',
                'title'    => esc_html__( 'Pagination', 'Ascent' ),
                'subtitle' => esc_html__( 'On/Off Previews/Nex Post Pagination.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'single_title',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Post Title Position', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post Title Position.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Below',
                    '2' => 'Above',
                    '3' => 'Disable',
                ),
                'default'  => 2,
            ),
            array(
                'id'       => 'single_meta',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Meta Data Position', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post Meta Data Position.', 'Ascent' ),
                'options'  => array(
                    '1' => 'Below Article',
                    '2' => 'Below Title',
                ),
                'required' => array( 'single_title', '<=', 2 ),
                'default'  => 2,
            ),
            array(
                'id'       => 'aut_info',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author Info', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post Author Info.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'aut_rel',
                'type'     => 'switch',
                'title'    => esc_html__( 'Related Post', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Post Author Related Post.', 'Ascent' ),
                'default'  => true,
            ),
            array(
                'id'       => 'single_comment',
                'type'     => 'switch',
                'title'    => esc_html__( 'Comment', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls On/Off Post Comment.', 'Ascent' ),
                'default'  => true,
            ),
        ),
    ),
);