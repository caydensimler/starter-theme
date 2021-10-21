<?php $image = get_sub_field( 'image' ); ?>
<?php if ( $image ) : ?>
	<div>
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>" />
	</div>
<?php endif; ?>