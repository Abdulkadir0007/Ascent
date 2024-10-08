<?php
    /**
     *Comment form Template
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    //Declare Vars
    $comment_send      = 'Send';
    $comment_reply     = 'Leave a Message';
    $comment_reply_to  = 'Reply';
    $comment_author    = 'Name';
    $comment_email     = 'E-Mail';
    $comment_body      = 'Comment';
    $comment_url       = 'Website';
    $comment_cookies_1 = ' By commenting you accept the';
    $comment_cookies_2 = ' Privacy Policy';

    $comment_before = 'Registration isn\'t required.';

    $comment_cancel = 'Cancel Reply';

    //Array
    $comments_args = array(
        //Define Fields
        'fields'               => array(
            //Author field
            'author'  => '<p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author . '"></input></p>',
            //Email Field
            'email'   => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email . '"></input></p>',
            //URL Field
            'url'     => '<p class="comment-form-url"><br /><input id="url" name="url" placeholder="' . $comment_url . '"></input></p>',
            //Cookies
            'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
        ),
        // Change the title of send button
        'label_submit'         => __( $comment_send ),
        // Change the title of the reply section
        'title_reply'          => __( $comment_reply ),
        // Change the title of the reply section
        'title_reply_to'       => __( $comment_reply_to ),
        //Cancel Reply Text
        'cancel_reply_link'    => __( $comment_cancel ),
        // Redefine your own textarea (the comment body).
        'comment_field'        => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body . '"></textarea></p>',
        //Message Before Comment
        'comment_notes_before' => __( $comment_before ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after'  => '',
        //Submit Button ID
        'id_submit'            => __( 'comment-submit' ),
    );
    comment_form( $comments_args );

?>
<div class="container">
    <div class="row">
        <?php $categories = get_the_category( $post->ID );?>
<?php if ( $categories ): ?>
<?php $category_ids = array();?>
<?php foreach ( $categories as $individual_category ): ?>
<?php $category_ids[] = $individual_category->term_id;?>
<?php endforeach;?>
<?php $args = array(
        'category__in'        => $category_ids,
        'post__not_in'        => array( $post->ID ),
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
        'oderby'              => 'rand',
);?>
<?php $my_query = new WP_Query( $args );?>
<?php if ( $my_query->have_posts() ): ?>
        <section class="container">
            <h3 style="text-transform: normal; font-weight: 400;">Vous aimerez aussi :</h3>

            <div class="row">
                <?php while ( $my_query->have_posts() ): $my_query->the_post();?>
	                <div class="col-md-4">

	                    <a href="<?php the_permalink()?>" class="related-thumb"><?php the_post_thumbnail();?></a>
	                    <h4 class="title-like"><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>

	                </div>
	                <?php endwhile;?>
            </div>

        </section>
        <?php endif;?>
<?php wp_reset_query();?>
<?php endif;?>
    </div>
</div>