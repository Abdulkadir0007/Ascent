<?php
    /**
     *Template used for Project Page
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
    /**
     *Template name: Project
     * Left Sidebar template.
     *
     *  @package Abweb
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit;
    }
global $ascent;?>
<?php get_header();?>
<?php get_template_part( "templates/breadcrumb" )?>


<?php if ( $ascent['project_top'] == 1 ): ?>
<section class="project-show">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 align-self-center my-3">
                <h2 class="page-title"><?php print $ascent['pro_title']?></h2>
                <p><?php the_content();?></p>
                <a href="<?php print $ascent['project_button_link']?>" target="_blank" type="button"
                    class="btn br-non primary-button"><?php print $ascent['project_button_text']?></a>
            </div>
            <div class="col-lg-8 col-md-7">
                <div id="project-slider" class="carousel slide project-slider" data-bs-ride="carousel">

                    <div class="carousel-inner" data-bs-interval="100">
                        <?php $project_slider = new wp_query( [
                                'post_type'      => 'ascent_project',
                                'posts_per_page' => -1,
                            ] );
                            while ( $project_slider->have_posts() ): $project_slider->the_post();
                            ?>
		                        <div class="carousel-item">
		                            <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>"
		                                class=" w-100" alt="<?php the_title();?>">
		                            <div class="carousel-caption d-none d-md-block">
		                                <h5><?php the_title();?></h5>
		                                <?php $port_type = get_the_terms( get_the_ID(), 'port-cat' );
                                                if ( !empty( $port_type ) ) {
                                                    foreach ( $port_type as $pkey ) {
                                                        print '<span>' . $pkey->name . '</span>';
                                                    }
                                                }
                                            ?>
		                            </div>
		                        </div>
		                        <?php endwhile;?>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#project-slider"
                        data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#project-slider"
                        data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>


<div class="container middle mb-3">
    <div class="row">
        <?php
            $have_project = new wp_query( array(
                'post_type' => 'ascent_project',
            ) );
        if ( $have_project->have_posts() ): ?>


        <?php if ( $ascent['project_button_filtering'] == 1 ): ?>
        <nav class="project-list">
            <ul>
                <li><a class="project-filter" href="#" data-filter="all"><span>All</span></a></li>
                <?php $all_catg = get_terms( 'port-cat' );
                    foreach ( $all_catg as $catnam ):
                ?>
                <li><a class="project-filter" href="#"
                        data-filter="<?php print $catnam->slug;?>"><span><?php print $catnam->name;?></span></a></li>
                <?php endforeach;?>
            </ul>
        </nav>
        <?php endif;

            $project_number = $ascent['project_post_show'];
        ?>
<?php $project_post = new wp_query( [
        'post_type'      => 'ascent_project',
        "posts_per_page" => $project_number,
        'paged'          => $paged,
    ] );

    while ( $project_post->have_posts() ): $project_post->the_post();
    ?>
		        <div class="col-xl-3 col-md-4 col-sm-6 filter <?php $port_type = get_the_terms( get_the_ID(), 'port-cat' );
        foreach ( $port_type as $pkey ) {
            print $pkey->slug . ' ';
    }
    ?>">
		            <a href="<?php the_permalink();?>">
		                <div class="project-item mb-3">
		                    <div class="media">
		                        <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>"
		                            class=" w-100" alt="<?php the_title();?>">
		                        <?php if ( $ascent['project_hover_covoe'] == 1 ): ?>
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
<?php endif;?>
                    </div>
                    <div class="project-caption">
                        <h5><?php the_title();?></h5>
                        <?php $port_type = get_the_terms( get_the_ID(), 'port-cat' );
                            if ( !empty( $port_type ) ) {
                                foreach ( $port_type as $pkey ) {
                                    print '<span>' . $pkey->name . '</span>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile;?>
<?php

    if ( $ascent['project_pagination'] == 1 ):
        // Pagination
    ?>
		        <div
		            class="pagination		                             	                              <?php if ( $ascent['pro_pagi_alin'] == 1 ) {echo 'justify-content-start';} elseif ( $ascent['pro_pagi_alin'] == 2 ) {echo 'justify-content-center';} elseif ( $ascent['pro_pagi_alin'] == 3 ) {echo 'justify-content-end';}?>">
            <?php
                echo paginate_links( [
                    'total'     => $project_post->max_num_pages,
                    'current'   => max( 1, get_query_var( 'paged' ) ),
                    'prev_text' => __( 'Previous' ),
                    'next_text' => __( 'Next' ),
                ] );
                echo '</div>';
                endif;
                wp_reset_postdata();
            ?>
<?php else: ?>
            <h2 class="post-title">Opps! No<?php print $ascent['projec_sing_name'];?> Found</h2>
            <?php endif;?>
        </div>


    </div>



    <?php get_footer();?>