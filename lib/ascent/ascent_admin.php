<?php
    /**
     * Admin Menu Page.
     *
     *  @package Ascent
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;
?>
<?php

function ascent_admin_menu() {
    add_menu_page( 'Ascent', 'Ascent', 'manage_options', 'ascent_menu', 'ascent_admin', get_template_directory_uri() . '/assets/images/a-option.png', 3 );

    add_submenu_page( 'ascent_menu', 'Dashboard', 'Dashboard', 'manage_options', 'ascent_menu', 'ascent_admin' );
    add_submenu_page( 'ascent_menu', 'Slider', 'Slider', 'manage_options', 'edit.php?post_type=ascent_slider' );
}
add_action( 'admin_menu', 'ascent_admin_menu' );

function ascent_admin() {
    require_once get_template_directory() . '/lib/ascent/admin.php';
};