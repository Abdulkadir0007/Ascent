<?php
    /**
     * Related Post template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<div class="row">
    <?php $related = get_the_author_id();?>
<?php $args    = array(
        'author__in'          => $related,
        'post__not_in'        => array( $post->ID ),
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => 1,
        'oderby'              => 'rand',
);?>
<?php $my_query = new WP_Query( $args );?>
<?php if ( $my_query->have_posts() ): ?>
    <section class="container">
        <h3>Related Post</h3>

        <div class="row g-xl-5 g-md-4 g-3">
            <?php while ( $my_query->have_posts() ):
                $my_query->the_post();?>
	            <div class="col-md-3 col-6">
	                <div class="media related">
	                    <?php the_post_thumbnail();?>
<?php if ( wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ): ?>
	                    <div class="hovercover">
	                        <a class="first-child"
	                            href="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>"
	                            data-lightbox="image-1">
	                            <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
	                        </a>
	                        <a href="<?php the_permalink();?>" class="last-child">
	                            <div class="media-icon"><i class="fa-solid fa-link"></i></div>
	                        </a>
	                        <h2 class="hovercover-title">
	                            <?php the_title();?>
	                        </h2>
	                    </div>
	                    <?php endif;?>
                </div>

            </div>
            <?php endwhile;?>
        </div>

    </section>
    <?php endif;?>
<?php wp_reset_query();?>
</div>