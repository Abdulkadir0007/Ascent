<?php
    /**
     *The theme's index.php file.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php get_header();global $ascent?>
<?php get_template_part( "includes/require/web-title" )?>
<?php get_template_part( "templates/breadcrumb" )?>

<div class="container middle">
    <div class="row">

        <?php if ( $ascent['bl_side_side'] == 1 ): ?>
<?php if ( $ascent['bl_side'] == 1 ): ?>
<?php get_sidebar()?>
<?php endif;?>
<?php endif;?>

        <?php get_template_part( "templates/blog-post" )?>
        
<?php if ( $ascent['bl_side_side'] == 0 ): ?>
<?php if ( $ascent['bl_side'] == 1 ): ?>
<?php get_sidebar()?>
<?php endif;?>
<?php endif;?>


    </div>
</div>

<?php get_footer();?>