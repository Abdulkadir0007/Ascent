<?php
    /**
     *Template name: Full Width
     * Full Width template.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php
    /**
     *Template name: Full Width
     * Left Sidebar template.
     *
     *  @package Abweb
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit;
    }
;?>
<?php get_header();?>
<?php get_template_part( "includes/require/web-title" )?>
<?php get_template_part( "templates/breadcrumb" )?>

<div class="container middle">
    <div class="row">
        <?php get_template_part( "templates/page-post" )?>
    </div>
</div>

<?php get_footer();?>