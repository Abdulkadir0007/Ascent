<?php
/**
 * The Sidebar for Ascent Theme.
 * 
 *
 * @package Ascent
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="col-xl-3 col-lg-3 col-md-3">


<form class="input-group searchs" role="search" method="get">
    <input class="form-control br-non" type="search" name="s" placeholder="Search the site">
    <input class="btn search-icon br-non" name="go" value="" type="submit">
</form>



<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar' ); ?>
    </aside>
<?php endif; ?>

</div>