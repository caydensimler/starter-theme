<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
endif; ?>

<?php $textType = get_sub_field('type'); ?>

<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<<?= $textType; ?> <?= $settingsArray['content-classes']; ?>>
		<?php the_sub_field('text'); ?>
	</<?= $textType; ?>>
</div>