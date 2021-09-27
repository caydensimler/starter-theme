<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'General Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'      => 59.9,
	));

	acf_add_options_sub_page(array(
		'page_title'	=> 'Company Information',
		'menu_title'	=> 'Company Info',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'	=> 'Styles and Scripts',
		'menu_title'	=> 'Styles/Scripts',
		'parent_slug'	=> 'theme-general-settings',
	));
}