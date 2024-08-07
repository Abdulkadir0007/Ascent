<?php
    /**
     *functions file
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;

//theme setup
require_once get_template_directory() . '/includes/ascent_functions/function.php';
//scripts connect
require_once get_template_directory() . '/includes/ascent_functions/enqueue.php';
//Comment List
require_once get_template_directory() . '/includes/ascent_functions/comment-list.php';
//Widgets
require_once get_template_directory() . '/includes/ascent_functions/widgets.php';
require_once get_template_directory() . '/includes/ascent_functions/project.php';
//Options
require_once get_template_directory() . '/lib/options/redux-core/framework.php';
require_once get_template_directory() . '/lib/options/config/config.php';
//Include the update checker
require get_template_directory() . '/lib/ascent/update-checker.php';
//Options
require_once get_template_directory() . '/lib/ascent/ascent_admin.php';
require_once get_template_directory() . '/lib/ascent/slider.php';
//Options
require_once get_template_directory() . '/lib/ascent/style.php';
require_once get_template_directory() . '/lib/ascent/scripts.php';
