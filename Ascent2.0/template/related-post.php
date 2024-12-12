<?php
// Get the current author ID
$author_id = get_the_author_meta('ID');

// Set up a custom query to fetch related posts by the same author with thumbnails
$author_related_posts = new WP_Query(array(
    'author'        => $author_id,
    'posts_per_page' => 4, // Number of related posts to display
    'post__not_in'  => array(get_the_ID()), // Exclude the current post
    'meta_query'    => array(
        array(
            'key'     => '_thumbnail_id', // Check if the post has a featured image
            'compare' => 'EXISTS',        // Only include posts with thumbnails
        ),
    ),
));

// Check if there are related posts
if ($author_related_posts->have_posts()) : ?>
        <h3><?php _e('Related Posts by', 'ascent'); ?> <?php the_author(); ?></h3>
    <div class="row row-cols-4 g-3 align-items-center">

        <?php while ($author_related_posts->have_posts()) : $author_related_posts->the_post(); ?>
            <article class="col author-related-post">
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
            </article>
        <?php endwhile; ?>
    </div>
<?php
    // Reset post data after custom query
    wp_reset_postdata();
endif;
?>