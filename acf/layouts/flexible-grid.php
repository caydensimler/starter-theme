<?php while(have_settings()): the_setting();
	$contentClasses = 'class="';
	$wrapperClasses = 'class="';

	// Grid Type
	if (get_sub_field('grid_type')) {
		if (have_rows('grid_cell_columns')) { while (have_rows('grid_cell_columns')) { the_row();
			$desktopColumnCount = get_sub_field('desktop_column_count');
			$tabletColumnCount = get_sub_field('tablet_column_count');
			$mobileColumnCount = get_sub_field('mobile_column_count');
		}}

		$contentClasses .= 'grid-item ';

		$gridType = get_sub_field('grid_type');
		$masonryLayout = get_sub_field('masonry_layout') . ' masonry-item ';

		if ($gridType == 'standard') {
			$desktopColumns = 'display-grid' . $desktopColumnCount;
			$tabletColumns = 'tablet-display-grid' . $tabletColumnCount;
			$mobileColumns = 'mobile-display-grid' . $mobileColumnCount;

			$wrapperClasses .= 'content-grid ' . $desktopColumns . ' ' . $tabletColumns . ' ' . $mobileColumns . ' ';
		} elseif ($gridType == 'masonry') {
			$contentClasses .= 'content-grid masonry ' . $masonryLayout;
		}
	}

	if (get_sub_field('grid_item_classes')) {
		$contentClasses .= get_sub_field('grid_item_classes') . ' ';
	}

	if (get_sub_field('grid_container_classes')) {
		$wrapperClasses .= get_sub_field('grid_container_classes') . ' ';
	}

	if (get_sub_field('grid_item_vertically-alignment') !== 'unset' && get_sub_field('grid_type') == 'standard') {
		$contentClasses .= get_sub_field('grid_item_vertical-alignment') . ' ';
	}

	$contentClasses = rtrim($contentClasses) . '"';
	$wrapperClasses = rtrim($wrapperClasses) . '"';
endwhile; ?>

<?php if (have_rows('grid_items')): ?>
	<div <?= $wrapperClasses; ?>>


		<?php while(have_rows('grid_items')) : the_row(); ?>

			<div <?= $contentClasses; ?>>
				<div>
					<?php if (have_rows('content_type')) { while (have_rows('content_type')) { the_row(); ?>

						<?php if (get_row_layout() == 'wrapper'): ?>
							<?php get_template_part('acf/content/' . get_row_layout()); ?>
						<?php elseif (get_row_layout() == 'wrapper_end'): ?>
							</div>
						<?php else: ?>
							<div class="component <?= get_row_layout(); ?>-component">
								<?php get_template_part('acf/content/' . get_row_layout()); ?>
							</div>
						<?php endif; ?>

					<?php }} ?>
				</div>
			</div>

		<?php endwhile ?>


	</div>
<?php endif; ?>