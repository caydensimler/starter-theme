<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; 

$link = get_sub_field( 'link' ); 
$style = get_sub_field('style'); 

if ($settingsArray['content-classes']):
	$contentClass = substr($settingsArray['content-classes'], 0, -1) . ' ' . $style . '"'; 
else:
	$contentClass = 'class="' . $style . '"';
endif; ?>

<?php if ( $link ) : ?>
	<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<a <?php echo $contentClass; ?> href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>">
			<span><?php echo $link['title']; ?></span>
		</a>
	</div>
<?php endif; ?>
