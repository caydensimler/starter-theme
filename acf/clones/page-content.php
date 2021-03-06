<?php

if ( have_rows( 'drag-and-drop' ) ) :
	while ( have_rows( 'drag-and-drop' ) ) :
		the_row();

		$layout = get_row_layout();

		if ($layout == 'layout-wrapper-start') { // opens the layout wrapper
			echo '<div class="layout-wrapper">';
				get_template_part('/acf/clones/layout-container');
		} elseif ($layout == 'layout-wrapper-end') { // closes the layout wrapper
				echo '</div>';
			echo '</div>';
		} elseif ($layout == 'shortcode') {
			get_template_part('/acf/layouts/' . $layout);
		} else {
			echo '<div class="' . $layout . '">';
				// only applies the container wrapper for layouts for non content blocks
				if ($layout !== 'content-block') { get_template_part('/acf/clones/layout-container'); }
					get_template_part('/acf/layouts/' . $layout);
				if ($layout !== 'content-block') { echo '</div></div>'; }
			echo '</div>';
		}
	endwhile;
endif;