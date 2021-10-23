<?php while(have_settings()): the_setting();
	$contentClasses = 'class="';
	$wrapperClasses = 'class="';

	// Grid Type
	$gridType = get_sub_field('layout_type');

	if ($gridType == 'standard') {
		if (have_rows('standard_columns')) { 
			while (have_rows('standard_columns')) { the_row();
				$layoutStructure = get_sub_field( 'desktop' ) . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile');
			}
		}

		$contentClasses .= 'grid-item ';
		if (get_sub_field('vertical-alignment') !== 'unset') {
			$contentClasses .= get_sub_field('vertical-alignment') . ' ';
		}

		$wrapperClasses .= 'grid-display ' . $layoutStructure . ' ';
	} elseif ($gridType == 'masonry') {
		if (have_rows('masonry_columns')) { 
			while (have_rows('masonry_columns')) { the_row();
				$desktopMasonry = get_sub_field( 'desktop' );
				$containerCount = $desktopMasonry['label'];
				$layoutStructure = $desktopMasonry['value'] . ' ' . get_sub_field('tablet') . ' ' . get_sub_field('mobile') . ' grid-display masonry-grid items-start ';
			}
		}

		$wrapperClasses .= 'masonry-layout ' . $layoutStructure;
		$contentClasses .= 'masonry-item ';
	}

	if (get_sub_field('layout_id')) { $layoutID = 'id="' . get_sub_field('layout_id') . '"'; } else {
		$layoutID = '';
	}
	if (get_sub_field('layout_classes')) { $wrapperClasses .= get_sub_field('layout_classes') . ' '; }
	if (get_sub_field('layout_item_classes')) { $contentClasses .= get_sub_field('layout_item_classes') . ' '; }

	$contentClasses = rtrim($contentClasses) . '"';
	$wrapperClasses = rtrim($wrapperClasses) . '"';

endwhile; ?>

<?php if (have_rows('layout_item')): ?>
	<div <?= $layoutID; ?> <?= $wrapperClasses; ?>>

		<?php $itemNumber = 1; ?>

		<?php if ($gridType === 'masonry'): ?>
			<?php for ($i = 1; $i <= $containerCount; $i++): ?>
				<div class="grid-item col-<?= $i; ?>"></div>
			<?php endfor; ?>
		<?php endif; ?>

		<?php while(have_rows('layout_item')) : the_row(); ?>

				<div <?= $contentClasses; ?>>
					<div class="item-<?= $itemNumber; ?>">
						<?php if (have_rows('content_type')) { while (have_rows('content_type')) { the_row(); ?>

							<?php 
								$layout = get_row_layout();
								if (substr($layout, 0, strlen('custom-')) == 'custom-') {
									$layout = str_replace('custom-', '', $layout);
									$customLayout = 1;
								} else {
									$customLayout = 0;
								}
							?>

							<?php if ($customLayout): ?>
								<div class="content custom-content <?= $layout; ?>">
									<?php get_template_part('acf/content/custom/' . $layout); ?>
								</div>
							<?php elseif ($layout == 'wrapper'): ?>
								<?php get_template_part('acf/content/' . get_row_layout()); ?>
							<?php elseif ($layout == 'wrapper_end'): ?>
								<?php echo '</div></div>'; ?>
							<?php else: ?>
								<div class="content <?= $layout; ?>">
									<?php get_template_part('acf/content/' . $layout); ?>
								</div>
							<?php endif; ?>

						<?php }} ?>
					</div>
				</div>
			
			<?php $itemNumber++; ?>
		<?php endwhile ?>
	</div>
<?php endif; ?>