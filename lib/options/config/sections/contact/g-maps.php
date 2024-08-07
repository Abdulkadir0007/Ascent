<?php
/**
 * Ascent Google maps Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
// Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Google Maps', 'Ascent' ),

        'id'         => 'm-maps',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'typo-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong>  The options on this tab are for the google map that displays on the "Contact" page template. The only option that controls google map element is the Google Maps Embed And API Key.', 'Ascent' ) ),
            ),
            array(
                'id'          => 'switch_field',
                'title'       => esc_html__( 'Google Maps Style', 'Ascent' ),
                'subtitle'    => esc_html__( 'Controls Google Maps Style Embed/API', 'Ascent' ),
                'type'        => 'switch',
                'on'          => 'Embed',
                'off'         => 'API',
                'placeholder' => esc_html__( 'Switch Field', 'Ascent' ),
                'default'     => true,
            ),

            array(
                'id'          => 'maps_embed',
                'title'       => esc_html__( 'Google Maps Embed', 'Ascent' ),
                'subtitle'    => esc_html__( 'Here Past Your Google Maps Embed', 'Ascent' ),
                'type'        => 'text',
                'placeholder' => esc_html__( 'Google Maps Embed Past here', 'Ascent' ),
                'required'    => array( 'switch_field', '=', true ),
                'default'     => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14542.174911535873!2d90.6800366!3d24.32754545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375685fe8f3c2917%3A0xa3e93b4d22006458!2sPakundia!5e0!3m2!1sen!2sbd!4v1706108551660!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ),
            array(
                'id'         => 'opt-google-maps',
                'type'       => 'google_maps',
                'title'      => 'Google Maps',
                'subtitle'   => 'Select a location from the map below.',
                'full_width' => true,
                'required'   => array( 'switch_field', '=', false ),
                'default'    => array(
                    // It's not necessary to fill out *every* default value for any
                    // given location.  We are doing so here for sample purposes.
                    'street_number'               => '1600',
                    'route'                       => 'Pennsylvania Avenue Northwest',
                    'locality'                    => 'Washington',
                    'administrative_area_level_1' => 'DC',
                    'postal_code'                 => '20500',
                    'country'                     => 'United States',
                    'latitude'                    => '38.8976758',
                    'longitude'                   => '-77.03648229999999',
                    'marker_info'                 => 'Home of the President of the United States.',
                ),
            ),
            array(
                'id'       => 'maps_demen',
                'title'    => esc_html__( 'Maps Width', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Your Maps Width', 'Ascent' ),
                'type'     => 'dimensions',
                'units'    => array( 'em', '%', 'px', 'rem' ),
                'height'   => false, 'units_extended' => 'true',
                'default'  => array(
                    'width' => '100%',
                    'units' => '%',
                ),
            ), array(
                'id'       => 'maps_height',
                'title'    => esc_html__( 'Maps Height', 'Ascent' ),
                'subtitle' => esc_html__( 'Controls Your Maps Height', 'Ascent' ),
                'type'     => 'dimensions',
                'units'    => array( 'em', 'px', 'rem' ),
                'width'    => false, 'units_extended' => 'true',
                'default'  => array(
                    'height' => '450px',
                    'units'  => 'px',
                ),
            ),
            array(
                'id'             => 'maps-mar',
                'title'          => esc_html__( 'Margin Top', 'Ascent' ),
                'subtitle'       => esc_html__( 'Controls Your Google Maps Margin Top', 'Ascent' ),
                'type'           => 'spacing',
                'mode'           => 'margin',
                'units'          => array( 'em', 'px', '%', 'rem' ),
                'units_extended' => true,
                'left'           => false,
                'bottom'         => false,
                'right'          => false,
                'default'        => array(
                    'margin-top' => '50px',
                    'units'      => 'px',
                ),
            ),
        ),
    )
);
