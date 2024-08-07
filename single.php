<?php
    /**
     *Template used for single posts
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
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
    <?php if ( $ascent['sing_pagi'] == 1 ): ?>
    <div class="pagination justify-content-end">
        <?php the_post_navigation(
                array(
                    'prev_text' => '<span class="prev page-numbers" href="">Previous Post</span>',
                    'next_text' => '<span class="next page-numbers" href="">Next Post</span>',
                )
        );?>

    </div>
    <?php endif;?>
</div>
<div class="container middle">
    <div class="row">
        <?php get_template_part( "templates/single-post" )?>
<?php if ( $ascent['aut_info'] == 1 ): ?>
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
    <?php if ( $ascent['aut_rel'] == 1 ): ?>
<?php get_template_part( 'templates/related-post' )?>
<?php endif;

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