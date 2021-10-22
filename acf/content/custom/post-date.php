<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
endif; 

$format = get_sub_field('format'); 
$prefix = get_sub_field('prefix');
$suffix = get_sub_field('suffix');

?>

<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<p <?= $settingsArray['content-classes']; ?>>
		<?= $prefix; ?> <?= get_the_date($format); ?> <?= $suffix; ?>
	</p>
</div>