<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_613fcadc41d68',
	'title' => 'Font Weight',
	'fields' => array(
		array(
			'key' => 'field_613fcae24f47a',
			'label' => 'Font Weight',
			'name' => 'font_weight',
			'type' => 'button_group',
			'instructions' => 'To cut down on redundancy in the code all font weights are available here. If you\'re having issues with the font weight not being properly applied, double-check to confirm that the specific font supports that weight.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'unset' => 'Unset',
				'weight-100' => '100',
				'weight-200' => '200',
				'weight-300' => '300',
				'regular' => 'Normal',
				'weight-600' => '600',
				'bold' => '<span style="font-weight: bold; ">Bold</span>',
				'weight-800' => '800',
				'weight-900' => '900',
			),
			'allow_null' => 0,
			'default_value' => 'unset',
			'layout' => 'horizontal',
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
	'modified' => 1632112163,
));

endif;