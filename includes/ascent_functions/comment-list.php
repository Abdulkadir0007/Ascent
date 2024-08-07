<?php
    /**
     *Comment List Template
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;

    function Ascent_comment( $comment, $args, $depth ) {
    ?>
<?php $add_below = '';?>
<li<?php comment_class();?> id="comment-<?php comment_ID();?>">
    <div class="the-comment d-flex">
        <div class="avatar"><?php echo get_avatar( $comment, 54 ); ?></div>
        <div class="comment-box ms-3 w-100">
            <div class="comment-author meta mb-2">
                <strong><?php echo get_comment_author_link(); ?></strong>
                <span>
                    <?php
                        printf(
                                /* translators: %1$s: Comment date. %2$s: Comment time. */
                                esc_attr__( '%1$s at %2$s', 'Ascent' ),
                                get_comment_date(), // phpcs:ignore WordPress.Security.EscapeOutput
                                get_comment_time()  // phpcs:ignore WordPress.Security.EscapeOutput
                            );
                        ?>
                </span>
                <span class="float-end">
                    <?php
                        edit_comment_link( __( '  Edit', 'Ascent' ), '  ', '' );

                            comment_reply_link(
                                array_merge(
                                    $args,
                                    [
                                        'reply_text' => __( ' - Reply', 'Ascent' ),
                                        'add_below'  => 'comment',
                                        'depth'      => $depth,
                                        'max_depth'  => $args['max_depth'],
                                    ]
                                )
                            );
                        ?>
                </span>
            </div>
            <div class="comment-text">
                <?php if ( '0' == $comment->comment_approved ): // phpcs:ignore WordPress.PHP.StrictComparisons ?>
		                <em><?php esc_attr_e( 'Your comment is awaiting moderation.', 'Ascent' );?></em>
		                <br />
		                <?php endif;?>
<?php comment_text();?>
            </div>
        </div>
    </div>
    <?php
    }