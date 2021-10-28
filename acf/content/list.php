<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting());
		$listType = get_sub_field('list_type'); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
	$listType = get_sub_field('list_type'); 
endif; ?>

<?php if (have_rows('list_items')) : ?>
	<<?php echo $listType; ?> <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['wrapper-styles']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<?php while (have_rows('list_items')) : the_row(); ?>
			<li <?php echo $settingsArray['content-classes']; ?> <?php echo $settingsArray['content-styles']; ?>>
				<?php the_sub_field('item'); ?>
			</li>
		<?php endwhile; ?>
	</<?php echo $listType; ?>>
<?php endif; ?>