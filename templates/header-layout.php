<?php
    /**
     * Header Layout template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<header class="header">

    <div class="container">

        <?php if ( $ascent['header-layout'] == 2 ): ?>
        <div class="row header-one">

            <div class="col-md-9 align-self-center col-4">
                <div class="d-flex">
                    <nav class="align-items-start position-relative">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'main-manu',
                                    'container'      => false,
                                    'menu_class'     => 'main-menu',
                                    'menu_id'        => 'main-nav',
                                    'echo'           => true,
                                    'fallback_cb'    => 'default_menu',
                                )
                        );?>
                    </nav>
                    <?php if ( $ascent['menu-search'] == 1 ): ?>
                    <div class="search align-self-center">
                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="fas fa-search"></span>
                        </a>


                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-3 align-self-center col-8">
                <div class="logo-img">
                    <?php if ( $ascent['logo-img']['url'] ): ?>
                    <a href="<?php echo home_url(); ?>"><img class="float-end"
                            src="<?php print $ascent['logo-img']['url']?>" alt="logo"></a>
                    <?php else: ?>
                    <a href="<?php echo home_url(); ?>">
                        <h2 class="logo-text text-end">
                            <?php print $ascent['logo-text'];?>
                        </h2>
                    </a>
                    <?php endif;?>
                </div>
            </div>
        </div>

        <?php elseif ( $ascent['header-layout'] == 1 ): ?>
        <div class="row header-three">
            <div class="col-md-3 col-8 align-self-center">
                <div class="logo-img">
                    <?php if ( $ascent['logo-img']['url'] ): ?>
                    <a href="<?php echo home_url(); ?>"><img class="" src="<?php print $ascent['logo-img']['url']?>"
                            alt="logo"></a>
                    <?php else: ?>
                    <a href="<?php echo home_url(); ?>">
                        <h2 class="logo-text">
                            <?php print $ascent['logo-text'];?>
                        </h2>
                    </a>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-9 col-4 text-end align-self-center">
                <div class="d-flex justify-content-end position-relative">
                    <nav class="right" id="main-nav">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'main-manu',
                                    'container'      => false,
                                    'menu_class'     => 'main-menu',
                                    'menu_id'        => 'nav',
                                    'echo'           => true,
                                    'fallback_cb'    => 'default_menu',
                                )
                        );?>
                    </nav>
                    <?php if ( $ascent['menu-search'] == 1 ): ?>
                    <div class="search align-self-center">
                        <!-- Button trigger modal -->
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="fas fa-search"></span>
                        </a>


                    </div>
                    <?php endif;?>
                </div>
            </div>

        </div>

        <?php elseif ( $ascent['header-layout'] == 3 ): ?>
        <div class="row header-two">


            <div class="logo-img text-center">
                <?php if ( $ascent['logo-img']['url'] ): ?>
                <a href="<?php echo home_url(); ?>"><img class="mx-auto" src="<?php print $ascent['logo-img']['url']?>"
                        alt="logo"></a>
                <?php else: ?>
                <a href="<?php echo home_url(); ?>">
                    <h2 class="logo-text">
                        <?php print $ascent['logo-text'];?>
                    </h2>
                </a>
                <?php endif;?>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-9 col-sm-6 col-2 align-self-center position-relative">
                    <nav class="text-start">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'main-manu',
                                    'container'      => false,
                                    'menu_class'     => 'main-menu',
                                    'menu_id'        => 'main-nav',
                                    'echo'           => true,
                                    'fallback_cb'    => 'default_menu',
                                )
                        );?>
                    </nav>
                </div>
                <div class="col-md-4  col-lg-3 col-sm-6 col-10 align-self-center">
                <form action="<?php echo home_url(); ?>" class="input-group searchs" role="search" method="get">
                        <input class="form-control br-non" type="search" name="s" placeholder="Search the site"
                            required>
                        <button class="btn seach-btn no-br"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <?php elseif ( $ascent['header-layout'] == 4 ): ?>
        <div class="row header-two">


            <div class="logo-img text-center">
                <?php if ( $ascent['logo-img']['url'] ): ?>
                <a href="<?php echo home_url(); ?>"><img class="mx-auto" src="<?php print $ascent['logo-img']['url']?>"
                        alt="logo"></a>
                <?php else: ?>
                <a href="<?php echo home_url(); ?>">
                    <h2 class="logo-text">
                        <?php print $ascent['logo-text'];?>
                    </h2>
                </a>
                <?php endif;?>
            </div>
            <div class="row">
                <div class="col-md-4  col-lg-3 col-sm-6 col-10 align-self-center">
                    <form action="<?php echo home_url(); ?>" class="input-group searchs" role="search" method="get">
                        <input class="form-control br-non" type="search" name="s" placeholder="Search the site"
                            required>
                        <button class="btn seach-btn no-br"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="col-md-8 col-lg-9 col-sm-6 col-2 align-self-center d-flex justify-content-end position-relative">
                    <nav class="right text-end">
                        <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'main-manu',
                                    'container'      => false,
                                    'menu_class'     => 'main-menu',
                                    'menu_id'        => 'main-nav',
                                    'echo'           => true,
                                    'fallback_cb'    => 'default_menu',
                                )
                        );?>
                    </nav>
                </div>
            </div>

        </div>
        <?php elseif ( $ascent['header-layout'] == 5 ): ?>
        <div class="row header-two">


            <div class="logo-img text-center pb-4">
                <?php if ( $ascent['logo-img']['url'] ): ?>
                <a href="<?php echo home_url(); ?>"><img class="mx-auto" src="<?php print $ascent['logo-img']['url']?>"
                        alt="logo"></a>
                <?php else: ?>
                <a href="<?php echo home_url(); ?>">
                    <h2 class="logo-text">
                        <?php print $ascent['logo-text'];?>
                    </h2>
                </a>
                <?php endif;?>
            </div>
            <div class="d-flex justify-content-center pb-3 unoik">
                <nav class="text-center">
                    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'main-manu',
                                'container'      => false,
                                'menu_class'     => 'main-menu',
                                'menu_id'        => 'main-nav',
                                'echo'           => true,
                                'fallback_cb'    => 'default_menu',
                            )
                    );?>
                </nav>
                <?php if ( $ascent['menu-search'] == 1 ): ?>
                <div class="search align-self-center">
                    <!-- Button trigger modal -->
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="fas fa-search"></span>
                    </a>


                </div>
                <?php endif;?>
            </div>
        </div>
        <?php endif;?>
    </div>

    </div>
</header>


<div class="modal fade search-modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog margin-6">
        <div class="modal-content">
            <div class="modal-header search-modal-header">
                <form action="<?php echo home_url(); ?>" class="input-group searchs" role="search" method="get">

                    <label for="srch" class="align-self-center"><span class="fas fa-search"></span></label>
                    <input id="srch" class="form-control br-non" type="search" name="s" placeholder="Search the site"
                        required>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>