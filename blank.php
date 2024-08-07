<?php
    /**
     *Template name: Blank Page
     * Blank Page Template.
     *
     *  @package Ascent
     *  @subpackage Templates
     */

     if ( ! defined( 'ABSPATH' ) ) {
        exit; // Prevent direct access
    }    
    ;
    global $ascent;
?>
<?php if($ascent['blank_header']==0):?>
<!doctype html>
<html      <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php print $ascent['favicon']['url']?>" type="image/x-icon">
    <?php wp_head();?>
</head>
<?php else:
 get_header();
endif;
 ?>

<?php if($ascent['blank_footer']==0):?>
    <?php wp_footer();?>
</body>

</html>
<?php else:
 get_footer();
endif;
 ?>