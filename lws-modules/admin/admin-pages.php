<?php
/**
 * Advanced Custom Fields Options Page
 * Resource: https://www.advancedcustomfields.com/resources/acf_add_options_page/
 * Resource: https://www.advancedcustomfields.com/resources/acf_add_options_sub_page/
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'LWS Modules',
		'menu_title'	=> 'Modules',
		'menu_slug' 	=> 'lws-modules',
		'capability'	=> 'edit_posts',
		'position' 		=> 7,
		'parent_slug' => '',
		'icon_url' 		=> 'dashicons-marker',
		'redirect'		=> true,
		'post_id' 		=> 'options',
		'autoload' 		=> false,
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'LWS Modules Dashboard',
		'menu_title'	=> 'Dashboard',
		'parent_slug'	=> 'lws-modules',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Elements',
		'menu_title'	=> 'Global',
		'parent_slug'	=> 'lws-modules',
	));

	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Hours of Operation',
		'menu_title'	=> 'Hours of Operation',
		'parent_slug'	=> 'lws-modules',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Information',
		'menu_title'	=> 'Contact Info',
		'parent_slug'	=> 'lws-modules',
	));
	
}