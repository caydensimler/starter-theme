<?php
// Guide to GP Hooks - https://docs.generatepress.com/article/hooks-visual-guide/

// Header Code Embed
function header_embeds() {
	echo '<!-- Google Font - Overpass -->';
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">';
}
add_action('wp_head', 'header_embeds');

// Footer Code Embed
function footer_embeds() {}
// add_action('wp_footer', 'footer_embeds');


// Google Analytics
function add_google_analytics() { ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=TRACKING_ID_GOES_HERE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'TRACKING_ID_GOES_HERE');
  </script>
<?php }
// add_action('wp_head', 'add_google_analytics');


// Custom Font Filter
add_filter( 'generate_typography_default_fonts', function( $fonts ) {
    $fonts[] = 'Overpass';

    return $fonts;
} );

// Page Groups
if (function_exists('have_rows')) {
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
}


// Header Hooks
// add_action('generate_before_header', 'before_header');
// function before_header() {
// 	get_template_part('acf/layouts/header/before-navigation');
// }

// add_action('generate_after_header', 'after_header');
// function after_header(){
// 	get_template_part('acf/layouts/header/after-navigation');
// }



// Content Blocks - Meta Box
function register_cb_meta_box() {
	add_meta_box( 'meta-box-id', __( 'Shortcode', 'textdomain' ), 'cb_display_callback', 'content-block', 'side' );
}
add_action( 'add_meta_boxes', 'register_cb_meta_box' );

function cb_display_callback($post) { ?>
	<p>You can place this content block into your posts, pages, custom post types or widgets using the shortcode below:</p>
	<code>[content-block id="<?php echo $post->ID; ?>"]</code>
<?php }


// Content Block - Taxonomy
add_action( 'init', 'create_content_block_taxonomy', 0 );
function create_content_block_taxonomy() {
	$labels = array(
		'name' => 'Block Types', 'taxonomy general name',
		'singular_name' => 'Block Type', 'taxonomy singular name',
		'search_items' =>  'Search Block Types',
		'popular_items' => 'Popular Block Types',
		'all_items' => 'All Block Types',
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => 'Edit Block Type',
		'update_item' => 'Update Block Type',
		'add_new_item' => 'Add New',
		'new_item_name' => 'New Block Type Name',
		'separate_items_with_commas' => 'Separate Block Types with commas',
		'add_or_remove_items' => 'Add or Remove Block Types',
		'choose_from_most_used' => 'Choose from the most used Block Types',
		'menu_name' => 'Block Types',
	);

	register_taxonomy('block-type', 'content-block', array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'content-block', "with_front" => false ),
	));
}