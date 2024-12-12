<?php

/**
 * 
 * The Single Post template
 *
 *
 * @package Ascent
 * @since 1.0.0
 */


if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header(); // Include header.php 
?>
<div class="container middle">
    <div class="row mb-3">
        <div class="col">
            <h2 class="">Bloge</h2>
        </div>
        <div class="col-md-3">
            <form class="input-group searchs" role="search" method="get">
                <input class="form-control br-non" type="search" name="s" placeholder="Search the site">
                <input class="btn search-icon br-non" name="go" value="" type="submit">
            </form>
        </div>
    </div>
    <div class="pagination justify-content-end mb-3">
        <?php previous_post_link('%link', 'Previous Post: %title'); ?>

        <?php next_post_link('%link', 'Next Post: %title'); ?>

    </div>
    <div class="row">
        <div class="col">
            <?php
            while (have_posts()) : the_post(); ?>
                <article class="col">
                    <div class="media">
                        <div class="d-block">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php if (get_the_post_thumbnail_url(get_the_ID(), 'full')): ?>
                            <div class="hovercover">
                                <a class="first-child" href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" data-lightbox="image-1">
                                    <div class="media-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="last-child">
                                    <div class="media-icon"><i class="fa-solid fa-link"></i></div>
                                </a>
                                <h2 class="hovercover-title"><?php the_title(); ?></h2>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="blog-attr">
                        <span>By <?php the_author_posts_link(); ?>
                            <span>|</span>
                            <span><?php the_time('M j, Y'); ?></span>
                            <span>|</span>
                            <span><?php the_category(', '); ?></span>
                            <span>|</span>
                            <span><?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'ascent-comment', '<span class="comment-disabled">Comments are disabled<span>'); ?></span>
                    </div>
                    <h2><a class="no-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="article"><?php the_content(); ?> </p>
                </article>
            <?php endwhile;
            ?>

        </div>
        <div class="author">
            <div class="cat-title">
                <h3>About the Author: <?php the_author_posts_link(); ?></h3>
            </div>
            <div class="d-flex">
                <div class="autor-pic align-self-center me-2">
                    <?php echo get_avatar(get_the_author_meta('email'), '82'); ?>
                </div>
                <div class="author-description align-self-center">
                    <p class="align-self-center mb-0"><?php the_author_meta('description'); ?></p>
                </div>
            </div>
        </div>
        <?php get_template_part('template/related-post') ?>
        <?php
        // Check if comments are open or if there are comments, then load the comment template
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

    </div>
</div>

<?php get_footer(); ?>