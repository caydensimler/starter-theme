<?php if (have_settings()):
	while(have_settings()): 
		$settingsArray = generateSettings(the_setting()); 

	endwhile; 
endif; ?>

<?php 

// Tags link to archive page.
$linkToArchive = '';
$linkToArchive = get_sub_field('links_to_archive');

$tags = get_the_tags(); 

?>

<ul <?= $settingsArray['wrapper-classes']; ?> <?= $settingsArray['data-attributes']; ?>>
	<?php foreach ($tags as $tag): ?>

		<?php if ($linkToArchive): ?>
			<?php $tagLink = get_tag_link($tag); ?>
			<a href="<?= $tagLink; ?>">
		<?php endif; ?>

				<li <?= $settingsArray['content-classes']; ?>>
					<span><?= $tag->name; ?></span>
				</li>

		<?php if ($linkToArchive): ?>
			</a>
		<?php endif; ?>

	<?php endforeach; ?>
</ul>