<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
endif; 

if ($settingsArray['wrapper-classes']):
	$wrapperClass = substr($settingsArray['wrapper-classes'], 0, -1) . ' wrapper"'; 
else:
	$wrapperClass = 'class="wrapper"';
endif; ?>

<div <?php echo $wrapperClass; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<div <?php echo $settingsArray['content-classes']; ?>>