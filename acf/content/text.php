<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; ?>

<?php $textType = get_sub_field('type'); ?>

<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<<?php echo $textType; ?> <?php echo $settingsArray['content-classes']; ?>>
		<?php the_sub_field('text'); ?>
	</<?php echo $textType; ?>>
</div>