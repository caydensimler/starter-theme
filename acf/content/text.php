<?php $textType = get_sub_field('type'); ?>

<div>
	<<?= $textType; ?>><?php the_sub_field('text'); ?></<?= $textType; ?>>
</div>