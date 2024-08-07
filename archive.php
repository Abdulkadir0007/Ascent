<?php
    /**
     * Archives template.
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
    if ( $ascent['arpage_web'] == 1 ) {
        get_template_part( "includes/require/web-title" );
    }
    ;
?>

<div class="container middle">
    <?php if ( $ascent['arpage_title'] == 1 ): ?>
    <div class="author my-5">
        <?php the_archive_title( '<h2 class="archive-title page-title">', '</h2>' );?>
        <div class="author-description">
            <p class="article"><?php echo category_description(); ?></p>
        </div>
    </div>
    <?php endif;?>
    <div class="row">
        <?php get_template_part( "includes/require/blog-archive" )?>

        <?php if ( $ascent['arpage_side'] == 1 ): ?>
<?php get_sidebar()?>
<?php endif;?>
    </div>
</div>

<?php get_footer();?>