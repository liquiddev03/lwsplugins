<?php
/*
Plugin Name: LWSModules
Plugin URI:  https://www.liquidstudiogroup.com
Description: LWS Custom Modules
Version:     0.0.1
Author:      Mario Mecaroni
Author URI:  https://www.liquidstudiogroup.com
Text Domain: lwsmodules
Domain Path: /languages
License:     GPL3
 
LWSModules Plugin is property of Liquid Studio Group. 
*/

/**
 * No Direct Access, if file is called directly,, abort!!
 */
if (!defined('ABSPATH')) die('No direct access allowed');

/**
 * Admin: Pages / Subpages
 */
require_once plugin_dir_path( __FILE__ ) . 'admin/admin-pages.php';
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/iamsajidjaved/Auto-update-WordPress-plugin-or-Theme-from-Github',
	__FILE__,
	'FunPlugin'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');
