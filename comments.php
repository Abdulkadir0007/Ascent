<?php
    /**
     * Comment template.
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
     * The template for displaying Comments.
     *
     * The area of the page that contains comments and the comment form.
     *
     * @package WordPress
     * @subpackage Twenty_Thirteen
     * @since Twenty Thirteen 1.0
     */

    /*
     * If the current post is protected by a password and the visitor has not yet
     * entered the password we will return early without loading the comments.
     */
    if ( post_password_required() ) {
        return;
    }
?>
<?php if ( have_comments() ): ?>
<div class="comments">
    <h3 class="comment-title">
        <?php ob_start();?>
<?php comments_number( esc_html__( 'No Comment', 'Ascent' ), esc_html__( 'One Comment', 'Ascent' ), esc_html__( _n( '% Comment', '% Comments', get_comments_number(), 'Ascent' ) ) );?>
    </h3>
    <ol class="comment-list commentlist">
        <?php wp_list_comments( 'callback=Ascent_comment' );?>
    </ol><!-- .comment-list -->
    <?php
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
            echo '<nav class="fusion-pagination">';
            paginate_comments_links(
                apply_filters(
                    'fusion_comment_pagination_args',
                    [
                        'prev_text' => '<span class="page-prev"></span><span class="page-text">' . esc_attr__( 'Previous', 'Ascent' ) . '</span>',
                        'next_text' => '<span class="page-text">' . esc_attr__( 'Next', 'Ascent' ) . '</span><span class="page-next"></span>',
                        'type'      => 'plain',
                    ]
                )
            );
            echo '</nav>';
        }
    ?>
</div>
<?php endif;?>
<?php if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ): ?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'Ascent' );?></p>
<?php endif;?>
<?php if ( comments_open() ): ?>
<?php
    //Declare Vars
    $comment_send      = 'Post Comment';
    $comment_reply     = 'Leave A Comment';
    $comment_reply_to  = 'Reply';
    $comment_author    = 'Name';
    $comment_email     = 'E-Mail';
    $comment_body      = 'Comment...';
    $comment_url       = 'Website';
    $comment_cookies_1 = ' Save my name, email, and website in this browser for the next time I comment.';

    $comment_before = '';

    $comment_cancel = 'Cancel Reply';

    //Array
    $comments_args = array(
        //Define Fields
        'fields'               => array(
            //Author field
            'author'  => '<div class="row row-cols-md-3 comment-input"><div class="col"><input id="author" name="author" aria-required="true" placeholder="' . $comment_author . '"></input></div>',
            //Email Field
            'email'   => '<div class="col"><input id="email" name="email" placeholder="' . $comment_email . '"></input></div>',
            //URL Field
            'url'     => '<div class="col"><input id="url" name="url" placeholder="' . $comment_url . '"></input></div></div>',
            //Cookies
            'cookies' => '<input type="checkbox" required>' . $comment_cookies_1,
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
        'comment_field'        => '<textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body . '"></textarea>',
        //Message Before Comment
        'comment_notes_before' => __( $comment_before ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after'  => '',
        //Submit Button ID
        'class_submit'         => 'btn br-non primary-button',
        'id_submit'            => __( 'comment-submit' ),
    );
comment_form( $comments_args );
endif;