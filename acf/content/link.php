<?php while(have_settings()): $settingsArray = generateSettings(the_setting()); endwhile; ?>

<?php $link = get_sub_field( 'link' ); ?>
<?php $style = get_sub_field('style'); ?>

<?php $linkContentClass = substr($settingsArray['content-classes'], 0, -1) . ' ' . $style . '"'; ?>

<?php if ( $link ) : ?>
	<div <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
		<a <?= $linkContentClass; ?> href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
			<span><?php echo $link['title']; ?></span>
		</a>
	</div>
<?php endif; ?>
