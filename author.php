<?php
    /**
     * Authors template.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php get_header();?>
<?php
    if ( $ascent['atpage_web'] == 1 ) {
        get_template_part( "includes/require/web-title" );
    }
    ;
?>
<div class="container middle">
    <?php if ( $ascent['atpage_title'] == 1 ): ?>
    <div class="author my-5">
        <div class="row align-items-center">
            <div class="col-md-auto">
                <div class="autor-pic">
                    <?php echo get_avatar( get_the_author_meta( 'email' ), '82' ); ?>
                </div>
            </div>
            <div class="col-md align-self-center">
                <div class="cat-title">
                    <h3>About the Author:                                          <?php the_author();?></h3>
                </div>
                <div class="author-description">
                    <?php
                        // get author ID
                        $author_id = get_the_author_meta( 'ID' );

                        // echo count for post type (post and book)
                        $projectnumber = count_user_posts( $author_id, ['ascent_project'] );

                    ?>

                    <p class="pb-2"><?php the_author_meta( 'description' );?></p>
                    <?php if ( get_the_author_posts() > 1 ): ?>
                    <p>So far <?php the_author();?> has created <?php echo get_the_author_posts(); ?> blog entries.</p>
                    <?php endif;?>
<?php
    global $ascent;

    $prname = $ascent['projec_sing_name'];

if ( $projectnumber > 1 ): ?>
                    <p class="">So far <?php the_author();?> has created 
                        <?php echo $projectnumber . ' ';if ( $prname > 1 ) {echo $prname;} else {echo 'Project';} ?> entries.
                    </p>

                    <?php endif;?>



                </div>
            </div>
        </div>

    </div>

    <?php endif;?>
    <div class="row">
        <?php get_template_part( "includes/require/blog-author" )?>
<?php if ( $ascent['atpage_side'] == 1 ): ?>
<?php get_sidebar()?>
<?php endif;?>

    </div>
</div>

<?php get_footer();?>