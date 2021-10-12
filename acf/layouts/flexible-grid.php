<?php while(have_settings()): the_setting();
	$contentClasses = 'class="';
	$wrapperClasses = 'class="';

	// Grid Type
	if (get_sub_field('grid_type')) {
		if (have_rows('grid-arrangement')) { while (have_rows('grid-arrangement')) { the_row();
			$desktopArrangement = get_sub_field('desktop');
			$tabletArrangement = get_sub_field('tablet');
			$mobileArrangement = get_sub_field('mobile');
		}}

		$contentClasses .= 'grid-item ';

		$gridType = get_sub_field('grid_type');
		$masonryLayout = get_sub_field('masonry_layout') . ' masonry-item ';

		if ($gridType == 'standard') {
			$wrapperClasses .= 'grid-display ' . $desktopArrangement . ' ' . $tabletArrangement . ' ' . $mobileArrangement . ' ';
			$masonryID = '';
		} elseif ($gridType == 'masonry') {
			$contentClasses .= 'content-grid masonry ' . $masonryLayout;

			if (get_sub_field('masonry_id')) { $masonryID = 'id="' . get_sub_field('masonry_id') . '"';
			} else { $masonryID = ''; }
		}
	}

	if (get_sub_field('grid_wrapper_classes')) { $wrapperClasses .= get_sub_field('grid_wrapper_classes') . ' '; }
	if (get_sub_field('grid_item_classes')) { $contentClasses .= get_sub_field('grid_item_classes') . ' '; }

	if (get_sub_field('grid_item_vertically-alignment') !== 'unset' && get_sub_field('grid_type') == 'standard') {
		$contentClasses .= get_sub_field('grid_item_vertical-alignment') . ' ';
	}

	$contentClasses = rtrim($contentClasses) . '"';
	if (strlen($wrapperClasses) > 7) {
		$wrapperClasses .= 'display-wrapper ';
		$wrapperClasses = rtrim($wrapperClasses) . '"';
	} else {
		$wrapperClasses = '';
	}

endwhile; ?>

<?php if (have_rows('grid_items')): ?>
	<div <?= $wrapperClasses; ?> <?= $masonryID; ?>>

		<?php $itemNumber = 1; ?>

		<?php while(have_rows('grid_items')) : the_row(); ?>

			<div <?= $contentClasses; ?>>
				<div class="item-<?= $itemNumber; ?>">
					<?php if (have_rows('content_type')) { while (have_rows('content_type')) { the_row(); ?>

						<?php if (get_row_layout() == 'wrapper'): ?>
							<?php get_template_part('acf/content/' . get_row_layout()); ?>
						<?php elseif (get_row_layout() == 'wrapper_end'): ?>
							<?php echo '</div>'; ?>
						<?php else: ?>
							<div class="component <?= get_row_layout(); ?>-component">
								<?php get_template_part('acf/content/' . get_row_layout()); ?>
							</div>
						<?php endif; ?>

					<?php }} ?>
				</div>
			</div>

			<?php $itemNumber++; ?>

		<?php endwhile ?>

	</div>
<?php endif; ?>