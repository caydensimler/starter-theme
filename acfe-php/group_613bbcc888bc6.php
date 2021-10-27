<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_613bbcc888bc6',
	'title' => 'Advanced Builder - Sub Menu',
	'fields' => array(
		array(
			'key' => 'field_613bbcc88e32f',
			'label' => 'Sub-Menu',
			'name' => 'enable_sub-menu',
			'type' => 'true_false',
			'instructions' => 'Enable the sub-menu that appears below the page header.',
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
			'ui_on_text' => 'Enabled',
			'ui_off_text' => 'Disabled',
		),
		array(
			'key' => 'field_613bbcc88e51d',
			'label' => 'Menu Type',
			'name' => 'menu_type',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613bbcc88e32f',
						'operator' => '==',
						'value' => '1',
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
			'ui_on_text' => 'Content Block',
			'ui_off_text' => 'Menu Selection',
		),
		array(
			'key' => 'field_613bbcc88e72d',
			'label' => 'Menu Selection',
			'name' => 'menu_selection',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613bbcc88e51d',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_group_modal' => 1,
			'acfe_group_modal_close' => 0,
			'acfe_group_modal_button' => 'Configure Sub-Menu',
			'acfe_group_modal_size' => 'full',
			'sub_fields' => array(
				array(
					'key' => 'field_613bbcc896549',
					'label' => '',
					'name' => 'sub-menu',
					'type' => 'clone',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'clone' => array(
						0 => 'group_602c2ee5e74cb',
					),
					'display' => 'seamless',
					'layout' => 'block',
					'prefix_label' => 0,
					'prefix_name' => 0,
				),
			),
		),
		array(
			'key' => 'field_613bbcc88e933',
			'label' => '',
			'name' => 'sub-menu-group',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_613bbcc88e51d',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'acfe_seamless_style' => 1,
			'acfe_group_modal' => 0,
			'sub_fields' => array(
				array(
					'key' => 'field_613bbcc89d441',
					'label' => 'Content Block',
					'name' => 'content_block',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'content-block',
					),
					'taxonomy' => array(
						0 => 'block-type:sub-menu',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'object',
					'save_custom' => 0,
					'save_post_status' => 'publish',
					'acfe_bidirectional' => array(
						'acfe_bidirectional_enabled' => '0',
					),
					'ui' => 1,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'advanced-builder.php',
			),
			array(
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'front_page',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'tooltip',
	'hide_on_screen' => '',
	'active' => true,
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
		'template' => 'Template',
	),
	'modified' => 1635311736,
));

endif;