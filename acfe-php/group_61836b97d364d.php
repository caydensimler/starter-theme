<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_61836b97d364d',
	'title' => 'Post Query',
	'fields' => array(
		array(
			'key' => 'field_61836be984342',
			'label' => 'Set Query Amount',
			'name' => 'post_query_amount',
			'type' => 'number',
			'instructions' => 'In order to query all of the posts, set this value to 0.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 3,
			'placeholder' => '',
			'prepend' => 'Showing',
			'append' => 'Posts',
			'min' => 0,
			'max' => 20,
			'step' => 1,
		),
		array(
			'key' => 'field_61836bc184341',
			'label' => 'Select Post Type',
			'name' => 'post_type',
			'type' => 'acfe_post_types',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'post_type' => '',
			'field_type' => 'radio',
			'default_value' => false,
			'return_format' => 'name',
			'allow_null' => 0,
			'other_choice' => 0,
			'layout' => 'horizontal',
			'multiple' => 0,
			'choices' => array(
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'search_placeholder' => '',
			'toggle' => 0,
			'allow_custom' => 0,
		),
		array(
			'key' => 'field_61836ea163cea',
			'label' => 'Content',
			'name' => 'post_query_content',
			'type' => 'select',
			'instructions' => 'By selecting items here, it defines how content is generated and in which order. To change the order of how things appear, simply drag them left and right of each other.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'title' => 'Title',
				'author' => 'Author',
				'date' => 'Date',
				'tags' => 'Tags',
				'categories' => 'Categories',
				'image' => 'Featured Image',
				'excerpt' => 'Excerpt',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 1,
			'ui' => 1,
			'ajax' => 1,
			'return_format' => 'value',
			'allow_custom' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_61838147147fa',
			'label' => '(Column 12/12)',
			'name' => '',
			'type' => 'acfe_column',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61836ea163cea',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'columns' => '12/12',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_61837fe8ed8f5',
			'label' => 'Post Item Links to Post',
			'name' => 'top_level_linked',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_6183800eed8f6',
			'label' => 'Use Featured Image as Background',
			'name' => 'featured_image_background',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61836ea163cea',
						'operator' => '==contains',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_61838157147fc',
			'label' => '(Column Endpoint)',
			'name' => '',
			'type' => 'acfe_column',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'endpoint' => 1,
			'columns' => '6/12',
		),
		array(
			'key' => 'field_61837ac2cbe09',
			'label' => 'Title Content Type',
			'name' => 'type',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61836ea163cea',
						'operator' => '==contains',
						'value' => 'title',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
				'p' => 'P',
			),
			'allow_null' => 0,
			'default_value' => 'h5',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_61837b8b5a648',
			'label' => 'Date Formatting',
			'name' => 'date_formatting',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_61836ea163cea',
						'operator' => '==contains',
						'value' => 'date',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 1,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_61837cd75a649',
					'label' => 'Prefix',
					'name' => 'prefix',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61837cdc5a64a',
					'label' => 'Suffix',
					'name' => 'suffix',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61837ce75a64b',
					'label' => 'Format',
					'name' => 'format',
					'type' => 'radio',
					'instructions' => 'Note that in order to create a custom format, you\'ll need to reference the PHP DateTime::format Manual.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'd/m/Y' => '[d/m/Y] 08/17/2021',
						'F jS, Y' => '[F jS, Y] August 17th, 2021',
					),
					'allow_null' => 0,
					'other_choice' => 1,
					'save_other_choice' => 1,
					'default_value' => 'F jS, Y',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
			),
		),
		array(
			'key' => 'field_61837d075a64c',
			'label' => 'Author Formatting',
			'name' => 'author_formatting',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 1,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_61837d0e5a64d',
					'label' => 'Prefix',
					'name' => 'prefix',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61837d155a64e',
					'label' => 'Suffix',
					'name' => 'suffix',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61837d3f5a650',
					'label' => 'Links to Archive',
					'name' => 'links_to_archive',
					'type' => 'true_false',
					'instructions' => 'Whether or not the author name links to their respective archive.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_61837d1b5a64f',
					'label' => 'Note',
					'name' => '',
					'type' => 'message',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '55',
						'class' => '',
						'id' => '',
					),
					'message' => 'Displays the author of the post.',
					'new_lines' => 'wpautop',
					'esc_html' => 0,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'tooltip',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'layout' => 'Layout',
	),
	'modified' => 1636008736,
));

endif;