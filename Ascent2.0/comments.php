<?php
// If the post is password-protected, return early without loading comments
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                printf( __( 'One comment on &ldquo;%1$s&rdquo;', 'ascent' ), '<span>' . get_the_title() . '</span>' );
            } else {
                printf( _n( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $comment_count, 'ascent' ), number_format_i18n( $comment_count ), '<span>' . get_the_title() . '</span>' );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
                'callback'   => 'custom_comments' // Custom comment callback function
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a note.
        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'ascent' ); ?></p>
            <?php
        endif;

    endif; // Check for have_comments().

    // Comment form customization
    comment_form( array(
        'title_reply' => __( 'Leave a Comment', 'ascent' ),
        'label_submit' => __( 'Submit Comment', 'ascent' ),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Comment', 'noun', 'ascent' ) . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'class_submit' => 'btn btn-primary' // Add custom class to the submit button
    ) );
    ?>

</div><!-- #comments -->

<?php
// Custom comment callback function
function custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div class="comment-body">
            <div class="comment-author vcard">
                <?php echo get_avatar( $comment, 50 ); ?>
                <?php printf( '<cite class="fn">%s</cite>', get_comment_author_link() ); ?>
                <span class="comment-meta"><?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>', esc_url( get_comment_link( $comment->comment_ID ) ), get_comment_time( 'c' ), get_comment_date() ); ?></span>
            </div>
            <div class="comment-content"><?php comment_text(); ?></div>
            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
        </div><!-- .comment-body -->
    </li>
    <?php
}
?>
