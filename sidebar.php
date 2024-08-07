<?php
    /**
     *Template used for sidebare
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
?>
<?php if ( !is_front_page() ): ?>
<div class="col-xl-3 col-lg-3 col-md-12">
    <?php dynamic_sidebar( 'sidebar' )?>

</div>
<?php endif; ?>