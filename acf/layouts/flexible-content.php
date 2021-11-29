<?php
while(have_settings()): 
    $layoutArray = generateLayout(the_setting()); 
    $gridType = get_sub_field('layout_type');
endwhile;

if (have_rows('layout_item')) { $itemNumber = 1;
	echo '<div ' . $layoutArray['wrapper-id'] . ' ' . $layoutArray['wrapper-classes'] . '>';

	if ($gridType === 'masonry') {
		for ($i = 1; $i <= $layoutArray['container-count']; $i++) {
			echo '<div class="layout-item col-' . $i . '"></div>';
		} // endfor
	} // endif ($gridType === 'masonry')

	while (have_rows('layout_item')) { the_row();
		echo '<div ' .  $layoutArray['content-classes'] . '>';
			echo '<div class="item-' . $itemNumber . '">';

				if (have_rows('content_type')) { while (have_rows('content_type')) { the_row();
					$contentType = get_row_layout();

					if ($contentType == 'wrapper') {
						get_template_part('acf/content/' . $contentType);
					} elseif ($contentType == 'wrapper-end') {
						echo '</div></div>';
					} else {
						echo '<div class="' . $contentType . '">';
							get_template_part('acf/content/' . $contentType);
						echo '</div>'; // close content type wrapper
					}
				}} // endif endwhile (have_rows('content_type'))

			echo '</div>'; // close layout item container
		echo '</div>'; // close layout item wrapper

		$itemNumber ++;
	} // endwhile (have_rows('layout_item'))

	echo '</div>';
} // endif (have_rows('layout_item'))