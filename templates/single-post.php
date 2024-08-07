<?php
    /**
     * Single Post template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<?php while ( have_posts() ): the_post();?>
	 <article class="col">
	     <?php if ( $ascent['single_title'] == 2 ): ?>
	     <h2 class="post-title"><a class="no-link" href=""><?php the_title();?></a></h2>
	     <?php if ( $ascent['single_meta'] == 2 ): ?>
	     <div class="blog-attr">
	         <span>By <a class="no-underline"
	                 href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?>
	             </a></span>
	         <span>|</span>
	         <span><?php the_time( 'M j, Y' );?></span>
	         <span>|</span>
	         <?php the_tags( '<span>', ', ', '</span>' );?>
	         <span>|</span>
	         <span><?php comments_popup_link( 'No Comment', '! Comment', '% Comments', 'comment-disabled', 'Comments are disabled' );?></span>
	     </div>
	     <?php endif;?>
<?php endif;?>
     <div class="media">
         <?php the_post_thumbnail();?>
<?php if ( wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ): ?>

         <?php endif;?>
     </div>

     <?php if ( $ascent['single_title'] == 1 ): ?>
     <h2 class="post-title"><a class="no-link" href=""><?php the_title();?></a></h2>
     <?php if ( $ascent['single_meta'] == 2 ): ?>
     <div class="blog-attr">
         <span>By <a class="no-underline"
                 href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?>
             </a></span>
         <span>|</span>
         <span><?php the_time( 'M j, Y' );?></span>
         <span>|</span>
         <?php the_tags( '<span>', ', ', '</span>' );?>
         <span>|</span>
         <span><?php comments_popup_link( 'No Comment', '! Comment', '% Comments', 'comment-disabled', 'Comments are disabled' );?></span>
     </div>
     <?php endif;?>
<?php endif;?>
     <p><?php the_content()?></p>
     <?php if ( $ascent['single_meta'] == 1 ): ?>
     <div class="blog-attr">
         <span>By <a class="no-underline"
                 href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?>
             </a></span>
         <span>|</span>
         <span><?php the_time( 'M j, Y' );?></span>
         <span>|</span>
         <?php the_tags( '<span>', ', ', '</span>' );?>
         <span>|</span>
         <span><?php comments_popup_link( 'No Comment', '! Comment', '% Comments', 'comment-disabled', 'Comments are disabled' );?></span>
     </div>
     <?php endif;?>
<?php if ( $ascent['single_title'] == 3 ): ?>
<?php if ( $ascent['single_meta'] == 2 ): ?>
     <div class="blog-attr">
         <span>By <a class="no-underline"
                 href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author();?>
             </a></span>
         <span>|</span>
         <span><?php the_time( 'M j, Y' );?></span>
         <span>|</span>
         <?php the_tags( '<span>', ', ', '</span>' );?>
         <span>|</span>
         <span><?php comments_popup_link( 'No Comment', '! Comment', '% Comments', 'comment-disabled', 'Comments are disabled' );?></span>
     </div>
     <?php endif;?>
<?php endif;?>
 </article>
 <?php endwhile;?>