<?php while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile; ?>

<?php
	if ($settingsArray['content-classes']) {
		$gridContainerClasses = substr($settingsArray['content-classes'], 0, -1) . ' grid-container"';
	} else {
		$gridContainerClasses = 'class="grid-container"';
	}

	if ($settingsArray['wrapper-classes']) {
		$gridWrapperClasses = substr($settingsArray['wrapper-classes'], 0, -1) . '"';
	} else {
		$gridWrapperClasses = '';
	}
?>

<div <?= $gridWrapperClasses; ?> <?= $settingsArray['wrapper-styles']; ?> <?= $settingsArray['data-attributes']; ?>>
	<div <?= $gridContainerClasses; ?> <?= $settingsArray['content-styles']; ?>>