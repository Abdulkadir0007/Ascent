<?php
    /**
     * Slider template.
     *
     *  @package Ascent
     */
    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }

    function slider_shotcode( $atts ) {
        global $ascent;
        ob_start();

        global $ascent;
    ?>
<?php $abslider = new WP_Query( array(
            'post_type'      => 'ascent_slider',
            'posts_per_page' => -1,
        ) );
        if ( $abslider->have_posts() ):
    ?>


<div id="carouselOne"
    class="carousel slide                                                                     <?php if ( $ascent['a_slider_style'] == 2 ) {echo 'carousel-fade';}?>"
    data-bs-ride="carousel">
    <?php if ( $ascent['a_slider_btoom'] == true ): ?>


    <div class="carousel-indicators">
        <?php
            $i = 0;
                while ( $abslider->have_posts() ): $abslider->the_post();
                ?>
	        <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="<?php print $i++;?>"></button>
	        <?php endwhile;
                wp_reset_postdata();?>
    </div>


    <?php endif;?>
    <div class="carousel-inner">
        <?php
            while ( $abslider->have_posts() ): $abslider->the_post();
                ?>
	        <div class="carousel-item"
	            data-bs-interval="<?php if ( $ascent['a_slider_time'] == 1 ) {echo 1500;} elseif ( $ascent['a_slider_time'] == 2 ) {echo 2500;} elseif ( $ascent['a_slider_time'] == 3 ) {echo 4000;}?>">
            <a href="<?php $custom_text = get_post_meta( get_the_ID(), 'Custop_post_link', true );
                         echo $custom_text;?>"><img
                    src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>"
                    class="d-block w-100" alt="<?php the_title();?>"></a>
            <div class="carousel-caption d-none d-md-block">
                <?php if ( $ascent['a_slider_title_switch'] == true ): ?>
                <h5 class="cursol-title"><?php the_title();?></h5>
                <?php endif;?>
<?php if ( $ascent['a_slider_text_switch'] == true ): ?>
                <p class="cursol-text">
                    <?php echo wp_trim_words( get_the_content(), 21, '' ) ?></p>
                <?php endif;?>
            </div>
        </div>
        <?php endwhile;
            wp_reset_postdata();?>
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne" data-bs-slide="prev">
        <i class="fa-solid fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselOne" data-bs-slide="next">
        <i class="fa-solid fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<?php

        endif;
        $myvariable = ob_get_clean();
        return $myvariable;
}
add_shortcode( 'slider', 'slider_shotcode' );