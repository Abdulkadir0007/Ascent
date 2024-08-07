<?php
/**
 * Ascent Footer Coteant Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'footer contant', 'Ascent' ),

        'id'         => 'footr',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'fttr_copy',
                'title'    => esc_html__( 'Footer Copyright text', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Footer Copyright text.', 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'fttr_copy_text',
                'title'    => esc_html__( 'Footer Copyright text', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Fotter Copyright text.', 'Ascent' ),
                'type'     => 'textarea',
                'required' => array( 'fttr_copy', '=', true ),
                'default'  => 'Copyright 2024 by Ascent All Rights Reserved',
            ),
            array(
                'id'       => 'fttr_prive',
                'title'    => esc_html__( 'Footer Policy  text', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Fotter Copy right text', 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'fttr_policy_text',
                'title'    => esc_html__( 'Footer Policy text', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Fotter Copy right text' . 'Ascent' ),
                'type'     => 'textarea',
                'required' => array( 'fttr_prive', '=', true ),
                'default'  => 'Privacy Policy Terms of Service Copy Right Policy',
            ),
            array(
                'id'       => 'fttr_socail',
                'title'    => esc_html__( 'Footer Socail icon', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Fotter Socail Icon' . 'Ascent' ),
                'type'     => 'switch',
                'default'  => true,
            ),
        ),
    )
);