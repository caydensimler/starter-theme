<?php
/**
 * GeneratePress Child Theme functions and definitions
 *
 * All functions are prefixed with gpc_
 *
 * @package GenerateChild
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'GPC_VERSION', '2.0');

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'gpc_scripts' );
function gpc_scripts() {
  // wp_enqueue_style( 'gpc-base', get_stylesheet_directory_uri() . '/css/base.css', false, GPC_VERSION, 'all');
  wp_enqueue_script( 'gpc-scripts', get_stylesheet_directory_uri() . '/js/base.js', array( 'jquery' ), GPC_VERSION, true );
  wp_enqueue_style( 'gpc-theme-css', get_stylesheet_directory_uri() . '/css/theme.css', false, GPC_VERSION, 'all');
  wp_enqueue_script( 'gpc-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), GPC_VERSION, true );
}

// add_filter( 'auto_update_plugin', '__return_false' );
// add_filter( 'auto_update_theme', '__return_false' );

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
 * Enable shortcodes in widgets.
 */
add_filter( 'widget_text' , 'do_shortcode' );

/**
 * Include other functions as needed from the `inc` folder.
 */
require get_stylesheet_directory() . '/inc/acf-options-page.php';
require get_stylesheet_directory() . '/inc/cpts.php';
require get_stylesheet_directory() . '/inc/dashboard-widgets.php';
require get_stylesheet_directory() . '/inc/generate-settings.php';
require get_stylesheet_directory() . '/inc/hooks.php';
require get_stylesheet_directory() . '/inc/libraries.php';
require get_stylesheet_directory() . '/inc/menus.php';
require get_stylesheet_directory() . '/inc/shortcodes.php';
require get_stylesheet_directory() . '/inc/styles.php';
require get_stylesheet_directory() . '/inc/optimizations.php';
require get_stylesheet_directory() . '/inc/users.php';
require get_stylesheet_directory() . '/inc/wp-show-posts.php';

require get_stylesheet_directory() . '/css/admin.php';







// CUSTOM CODE STARTS HERE -------------------------------------------------------------------------------------------


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


// Converts a string to a slug.
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


// Gets a string between two strings.
function get_string_between($string, $start, $end){
  $string = ' ' . $string;
  $ini = strpos($string, $start);
  if ($ini == 0) return '';
  $ini += strlen($start);
  $len = strpos($string, $end, $ini) - $ini;
  return substr($string, $ini, $len);
}

add_filter('acf/settings/remove_wp_meta_box', '__return_true');