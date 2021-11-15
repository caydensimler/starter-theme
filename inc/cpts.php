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