<?php while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile; ?>

<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<hr <?= $settingsArray['content-classes']; ?> <?= $settingsArray['content-styles']; ?>>
</div>