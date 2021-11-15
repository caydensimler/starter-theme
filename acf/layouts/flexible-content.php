<?php while(have_settings()): 
    $layoutArray = generateLayout(the_setting()); 
    $gridType = get_sub_field('layout_type');
endwhile; ?>

<?php if (have_rows('layout_item')): ?>
	<div <?php echo $layoutArray['wrapper-id']; ?> <?php echo $layoutArray['wrapper-classes']; ?>>

		<?php $itemNumber = 1; ?>

		<?php if ($gridType === 'masonry'): ?>
			<?php for ($i = 1; $i <= $containerCount; $i++): ?>
				<div class="layout-item col-<?php echo $i; ?>"></div>
			<?php endfor; ?>
		<?php endif; ?>

		<?php while(have_rows('layout_item')) : the_row(); ?>

				<div <?php echo $layoutArray['content-classes']; ?>>
					<div class="item-<?php echo $itemNumber; ?>">
						<?php if (have_rows('content_type')) { while (have_rows('content_type')) { the_row(); ?>

							<?php 
								$contentType = get_row_layout();

								// Check if it's custom content and, if so, remove the custom- prefix from the content type.
								if (substr($contentType, 0, strlen('custom-')) == 'custom-') {
									$contentType = str_replace('custom-', '', $contentType);
								}
							?>

							<?php if ($contentType == 'wrapper'): ?>
								<?php get_template_part('acf/content/' . $contentType); ?>
							<?php elseif ($contentType == 'wrapper-end'): ?>
								<?php echo '</div></div>'; ?>
							<?php else: ?>
								<div class="<?php echo $contentType; ?>">
									<?php get_template_part('acf/content/' . $contentType); ?>
								</div>
							<?php endif; ?>

						<?php }} ?>
					</div>
				</div>
			
			<?php $itemNumber++; ?>
		<?php endwhile ?>
	</div>
<?php endif; ?>