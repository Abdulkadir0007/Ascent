<?php
    /**
     *Template used for Project Single Page
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
/* Template Name: Single Project */
?>
<?php get_header();global $ascent;?>
<div class="container">
    <div class="row mb-3">
        <div class="col ">
            <h2 class="d-inline-block">
                <?php bloginfo( 'title' );?>
            </h2>
            <h3 class="d-inline-block ms-3">
                <?php bloginfo( 'description' );?>
            </h3>
        </div>
        <div class="col-md-3">
            <form action="<?php echo home_url(); ?>" class="input-group searchs" role="search" method="get">
                <input class="form-control br-non" type="search" name="s" placeholder="Search the site">
                <input class="btn search-icon br-non" name="go" value="" type="submit">
            </form>
        </div>
    </div>
    <?php $prp_name = $ascent['projec_sing_name'];?>
<?php if ( $ascent['projec_sing_pagi'] == 1 ): ?>
    <div class="pagination justify-content-end">
        <?php the_post_navigation(
                array(
                    'prev_text' => '<span class="prev page-numbers" href="">Previous ' . $prp_name . '</span>',
                    'next_text' => '<span class="next page-numbers" href="">Next ' . $prp_name . '</span>',
                )
        );?>

    </div>
    <?php endif;?>
</div>
<div class="container middle mb-3">
    <div class="row">

        <?php while ( have_posts() ): the_post();?>
	        <article class="col">
	            <h2 class="post-title"><a class="no-link" href="<?php the_permalink();?>">
	                    <?php the_title();?>
	                </a></h2>
	            <div class="media">
	                <?php the_post_thumbnail();?>

	            </div>
	            <p><?php the_content()?></p>
	        </article>
	        <?php endwhile;?>



        <?php if ( $ascent['project_aut_info'] == 1 ): ?>
        <div class="author">
            <div class="cat-title">
                <h3>About the Author: <a href="">
                        <?php the_author_posts_link();?>
                    </a></h3>
            </div>

            <div class="d-flex">
                <div class="autor-pic">
                    <?php echo get_avatar( get_the_author_meta( 'email' ), '82' ); ?>
                </div>
                <div class="author-description">
                    <p>
                        <?php the_author_meta( 'description' );?>
                    </p>
                </div>

            </div>
        </div>
        <?php endif;?>
    </div>

    <div class="row">
        <?php if ( $ascent['project_aut_rel'] == 1 ): ?>
<?php $related = get_the_author_id();?>
<?php $args    = array(
        'post_type'           => 'ascent_project',
        'author__in'          => $related,
        'post__not_in'        => array( $post->ID ),
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => 1,
        'oderby'              => 'rand',
);?>
<?php $my_query = new WP_Query( $args );?>
<?php if ( $my_query->have_posts() ): ?>
        <section class="container">
            <h3>Related                        <?php print $prp_name;?></h3>

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
<?php endif;?>
    </div>
    <?php

    if ( $ascent['single_comment'] == 1 ): ?>
<?php
    if ( comments_open() || get_comments_number() ):
        comments_template();
    endif;

?>
<?php endif;?>
</div>
</div>

<?php get_footer();?>