<?php
    /**
     *Template used for search Page
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
<?php
    if ( $ascent['spage_web'] == 1 ) {
        get_template_part( "includes/require/web-title" );
    }
    ;
?>
<?php get_template_part( "templates/archive-breadcrumb" )?>
<nav aria-label="breadcrumb">
</nav>

<?php get_template_part( "includes/require/blog-search" )?>
<div class="p-3 d-block"></div>
<?php get_footer();?>