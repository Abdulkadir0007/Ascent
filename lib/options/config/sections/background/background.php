<?php
/**
 * Ascent Background Options.
 *
 * @package Ascent
 */

defined( 'ABSPATH' ) || exit;
 // Prevent direct access

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Body Background', 'Ascent' ),
        'id'         => 'backk',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'     => 'foots-import',
                'type'   => 'info',
                'style'  => 'info',
                'notice' => false,
                'desc'   => wp_kses_post( __( '<strong>IMPORTANT NOTE:</strong> This tab contains heading typography options. Additional typography options for specific areas can be found within other tabs. Example: For menu typography options go to the menu tab.', 'Ascent' ) ),
            ),
            array(
                'id'       => 'opt-background',
                'type'     => 'background',

                'default'  => array(
                    'background-color' => '#838483',
                ),
                'title'    => __( 'Body Background', 'Ascent' ),
                'subtitle' => __( 'Body background with image, color, etc.', 'Ascent' ),
            ),
            array(
                'id'       => 'switch_bac_patt',
                'type'     => 'switch',
                'title'    => esc_html__( 'background Pattern Image', 'Ascent' ),
                'subtitle' => esc_html__( 'A preview of the selected image will appear underneath the select box.', 'Ascent' ),
                'default'  => false,
            ),
            array(
                'id'       => 'background_pattarn',
                'type'     => 'image_select',
                'required' => array( 'switch_bac_patt', '=', true ),
                'title'    => esc_html__( 'background Pattern Image', 'Ascent' ),
                'subtitle' => esc_html__( 'A preview of the selected image will appear underneath the select box.', 'Ascent' ),
                'options'  => array(
                    array(
                        'alt' => 'Image Name 22',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern0.png',
                    ),
                    array(
                        'alt' => 'Image Name 1',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern1.png',
                    ),
                    array(
                        'alt' => 'Image Name 2',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern2.png',
                    ),
                    array(
                        'alt' => 'Image Name 3',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern3.png',
                    ),
                    array(
                        'alt' => 'Image Name 4',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern4.png',
                    ),
                    array(
                        'alt' => 'Image Name 5',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern5.png',
                    ),
                    array(
                        'alt' => 'Image Name 6',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern6.png',
                    ),
                    array(
                        'alt' => 'Image Name 7',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern7.png',
                    ),
                    array(
                        'alt' => 'Image Name 8',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern8.png',
                    ),
                    array(
                        'alt' => 'Image Name 9',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern9.png',
                    ),
                    array(
                        'alt' => 'Image Name 10',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern10.png',
                    ),
                    array(
                        'alt' => 'Image Name 11',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern11.png',
                    ),
                    array(
                        'alt' => 'Image Name 12',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern12.png',
                    ),
                    array(
                        'alt' => 'Image Name 13',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern13.png',
                    ),
                    array(
                        'alt' => 'Image Name 14',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern14.png',
                    ),
                    array(
                        'alt' => 'Image Name 15',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern15.png',
                    ),
                    array(
                        'alt' => 'Image Name 16',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern16.png',
                    ),
                    array(
                        'alt' => 'Image Name 17',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern17.png',
                    ),
                    array(
                        'alt' => 'Image Name 18',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern18.png',
                    ),
                    array(
                        'alt' => 'Image Name 19',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern19.png',
                    ),
                    array(
                        'alt' => 'Image Name 20',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern20.png',
                    ),
                    array(
                        'alt' => 'Image Name 21',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern21.png',
                    ),
                    array(
                        'alt' => 'Image Name 22',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern22.png',
                    ),
                    array(
                        'alt' => 'Image Name 23',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern23.png',
                    ),
                    array(
                        'alt' => 'Image Name 24',
                        'img' => get_template_directory_uri() . '/assets/images/pattern/pattern24.png',
                    ),
                ),
            ),
        ),
    )
);