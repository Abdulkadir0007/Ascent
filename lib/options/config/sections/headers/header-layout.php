<?php
/**
 * Ascent Header layout Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Header layout', 'Ascent' ),
        'id'         => 'header-lay',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'header-layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header layout Style', 'Ascent' ),
                'subtitle' => esc_html__( 'Select Your header Layout Style The Way You Want.', 'Ascent' ),

                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/1.png',
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/2.png',
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/3.png',
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/4.png',
                    ),
                    '5' => array(
                        'alt' => '3 Column Left',
                        'img' => Redux_Core::$url . '../config/sections/headers/img/5.png',
                    ),
                ),
                'default'  => '1',
            ),

        ),
    )
);
