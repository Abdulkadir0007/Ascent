<?php
/**
 * Ascent Custom typography Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Custom Fonts', 'Ascent' ),
        'id'         => 'custom-typo',
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'opt-accordion-begin-1',
                'type'     => 'custom_fonts',
                'title'    => 'Upload Your Custom Fonts',
                'subtitle' => 'If you have any fonts then you can upload them here and use them on your website.',
            ),
        ),
    )
);