<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif;

if ( have_rows( 'date_formatting' ) ) :
	while ( have_rows( 'date_formatting' ) ) : the_row();
		$prefix = get_sub_field('prefix');
		$format = get_sub_field('format'); 
		$suffix = get_sub_field('suffix');
	endwhile;
else:
	$prefix = '';
	$format = '';
	$suffix = '';
endif;

?>

<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<p <?php echo $settingsArray['content-classes']; ?>>
		<?php if ($prefix): ?>
			<span class="date-prefix"><?php echo $prefix; ?></span> 
		<?php endif; ?>

		<span class="date"><?php echo get_the_date($format); ?></span> 

		<?php if ($suffix): ?>
			<span class="date-suffix"><?php echo $suffix; ?></span>
		<?php endif; ?>
	</p>
</div>