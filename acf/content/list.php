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
	<<?= $listType; ?> <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['wrapper-styles']; ?> <?= $settingsArray['data-attributes']; ?>>
		<?php while (have_rows('list_items')) : the_row(); ?>
			<li <?= $settingsArray['content-classes']; ?> <?= $settingsArray['content-styles']; ?>>
				<?php the_sub_field('item'); ?>
			</li>
		<?php endwhile; ?>
	</<?= $listType; ?>>
<?php endif; ?>