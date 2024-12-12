<?php
/**
 * The header for Ascent Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 *
 * @package Ascent
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head();?>
</head>

<body <?php body_class('ascent-class'); ?> >
    <?php wp_body_open(); ?>
    <header>
        <div class="container">
            <div class="row header-one mt-3">

                <div class="col-md-9">
                    <nav>

                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary', 
                            'container' => false,
                            'fallback_cb' => 'default_menu',
                        ) );
                        ?>

    
                    </nav>
                </div>
                <div class="col-md-3 text-end">
                   <!-- <h2 class="logo">AB WEB</h2> -->
                    <div class="logo-img"><img src="<?php echo ASCENT_THEME_URI ?>assets/images/A-1.png" alt=""></div>
                </div>
            </div>
            <!--    <div class="row header-three">
                <div class="col-md-3">
                    <div class="logo-img"><img src="<?php echo ASCENT_THEME_DIR?>assets/images/A__1_-removebg-preview.png" alt=""></div>
                </div>
                <div class="col-md-9 text-end">
                    <nav class="right align-items-center">
                        <ul id="nav">
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a>
                                <ul>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a>
                                        <ul>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a></li>
                                </ul>
                            </li>
                            <li><a href="">Bloge</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a>
                                <ul>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a>
                                        <ul>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                            <li><a href="">Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Dropdown</a></li>
                                    <li><a href="">Dropdown</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row header-two">
                <div class="logo-imgs text-center"><img src="<?php echo ASCENT_THEME_DIR?>assets/images/A__1_-removebg-preview.png" alt=""></div>
                <nav class="text-center">
                    <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a>
                            <ul>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a>
                                    <ul>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                            </ul>
                        </li>
                        <li><a href="">Bloge</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Contact</a>
                            <ul>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a>
                                    <ul>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                        <li><a href="">Dropdown</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Dropdown</a></li>
                                <li><a href="">Dropdown</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>


            -->

        </div>
    
    </header>
