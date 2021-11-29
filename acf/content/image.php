<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
		$imageLink = get_sub_field( 'links_to' );
	endwhile; 
else:
	$settingsArray = generateBasicContent();
	$imageLink = get_sub_field( 'links_to' );

	$maxImageWidth = get_sub_field('max_image_width');
	if ($maxImageWidth) { $imageSize = ' style="max-width: ' . $maxImageWidth . 'px; width: 100%;"'; } else { $imageSize = ''; }
endif; ?>


<?php $image = get_sub_field( 'image' ); ?>
<?php if ( $image ) : ?>
	<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<?php if ($imageLink): ?>
			<a href="<?php echo esc_url( $imageLink['url'] ); ?>" target="<?php echo esc_attr( $imageLink['target'] ); ?>" title="<?php echo esc_html( $imageLink['title'] ); ?>">
		<?php endif; ?>
			<img <?php echo $settingsArray['content-classes']; ?> <?php echo $settingsArray['content-styles']; ?> src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" <?php echo $imageSize; ?> />
		<?php if ($imageLink): ?>
			</a>
		<?php endif; ?>
	</div>
<?php endif; ?>