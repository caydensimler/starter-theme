<?php get_template_part('references/settings-clone'); ?>
	<div class="grid-container clearfix py4">
		<?php $shortcode = get_sub_field( 'shortcode' ); ?>
		<?php echo do_shortcode($shortcode); ?>
	</div>
</div>