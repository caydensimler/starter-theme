<?php $link = get_sub_field( 'link' ); ?>
<?php $style = get_sub_field('style'); ?>

<?php if ( $link ) : ?>
	<div>
		<a class="<?= $style; ?>" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
			<span><?php echo $link['title']; ?></span>
		</a>
	</div>
<?php endif; ?>
