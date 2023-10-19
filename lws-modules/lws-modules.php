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