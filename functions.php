<?php
/**
 * GeneratePress Child Theme functions and definitions
 *
 * All functions are prefixed with gpc_
 *
 * @package GenerateChild
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'GPC_VERSION', '1.0');

/**
 * Hide admin bar.
 */
show_admin_bar( false );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'gpc_scripts' );
function gpc_scripts() {
  wp_enqueue_style( 'gpc-base', get_stylesheet_directory_uri() . '/css/base.css', false, GPC_VERSION, 'all');
  wp_enqueue_script( 'gpc-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), GPC_VERSION, true );
}

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );

/**
 * Add body classes.
 */
add_filter( 'body_class', 'gpc_body_classes' );
function gpc_body_classes( $classes ) {
  $classes[] = 'gpc';
  return $classes;
}

/**
 * Add .has-js class to html element.
 */
add_action( 'generate_before_header','gpc_add_js_class' );
function gpc_add_js_class() { ?>
  <script>
    jQuery('html').addClass('has-js');
  </script>
<?php }

/**
 * Responsive embedded video.
 */
add_filter( 'embed_oembed_html', 'gpc_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'gpc_embed_html' ); // Jetpack
function gpc_embed_html( $html ) {
  return '<div class="video-container">' . $html . '</div>';
}

/**
 * Enable shortcodes in widgets.
 */
add_filter( 'widget_text' , 'do_shortcode' );

/**
 * Include other functions as needed from the `inc` folder.
 */
require get_stylesheet_directory() . '/inc/users.php';
require get_stylesheet_directory() . '/inc/generatepress.php';
require get_stylesheet_directory() . '/inc/styles.php';
require get_stylesheet_directory() . '/inc/dashboard-widgets.php';
require get_stylesheet_directory() . '/inc/sub-menu-widget.php';
require get_stylesheet_directory() . '/inc/optimizations.php';
require get_stylesheet_directory() . '/inc/image-sizes.php';
require get_stylesheet_directory() . '/inc/cpt-output-reset.php';
// require get_stylesheet_directory() . '/inc/generatepress.php';
require get_stylesheet_directory() . '/inc/wp-show-posts.php';
// require get_stylesheet_directory() . '/inc/cpt-output-custom.php';
// require get_stylesheet_directory() . '/inc/advanced-custom-fields.php';
// require get_stylesheet_directory() . '/inc/woocommerce.php';
// require get_stylesheet_directory() . '/inc/shortcodes.php';





// CUSTOM CODE STARTS HERE -------------------------------------------------------------------------------------------
require get_stylesheet_directory() . '/inc/options.php';




// This enqueues font awesome so you can use those awesome icons easily. Just add this code to your functions.php file
add_action( 'wp_enqueue_scripts', 'tu_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function tu_load_font_awesome() {
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css', array(), '5.1.0' );
}



// I've noticed that when using the child theme here (https://github.com/addisonhall/generatepress-child), the admin bar dissapears on the front end. Add this code to functions.php to fix it
function admin_bar(){
  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );



// Slick slider. Uncomment if using. All edits for the slider can be made in the slick-init.js file.
add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles() {
  wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
  wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');
  wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
  wp_enqueue_script( 'slickinit', get_stylesheet_directory_uri() . '/js/slick-init.js', array( 'jquery' ), '1.6.0', true );
}



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



// Adds a filter to give an option to hide the label for a gravity forms field.
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );



// Converts a string to a slug. Simple as that!
function slug($str){
	$str = strtolower(trim($str));
	$str = preg_replace('/[^a-z0-9-]/', '-', $str);
	$str = preg_replace('/-+/', "-", $str);
	return $str;
}



// The current day of the week is output into the $currentDay variable
// julianday(Required)
// A julian day number as integer

// mode(Optional)
// Defines what to return (integer or string). Mode values −

// 0 − Default. Returns the day number as an int (0=Sunday, 1=Monday, etc)
// 1 − Returns a string that contains the day of week (English-Gregorian)
// 2 − Returns a string that contains the abbreviated day of week (English-Gregorian)
$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
$currentDay = jddayofweek($jd,1);



// Shortcode for getting the title set inside the Customizer, and allows for echoing in non-standard areas
add_shortcode('bloginfo', function($atts) {

   $atts = shortcode_atts(array('filter'=>'', 'info'=>''), $atts, 'bloginfo');

   $infos = array(
     'name', 'description',
     'wpurl', 'url', 'pingback_url',
     'admin_email', 'charset', 'version', 'html_type', 'language',
     'atom_url', 'rdf_url','rss_url', 'rss2_url',
     'comments_atom_url', 'comments_rss2_url',
   );

   $filter = in_array(strtolower($atts['filter']), array('raw', 'display'), true)
     ? strtolower($atts['filter'])
     : 'display';

   return in_array($atts['info'], $infos, true) ? get_bloginfo($atts['info'], $filter) : '';
});



// Creation of the testimonials custom post type, utilized in most sites
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



// This uses the format [get_partial partial="partial-name"] to call a custom partial to be used inside a Generate Press page header or elsewhere
function get_partial( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'partial' => '',
		),
		$atts,
		'get_partial'
	);

	get_template_part('partials/' . $atts['partial']);

}
add_shortcode( 'get_partial', 'get_partial' );



// Disables user enumaration through the REST API via a JSON file
add_filter( 'rest_endpoints', function( $endpoints ){
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});