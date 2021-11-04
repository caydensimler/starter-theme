<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif;

// Tags link to archive page.
$linkToArchive = '';
$linkToArchive = get_sub_field('tag_links_to_archive');

$tags = get_the_tags(); 

?>



<?php if ($tags): ?>
	<ul <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<?php foreach ($tags as $tag): ?>

			<?php if ($linkToArchive): ?>
				<?php $tagLink = get_tag_link($tag); ?>
				<a href="<?php echo $tagLink; ?>" title="View all posts tagged '<?php echo $tag->name; ?>'.">
			<?php endif; ?>

					<li <?php echo $settingsArray['content-classes']; ?>>
						<span><?php echo $tag->name; ?></span>
					</li>

			<?php if ($linkToArchive): ?>
				</a>
			<?php endif; ?>

		<?php endforeach; ?>
	</ul>
<?php endif; ?>