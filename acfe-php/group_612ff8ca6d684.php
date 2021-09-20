<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_612ff8ca6d684',
	'title' => 'Grid Settings',
	'fields' => array(
		array(
			'key' => 'field_613129daf8c79',
			'label' => 'Grid Settings',
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
			'key' => 'field_613a8cde9bc94',
			'label' => 'Grid Type',
			'name' => 'grid_type',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'standard' => 'Standard',
				'masonry' => 'Masonry',
			),
			'allow_null' => 0,
			'default_value' => 'standard',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_613130cb837eb',
			'label' => 'Columns',
			'name' => 'grid_cell_columns',
			'type' => 'group',
			'instructions' => 'Note that these columns are only utilized when more than one cell exists. When there is only one cell in the layout, it automatically defaults to full-width inside the container.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613a8cde9bc94',
						'operator' => '==',
						'value' => 'standard',
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
					'key' => 'field_613130dd837ec',
					'label' => 'Desktop Column Count',
					'name' => 'desktop_column_count',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'allow_null' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_613130f8837ee',
					'label' => 'Tablet Column Count',
					'name' => 'tablet_column_count',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '34',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'allow_null' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_613130f8837ed',
					'label' => 'Mobile Column Count',
					'name' => 'mobile_column_count',
					'type' => 'button_group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
						6 => '6',
					),
					'allow_null' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
			),
		),
		array(
			'key' => 'field_61453b9d4d12d',
			'label' => 'Vertical Alignment',
			'name' => 'grid_item_vertical-alignment',
			'type' => 'button_group',
			'instructions' => 'Vertically align elements in the same row in regards to the tallest row.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613a8cde9bc94',
						'operator' => '==',
						'value' => 'standard',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'unset' => 'Top',
				'valign-center' => 'Center',
				'valign-bottom' => 'Bottom',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_613a99412a66f',
			'label' => 'Masonry Layout',
			'name' => 'masonry_layout',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613a8cde9bc94',
						'operator' => '==',
						'value' => 'masonry',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'grid-5' => '5%',
				'grid-10' => '10%',
				'grid-20' => '20%',
				'grid-25' => '25%',
				'grid-33' => '33%',
				'grid-50' => '50%',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_614509a664a70',
			'label' => 'Grid Container Class(es)',
			'name' => 'grid_container_classes',
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
		array(
			'key' => 'field_613a5b86ca3a1',
			'label' => 'Grid Item Class(es)',
			'name' => 'grid_item_classes',
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
		array(
			'key' => 'field_6148eb66768bc',
			'label' => 'Masonry ID',
			'name' => 'masonry_id',
			'type' => 'text',
			'instructions' => 'ID used to create the Masonry layout inside theme.js',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613a8cde9bc94',
						'operator' => '==',
						'value' => 'masonry',
					),
				),
			),
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
	'location' => array(
		array(
			array(
				'param' => 'post_taxonomy',
				'operator' => '==',
				'value' => 'category:uncategorized',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => false,
	'description' => 'Settings and styles for the grid layout used in [Layout] Flexible Grid. Adds the ability to manage design aspects for the Flexible Grid layout directly inside the WordPress backend.',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'settings' => 'Settings',
	),
	'modified' => 1632168844,
));

endif;