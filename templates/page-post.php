<?php
    /**
     * Page Post template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<div class="col">
    <div class="row">
        <?php
        while ( have_posts() ): the_post();?>
	        <article class="col-lg">
	            <?php if ( $ascent['grpage_title'] == 1 ): ?>
	            <h2 class="page-title"><a class="no-link" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	            <?php endif;?>
            <div class="media">
                <?php the_post_thumbnail();?>
<?php if ( $ascent['grpage_mhover'] == 1 ): ?>
<?php
if ( wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ): ?>
                <div class="hovercover">
                    <a class="first-child"
                        href="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>"
                        data-lightbox="image-1">
                        <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </a>
                    <a href="<?php the_permalink();?>" class="last-child">
                        <div class="media-icon"><i class="fa-solid fa-link"></i></div>
                    </a>
                    <h2 class="hovercover-title"><?php the_title();?></h2>
                </div>
                <?php endif;?>
<?php endif;?>
            </div>
            <p><?php the_content();?></p>
        </article>
        <?php endwhile;?>
    </div>

</div>