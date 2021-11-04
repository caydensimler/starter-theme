<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif;

if ( have_rows( 'author_formatting' ) ) :
	while ( have_rows( 'author_formatting' ) ) : the_row();
		// Tags link to archive page.
		$linkToArchive = '';
		$linkToArchive = get_sub_field('links_to_archive');

		$author = get_the_author_meta('ID');
		$prefix = get_sub_field('prefix');
		$suffix = get_sub_field('suffix');
	endwhile;
endif;

?>

<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
	<?php if ($linkToArchive): ?>
		<?php $authorLink = get_author_posts_url($author); ?>
		<a href="<?php echo $authorLink; ?>" title="View <?php echo esc_attr(get_the_author()) . '\'s Author Archives'; ?>">
	<?php endif; ?>
			<p <?php echo $settingsArray['content-classes']; ?>><span class="author-prefix"><?php echo $prefix; ?></span> <span class="author-name"><?php echo get_the_author(); ?></span> <span class="author-suffix"><?php echo $suffix; ?></span></p>
	<?php if ($linkToArchive): ?>
		</a>
	<?php endif; ?>
</div>