<?php

/**
 * The Footer for Ascent Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 *
 * @package Ascent
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<footer>
    <div class="container mt-3">
        <div class="row py-3">
            <div class="col">
                <?php if (is_active_sidebar('widgets-one')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('widgets-one'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (is_active_sidebar('widgets-two')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('widgets-two'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (is_active_sidebar('widgets-three')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('widgets-three'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (is_active_sidebar('widgets-four')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('widgets-four'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div class="sub-fotter">
        <div class="container pt-2">
            <div class="row">
                <div class="col-md">
                    <p>COppy Right By Abdul Kadir</p>
                </div>
                <div class="col-md text-center">
                    <p>Trems Polycy </p>
                </div>
                <div class="col-md text-end">
                    <p>All Socail Icon</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--Plugin Initialization-->
<script type="text/javascript">
    $(document).ready(function() {
        $("#respMenu").aceResponsiveMenu({
            resizeWidth: '768', // Set the same in Media query
            animationSpeed: 'fast', //slow, medium, fast
            accoridonExpAll: false //Expands all the accordion menu on click
        });
        $('.aceResponsiveMenu li ul').hasClass('sub-menu')(function() {
            $('body').css('background-color', '#ffe');
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>