<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; 

$linksTo = get_sub_field('links_to');

if ($linksTo === 'previous') {
	$linkClass = $linksTo . '-post';

	$alt = 'Go to the previous post.';
	$link = get_permalink( get_adjacent_post(false,'',true) );
	if ($link === get_permalink()) { $link = ''; }
} elseif ($linksTo === 'next') {
	$linkClass = $linksTo . '-post';

	$alt = 'Go to the next post.';
	$link = get_permalink( get_adjacent_post(false,'',false) );
	if ($link === get_permalink()) { $link = ''; }
} else {
	$linkClass = '';

	$alt = 'Go to the post titled: ' . get_the_title();
	$link = get_permalink();
}

if ($settingsArray['content-classes'] && $linkClass):
	$contentClass = substr($settingsArray['content-classes'], 0, -1) . ' ' . $linkClass . '"'; 
elseif (!$settingsArray['content-classes'] && $linkClass):
	$contentClass = 'class="' . $linkClass . '"';
else: 
	$contentClass = '';
endif; ?>

<?php if ( $link ) : ?>
	<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<a <?php echo $contentClass; ?> href="<?php echo $link; ?>" alt="<?php echo $alt; ?>">
			<span><?php the_sub_field('link_text'); ?></span>
		</a>
	</div>
<?php endif; ?>