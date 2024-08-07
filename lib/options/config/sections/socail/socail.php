<?php
/**
 * Ascent Socail link Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Socail Link', 'Ascent' ),
        'id'         => 'lsocail',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'lsocail-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( "<strong>IMPORTANT NOTE:</strong> You put your link on your social site. The link you place here will only appear on your web page. Example: For example the social site shown below with '#' is where you put your link.", 'Ascent' ) ),
            ),
            array(
                'title'    => esc_html__( 'Socail Icon', 'Ascent' ),
                'subtitle' => esc_html__( 'Link Your Social servicer', 'Ascent' ),
                'id'       => 'sc_icon',
                'type'     => 'text',
                'options'  => array(
                    'facebook'       => 'Facebook',
                    'instagram'      => 'Instagram',
                    'tiktok'         => 'Tiktok',
                    'twitter'        => 'Twitter',
                    'skype'          => 'Skype',
                    'paypal'         => 'Paypal',
                    'dropbox'        => 'Dropbox',
                    'linkedin'       => 'Linkedin',
                    'spotify'        => 'Spotify',
                    'behance'        => 'Behance',
                    'stack-overflow' => 'Stack overflow',
                    'flickr'         => 'Flickr',
                    'github'         => 'Github',
                    'dribbble'       => 'Dribbble',
                    'steam'          => 'Steam',
                    'yahoo'          => 'Yahoo',
                    'youtube'        => 'Youtube',
                ),
                'default'  => array(
                    'facebook'       => '#',
                    'twitter'        => '#',
                    'skype'          => '',
                    'tiktok'         => '',
                    'paypal'         => '',
                    'stack-overflow' => '',
                    'behance'        => '',
                    'flickr'         => '',
                    'steam'          => '',
                    'yahoo'          => '',
                    'github'         => '',
                    'linkedin'       => '',
                    'dropbox'        => '',
                    'spotify'        => '',
                    'dribbble'       => '',
                    'youtube'        => '',
                    'instagram'      => '#',
                ),
            ),

        ),
    )
);