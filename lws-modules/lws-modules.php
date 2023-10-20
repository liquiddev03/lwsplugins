<?php
/*
Plugin Name: LWSModules
Plugin URI:  https://github.com/liquiddev03/lwsplugins.git
Description: LWS Custom Modules
Version:     1.1.0
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
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/liquiddev03/lwsplugins.git',
	__FILE__,
	'LWSModules'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');