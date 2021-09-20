<?php while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile; ?>

<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<div <?= $settingsArray['content-classes']; ?>>
		<?php the_sub_field('wysiwyg'); ?>
	</div>
</div>