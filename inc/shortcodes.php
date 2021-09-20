<?php

// Gets the title set inside the Customizer and allows for echoing in non-standard areas.
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


// This uses the format [get_partial partial="partial-name"] to call a custom partial to be used inside a Generate Press page header or elsewhere.
function get_partial( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'partial' => '',
		),
		$atts,
		'get_partial'
	);

	get_template_part('acf/layouts/' . $atts['partial']);

}
add_shortcode( 'get_partial', 'get_partial' );



function get_custom_footer() {
  get_template_part('acf/layouts/footer/footer');
}
add_shortcode('get_custom_footer', 'get_custom_footer');


// Content Block Shortcode
function content_block_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'id' => '',
		),
		$atts
	);

	$contentBlockID = $atts['id'];
	$args = ['p' => $contentBlockID, 'post_type' => 'content-block'];
	$loop = new WP_Query($args);

	if ($loop->have_posts()) {
		while ($loop->have_posts()) {
			$loop->the_post();

			ob_start();

			$postTitle = preg_replace("/\[[^)]+\]/", "", $loop->posts[0]->post_title);
			$class = slug($postTitle) . ' shortcode';
			$blockTypes = get_the_terms($loop->ID, 'block-type');

			echo '<div class="content-block ' . $class . '">';
				foreach ($blockTypes as $type) {
					$blockType = $type->slug;
					echo '<div class="' . $blockType . ' ' . $class . '">';
						if ($blockType == 'sub-menu' || $blockType == 'page-banner') {
							get_template_part('acf/layouts/' . $blockType);
						} else {
							get_template_part('acf/clones/page-content');
						}
					echo '</div>';
				}
			echo '</div>';
			wp_reset_postdata();

			return ob_get_clean();

		}
	}

}
add_shortcode( 'content-block', 'content_block_shortcode' );