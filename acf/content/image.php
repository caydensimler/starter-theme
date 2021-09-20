<?php while(have_settings()):
	$settingsArray = generateSettings(the_setting());

	// Links To
	$imageLink = get_sub_field( 'links_to' );
endwhile; ?>


<?php $image = get_sub_field( 'image' ); ?>
<?php if ( $image ) : ?>
	<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
		<?php if ($imageLink): ?>
			<a href="<?php echo esc_url( $imageLink['url'] ); ?>" target="<?php echo esc_attr( $imageLink['target'] ); ?>" title="<?php echo esc_html( $imageLink['title'] ); ?>">
		<?php endif; ?>
			<img <?= $settingsArray['content-classes']; ?> <?= $settingsArray['content-styles']; ?> src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" />
		<?php if ($imageLink): ?>
			</a>
		<?php endif; ?>
	</div>
<?php endif; ?>