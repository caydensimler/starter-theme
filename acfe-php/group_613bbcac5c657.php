<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_613bbcac5c657',
	'title' => 'Page Options',
	'fields' => array(
		array(
			'key' => 'field_613bbcac6244f',
			'label' => 'Content Wrapper Class(es)',
			'name' => 'content_wrapper_classes',
			'type' => 'text',
			'instructions' => 'Used to group pages together in order to apply styles to that group, without needing to directly correlate those pages to each other with WordPress\' native functionality.',
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
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'advanced-builder.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
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
	'modified' => 1634449625,
));

endif;