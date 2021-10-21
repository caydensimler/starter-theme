<?php 

// Tags link to archive page.
$linkToArchive = '';
$linkToArchive = get_sub_field('links_to_archive');

$tags = get_the_tags(); 

?>

<ul>
	<?php foreach ($tags as $tag): ?>

		<?php if ($linkToArchive): ?>
			<?php $tagLink = get_tag_link($tag); ?>
			<a href="<?= $tagLink; ?>">
		<?php endif; ?>

				<li>
					<span><?= $tag->name; ?></span>
				</li>

		<?php if ($linkToArchive): ?>
			</a>
		<?php endif; ?>

	<?php endforeach; ?>
</ul>