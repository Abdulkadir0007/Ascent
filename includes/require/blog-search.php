<?php
    /**
     * Blog Search template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<div class="m-4 d-block"></div>
<div class="container middle">
    <?php if ( $ascent['spage_title'] == 1 ): ?>
<?php if ( have_posts() ): ?>
        <h2 class="page-title">
            <?php printf( __( 'Search Results for: %s', 'Ascent' ), get_search_query() );?>
            </h2>
        <?php endif;?>
<?php endif;?>
        <div class="row">

            <div class="col">

            <?php if ( $ascent['spage_post'] == 4 ): ?>
        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['spage_post'] == 3 ): ?>
        <div class="row  row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['spage_post'] == 2 ): ?>
        <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

        <?php if ( $ascent['spage_post'] == 1 ): ?>
        <div class="row row-cols-1 g-3 align-self-stretch">
        <?php endif;?>

                    <?php if ( have_posts() ):

                            while ( have_posts() ):
                            the_post();?>

		                            <div class="col">
		                                <article class="post-box">
		                                    <div class="media">
		                                        <?php the_post_thumbnail();?>

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
		                                                <h2 class="hovercover-title">
		                                                    <?php the_title();?>
		                                                </h2>
		                                            </div>
		                                        <?php endif;?>
	                                    </div>
	                                    <div class="blog-attr">
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
	                                        <?php echo wp_trim_words( get_the_content(), 35, ' </p><a href="' . get_the_permalink() . '" type="button" class="btn br-non primary-button">Read More</a>' ) ?>
	                                </article>
	                            </div>
	                        <?php endwhile;?>

                    <?php else: ?>
                        <h2 class="page-title my-5">Opps! Search result Not Found</h2>
                    <?php endif;?>
                </div>
<!--chack !-->
<div class="col-12">
                            <?php if ( $ascent['spage_pagi_alin'] == 1 ): ?>
                            <div class="pagination justify-content-start">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php elseif ( $ascent['spage_pagi_alin'] == 2 ): ?>
                                <div class="pagination justify-content-center">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php elseif ( $ascent['spage_pagi_alin'] == 3 ): ?>
                                <div class="pagination justify-content-end">
                                <?php the_posts_pagination(
                                        array(
                                        )
                                );?>
                            </div>
                            <?php endif;?>
                        </div>
            </div>

        </div>
</div>
