<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cdc441b58a0f',
	'title' => 'Theme Settings',
	'fields' => array(
		array(
			'key' => 'field_5ce56d3441fee',
			'label' => 'Admin Functionality',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ce439d75f9c9',
			'label' => 'Site Comments',
			'name' => 'site_comments',
			'type' => 'true_false',
			'instructions' => 'Enables or disables the comment functionality within WordPress.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5ce596233f46d',
			'label' => 'File Editor',
			'name' => 'file_editor',
			'type' => 'true_false',
			'instructions' => 'Enables or disables the file editor under the Appearance tab.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5ce596da6fce5',
			'label' => 'Custom Fields',
			'name' => 'custom_fields',
			'type' => 'true_false',
			'instructions' => 'Enables or disables the Custom Fields tab on the sidebar.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5ce56ced41fed',
			'label' => 'Libraries',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5eea5cd95bad1',
			'label' => 'Note',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => 'Click on the name of the library to view the documentation for that particular asset.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5ce449edda617',
			'label' => '<a href="https://kenwheeler.github.io/slick/" target="_blank" rel="noopener noreferrer">Slick Slider</a>',
			'name' => 'slick_slider_enqueu',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Yes',
			'ui_off_text' => 'No',
		),
		array(
			'key' => 'field_5ce56a91d7b13',
			'label' => '<a href="https://fontawesome.com/icons?d=gallery" target="_blank" rel="noopener noreferrer">Font Awesome</a>',
			'name' => 'font_awesome',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce56b76067cd',
			'label' => '<a href="https://michalsnik.github.io/aos/" target="_blank" rel="noopener noreferrer">Animate on Scroll</a>',
			'name' => 'animate_on_scroll',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce59077ba150',
			'label' => '<a href="https://ianlunn.github.io/Hover/" target="_blank" rel="noopener noreferrer">Hover CSS</a>',
			'name' => 'hover_css',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5cf00fdbcc88e',
			'label' => '<a href="https://masonry.desandro.com/" target="_blank" rel="noopener noreferrer">Masonry JS</a>',
			'name' => 'masonry_js',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5eea9d2428271',
			'label' => '<a href="https://selectric.js.org/" target="_blank" rel="noopener noreferrer">jQuery Selectric</a>',
			'name' => 'selectric_js_cdn',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5eea9d4f0bdc4',
			'label' => '<a href="https://alvarotrigo.com/fullPage/" target="_blank" rel="noopener noreferrer">fullPage</a>',
			'name' => 'fullpage_js',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce59255be445',
			'label' => 'Custom Post Types',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ce448ab439d8',
			'label' => 'Testimonials',
			'name' => 'testimonials_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5ce592390cba6',
			'label' => 'Projects',
			'name' => 'projects_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5ce5944ef8af8',
			'label' => 'Team Members',
			'name' => 'team_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5eea4db913521',
			'label' => 'News',
			'name' => 'news_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5eea4fda8c4a5',
			'label' => 'Services',
			'name' => 'services_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5eea5bff83079',
			'label' => 'Events',
			'name' => 'events_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5eea98feb3c65',
			'label' => 'Clients',
			'name' => 'clients_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5f762b03c09fc',
			'label' => 'Episodes',
			'name' => 'episodes_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_5fa48327b7f5c',
			'label' => 'Case Studies',
			'name' => 'case_studies_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_613ec5d67ea66',
			'label' => 'Success Stories',
			'name' => 'success_stories_configuration',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'On',
			'ui_off_text' => 'Off',
		),
		array(
			'key' => 'field_602ae285ceb78',
			'label' => 'Menus',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_602c316a7c11b',
			'label' => 'Note',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Once your menu is registered here, you\'ll need to <a href="/wp-admin/nav-menus.php?action=edit&menu=0" target="_blank">create a new menu</a> and select the registered menu based on the name set.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_602ae294ceb79',
			'label' => 'Register Menus',
			'name' => 'register_menus',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Register New Menu',
			'sub_fields' => array(
				array(
					'key' => 'field_602ae3fcceb7a',
					'label' => 'Menu Name',
					'name' => 'menu_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'tooltip',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Admin theme settings to toggle certain custom post types, functionality of WordPress, and additional JS/CSS libraries.',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'options' => 'Options',
	),
	'modified' => 1631912127,
));

endif;