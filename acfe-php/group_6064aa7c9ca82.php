<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6064aa7c9ca82',
	'title' => 'Page Groups',
	'fields' => array(
		array(
			'key' => 'field_6064aa84955fb',
			'label' => '',
			'name' => 'page_groups',
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
			'button_label' => 'Add Page Group',
			'sub_fields' => array(
				array(
					'key' => 'field_6064ad95955fd',
					'label' => 'Group Name',
					'name' => 'group_name',
					'type' => 'text',
					'instructions' => 'The group name designates the class that wraps the content on the page. It is automatically changed to a slug format by removing spaces, and converting them to hyphens.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
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
					'key' => 'field_6064aae3955fc',
					'label' => 'Pages',
					'name' => 'pages',
					'type' => 'post_object',
					'instructions' => 'Child pages are automatically added to the page group, so you only need to select top-level, parent pages here.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '75',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'multiple' => 1,
					'return_format' => 'id',
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
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-page-groups',
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
	'description' => 'Creates the ability to add pages to a group by setting the name of the group and choosing which pages are grouped with it. Useful for grouping pages together that have the same styles, without needing to use WordPress\' native functionality for relating pages together which limits permalink structure.',
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
	'modified' => 1631912123,
));

endif;