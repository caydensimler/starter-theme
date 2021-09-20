<?php
// Guide to GP Hooks - https://docs.generatepress.com/article/hooks-visual-guide/

// Custom Font Filter
add_filter( 'generate_typography_default_fonts', function( $fonts ) {
    $fonts[] = 'Overpass';

    return $fonts;
} );

// Page Groups
if (have_rows('page_groups', 'option')) {
	function page_group_open() {
		while (have_rows('page_groups', 'option')) { the_row();
			$className = slug(get_sub_field('group_name'));
			$pages = get_sub_field( 'pages' );

			if ($pages) {
				foreach ($pages as $page) {
					$pageString = strval($page);
					if (is_page($pageString)) {
						$topWrapper = '<div class="page-group ' . $className . '"> <!-- open page group -->';
						echo $topWrapper;
					}

				    $args = array('child_of' => $page);
				    $childPages = get_pages($args);

				    foreach ($childPages as $childPage) {
				    	if (is_page($childPage->ID)) {
				        	$childClassName = $className . '-child';
				        	$topWrapper = '<div class="page-group ' . $className . ' ' . $childClassName . '"> <!-- open page group -->';
				        	echo $topWrapper;
				    	}
				    }

				} // end foreach
			} // end if $pages

		} // end while have_rows
	} // end function


	function page_group_close() {
		while (have_rows('page_groups', 'option')) { the_row();
			$pages = get_sub_field( 'pages' );

			if ($pages) {
				foreach ($pages as $page) {
					$pageString = strval($page);
					if (is_page($pageString)) {
						$bottomWrapper = '</div> <!-- close page group -->';
						echo $bottomWrapper;
					}

				    $args = array('child_of' => $page);
				    $childPages = get_pages($args);

				    foreach ($childPages as $childPage) {
				    	if (is_page($childPage->ID)) {
				        	$bottomWrapper = '</div> <!-- close page group -->';
				        	echo $bottomWrapper;
				    	}
				    }

				} // end foreach
			} // end if $pages

		} // end while have_rows
	}

	add_action('generate_before_header', 'page_group_open');
	add_action('generate_after_footer', 'page_group_close');
} // end if have_rows



// Header Hooks
add_action('generate_before_header', 'before_header');
function before_header() {
	get_template_part('acf/layouts/header/before-navigation');
}

add_action('generate_after_header', 'after_header');
function after_header(){
	get_template_part('acf/layouts/header/after-navigation');
}


// Team - Taxonomies
add_action( 'init', 'create_team_division_taxonomy', 0 );
function create_team_division_taxonomy() {
	$labels = array(
		'name' => _x( 'Divisions', 'taxonomy general name' ),
		'singular_name' => _x( 'Division', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Divisions' ),
		'popular_items' => __( 'Popular Divisions' ),
		'all_items' => __( 'All Divisions' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Division' ),
		'update_item' => __( 'Update Division' ),
		'add_new_item' => __( 'Add New' ),
		'new_item_name' => __( 'New Division Name' ),
		'separate_items_with_commas' => __( 'Separate Divisions with commas' ),
		'add_or_remove_items' => __( 'Add or Remove Divisions' ),
		'choose_from_most_used' => __( 'Choose from the most used Divisions' ),
		'menu_name' => __( 'Divisions' ),
	);

	register_taxonomy('division','team',array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'division', "with_front" => false ),
	));
}

add_action( 'init', 'create_team_specialty_taxonomy', 0 );
function create_team_specialty_taxonomy() {
	$labels = array(
		'name' => _x( 'Specialties', 'taxonomy general name' ),
		'singular_name' => _x( 'Specialty', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Specialties' ),
		'popular_items' => __( 'Popular Specialties' ),
		'all_items' => __( 'All Specialties' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit specialty' ),
		'update_item' => __( 'Update specialty' ),
		'add_new_item' => __( 'Add New' ),
		'new_item_name' => __( 'New Specialty Name' ),
		'separate_items_with_commas' => __( 'Separate Specialties with commas' ),
		'add_or_remove_items' => __( 'Add or Remove Specialties' ),
		'choose_from_most_used' => __( 'Choose from the most used Specialties' ),
		'menu_name' => __( 'Specialties' ),
	);

	// Registering the non-hierarchical taxonomy
	register_taxonomy('specialty','team',array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'specialty', "with_front" => false ),
	));
}



// Content Blocks - Meta Box
function register_cb_meta_box() {
	add_meta_box( 'meta-box-id', __( 'Shortcode', 'textdomain' ), 'cb_display_callback', 'content-block', 'side' );
}
add_action( 'add_meta_boxes', 'register_cb_meta_box' );

function cb_display_callback($post) { ?>
	<p>You can place this content block into your posts, pages, custom post types or widgets using the shortcode below:</p>
	<code>[content-block id="<?= $post->ID; ?>"]</code>
<?php }


// Content Block - Taxonomy
add_action( 'init', 'create_content_block_taxonomy', 0 );
function create_content_block_taxonomy() {
	$labels = array(
		'name' => _x( 'Block Types', 'taxonomy general name' ),
		'singular_name' => _x( 'Block Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Block Types' ),
		'popular_items' => __( 'Popular Block Types' ),
		'all_items' => __( 'All Block Types' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Block Type' ),
		'update_item' => __( 'Update Block Type' ),
		'add_new_item' => __( 'Add New' ),
		'new_item_name' => __( 'New Block Type Name' ),
		'separate_items_with_commas' => __( 'Separate Block Types with commas' ),
		'add_or_remove_items' => __( 'Add or Remove Block Types' ),
		'choose_from_most_used' => __( 'Choose from the most used Block Types' ),
		'menu_name' => __( 'Block Types' ),
	);

	register_taxonomy('block-type','content-block',array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'content-block', "with_front" => false ),
	));
}