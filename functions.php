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
  wp_enqueue_script( 'gpc-scripts', get_stylesheet_directory_uri() . '/js/base.js', array( 'jquery' ), GPC_VERSION, true );
  wp_enqueue_style( 'gpc-theme-css', get_stylesheet_directory_uri() . '/css/theme.css', false, GPC_VERSION, 'all');
  wp_enqueue_script( 'gpc-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), GPC_VERSION, true );
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
 * Enable shortcodes in widgets.
 */
add_filter( 'widget_text' , 'do_shortcode' );

/**
 * Include other functions as needed from the `inc` folder.
 */
require get_stylesheet_directory() . '/inc/acf-options-page.php';
require get_stylesheet_directory() . '/inc/configurables.php';
require get_stylesheet_directory() . '/inc/cpts.php';
require get_stylesheet_directory() . '/inc/dashboard-widgets.php';
require get_stylesheet_directory() . '/inc/generate-settings.php';
require get_stylesheet_directory() . '/inc/hooks.php';
require get_stylesheet_directory() . '/inc/image-sizes.php';
require get_stylesheet_directory() . '/inc/libraries.php';
require get_stylesheet_directory() . '/inc/menus.php';
require get_stylesheet_directory() . '/inc/shortcodes.php';
require get_stylesheet_directory() . '/inc/styles.php';
require get_stylesheet_directory() . '/inc/sub-menu-widget.php';
require get_stylesheet_directory() . '/inc/optimizations.php';
require get_stylesheet_directory() . '/inc/users.php';
require get_stylesheet_directory() . '/inc/wp-show-posts.php';

require get_stylesheet_directory() . '/css/admin.php';







// CUSTOM CODE STARTS HERE -------------------------------------------------------------------------------------------


// ACF Options Page and Configurables


// Add the Global Styles/Scripts to the Header and Footer via the wp_head and wp_footer hooks.
function add_to_header() {
  if (have_rows( 'global_stylesscripts_header', 'option' )) {
    while (have_rows( 'global_stylesscripts_header', 'option' )) {
      the_row();
      echo '<!--' . get_sub_field( 'stylescript_name' ) . '-->';
      the_sub_field( 'stylescript' );
    }
  }
}
add_action('wp_head', 'add_to_header');

function add_to_footer() {
  if (have_rows( 'global_stylesscripts_footer', 'option' )) {
    while (have_rows( 'global_stylesscripts_footer', 'option' )) {
      the_row();
      echo '<!--' . get_sub_field( 'stylescript_name' ) . '-->';
      the_sub_field( 'stylescript' );
    }
  }
}
add_action('wp_footer', 'add_to_footer');

if (function_exists('get_field')) {
  if (get_field( 'ga_tracking_id', 'option' )) {
    function add_google_analytics() { ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field( 'ga_tracking_id', 'option' ); ?>"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php the_field( 'ga_tracking_id', 'option' ); ?>');
      </script>
    <?php }

    add_action('wp_head', 'add_google_analytics');
  }
}


// I've noticed that when using the child theme here (https://github.com/addisonhall/generatepress-child), the admin bar dissapears on the front end. This code fixes it.
function admin_bar(){
  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );


// Adds a filter to give an option to hide the label for a gravity forms field.
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


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



// Creates global variables to differentiate styles of layouts.
function global_vars() {
  // $blockID is used for custom styling of content blocks when needed.
  global $blockID;

  // $linkID is used for custom styling of links when needed.
  global $linkID;
}
add_action( 'parse_query', 'global_vars' );



add_filter('acf/settings/remove_wp_meta_box', '__return_true');