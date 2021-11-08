<?php
// Template Name: Advanced Builder
get_header();

if (function_exists('get_field')) {
	// Content Wrapper
	if (get_post_meta(get_the_ID(), 'content_wrapper_classes', true)) {
		echo '<div class="' . get_post_meta(get_the_ID(), 'content_wrapper_classes', true) . '">';
			// Page Content
			get_template_part('acf/clones/page-content');
		echo '</div>';
	} else {
		// Page Content
		get_template_part('acf/clones/page-content');
	}
}

get_footer();