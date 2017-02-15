<?php

/*
Plugin Name: git-plugin
Plugin URI:  https://google.com
Description: Git Plugins
Version:     1.6
Author:      Web Prestige
Author URI:  https://google.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: https://google.com
Domain Path: https://google.co
*/

if (is_admin()) {
	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://github.com/sergiocutone/git-plugin/',
		__FILE__,
		'git-plugin'
		);
}

?>