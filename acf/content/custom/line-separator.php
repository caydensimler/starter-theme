<?php if (have_settings()):
	while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile; 
endif; ?>

<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<hr <?= $settingsArray['content-classes']; ?> <?= $settingsArray['content-styles']; ?>>
</div>