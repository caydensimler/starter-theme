<?php if (have_rows('list_items')) : ?>
	<<?= $listType; ?>>
		<?php while (have_rows('list_items')) : the_row(); ?>
			<li>
				<?php the_sub_field('item'); ?>
			</li>
		<?php endwhile; ?>
	</<?= $listType; ?>>
<?php endif; ?>