<?php
    /**
     * Titlebare template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<?php if ( !is_front_page() ): ?>
<section class="web-title container mt-3">
    <div class="row mb-3 align-items-center text-md-start text-center ">
        <div class="col-sm-12 col-lg-9 col-md-8 align-items-center">
            <h2 class="d-inline-block wdtitle"><?php bloginfo('title'); ?></h2>
            <h3 class="d-inline-block ms-3 wdesc"><?php bloginfo('description'); ?></h3>
        </div>
        <?php if($ascent['web_search']==1):?>
        <div class="col-md-4 col-lg-3 col-sm-8 offset-md-0 offset-sm-2">
            <form action="<?php echo home_url(); ?>" class="input-group searchs" role="search" method="get">
                <input class="form-control br-non" type="search" name="s" placeholder="Search the site" required>
                <button class="btn seach-btn no-br"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>