<?php 

// Tags link to archive page.
$linkToArchive = '';
$linkToArchive = get_sub_field('links_to_archive');

$author = get_the_author_meta('ID');
$prefix = get_sub_field('prefix');
$suffix = get_sub_field('suffix');

?>

<div>
	<?php if ($linkToArchive): ?>
		<?php $authorLink = get_author_posts_url($author); ?>
		<a href="<?= $authorLink; ?>" title="View <?php echo esc_attr(get_the_author()) . '\'s Author Archives'; ?>">
	<?php endif; ?>
			<p><span class="author-prefix"><?= $prefix; ?></span> <span class="author-name"><?= get_the_author(); ?></span> <span class="author-suffix"><?= $suffix; ?></span></p>
	<?php if ($linkToArchive): ?>
		</a>
	<?php endif; ?>
</div>