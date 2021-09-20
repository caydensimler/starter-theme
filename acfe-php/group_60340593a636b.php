<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60340593a636b',
	'title' => 'Footer',
	'fields' => array(
		array(
			'key' => 'field_603405aae4a9f',
			'label' => 'Navigation',
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
			'key' => 'field_603405dfe4aa0',
			'label' => 'Columns',
			'name' => 'footer_navigation_columns',
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
			'collapsed' => 'field_6034064de4aa2',
			'min' => 0,
			'max' => 6,
			'layout' => 'table',
			'button_label' => 'Add Column',
			'sub_fields' => array(
				array(
					'key' => 'field_60340644e4aa1',
					'label' => 'Heading',
					'name' => 'heading',
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
					'key' => 'field_6034064de4aa2',
					'label' => 'Menu',
					'name' => 'menu',
					'type' => 'menu',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'object',
					'allow_null' => 0,
				),
			),
		),
		array(
			'key' => 'field_6034074636368',
			'label' => 'Information',
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
			'key' => 'field_6034094c36370',
			'label' => 'Contact Information',
			'name' => 'footer_contact-information',
			'type' => 'repeater',
			'instructions' => 'Links are added automatically to all information rows. To avoid this, use the label "Fax". The label "Email" is setup to automatically hide the label on the front end, and add "mailto:" to the links, rather than the default "tel:".',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'collapsed' => 'field_6034096136371',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Group',
			'sub_fields' => array(
				array(
					'key' => 'field_6034096136371',
					'label' => 'Heading',
					'name' => 'heading',
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
					'key' => 'field_6034096536372',
					'label' => 'Contact Information',
					'name' => 'contact-information',
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
					'layout' => 'table',
					'button_label' => 'Add Information',
					'sub_fields' => array(
						array(
							'key' => 'field_603409e036373',
							'label' => 'Label',
							'name' => 'label',
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
							'key' => 'field_603409e736374',
							'label' => 'Information',
							'name' => 'information',
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
		),
		array(
			'key' => 'field_60341ca53e524',
			'label' => 'Locations',
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
			'key' => 'field_603438d49a61e',
			'label' => 'Heading',
			'name' => 'footer_locations_heading',
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
			'key' => 'field_60341cac3e525',
			'label' => 'Locations',
			'name' => 'footer_locations',
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
			'button_label' => 'Add Location',
			'sub_fields' => array(
				array(
					'key' => 'field_60341ccc3e526',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
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
					'key' => 'field_60341cdf3e528',
					'label' => 'Phone Number (Optional)',
					'name' => 'phone_number',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
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
					'key' => 'field_60341cd33e527',
					'label' => 'Address',
					'name' => 'address',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
				),
			),
		),
		array(
			'key' => 'field_603421864be02',
			'label' => 'Miscellaneous',
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
			'key' => 'field_603421294bdfd',
			'label' => 'Facebook Icon',
			'name' => 'footer_social_facebook-icon',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'field_6034214a4bdfe',
			'label' => 'Instagram Icon',
			'name' => 'footer_social_instagram-icon',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'field_6034215b4bdff',
			'label' => 'Twitter Icon',
			'name' => 'footer_social_twitter-icon',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'field_603421674be00',
			'label' => 'YouTube Icon',
			'name' => 'footer_social_youtube-icon',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'field_6034216f4be01',
			'label' => 'LinkedIn Icon',
			'name' => 'footer_social_linkedin-icon',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'field_603421924be03',
			'label' => 'Copyright Text',
			'name' => 'footer_miscellaneous_copyright-text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
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
			'key' => 'field_603421a44be04',
			'label' => 'Privacy Policy',
			'name' => 'footer_miscellaneous_privacy-policy',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
		array(
			'key' => 'field_603421ba4be05',
			'label' => 'Google Translate',
			'name' => 'footer_miscellaneous_google-translate',
			'type' => 'acfe_code_editor',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'mode' => 'application/x-httpd-php',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 10,
			'max_rows' => '',
			'return_entities' => false,
		),
		array(
			'key' => 'field_604164764abec',
			'label' => 'Advertisements',
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
			'key' => 'field_6041649a4abee',
			'label' => '(Column 6/12)',
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
			'columns' => '6/12',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_6041648a4abed',
			'label' => 'Left Advertisement',
			'name' => 'footer_advertisement_left-image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'uploader' => 'wp',
			'acfe_thumbnail' => 0,
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_604164a34abef',
			'label' => 'Link',
			'name' => 'footer_advertisement_left-link',
			'type' => 'url',
			'instructions' => 'Link will always open in a new tab.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_604164cb4abf2',
			'label' => '(Column 6/12)',
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
			'columns' => '6/12',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_604164cd4abf3',
			'label' => 'Right Advertisement',
			'name' => 'footer_advertisement_right-image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'uploader' => 'wp',
			'acfe_thumbnail' => 0,
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_604164fe4abf4',
			'label' => 'Link',
			'name' => 'footer_advertisement_right-link',
			'type' => 'url',
			'instructions' => 'Link will always open in a new tab.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_604164c74abf1',
			'label' => '(Column 12/12)',
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
			'columns' => '12/12',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_604164b24abf0',
			'label' => 'Center Advertisement',
			'name' => 'footer_advertisement_center',
			'type' => 'acfe_code_editor',
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
			'mode' => 'application/x-httpd-php',
			'lines' => 1,
			'indent_unit' => 4,
			'maxlength' => '',
			'rows' => 13,
			'max_rows' => '',
			'return_entities' => false,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-footer',
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
	'description' => 'Custom fields for the Footer of the website. Affords the ability to update any content in the footer as necessary such as locations, phone numbers, banner ads, and more.',
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
	'modified' => 1632112417,
));

endif;