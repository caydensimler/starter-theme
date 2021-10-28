<?php

// Adds a function to give all li in the menu a class.
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


if (function_exists('have_rows')) {
	if (have_rows('register_menus', 'option')) {
		while (have_rows('register_menus', 'option')) { the_row();
			$menuName = get_sub_field( 'menu_name' );
			$menuSlug = slug($menuName);

			register_nav_menu($menuSlug, $menuName);
		}
	}
}