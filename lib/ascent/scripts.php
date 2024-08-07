<?php
    /**
     * Ascent For Script.
     *
     *  @package Ascent
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;

    function ascent_scripts() {
        global $ascent;
    ?>
<script>
<?php print $ascent ['jc_editor'];?>
</script>
<script>
(function($) {

    $(document).ready(function() {
        $('#main-nav').hcOffcanvasNav({

            disableAt:                       <?php print $ascent['mobail-menu-brack'];?>,

            <?php if ( $ascent['mobail_menu_positions'] == 1 ): ?>
            position: 'left',
            <?php elseif ( $ascent['mobail_menu_positions'] == 2 ): ?>
            position: 'right',
            <?php elseif ( $ascent['mobail_menu_positions'] == 3 ): ?>
            position: 'top',
            <?php elseif ( $ascent['mobail_menu_positions'] == 4 ): ?>
            position: 'bottom',
            <?php endif;?>
            // overlap / expand / none/mobail_menu_label
            <?php if ( $ascent['mobail_menu_label'] == 1 ): ?>
            levelOpen: 'overlap',
            <?php elseif ( $ascent['mobail_menu_label'] == 2 ): ?>
            levelOpen: 'expand',
            <?php elseif ( $ascent['mobail_menu_label'] == 3 ): ?>
            levelOpen: 'none',
            <?php endif;?>


        });

        <?php if ( $ascent['sti_headerr'] == 1 ): ?>
        $('body').stoockyPage();
        <?php endif;?>
    });
})(jQuery)
</script>

<?php

}
add_action( 'wp_head', 'ascent_scripts' );