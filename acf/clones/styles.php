<?php 

while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile;

if ($settingsArray['wrapper-classes']) {
	$gridWrapperClasses = substr($settingsArray['wrapper-classes'], 0, -1) . ' layout-wrapper"';
} else {
	$gridWrapperClasses = 'class="layout-wrapper"';
}

if ($settingsArray['content-classes']) {
	$gridContainerClasses = substr($settingsArray['content-classes'], 0, -1) . ' layout-container grid-container"';
} else {
	$gridContainerClasses = 'class="layout-container grid-container"';
}

?>

<div <?php echo $gridWrapperClasses; ?> <?php echo $settingsArray['wrapper-styles']; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<div <?php echo $gridContainerClasses; ?> <?php echo $settingsArray['content-styles']; ?>>