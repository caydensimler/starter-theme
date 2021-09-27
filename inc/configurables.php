<?php

// Admin Functionality
if ( get_field( 'site_comments', 'option' ) == 0 ) {
	// Disable support for comments and trackbacks in post types
	function df_disable_comments_post_types_support() {
	  $post_types = get_post_types();
	  foreach ($post_types as $post_type) {
	    if(post_type_supports($post_type, 'comments')) {
	      remove_post_type_support($post_type, 'comments');
	      remove_post_type_support($post_type, 'trackbacks');
	    }
	  }
	}
	add_action('admin_init', 'df_disable_comments_post_types_support');
	// Close comments on the front-end
	function df_disable_comments_status() {
	  return false;
	}
	add_filter('comments_open', 'df_disable_comments_status', 20, 2);
	add_filter('pings_open', 'df_disable_comments_status', 20, 2);
	// Hide existing comments
	function df_disable_comments_hide_existing_comments($comments) {
	  $comments = array();
	  return $comments;
	}
	add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
	// Remove comments page in menu
	function df_disable_comments_admin_menu() {
	  remove_menu_page('edit-comments.php');
	}
	add_action('admin_menu', 'df_disable_comments_admin_menu');
	// Redirect any user trying to access comments page
	function df_disable_comments_admin_menu_redirect() {
	  global $pagenow;
	  if ($pagenow === 'edit-comments.php') {
	    wp_redirect(admin_url()); exit;
	  }
	}
	add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
	// Remove comments metabox from dashboard
	function df_disable_comments_dashboard() {
	  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	}
	add_action('admin_init', 'df_disable_comments_dashboard');
	// Remove comments links from admin bar
	function df_disable_comments_admin_bar() {
	  if (is_admin_bar_showing()) {
	    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	  }
	}
	add_action('init', 'df_disable_comments_admin_bar');
}


if ( get_field( 'file_editor', 'option' ) == 0 ) {
	define('DISALLOW_FILE_EDIT', true);
	define( 'GENERATE_HOOKS_DISALLOW_PHP', true );
}


if ( get_field( 'custom_fields', 'option' ) == 0 ) {
	add_filter('acf/settings/show_admin', '__return_false');
}






// Libraries
if ( get_field( 'font_awesome', 'option' ) == 1 ) {
	add_action( 'wp_enqueue_scripts', 'tu_load_font_awesome' );
	/**
	 * Enqueue Font Awesome.
	 */
	function tu_load_font_awesome() {
	    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css', array(), '5.1.0' );
	}
}


if ( get_field( 'slick_slider_enqueu', 'option' ) == 1 ) {
	// Slick slider. Uncomment if using. All edits for the slider can be made in the slick-init.js file.
	add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
	// Enqueue Slick scripts and styles
	function themeprefix_slick_enqueue_scripts_styles() {
	  wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
	  wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');
	  wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	  wp_enqueue_script( 'slickinit', get_stylesheet_directory_uri() . '/js/slick-init.js', array( 'jquery' ), '1.6.0', true );
	}
}


if ( get_field( 'animate_on_scroll', 'option' ) == 1 ) {
	function aos_css() { ?>
	    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<?php }
	add_action('wp_head', 'aos_css');

	function aos_js() { ?>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>AOS.init({ once: true, }); </script>
	<?php }
	add_action('wp_footer', 'aos_js');
}


if ( get_field( 'hover_css', 'option' ) == 1 ) {
	function hover_css() { ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
	<?php }
	add_action('wp_head', 'hover_css');
}

if ( get_field( 'masonry_js', 'option' ) == 1 ) {
	wp_enqueue_style( 'masonry', get_stylesheet_directory_uri() . '/css/masonry.css', '1.6.0', 'all');
	wp_enqueue_script( 'masonry-init', get_stylesheet_directory_uri() . '/js/masonry-init.js', array( 'jquery' ), GPC_VERSION, true );

	function masonry_js_cdn() { ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
	<?php }

	add_action('wp_footer', 'masonry_js_cdn');
}





// Custom Post Types
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
			"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-editor-quote",
			"supports" => array( "title", "thumbnail", "custom-fields" ),
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
			"rewrite" => array( "slug" => "projects", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-category",
			"supports" => array( "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ),
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
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array( "slug" => "team", "with_front" => true ),
			"query_var" => true,
			"menu_icon" => "dashicons-groups",
			"supports" => array( "title", "editor", "thumbnail", "custom-fields", "revisions", "page-attributes" ),
			"taxonomies" => array( "category", "post_tag" ),
		);

		register_post_type( "team", $args );
	}

	add_action( 'init', 'team_cpt' );
}