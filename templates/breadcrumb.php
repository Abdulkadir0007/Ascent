<?php
    /**
     * Breadcrumb template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<?php if ( !is_front_page() ): ?>
<section class="breadcrumb mt-3 mb-0">
    <div class="container">
<?php if ( !is_home() ): ?>
<?php if ( $ascent['bread-page'] == 1 ): ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <?php while ( have_posts() ): the_post();?>
		                    <li class="breadcrumb-item active"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></li>
		                <?php endwhile;?>
                </ol>
            </nav>
            <?php endif;?>
<?php else: ?>

    <?php if ( $ascent['bread-layout'] == 1 ): ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="">Blog</a></li>
                </ol>
            </nav>
            <?php endif;?>
<?php endif;?>
</div>
</section>
<?php endif;?>