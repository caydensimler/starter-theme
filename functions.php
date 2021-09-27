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


// ACF Options page and Configurables
require get_stylesheet_directory() . '/inc/options.php';
require get_stylesheet_directory() . '/inc/configurables.php';


// I've noticed that when using the child theme here (https://github.com/addisonhall/generatepress-child), the admin bar dissapears on the front end. This code fixes it.
function admin_bar(){
  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );


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
// add_filter( 'rest_endpoints', function( $endpoints ){
//     if ( isset( $endpoints['/wp/v2/users'] ) ) {
//         unset( $endpoints['/wp/v2/users'] );
//     }
//     if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
//         unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
//     }
//     return $endpoints;
// });