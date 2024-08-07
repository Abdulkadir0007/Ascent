<?php
    /**
     *Template name: Contact
     * Contact template.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

    if ( !defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }
    ;
?>

<?php get_header();?>
<?php get_template_part( "includes/require/web-title" )?>
<?php get_template_part( "templates/breadcrumb" )?>

<div class="container middle">
    <div class="row">
        <div class="g-maps">
            <?php print $ascent['maps_embed'];?>
        </div>
        <div class="cotact-form my-3">
            <?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ): ?>
<?php if ( is_user_logged_in() && $ascent['cont-emai'] == '' ): ?>

            <div class="contt py-3">
                <div class="er-masseg">
                    <a href="">X</a>
                    <p><i class='fa-solid fa-triangle-exclamation'></i>Form email address is not set in Global Options.
                        Please fill in a valid address to make contact form work.</p>
                </div>
            </div>
            <?php elseif ( $_POST['asubject'] && $_POST['amesseg'] ): ?>
            <div class="contt py-3">
                <div class="rt-masseg">
                    <a href="">X</a>
                    <p><i class='fa-solid fa-circle-check'></i> Thank you for using our contact form! Your email was
                        successfully sent!</p>
                </div>
            </div>
            <?php

                $name    = $_POST['aname'];
                $email   = $_POST['aemail'];
                $subject = $_POST['asubject'];
                $msg     = $_POST['amesseg'];
                $notice  = "This is a notification that a contact form was submitted on your website";

                // Get the website title and URL
                $website_title = get_bloginfo( 'name' );
                $website_url   = home_url();
                // Create the message body
                $message = "From: $name  $email,\n";
                $message .= "Subject: $subject\n\n";
                $message .= "Message Body: \n";
                $message .= "$msg \n\n";
                $message .= "--\n";
                $message .= "$notice";
                $message .= "(";
                $message .= "$website_title ";
                $message .= "$website_url";
                $message .= ")";

                // Send email
                $to      = $ascent['cont-emai'];
                $subject = $subject;

                $headers .= 'From: ' . $name . '<' . $email . '>' . "\r\n";
                $headers .= 'Cc:' . $email . "\r\n";
                mail( $to, $subject, $message, $headers );

            ?>
<?php else: ?>
            <div class="contt py-3">
                <div class="er-masseg">
                    <a href="">X</a>
                    <p><i class='fa-solid fa-triangle-exclamation'></i> Please check if you've filled all the fields
                        with valid information. Thank you.</p>
                    </p>
                </div>
            </div>

            <?php endif;?>
<?php endif;?>

            <form action="" METHOD="POST">
                <div class="mb-3 d-md-flex gap-3">
                    <input type="text" class="form-control" placeholder="Your Name" name="aname" required>

                    <input type="email" class="form-control" name="aemail" placeholder="Your Email" required>

                    <input type="text" class="form-control" name="asubject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <textarea name="amesseg" class="form-control" placeholder="Messeg" rows="5"></textarea>
                </div>
                <?php if ( $ascent['cottr'] == 1 ): ?>
<?php if ( !is_user_logged_in() ): ?>
                <div class="d-block">
                    <input type="checkbox" id="trems" name="trems" value="trems" required>
                    <label for="trems">                                                                                                                                                                                                                                           <?php print $ascent['tr-lb']?></label>
                </div>
                <?php endif;?>
<?php endif;?>
                <input class="btn primary-button" type="submit" value="SEND MESSEG">
            </form>

        </div>
    </div>
</div>
<?php get_footer();?>