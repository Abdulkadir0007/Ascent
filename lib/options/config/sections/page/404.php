<?php
/**
 * Ascent 404 Page Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( '404 Eror Page', 'Ascent' ),
        'id'         => '4eror',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'eror-img',
                'title'    => esc_html__( '404 page Image', 'Ascent' ),
                'subtitle' => esc_html__( 'Upload 404 page Image', 'Ascent' ),
                'type'     => 'media',
                'default'  => array(
                    'url' => Redux_Core::$url . '../config/sections/headers/img/404.png',
                ),
            ),
        ),
    )
);