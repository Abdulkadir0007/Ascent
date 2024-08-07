<?php
    /**
     * Welcome Admin page.
     *
     *  @package Ascent
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;
?>
<section class="admin-page">
    <div class="header">
        <div class="top">
            <div class="left">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/admin-logo.png"></a>
            </div>
            <div class="right">
                <a class="options-link" href="admin.php?page=ascent">Options</a>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <span><?php $theme_data = wp_get_theme();
                      $theme_version                      = $theme_data->get( 'Version' );
                  echo 'V ' . $theme_version;
                  ?></span>
        </div>
    </div>

    <section class="middle">
        <div class="left">
            <h2><?php global $current_user;
                    wp_get_current_user();
                echo 'Hello: ' . $current_user->user_login . "\n";
                ?></h2>
            <p>Welcome to the Ascent dashboard.</p>
            <h3>Latest Is: Ascent <?php echo $theme_version; ?></h3>
        </div>
        <div class="right">
            <h3>What features are included in this theme?</h3>
            <ul>
                <li>
                    <a href="">Easy customizable Option</a>
                </li>
                <li>
                    <a href="">Responsive Design</a>
                </li>
                <li>
                    <a href="">Responsive and customizable menu for Pc</a>
                </li>
                <li>
                    <a href="">Responsive and customizable menu for Mobile</a>
                </li>
                <li>
                    <a href="">5 Different Styles of Header layout</a>
                </li>
                <li>
                    <a href="">Advanced Typography</a>
                </li>
                <li>
                    <a href="">Dynamic Contact Template</a>
                </li>
                <li>
                    <a href="">Project/Portfolio Template</a>
                </li>
                <li>
                    <a href="">Responsive Slider</a>
                </li>
                <li>
                    <a href="">customizable All pages</a>
                </li>
            </ul>
        </div>
    </section>
</section>