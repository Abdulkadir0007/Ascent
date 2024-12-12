<?php

/**
 * 
 * The template for displaying Author archive pages.
 *
 * @package Ascent
 * @since 1.0.0
 */

get_header(); // Include header.php 

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div class="container middle">
    <div class="row mb-3">
        <?php if (!is_front_page()): ?> <div class="col">
                <h2 class="">Bloge</h2>
            </div>
            <div class="col-md-3">
                <form class="input-group searchs" role="search" method="get">
                    <input class="form-control br-non" type="search" name="s" placeholder="Search the site">
                    <input class="btn search-icon br-non" name="go" value="" type="submit">
                </form>
            </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="author mb-3">
        <div class="cat-title">
            <h3><?php _e( 'About the Author: ', 'ascent' ); ?> <?php the_author(); ?></h3>
        </div>
        <div class="d-flex">
            <div class="autor-pic">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 );?>
            </div>
            <div class="author-description">
                <?php if (get_the_author_meta('description')) : ?>
                    <p class="col-md-8"><?php the_author_meta('description'); ?></p>
                <?php endif; ?>
                <p><?php _e( 'So far ', 'ascent' ); ?>  <?php the_author(); ?> <?php _e( ' has created ', 'ascent' ); ?><?php echo count_user_posts( get_the_author_meta( 'ID' ) ); ?> <?php _e( ' blog entries.', 'ascent' ); ?></p>
                <?php
                /** 
                 *Under The loop 
                 *echo get_the_author_posts(); 
                 */
                 ?>
            </div>
        </div>
    </div>
    <h2><?php _e( 'Posts by', 'ascent' ); ?> <?php the_author(); ?>:</h2>
    <hr>
    <div class="col">
    <div class="row row-cols-2 g-3 br-redius">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="col">
                        <div class="inner-article">
                            <div class="media">
                                <div class="d-block">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <div class="hovercover">
                                    <a class="first-child" href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" data-lightbox="image-1">
                                        <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                    </a>
                                    <a href="<?php the_permalink(); ?>" class="last-child">
                                        <div class="media-icon"><i class="fa-solid fa-link"></i></div>
                                    </a>
                                    <h2 class="hovercover-title"><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="article-box p-3">
                                <h2><a class="no-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="blog-attr">
                                    <span>By <?php the_author_posts_link(); ?>
                                        <span>|</span>
                                        <span><?php the_time('M j, Y'); ?></span>
                                        <span>|</span>
                                        <span><?php the_category(', '); ?></span>
                                        <span>|</span>
                                        <span><?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'ascent-comment', '<span class="comment-disabled">Comments are disabled<span>'); ?></span>
                                </div>
                                <p class="article">
                                    <?php echo wp_trim_words(get_the_content(), 20, ' </p><a href="' . get_the_permalink() . '" type="button" class="btn br-non primary-button">Read More</a>') ?>
                            </div>
                        </div>
                    </article>
            <?php endwhile;
            else :
                echo '<p>No posts found</p>';
            endif;
            ?>


            <div class="col-12">

                <div class="pagination justify-content-start">
                    <?php the_posts_pagination(
                        array()
                    ); ?>
                </div>
                <!-- 

                    <div class="pagination justify-content-center">
                            <a class="prev page-numbers" href="">Previous</a>
                            <a class="page-numbers" href="">1</a>
                            <span aria-current="page" class="page-numbers current">2</span>
                            <a class="page-numbers" href="">3</a>
                            <a class="page-numbers" href="">4</a>
                            <a class="next page-numbers" href="">Next</a>
                    </div>
                    

                    <div class="pagination justify-content-end">
                            <a class="prev page-numbers" href="">Previous</a>
                            <a class="page-numbers" href="">1</a>
                            <span aria-current="page" class="page-numbers current">2</span>
                            <a class="page-numbers" href="">3</a>
                            <a class="page-numbers" href="">4</a>
                            <a class="next page-numbers" href="">Next</a>
                    </div>
                                -->
            </div>
        </div>
    </div>
    <?php
    //sidebare
    get_sidebar();
    ?>
</div>
</div>
<?php get_footer(); ?>