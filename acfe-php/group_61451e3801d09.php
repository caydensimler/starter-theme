<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_61451e3801d09',
	'title' => 'Container Width',
	'fields' => array(
		array(
			'key' => 'field_61451e3b01f7f',
			'label' => 'Container Width',
			'name' => 'container_width',
			'type' => 'radio',
			'instructions' => 'You can use a custom pixel size for the container by typing in the pixel count for the grid in the blank box. The "Contained" option defaults to the default container properties in the Customizer settings under Layout > Container Width.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full-width' => 'Full-Width',
				'contained' => 'Contained',
			),
			'allow_null' => 0,
			'other_choice' => 1,
			'save_other_choice' => 0,
			'default_value' => 'contained',
			'layout' => 'vertical',
			'return_format' => 'value',
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
	'instruction_placement' => 'label',
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
		'settings' => 'Settings',
	),
	'modified' => 1634336553,
));

endif;