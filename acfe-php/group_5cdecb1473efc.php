<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cdecb1473efc',
	'title' => 'Miscellaneous Content',
	'fields' => array(
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'global-content',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'tooltip',
	'hide_on_screen' => '',
	'active' => true,
	'description' => 'Global values for all types of company information such as contact information, address(es), and social media (brands).',
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'acfe_categories' => array(
		'global-content' => 'Global Content',
	),
	'modified' => 1634182672,
));

endif;