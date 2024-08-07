<?php
    /**
     * Socail Icon template.
     *
     *  @package Ascent
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>

<ul>
    <?php if ( $ascent['sc_icon']['facebook'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['facebook']?>"><i class="fa-brands fa-facebook-f"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['twitter'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['twitter']?>"><i class="fa-brands fa-twitter"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['instagram'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['instagram']?>"><i class="fa-brands fa-instagram"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['github'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['github']?>"><i class="fa-brands fa-github"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['paypal'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['paypal']?>"><i class="fa-brands fa-paypal"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['linkedin'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['linkedin']?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['flickr'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['flickr']?>"><i class="fa-brands fa-flickr"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['dribbble'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['dribbble']?>"><i class="fa-brands fa-dribbble"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['dropbox'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['dropbox']?>"><i class="fa-brands fa-dropbox"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['skype'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['skype']?>"><i class="fa-brands fa-skype"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['spotify'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['spotify']?>"><i class="fa-brands fa-spotify"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['stack-overflow'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['stack-overflow']?>"><i class="fa-brands fa-stack-overflow"></i></a>
    </li>
    <?php endif;
                            if ( $ascent['sc_icon']['behance'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['behance']?>"><i class="fa-brands fa-behance"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['steam'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['steam']?>"><i class="fa-brands fa-steam-symbol"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['yahoo'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['yahoo']?>"><i class="fa-brands fa-yahoo"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['youtube'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['youtube']?>"><i class="fa-brands fa-youtube"></i></a></li>
    <?php endif;
                            if ( $ascent['sc_icon']['tiktok'] ): ?>
    <li><a href="<?php print $ascent['sc_icon']['tiktok']?>"><i class="fa-brands fa-tiktok"></i></a></li>
    <?php endif;?>
</ul>
<!--End socail icon -->
