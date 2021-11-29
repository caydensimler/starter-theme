<?php
$layoutArray = generateBasicLayout();

if (have_rows('layout_item')) { $itemNumber = 1;
	echo '<div ' . $layoutArray['wrapper-classes'] . '>';

	while (have_rows('layout_item')) { the_row();
		echo '<div ' .  $layoutArray['content-classes'] . '>';
			echo '<div class="item">';

				if (have_rows('content_type')) { while (have_rows('content_type')) { the_row();
					$contentType = get_row_layout();

					if ($contentType == 'wrapper') {
						get_template_part('acf/content/' . $contentType);
					} elseif ($contentType == 'wrapper-end') {
						echo '</div></div>';
					} else {
						echo '<div class="' . $contentType . 'item-' . $itemNumber . '">';
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