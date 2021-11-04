<?php 

$settingsArray = generateBasicContent(); 

$imageSize = get_sub_field('featured_image_size');
$imageURL = get_the_post_thumbnail_url(get_the_ID(), $imageSize);

$imageLinks = get_sub_field('image_links');

?>

<?php if ($imageURL): ?>
	<div <?php echo $settingsArray['wrapper-classes']; ?> <?php echo $settingsArray['data-attributes']; ?>>
		<?php if ($imageLinks): ?>
			<?php $postLink = get_permalink(); ?>
			<a href="<?php echo $postLink; ?>" title="View the post titled '<?php the_title(); ?>'.">
		<?php endif; ?>

				<img src="<?php echo $imageURL; ?>" alt="<?php the_title(); ?>">

		<?php if ($imageLinks): ?></a><?php endif; ?>
	</div>
<?php endif; ?>