<?php

/**
 * The page template file
 *
 * This file is the fallback template that displays all posts
 * if no other specific templates are available.
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
        <div class="col">
            <?php if (!is_front_page()): ?> <div class="col">
                    <h2 class=""><?php the_title(); ?></h2>
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
                <?php while (have_posts()): the_post(); ?>
                    <li class="breadcrumb-item"><a href=""><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ol>
        </nav>
    <?php endif; ?>
    <div class="row">

        <div class="col">
            <?php    while (have_posts()) : the_post(); ?>
                    <article class="col">
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
                        <p class="article"><?php the_content(); ?></p>
                    </article>
            <?php endwhile;?>
        </div>

        <?php
        //Sidbar
        get_sidebar();
        ?>
    </div>
    </div>
    <?php get_footer(); ?>