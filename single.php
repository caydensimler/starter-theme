<?php
get_header();

// Page Content
while ( have_posts() ) : the_post();
	get_template_part('acf/clones/page-content');
endwhile;

get_footer();