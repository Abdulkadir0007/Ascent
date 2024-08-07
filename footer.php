<?php
    /**
     * Footer template.
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
     *Template name
     * Left Sidebar template.
     *
     *  @package Abweb
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit;
    }
    global $ascent;
?>
</section>
<?php
if ( is_active_sidebar( 'widgets-one' ) || is_active_sidebar( 'widgets-two' ) || is_active_sidebar( 'widgets-three' ) || is_active_sidebar( 'widgets-four' ) ): ?>
<footer class="footer">
    <div class="container">
        <div class="row footer-padding row-gap-3">
            <div class="col-lg-3 col-sm-6 col-12">
                <?php dynamic_sidebar( 'widgets-one' )?>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 ">
                <?php dynamic_sidebar( 'widgets-two' )?>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <?php dynamic_sidebar( 'widgets-three' )?>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <?php dynamic_sidebar( 'widgets-four' )?>
            </div>
        </div>

    </div>

</footer>
<?php endif;?>

<div class="sub-fotter">
    <div class="container">
        <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1">
            <?php if ( $ascent['fttr_copy'] == true ): ?>
            <div class="col">
                <p><?php print $ascent['fttr_copy_text'];?></p>
            </div>
            <?php endif;?>
<?php if ( $ascent['fttr_prive'] == true ): ?>
            <div class="col text-center">
                <p><?php print $ascent['fttr_copy_text'];?></p>
            </div>
            <?php endif;?>
<?php if ( $ascent['fttr_policy_text'] == true ): ?>
            <div class="col text-end">
                <div class="socail-icon">
                    <?php get_template_part( "includes/require/socail-icon" )?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>
<script>

</script>
<?php wp_footer();?>
</body>

</html>