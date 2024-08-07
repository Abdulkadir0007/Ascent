<?php
    /**
     * Blog Author template.
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
    <?php if ( $ascent['atpage_side'] == 1 ): ?>

        <?php if ( $ascent['satpage_n'] == 1 ): ?>
        <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['satpage_n'] == 2 ): ?>
        <div class="row row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['satpage_n'] == 3 ): ?>
        <div class="row row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

    <?php elseif ( $ascent['atpage_side'] == 0 ): ?>

        <?php if ( $ascent['atpage_n'] == 1 ): ?>
        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['atpage_n'] == 2 ): ?>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['atpage_n'] == 3 ): ?>
        <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['atpage_n'] == 4 ): ?>
        <div class="row row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

    <?php endif;?>

                    <?php if ( have_posts() ):
                            while ( have_posts() ):
                            the_post();?>
		                            <div class="col">
		                                <article class="post-box">
		                                    <div class="media">
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
	                                    <div class="blog-attr">
	                                        <!-- <span>By <a class="no-underline" href="<? php // echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php //the_author(); ?> </a></span> -->
	                                        <span>By
	                                            <?php the_author_posts_link();?>
	                                        </span>
	                                        <span>|</span>
	                                        <span>
	                                            <?php the_time( 'M j, Y' );?>
	                                        </span>
	                                        <span>|</span>
	                                        <span>
	                                            <?php the_category( ', ' );?>
	                                        </span>
	                                        <span>|</span>
	                                        <span>
	                                            <?php comments_popup_link( 'No Comment', '1 Comment', '% Comments', 'abweb-comment', '<span class="comment-disabled">Comments are disabled<span>' );?>
	                                        </span>
	                                    </div>
	                                    <h2 class="post-title"><a class="no-link" href="<?php the_permalink();?>">
	                                            <?php the_title();?>
	                                        </a></h2>
	                                    <p>
	                                        <?php echo wp_trim_words( get_the_content(), 20, ' </p><a href="' . get_the_permalink() . '" type="button" class="btn br-non primary-button">Read More</a>' ) ?>
	                                </article>
	                            </div>
	                        <?php endwhile;?>
                    <?php else: ?>
                        <h2 class="page-title" >Opps! No Post Found</h2>
                    <?php endif;?>
                </div>
                <div class="col-12 my-3">
                            <?php if ( $ascent['atpage_pagi_alin'] == 1 ): ?>
                            <div class="pagination justify-content-start">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php elseif ( $ascent['atpage_pagi_alin'] == 2 ): ?>
                                <div class="pagination justify-content-center">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php elseif ( $ascent['atpage_pagi_alin'] == 3 ): ?>
                                <div class="pagination justify-content-end">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php endif;?>
                        </div>
            </div>