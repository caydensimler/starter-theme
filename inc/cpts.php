<?php

// Integrated CPTs


// Content Block Custom Post Type
function content_block_cpt() {

	/**
	 * Post Type: Content Blocks.
	 */

	$labels = [
		"name" => __( "Content Blocks", "gpc" ),
		"singular_name" => __( "Content Block", "gpc" ),
		"menu_name" => __( "Content Blocks", "gpc" ),
		"all_items" => __( "All Content Blocks", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Content Block", "gpc" ),
		"edit_item" => __( "Edit Content Block", "gpc" ),
		"new_item" => __( "New Content Block", "gpc" ),
		"view_item" => __( "View Content Block", "gpc" ),
		"view_items" => __( "View Content Blocks", "gpc" ),
		"search_items" => __( "Search Content Blocks", "gpc" ),
		"not_found" => __( "No Content Blocks found", "gpc" ),
		"not_found_in_trash" => __( "No Content Blocks found in trash", "gpc" ),
		"parent" => __( "Parent Content Block", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "Content Block Archives", "gpc" ),
		"insert_into_item" => __( "Insert into Content Block", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this Content Block", "gpc" ),
		"filter_items_list" => __( "Filter Content Blocks List", "gpc" ),
		"items_list_navigation" => __( "Content Blocks List Navigation", "gpc" ),
		"items_list" => __( "Content Blocks List", "gpc" ),
		"attributes" => __( "Content Blocks Attributes", "gpc" ),
		"name_admin_bar" => __( "Content Block", "gpc" ),
		"item_published" => __( "Content Block published", "gpc" ),
		"item_published_privately" => __( "Content Block published privately", "gpc" ),
		"item_reverted_to_draft" => __( "Content Block reverted to draft", "gpc" ),
		"item_scheduled" => __( "Content Block scheduled", "gpc" ),
		"item_updated" => __( "Content Block updated", "gpc" ),
		"parent_item_colon" => __( "Parent Content Block", "gpc" ),
	];

	$args = [
		"label" => __( "Content Blocks", "gpc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "content-block", "with_front" => false ],
		"query_var" => true,
		"menu_position" => 54.9,
		"menu_icon" => "dashicons-networking",
		"supports" => [ "title", "custom-fields", "revisions" ],
		"taxonomies" => [ "block-type" ],
	];

	register_post_type( "content-block", $args );
}

add_action( 'init', 'content_block_cpt', 0 );





// Base/Theme CPTs
if (function_exists('get_field')) {

	if ( get_field( 'success_stories_configuration', 'option' ) == 1 ) {
		function success_stories_cpt() {

			/**
			 * Post Type: Success Stories.
			 */

			$labels = [
				"name" => __( "Success Stories", "custom-post-type-ui" ),
				"singular_name" => __( "Success Story", "custom-post-type-ui" ),
				"menu_name" => __( "Success Stories", "custom-post-type-ui" ),
				"all_items" => __( "All Success Stories", "custom-post-type-ui" ),
				"add_new" => __( "Add New", "custom-post-type-ui" ),
				"add_new_item" => __( "Add New Success Story", "custom-post-type-ui" ),
				"edit_item" => __( "Edit Success Story", "custom-post-type-ui" ),
				"new_item" => __( "New Success Story", "custom-post-type-ui" ),
				"view_item" => __( "View Success Story", "custom-post-type-ui" ),
				"view_items" => __( "View Success Stories", "custom-post-type-ui" ),
				"search_items" => __( "Search Success Stories", "custom-post-type-ui" ),
				"not_found" => __( "No Success Stories found", "custom-post-type-ui" ),
				"not_found_in_trash" => __( "No Success Stories found in Trash", "custom-post-type-ui" ),
				"parent" => __( "Parent Success Story:", "custom-post-type-ui" ),
				"featured_image" => __( "Featured image", "custom-post-type-ui" ),
				"set_featured_image" => __( "Set featured image", "custom-post-type-ui" ),
				"remove_featured_image" => __( "Remove featured image", "custom-post-type-ui" ),
				"use_featured_image" => __( "Use as featured image", "custom-post-type-ui" ),
				"archives" => __( "Success Story archives", "custom-post-type-ui" ),
				"insert_into_item" => __( "Insert into Success Story", "custom-post-type-ui" ),
				"uploaded_to_this_item" => __( "Uploaded to this Success Story", "custom-post-type-ui" ),
				"filter_items_list" => __( "Filter Success Stories list", "custom-post-type-ui" ),
				"items_list_navigation" => __( "Success Stories list navigation", "custom-post-type-ui" ),
				"items_list" => __( "Success Stories list", "custom-post-type-ui" ),
				"attributes" => __( "Success Stories Attributes", "custom-post-type-ui" ),
				"name_admin_bar" => __( "Success Story", "custom-post-type-ui" ),
				"item_published" => __( "Success Story published", "custom-post-type-ui" ),
				"item_published_privately" => __( "Success Story published privately", "custom-post-type-ui" ),
				"item_reverted_to_draft" => __( "Success Story reverted to draft", "custom-post-type-ui" ),
				"item_scheduled" => __( "Success Story scheduled", "custom-post-type-ui" ),
				"item_updated" => __( "Success Story updated", "custom-post-type-ui" ),
				"parent_item_colon" => __( "Parent Success Story:", "custom-post-type-ui" ),
			];

			$args = [
				"label" => __( "Success Stories", "custom-post-type-ui" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => false,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "success_stories", "with_front" => false ],
				"query_var" => true,
				"menu_position" => 25,
				"menu_icon" => "dashicons-universal-access",
				"supports" => [ "title", "thumbnail", "custom-fields" ],
			];

			register_post_type( "success_stories", $args );
		}
		add_action( 'init', 'success_stories_cpt' );
	}

	if ( get_field( 'testimonials_configuration', 'option' ) == 1 ) {
		// Creation of the testimonials custom post type.
		function testimonials_cpt() {
			/**
			 * Post Type: Testimonials.
			 */
			$labels = array(
				"name" => __( "Testimonials", "gpc" ),
				"singular_name" => __( "Testimonial", "gpc" ),
				"menu_name" => __( "Testimonials", "gpc" ),
				"all_items" => __( "All Testimonials", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Testimonial", "gpc" ),
				"edit_item" => __( "Edit Testimonial", "gpc" ),
				"new_item" => __( "New Testimonial", "gpc" ),
				"view_item" => __( "View Testimonial", "gpc" ),
				"view_items" => __( "View Testimonials", "gpc" ),
				"search_items" => __( "Search Testimonial", "gpc" ),
				"not_found" => __( "No Testimonials found", "gpc" ),
				"not_found_in_trash" => __( "No Testimonials found in Trash", "gpc" ),
				"parent_item_colon" => __( "Parent Testimonial:", "gpc" ),
				"featured_image" => __( "Featured image for this testimonial", "gpc" ),
				"set_featured_image" => __( "Set featured image for this testimonial", "gpc" ),
				"remove_featured_image" => __( "Remove featured image for this testimonial", "gpc" ),
				"use_featured_image" => __( "Use as featured image for this testimonial", "gpc" ),
				"archives" => __( "Testimonial archives", "gpc" ),
				"insert_into_item" => __( "Insert into testimonial", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this testimonial", "gpc" ),
				"filter_items_list" => __( "Filter testimonial list", "gpc" ),
				"items_list_navigation" => __( "Testimonials list navigation", "gpc" ),
				"items_list" => __( "Testimonials list", "gpc" ),
				"attributes" => __( "Testimonials Attributes", "gpc" ),
				"parent_item_colon" => __( "Parent Testimonial:", "gpc" ),
			);
			$args = array(
				"label" => __( "Testimonials", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"delete_with_user" => false,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"exclude_from_search" => true,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => array( "slug" => "testimonials", "with_front" => false ),
				"query_var" => true,
				"menu_icon" => "dashicons-editor-quote",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
			);
			register_post_type( "testimonials", $args );
		}
		add_action( 'init', 'testimonials_cpt' );
	}


	if ( get_field( 'projects_configuration', 'option' ) == 1 ) {
		// Creation of the projects custom post type.
		function projects_cpt() {
			/**
			 * Post Type: Projects.
			 */
			$labels = array(
				"name" => __( "Projects", "gpc" ),
				"singular_name" => __( "Project", "gpc" ),
				"menu_name" => __( "Projects", "gpc" ),
				"all_items" => __( "All Projects", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Project", "gpc" ),
				"edit_item" => __( "Edit Project", "gpc" ),
				"new_item" => __( "New Project", "gpc" ),
				"view_item" => __( "View Project", "gpc" ),
				"view_items" => __( "View Projects", "gpc" ),
				"search_items" => __( "Search Project", "gpc" ),
				"not_found" => __( "No Projects found", "gpc" ),
				"not_found_in_trash" => __( "No Projects found in Trash", "gpc" ),
				"parent_item_colon" => __( "Parent Project:", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image for this project", "gpc" ),
				"archives" => __( "Project archives", "gpc" ),
				"insert_into_item" => __( "Insert into project", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this project", "gpc" ),
				"filter_items_list" => __( "Filter projects list", "gpc" ),
				"items_list_navigation" => __( "Projects list navigation", "gpc" ),
				"items_list" => __( "Projects list", "gpc" ),
				"attributes" => __( "Projects Attributes", "gpc" ),
				"name_admin_bar" => __( "Project", "gpc" ),
				"parent_item_colon" => __( "Parent Project:", "gpc" ),
			);

			$args = array(
				"label" => __( "Projects", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"delete_with_user" => false,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => array( "slug" => "projects", "with_front" => false ),
				"query_var" => true,
				"menu_icon" => "dashicons-category",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => array( "category", "post_tag" ),
			);

			register_post_type( "projects", $args );
		}

		add_action( 'init', 'projects_cpt' );
	}


	if ( get_field( 'team_configuration', 'option' ) == 1 ) {
		// Creation of the team members custom post type.
		function team_cpt() {
			/**
			 * Post Type: Team.
			 */
			$labels = array(
				"name" => __( "Team", "gpc" ),
				"singular_name" => __( "Team Member", "gpc" ),
				"menu_name" => __( "Team", "gpc" ),
				"all_items" => __( "Team", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Team Member", "gpc" ),
				"edit_item" => __( "Edit Team Member", "gpc" ),
				"new_item" => __( "New Team Member", "gpc" ),
				"view_item" => __( "View Team Member", "gpc" ),
				"view_items" => __( "View Team", "gpc" ),
				"search_items" => __( "Search Team Member", "gpc" ),
				"not_found" => __( "No Team Members found", "gpc" ),
				"not_found_in_trash" => __( "No Team Members found in Trash", "gpc" ),
				"parent_item_colon" => __( "Parent Team Member", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image for this team member", "gpc" ),
				"archives" => __( "Team Member archives", "gpc" ),
				"insert_into_item" => __( "Insert into team member", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this team member", "gpc" ),
				"filter_items_list" => __( "Filter team list", "gpc" ),
				"items_list_navigation" => __( "Team Members list navigation", "gpc" ),
				"items_list" => __( "Team list", "gpc" ),
				"attributes" => __( "Team Members Attributes", "gpc" ),
				"name_admin_bar" => __( "Team Member", "gpc" ),
				"parent_item_colon" => __( "Parent Team Member", "gpc" ),
			);

			$args = array(
				"label" => __( "Team", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"delete_with_user" => false,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"exclude_from_search" => true,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => array( "slug" => "people", "with_front" => false ),
				"query_var" => true,
				"menu_icon" => "dashicons-groups",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				// "taxonomies" => array( "category", "post_tag" ),
			);

			register_post_type( "team", $args );
		}

		add_action( 'init', 'team_cpt' );
	}


	if ( get_field( 'news_configuration', 'option' ) == 1 ) {
		// Creation of the news custom post type.
		function news_cpt() {

			/**
			 * Post Type: News.
			 */

			$labels = [
				"name" => __( "News", "gpc" ),
				"singular_name" => __( "News", "gpc" ),
				"menu_name" => __( "News", "gpc" ),
				"all_items" => __( "All News", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New News", "gpc" ),
				"edit_item" => __( "Edit News", "gpc" ),
				"new_item" => __( "New News", "gpc" ),
				"view_item" => __( "View News", "gpc" ),
				"view_items" => __( "View News", "gpc" ),
				"search_items" => __( "Search News", "gpc" ),
				"not_found" => __( "No News found", "gpc" ),
				"not_found_in_trash" => __( "No News found in Trash", "gpc" ),
				"parent" => __( "Parent News:", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image", "gpc" ),
				"archives" => __( "News archives", "gpc" ),
				"insert_into_item" => __( "Insert into news", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this news", "gpc" ),
				"filter_items_list" => __( "Filter news list", "gpc" ),
				"items_list_navigation" => __( "News list navigation", "gpc" ),
				"items_list" => __( "News list", "gpc" ),
				"attributes" => __( "News Attributes", "gpc" ),
				"name_admin_bar" => __( "News", "gpc" ),
				"item_published" => __( "News published", "gpc" ),
				"item_published_privately" => __( "News published privately", "gpc" ),
				"item_reverted_to_draft" => __( "News reverted to draft", "gpc" ),
				"item_scheduled" => __( "News scheduled", "gpc" ),
				"item_updated" => __( "News updated", "gpc" ),
				"parent_item_colon" => __( "Parent News:", "gpc" ),
			];

			$args = [
				"label" => __( "News", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => true,
				"rewrite" => [ "slug" => "news", "with_front" => false ],
				"query_var" => true,
				"menu_icon" => "dashicons-media-document",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => [ "post_tag" ],
			];

			register_post_type( "news", $args );
		}

		add_action( 'init', 'news_cpt' );
	}


	if ( get_field( 'services_configuration', 'option' ) == 1 ) {
		// Creation of the services custom post type.
		function services_cpt() {

			/**
			 * Post Type: Services.
			 */

			$labels = [
				"name" => __( "Services", "custom-post-type-ui" ),
				"singular_name" => __( "Service", "custom-post-type-ui" ),
				"menu_name" => __( "Services", "custom-post-type-ui" ),
				"all_items" => __( "All Service", "custom-post-type-ui" ),
				"add_new" => __( "Add New", "custom-post-type-ui" ),
				"add_new_item" => __( "Add New Service", "custom-post-type-ui" ),
				"edit_item" => __( "Edit Service", "custom-post-type-ui" ),
				"new_item" => __( "New Service", "custom-post-type-ui" ),
				"view_item" => __( "View Service", "custom-post-type-ui" ),
				"view_items" => __( "View Services", "custom-post-type-ui" ),
				"search_items" => __( "Search Services", "custom-post-type-ui" ),
				"not_found" => __( "No Services found", "custom-post-type-ui" ),
				"not_found_in_trash" => __( "No Service found in Trash", "custom-post-type-ui" ),
				"parent" => __( "Parent Service:", "custom-post-type-ui" ),
				"featured_image" => __( "Featured image for this service", "custom-post-type-ui" ),
				"set_featured_image" => __( "Set featured image", "custom-post-type-ui" ),
				"remove_featured_image" => __( "Remove featured image", "custom-post-type-ui" ),
				"use_featured_image" => __( "Use as featured image", "custom-post-type-ui" ),
				"archives" => __( "Service archives", "custom-post-type-ui" ),
				"insert_into_item" => __( "Insert into service", "custom-post-type-ui" ),
				"uploaded_to_this_item" => __( "Uploaded to this service", "custom-post-type-ui" ),
				"filter_items_list" => __( "Filter services list", "custom-post-type-ui" ),
				"items_list_navigation" => __( "Services list navigation", "custom-post-type-ui" ),
				"items_list" => __( "Services list", "custom-post-type-ui" ),
				"attributes" => __( "Services Attributes", "custom-post-type-ui" ),
				"name_admin_bar" => __( "Service", "custom-post-type-ui" ),
				"item_published" => __( "Service published", "custom-post-type-ui" ),
				"item_published_privately" => __( "Service published privately", "custom-post-type-ui" ),
				"item_reverted_to_draft" => __( "Service reverted to draft", "custom-post-type-ui" ),
				"item_scheduled" => __( "Service scheduled", "custom-post-type-ui" ),
				"item_updated" => __( "Service updated", "custom-post-type-ui" ),
				"parent_item_colon" => __( "Parent Service:", "custom-post-type-ui" ),
			];

			$args = [
				"label" => __( "Services", "custom-post-type-ui" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "services", "with_front" => false ],
				"query_var" => true,
				"menu_icon" => "dashicons-megaphone",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
			];

			register_post_type( "services", $args );
		}

		add_action( 'init', 'services_cpt' );
	}


	if ( get_field( 'events_configuration', 'option' ) == 1 ) {
		// Creation of the events custom post type.
		function events_cpt() {

			/**
			 * Post Type: Events.
			 */

			$labels = [
				"name" => __( "Events", "gpc" ),
				"singular_name" => __( "Event", "gpc" ),
				"menu_name" => __( "Events", "gpc" ),
				"all_items" => __( "All Events", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Event", "gpc" ),
				"edit_item" => __( "Edit Event", "gpc" ),
				"new_item" => __( "New Event", "gpc" ),
				"view_item" => __( "View Event", "gpc" ),
				"view_items" => __( "View Events", "gpc" ),
				"search_items" => __( "Search Events", "gpc" ),
				"not_found" => __( "No Events found", "gpc" ),
				"not_found_in_trash" => __( "No Events found in Trash", "gpc" ),
				"parent" => __( "Parent Event:", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image", "gpc" ),
				"archives" => __( "Event archives", "gpc" ),
				"insert_into_item" => __( "Insert into Event", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this Event", "gpc" ),
				"filter_items_list" => __( "Filter Events list", "gpc" ),
				"items_list_navigation" => __( "Events list navigation", "gpc" ),
				"items_list" => __( "Events list", "gpc" ),
				"attributes" => __( "Events Attributes", "gpc" ),
				"name_admin_bar" => __( "Event", "gpc" ),
				"item_published" => __( "Event published", "gpc" ),
				"item_published_privately" => __( "Event published privately", "gpc" ),
				"item_reverted_to_draft" => __( "Event reverted to draft", "gpc" ),
				"item_scheduled" => __( "Event schedules", "gpc" ),
				"item_updated" => __( "Event updated", "gpc" ),
				"parent_item_colon" => __( "Parent Event:", "gpc" ),
			];

			$args = [
				"label" => __( "Events", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "events", "with_front" => false ],
				"query_var" => true,
				"menu_icon" => "dashicons-calendar-alt",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => [ "category", "post_tag" ],
			];

			register_post_type( "events", $args );
		}

		add_action( 'init', 'events_cpt' );

	}


	if ( get_field( 'clients_configuration', 'option' ) == 1 ) {
		// Creation of the clients custom post type.
		function clients_cpt() {

			/**
			 * Post Type: Clients.
			 */

			$labels = [
				"name" => __( "Clients", "gpc" ),
				"singular_name" => __( "Client", "gpc" ),
				"menu_name" => __( "Clients", "gpc" ),
				"all_items" => __( "All Clients", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Client", "gpc" ),
				"edit_item" => __( "Edit Client", "gpc" ),
				"new_item" => __( "New Client", "gpc" ),
				"view_item" => __( "View Client", "gpc" ),
				"view_items" => __( "View Clients", "gpc" ),
				"search_items" => __( "Search Clients", "gpc" ),
				"not_found" => __( "No Clients found", "gpc" ),
				"not_found_in_trash" => __( "No Clients found in Trash", "gpc" ),
				"parent" => __( "Parent Client:", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image", "gpc" ),
				"archives" => __( "Client archives", "gpc" ),
				"insert_into_item" => __( "Insert into Client", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this Client", "gpc" ),
				"filter_items_list" => __( "Filter Clients list", "gpc" ),
				"items_list_navigation" => __( "Clients list navigation", "gpc" ),
				"items_list" => __( "Clients List", "gpc" ),
				"attributes" => __( "Clients Attributes", "gpc" ),
				"name_admin_bar" => __( "Client", "gpc" ),
				"item_published" => __( "Client published", "gpc" ),
				"item_published_privately" => __( "Client published privately", "gpc" ),
				"item_reverted_to_draft" => __( "Client reverted to draft", "gpc" ),
				"item_scheduled" => __( "Client scheduled", "gpc" ),
				"item_updated" => __( "Client updated", "gpc" ),
				"parent_item_colon" => __( "Parent Client:", "gpc" ),
			];

			$args = [
				"label" => __( "Clients", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => true,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "clients", "with_front" => false ],
				"query_var" => true,
				"menu_icon" => "dashicons-rest-api",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => [ "category", "post_tag" ],
			];

			register_post_type( "clients", $args );
		}

		add_action( 'init', 'clients_cpt' );
	}


	if ( get_field( 'episodes_configuration', 'option' ) == 1) {
		// Creation of the episodes custom post type.
		function episodes_cpt() {

			/**
			 * Post Type: Episodes.
			 */

			$labels = [
				"name" => __( "Episodes", "gpc" ),
				"singular_name" => __( "Episode", "gpc" ),
				"menu_name" => __( "Episodes", "gpc" ),
				"all_items" => __( "All Episodes", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Episode", "gpc" ),
				"edit_item" => __( "Edit Episode", "gpc" ),
				"new_item" => __( "New Episode", "gpc" ),
				"view_item" => __( "View Episode", "gpc" ),
				"view_items" => __( "View Episodes", "gpc" ),
				"search_items" => __( "Search Episodes", "gpc" ),
				"not_found" => __( "No Episodes found", "gpc" ),
				"not_found_in_trash" => __( "No Episodes found in trash", "gpc" ),
				"parent" => __( "Parent Episode", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image", "gpc" ),
				"archives" => __( "Episode archives", "gpc" ),
				"insert_into_item" => __( "Insert into episode", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this episode", "gpc" ),
				"filter_items_list" => __( "Filter episodes list", "gpc" ),
				"items_list_navigation" => __( "Episodes list navigation", "gpc" ),
				"items_list" => __( "Episodes list", "gpc" ),
				"attributes" => __( "Episodes Attributes", "gpc" ),
				"name_admin_bar" => __( "Episode", "gpc" ),
				"item_published" => __( "Episode published", "gpc" ),
				"item_published_privately" => __( "Episode published privately", "gpc" ),
				"item_reverted_to_draft" => __( "Episode reverted to draft", "gpc" ),
				"item_scheduled" => __( "Episode scheduled", "gpc" ),
				"item_updated" => __( "Episode updated", "gpc" ),
				"parent_item_colon" => __( "Parent Episode", "gpc" ),
			];

			$args = [
				"label" => __( "Episodes", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "episodes", "with_front" => false ],
				"query_var" => true,
				"menu_position" => 55,
				"menu_icon" => "dashicons-microphone",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => [ "category", "post_tag" ],
			];

			register_post_type( "episodes", $args );
		}

		add_action( 'init', 'episodes_cpt' );
	}

	if ( get_field( 'case_studies_configuration', 'option' ) == 1 ) {
		// Creation of the case studies custom post type.
		function case_studies_cpt() {

			/**
			 * Post Type: Case Studies.
			 */

			$labels = [
				"name" => __( "Case Studies", "gpc" ),
				"singular_name" => __( "Case Study", "gpc" ),
				"menu_name" => __( "Case Studies", "gpc" ),
				"all_items" => __( "All Case Studies", "gpc" ),
				"add_new" => __( "Add New", "gpc" ),
				"add_new_item" => __( "Add New Case Study", "gpc" ),
				"edit_item" => __( "Edit Case Study", "gpc" ),
				"new_item" => __( "New Case Study", "gpc" ),
				"view_item" => __( "View Case Study", "gpc" ),
				"view_items" => __( "View Case Studies", "gpc" ),
				"search_items" => __( "Search Case Studies", "gpc" ),
				"not_found" => __( "No Case Studies found", "gpc" ),
				"not_found_in_trash" => __( "No Case Studies found in Trash", "gpc" ),
				"parent" => __( "Parent Case Study:", "gpc" ),
				"featured_image" => __( "Featured image", "gpc" ),
				"set_featured_image" => __( "Set featured image", "gpc" ),
				"remove_featured_image" => __( "Remove featured image", "gpc" ),
				"use_featured_image" => __( "Use as featured image", "gpc" ),
				"archives" => __( "Case Study archives", "gpc" ),
				"insert_into_item" => __( "Insert into Case Study", "gpc" ),
				"uploaded_to_this_item" => __( "Uploaded to this Case Study", "gpc" ),
				"filter_items_list" => __( "Filter Case Studies list", "gpc" ),
				"items_list_navigation" => __( "Case Studies list navigation", "gpc" ),
				"items_list" => __( "Case Studies List", "gpc" ),
				"attributes" => __( "Case Studies Attributes", "gpc" ),
				"name_admin_bar" => __( "Case Study", "gpc" ),
				"item_published" => __( "Case Study published", "gpc" ),
				"item_published_privately" => __( "Case Study published privately", "gpc" ),
				"item_reverted_to_draft" => __( "Case Study reverted to draft", "gpc" ),
				"item_scheduled" => __( "Case Study scheduled", "gpc" ),
				"item_updated" => __( "Case Study updated", "gpc" ),
				"parent_item_colon" => __( "Parent Case Study:", "gpc" ),
			];

			$args = [
				"label" => __( "Case Studies", "gpc" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "case-studies", "with_front" => false ],
				"query_var" => true,
				"menu_icon" => "dashicons-chart-area",
				"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
				"taxonomies" => [ "category", "post_tag" ],
			];

			register_post_type( "case-studies", $args );
		}

		add_action( 'init', 'case_studies_cpt' );
	}
}