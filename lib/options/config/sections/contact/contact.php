<?php
/**
 * Ascent Contact Form Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Contact Form', 'Ascent' ),

        'id'         => 'contact',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'cont-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> The options on this tab are only for the contact form that displays on the "Contact" page template.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'cont-emai',
                'type'     => 'text',
                'title'    => esc_html__( 'Email Address', 'Ascent' ),
                'subtitle' => esc_html__( 'Enter the email address the form should be sent to. This only works for the form on the contact page template.', 'Ascent' ),
                'validate' => 'email',
            ),
            array(
                'id'          => 'cottr',
                'title'       => esc_html__( 'Contact messeg', 'Ascent' ),
                'subtitle'    => esc_html__( 'Contact messeg on/off For not Loget User', 'Ascent' ),
                'type'        => 'switch',
                'placeholder' => esc_html__( 'Switch Field', 'Ascent' ),
                'default'     => true,
            ),
            array(
                'id'       => 'tr-lb',
                'type'     => 'textarea',
                'required' => array( 'cottr', '=', true ),
                'title'    => esc_html__( 'Contact messeg Text', 'Ascent' ),
                'subtitle' => esc_html__( 'Write Your Contact messeg Text.', 'Ascent' ),
                'default'  => esc_html__( 'By checking this box, you confirm that you have read and are agreeing to our terms of use regarding the storage of the data submitted through this form.', 'Ascent' ),
            ),

        ),
    )
);