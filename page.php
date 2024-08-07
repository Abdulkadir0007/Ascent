<?php
    /**
     *Template used for pages
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php get_header();?>
<?php get_template_part( "includes/require/web-title" )?>
<?php get_template_part( "templates/breadcrumb" )?>

<div class="container middle">
    <div class="row">
        <?php get_template_part( "templates/page-post" )?>
<?php get_sidebar()?>
    </div>
</div>

<?php get_footer();?>