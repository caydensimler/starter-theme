<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif; 

$textType = get_sub_field('type'); 
if (!$textType) {
	$textType = 'h1';
}
$titleLinks = get_sub_field('title_links'); ?>

<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<?php if ($titleLinks): ?>
		<?php $postLink = get_permalink(); ?>
		<a href="<?php echo $postLink; ?>" title="View the post titled '<?php the_title(); ?>'.">
	<?php endif; ?>

		<<?php echo $textType; ?> <?php echo $settingsArray['content-classes']; ?>>
			<span><?php the_title(); ?></span>
		</<?php echo $textType; ?>>

	<?php if ($titleLinks): ?></a><?php endif; ?>
</div>