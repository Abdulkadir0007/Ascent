<?php

/**
 * The main template file
 *
 * This file is the fallback template that displays all posts
 * if no other specific templates are available.
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="">Blog</a></li>
        </ol>
    </nav>
<?php endif; ?>
<div class="row">

    <div class="col">
        <div class="row">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="col-12 my-4">
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
                                <h2 class="post-title"><a class="no-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="blog-attr">
                                    <span>By <?php the_author_posts_link(); ?>
                                        <span>|</span>
                                        <span><?php the_time('M j, Y'); ?></span>
                                        <span>|</span>
                                        <span><?php the_category(', '); ?></span>
                                        <span>|</span>
                                        <span><?php comments_popup_link('No Comment', '1 Comment', '% Comments', 'ascent-comment', '<span class="comment-disabled">Comments are disabled<span>'); ?></span>
                                </div>
                                <p class="article-content">
                                    <?php echo wp_trim_words(get_the_content(), 20, ' </p><a href="' . get_the_permalink() . '" type="button" class="btn br-non primary-button">Read More</a>') ?>
                                    <hr>
                            </div>
                        </div>
                    </article>
            <?php endwhile;
            else :
                echo '<p>No posts found</p>';
            endif;
            ?>
            <?php
            //pagination
            get_template_part('template/pagination')
            ?>
        </div>
    </div>
    <?php
    //sidebare
    get_sidebar();
    ?>
</div>
</div>
<?php get_footer(); ?>