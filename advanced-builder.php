<?php
// Template Name: Advanced Builder
get_header();

	// Content Wrapper

	if (get_post_meta(get_the_ID(), 'content_wrapper_classes', true)) {
		echo '<div class="' . get_post_meta(get_the_ID(), 'content_wrapper_classes', true) . '">';
	}

		// Page Banner
		get_template_part('acf/layouts/page-banner');

		// Sub-Menu
		$enableSubMenu = get_field('enable_sub-menu');
		$subMenu       = get_field('sub-menu-group');
		$subMenuType   = get_field('menu_type');

		if ($enableSubMenu) {
			if ($subMenuType && have_rows('sub-menu-group')) {
				while (have_rows('sub-menu-group')) { the_row();
					get_template_part('acf/layouts/content-block');
				}
			} elseif (!$subMenuType && have_rows('menu_selection')) {
				while (have_rows('menu_selection')) { the_row();
					echo '<div class="sub-menu">';
						get_template_part('acf/layouts/sub-menu');
					echo '</div>';
				}
			}
		}

		// Social Share
		if (get_field('enable_social-share')) { get_template_part('acf/layouts/header/social-share'); }

		// Page Content
		get_template_part('acf/clones/page-content');

	if (get_field('content_wrapper_classes')) { echo '</div>'; }

get_footer();