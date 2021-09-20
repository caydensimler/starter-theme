<?php

// Grid Types
// 1. Standard Grid - Utilizes the grid-template-columns CSS functionality for automatic cell sizing.
// 2. Masonry Grid - Applies a Masonry class at the container level so that each cell's div is its own specific height.
// 3. Standard Grid w/ Vertical Alignment - Uses the grid-template-columns + flexbox to center content vertically when the row is taller than the individual cell. This happens when one cell as more content.

while(have_settings()): the_setting();
	$gridContainerClasses = '';
	$gridContainerClasses = get_sub_field('grid_container_classes');

	$gridItemClasses = '';
	$gridItemClasses = get_sub_field('grid_item_classes') . ' ';

	if (have_rows('grid_cell_columns')):
		while (have_rows('grid_cell_columns')): the_row();
			$desktopColumnCount = get_sub_field('desktop_column_count');
			$tabletColumnCount = get_sub_field('tablet_column_count');
			$mobileColumnCount = get_sub_field('mobile_column_count');
		endwhile;
	endif;

	$gridType = get_sub_field('grid_type');
	$masonryLayout = get_sub_field('masonry_layout') . ' masonry-item';

	if (get_sub_field('grid_item_vertically-alignment') !== 'unset') {
		$gridItemClasses .= get_sub_field('grid_item_vertically-alignment') . ' ';
	}
endwhile;

// if (have_rows('flexible-grid')) { while (have_rows('flexible-grid')) { the_row();

if (have_rows('grid_items')) {

	if ($gridType == 'standard') {
		$desktopColumns = 'display-grid' . $desktopColumnCount;
		$tabletColumns = 'tablet-display-grid' . $tabletColumnCount;
		$mobileColumns = 'mobile-display-grid' . $mobileColumnCount;

		$containerClasses = 'class="content-grid ' . $gridContainerClasses . ' ' . $desktopColumns . ' ' . $tabletColumns . ' ' . $mobileColumns . '"';
	} elseif ($gridType == 'masonry') {
		$containerClasses = 'class="content-grid masonry ' . $gridContainerClasses . '"';
	} ?>

	<div <?= $containerClasses; ?>>
		<?php while(have_rows('grid_items')) { the_row(); ?>
			<div class="grid-item <?php if ($gridType == 'masonry') { echo $masonryLayout; } ?> <?= $gridItemClasses; ?>">
				<div>
					<?php if (have_rows('content_type')) { while (have_rows('content_type')) { the_row(); ?>

						<?php if (get_row_layout() == 'wrapper'): ?>
							<?php get_template_part('acf/content/' . get_row_layout()); ?>
						<?php elseif (get_row_layout() == 'wrapper_end'): ?>
							</div></div>
						<?php else: ?>
							<div class="component <?= get_row_layout(); ?>-component">
								<?php get_template_part('acf/content/' . get_row_layout()); ?>
							</div>
						<?php endif; ?>


					<?php }} ?>
				</div>
			</div>
		<?php } ?>
	</div>
<?php }
// }}