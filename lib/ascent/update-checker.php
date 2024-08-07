<?php
/**
 * Theme Update Checker
 */

// Include the library (remember to change the path).
require get_template_directory() . '/lib/plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

// Instantiate the update checker.
$updateChecker = PucFactory::buildUpdateChecker(
    'https://raw.githubusercontent.com/Abdulkadir0007/Ascent/main/update-info.json',
    get_template_directory() . '/style.css', // Path to a file in your theme
    'ascent'
);

// Optional: If you're using a private repository, specify the access token like this:
//$updateChecker->setAuthentication('your-github-token');
?>
