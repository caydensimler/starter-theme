<?php $contentBlock = get_sub_field('content_block');

if ($contentBlock) {
	$post = $contentBlock; setup_postdata($post);
	$class = slug(preg_replace("/\[[^)]+\]/", "", $post->post_title));
	$blockTypes = get_the_terms($post->ID, 'block-type');

	echo '<div class="content-block ' . $class . '">';
		foreach ($blockTypes as $type) {
			$blockType = $type->slug;
			echo '<div class="' . $blockType . ' ' . $class . '">';
				if ($blockType == 'sub-menu' || $blockType == 'page-banner') {
					get_template_part('acf/layouts/' . $blockType);
				} else {
					get_template_part('acf/clones/page-content');
				}
			echo '</div>';
		}
		echo '</div>';
	wp_reset_query();
}