<?php
/**
 * Theme Update Checker
 */

 require get_template_directory() . '/lib/plugin-update-checker/plugin-update-checker.php';
// Include the library (remember to change the path).
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://raw.githubusercontent.com/Abdulkadir0007/Ascent/main/update-info.json',
	__FILE__,
	'ascent'
);


// Optional: If you're using a private repository, specify the access token like this:
//$updateChecker->setAuthentication('your-github-token');
?>
