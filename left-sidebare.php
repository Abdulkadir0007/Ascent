<?php
    /**
     *Template name: Left Sidebar
     * Left Sidebar template.
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
<?php get_template_part( "templates/breadcrumb" )?>

<div class="container middle">
    <div class="row">
        <?php get_sidebar()?>
<?php get_template_part( "templates/page-post" )?>


    </div>
</div>

<?php get_footer();?>