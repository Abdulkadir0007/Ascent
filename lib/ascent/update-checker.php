<?php
/**
 * Theme Update Checker
 */

// Include the library (remember to change the path).
require get_template_directory() . '/lib/plugin-update-checker/plugin-update-checker.php';

// Instantiate the update checker.
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/Abdulkadir070/Ascent/',
    __FILE__,
    'ascent'
);

// Optional: Set the branch that contains the stable release.
$updateChecker->setBranch('main');

// Optional: If you're using a private repository, specify the access token like this:
//$updateChecker->setAuthentication('your-github-token');
?>

