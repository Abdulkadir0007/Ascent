<?php
    /**
     * Top Header template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>

<?php if ( $ascent['sbheader-layout'] == 0 ): ?>
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <?php if ( $ascent['sbheader_cont1'] == 2 ): ?>
                <div class="socail-icon text-lg-start text-center">
                    <?php get_template_part( "includes/require/socail-icon" )?>
                </div>
                <?php elseif ( $ascent['sbheader_cont1'] == 1 ): ?>
                <div class="cont-info text-lg-start text-center">
                    <span><?php print $ascent['shead_cot']?></span>
                    <span class="mx-2">|</span>
                    <span><?php print $ascent['shead_cot2']?></span>
                </div>
                <?php elseif ( $ascent['sbheader_cont1'] == 3 ): ?>
                <div class="sub-header-menu">
                    <nav class="sh-menu text-lg-start text-center">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'container'      => false,
                                    'menu_id'        => 'nav',
                                    'echo'           => true,
                            ) );?>
                    </nav>
                </div>
                <?php endif;?>
            </div>

            <div class="col-lg-6 align-self-center">
                <?php if ( $ascent['sbheader_cont2'] == 2 ): ?>
                <div class="socail-icon text-lg-end text-center">
                    <?php get_template_part( "includes/require/socail-icon" )?>
                </div>
                <?php elseif ( $ascent['sbheader_cont2'] == 1 ): ?>
                <div class="cont-info text-lg-end text-center">
                    <span><?php print $ascent['shead_cot']?></span>
                    <span class="mx-2"> | </span>
                    <span><?php print $ascent['shead_cot2']?></span>
                </div>
                <?php elseif ( $ascent['sbheader_cont2'] == 3 ): ?>
                <div class="sub-header-menu">
                    <nav class="sh-menu text-lg-end text-center">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'container'      => false,
                                    'menu_id'        => 'nav',
                                    'echo'           => true,
                            ) );?>
                    </nav>
                </div>
                <?php endif;?>
            </div>


        </div>
    </div>
</div>

<?php elseif ( $ascent['sbheader-layout'] == 1 ): ?>
<div class="sub-header top-border">
    <div class="container">
        <div class="row">


            <div class="col-lg-6 align-self-center">
                <?php if ( $ascent['sbheader_cont1'] == 2 ): ?>
                <div class="socail-icon text-lg-start text-center">
                    <?php get_template_part( "includes/require/socail-icon" )?>
                </div>
                <?php elseif ( $ascent['sbheader_cont1'] == 1 ): ?>
                <div class="cont-info text-lg-start text-center">
                    <span><?php print $ascent['shead_cot']?></span>
                    <span class="mx-2">|</span>
                    <span><?php print $ascent['shead_cot2']?></span>
                </div>
                <?php elseif ( $ascent['sbheader_cont1'] == 3 ): ?>
                <div class="sub-header-menu">
                    <nav class="sh-menu text-lg-start text-center">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'container'      => false,
                                    'menu_id'        => 'nav',
                                    'echo'           => true,
                            ) );?>
                    </nav>
                </div>
                <?php endif;?>
            </div>


            <div class="col-lg-6 align-self-center">
                <?php if ( $ascent['sbheader_cont2'] == 2 ): ?>
                <div class="socail-icon text-lg-end text-center">
                    <?php get_template_part( "includes/require/socail-icon" )?>
                </div>
                <?php elseif ( $ascent['sbheader_cont2'] == 1 ): ?>
                <div class="cont-info text-lg-end text-center">
                    <span><?php print $ascent['shead_cot']?></span>
                    <span class="mx-2">|</span>
                    <span><?php print $ascent['shead_cot2']?></span>
                </div>
                <?php elseif ( $ascent['sbheader_cont2'] == 3 ): ?>
                <div class="sub-header-menu">
                    <nav class="sh-menu text-lg-end text-center">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'top-menu',
                                    'container'      => false,
                                    'menu_id'        => 'nav',
                                    'echo'           => true,
                            ) );?>
                    </nav>
                </div>
                <?php endif;?>
            </div>


        </div>
    </div>
</div>

<?php endif;?>