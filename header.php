<?php
    /**
     * Header template.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php global $ascent?>
<!doctype html>
<html      <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php print $ascent['favicon']['url']?>" type="image/x-icon">
    <?php wp_head();?>
</head>

<body class="<?php if ( $ascent['layout_switch'] == 1 ) {echo 'boxed';}?>">

<?php get_template_part( "includes/require/slider" )?>
    <?php if ( $ascent['switch_hbdead'] == 1 ): ?>
<?php get_template_part( "templates/sub-header" )?>
<?php endif;?>
<?php get_template_part( "templates/header-layout" )?>

    <section class="bgback">