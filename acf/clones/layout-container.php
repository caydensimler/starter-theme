<?php 

while(have_settings()): 
	$settingsArray = generateSettings(the_setting()); 
	$backgroundType = get_sub_field('background_type');

	if ($backgroundType === 'video') {
		$video = get_sub_field('background_video');
		$poster = get_sub_field('background_poster');
	}
endwhile;

if ($settingsArray['wrapper-classes'] && $backgroundType === 'video') {
	$gridWrapperClasses = substr($settingsArray['wrapper-classes'], 0, -1) . ' video-background layout-wrapper"';
} elseif ($settingsArray['wrapper-classes'] && $backgroundType !== 'video') {
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
	<?php if ($backgroundType === 'video'): ?>
		<video loop muted autoplay playsinline poster="<?php echo $poster; ?>" class="background-video">
		    <source src="<?php echo $video; ?>" type="video/mp4">
		</video>
	<?php endif; ?>

	<div <?php echo $gridContainerClasses; ?> <?php echo $settingsArray['content-styles']; ?>>