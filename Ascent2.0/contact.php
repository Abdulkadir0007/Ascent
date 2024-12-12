<?php

/**
 * Template name: Contact Page
 * The page template file
 *
 * This file is the fallback template that displays all posts
 * if no other specific templates are available.
 *
 * @package Ascent
 * @since 1.0.0
 */

get_header(); // Include header.php 

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div class="container middle">   
        <div class="row mb-3">
            <div class="col align-self-center">
                <h2 class=""><?php the_title(); ?></h2>
            </div>
            <div class="col-md-3 align-self-center">
                <form class="input-group searchs" role="search" method="get">
                    <input class="form-control br-non" type="search" name="s" placeholder="Search the site">
                    <input class="btn search-icon br-non" name="go" value="" type="submit">
                </form>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <?php while (have_posts()): the_post(); ?>
                        <li class="breadcrumb-item"><a href=""><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ol>
            </nav>
        </div>
    <div class="row mb-3">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14542.174911535873!2d90.6800366!3d24.32754545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375685fe8f3c2917%3A0xa3e93b4d22006458!2sPakundia!5e0!3m2!1sen!2sbd!4v1706108551660!5m2!1sen!2sbd" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="col-4 mt-4">
            <div class="card mb-3">
                <img src="<?php echo ASCENT_THEME_URI ?>assets/images/contact.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ascent</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p class="card-text text-body-secondary">Phone: <strong>0133445566</strong></p>
                </div>

            </div>
        </div>
        <div class="col-8 mt-4">
            <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>" method="post">
                <div class="row">
                    <div class="col">
                    <label for="f-name" class="form-label"><?php _e( 'Your Name', 'ascent' ); ?> <span>*</span></label>
                    <input type="text" class="form-control" id="f-name" name="fname" required >
                    </div>
                    <div class="col">
                    <label for="email" class="form-label"><?php _e( 'Your Email', 'ascent' ); ?> <span>*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required >
                    </div>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label"><?php _e( 'Your Message', 'ascent' ); ?></label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
                <div class="mb-3">
                    <label for="messege" class="form-label"><?php _e( 'Your Message', 'ascent' ); ?></label>
                    <textarea class="form-control" rows="7" cols="50" name="messege" id="messege"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkm">
                    <label class="form-check-label" for="checkm"><?php _e( 'Check me out', 'ascent' ); ?></label>
                </div>
                <button type="submit" class="btn btn-primary"><?php _e( 'Send', 'ascent' ); ?></button>
            </form>
            <?php if ( isset( $_POST['cf-submitted'] ) ) {
        // Handle the form submission
        $name    = sanitize_text_field( $_POST['fname'] );
        $email   = sanitize_email( $_POST['email'] );
        $subject   = sanitize_email( $_POST['subject'] );
        $message = esc_textarea( $_POST['message'] );

        // Send the email
        $to      = get_option( 'admin_email' );
        $subject = $subject;
        $headers = 'From: ' . $name . ' <' . $email . '>';

        wp_mail( $to, $subject, $message, $headers );

        echo '<p>' . __( 'Thank you for your message!', 'ascent' ) . '</p>';
    } ?>
        </div>
    </div>
    <?php get_footer(); ?>