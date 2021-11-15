<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 
	endwhile; 
else:
	$settingsArray = generateBasicContent();
endif;

// Tags link to archive page.
$linkToArchive = '';
$linkToArchive = get_sub_field('category_links_to_archive');

$postID = get_the_ID();
$categories = wp_get_post_categories($postID); ?>

<?php if ($categories): ?>
	<ul <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<?php foreach ($categories as $category): $categoryObject = get_category($category); ?>

			<?php if ($linkToArchive): ?>
				<?php $categoryLink = get_category_link($category); ?>
				<a href="<?php echo $categoryLink; ?>" title="View all posts tagged '<?php echo $categoryObject->name; ?>'.">
			<?php endif; ?>

					<li <?php echo $settingsArray['content-classes']; ?>>
						<span><?php echo $categoryObject->name; ?></span>
					</li>

			<?php if ($linkToArchive): ?>
				</a>
			<?php endif; ?>

		<?php endforeach; ?>
	</ul>
<?php endif; ?>