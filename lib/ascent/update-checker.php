<?php
/**
 * Theme Update Checker
 */
// Include the update checker
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
// Include the library's main file
require_once get_template_directory() . '/lib/plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
    'https://github.com/Abdulkadir070/Ascent',
    get_template_directory(),
    'ascent'
);
//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
?>
