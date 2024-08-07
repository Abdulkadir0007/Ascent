<?php
    /**
     *The template used for 404 pages.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;
?>

<?php get_header();?>

<div class="container middle">
    <div class="row justify-content-center">
        <div class="col-8 my-4">
            <div class="404-img"><img class="" style="width:100%" src="<?php print $ascent['eror-img']['url']?>" alt="">
            </div>
            <div class="404-massseg text-center">
                <h3>Page Not Found</h3>
                <h4>The page you are looking for does not exist or the link might be correupted</h4>
                <a href="<?php print home_url();?>" type="button" class="btn br-non primary-button">GO BACK</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>