<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; 

$embedType = get_sub_field('type');

if ($embedType === 'standard' && get_sub_field('video')) {
	$video = get_sub_field('video');
	$attributes = get_sub_field('video_attributes');
	$poster = get_sub_field('video_poster');
} elseif ($embedType === 'youtube' && get_sub_field('youtube_video_id')) {
	$video = get_sub_field('youtube_video_id');

	if ($settingsArray['content-classes']):
	$contentClass = substr($settingsArray['content-classes'], 0, -1) . ' youtube-player"';  
	else:
		$contentClass = 'class="youtube-player"';
	endif; 
	
} elseif ($embedType === 'other' && get_sub_field('embed_code')) {
	$video = get_sub_field('embed_code');
}

?>

<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
<?php switch ($embedType) {
	case 'standard'; ?>
		<video <?php echo $attributes; ?> poster="<?php echo $poster; ?>" <?php echo $settingsArray['content-classes']; ?>>
		    <source src="<?php echo $video; ?>" type="video/mp4">
		</video>
		<?php break;
	case 'youtube'; ?>
		<div <?php echo $contentClass; ?> data-id="<?php echo $video; ?>"></div>
		<?php break;
	case 'other'; ?>
		<div <?php echo $settingsArray['content-classes']; ?>>
			<?php echo $video; ?>
		</div>
		<?php break;
} ?>
</div>