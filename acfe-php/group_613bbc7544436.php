<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_613bbc7544436',
	'title' => 'Advanced Builder',
	'fields' => array(
		array(
			'key' => 'field_613bbc754b4c4',
			'label' => 'Drag and Drop',
			'name' => 'drag-and-drop',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 1,
			'acfe_flexible_layouts_templates' => 1,
			'acfe_flexible_layouts_previews' => 1,
			'acfe_flexible_layouts_thumbnails' => 1,
			'acfe_flexible_layouts_settings' => 1,
			'acfe_flexible_async' => array(
				0 => 'title',
				1 => 'layout',
			),
			'acfe_flexible_add_actions' => array(
				0 => 'title',
				1 => 'toggle',
				2 => 'copy',
				3 => 'close',
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '1',
				'acfe_flexible_modal_title' => 'Add Layout',
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => '0',
			),
			'layouts' => array(
				'layout_608af1574945b' => array(
					'key' => 'layout_608af1574945b',
					'name' => 'flexible-content',
					'label' => 'Flexible Content',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_613bbc754f2c2',
							'label' => 'Flexible Content Clone',
							'name' => 'flexible_content_clone',
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
								0 => 'group_609af2236c640',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => 'acf/clones/page-content.php',
					'acfe_flexible_render_style' => 'css/theme.css',
					'acfe_flexible_render_script' => 'js/theme.js',
					'acfe_flexible_settings' => array(
						0 => 'group_612ff8ca6d684',
						1 => 'group_61731e9d87eea',
					),
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_6009d5442e592' => array(
					'key' => 'layout_6009d5442e592',
					'name' => 'content-block',
					'label' => 'Content Block',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_613bbc754e913',
							'label' => 'Content',
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
							'key' => 'field_613bbc754eb01',
							'label' => 'Content Block',
							'name' => 'content_block',
							'type' => 'post_object',
							'instructions' => 'Content Blocks can be managed via the <a href="/wp-admin/edit.php?post_type=content-block" target="_blank">Content Blocks post type</a> in the sidebar.',
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
							'taxonomy' => '',
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
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => '',
					'acfe_flexible_render_style' => '',
					'acfe_flexible_render_script' => '',
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_602c2fd8428a7' => array(
					'key' => 'layout_602c2fd8428a7',
					'name' => 'sub-menu',
					'label' => 'Sub-Menu',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_613bbc754ecf0',
							'label' => 'Content',
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
							'key' => 'field_613bbc754eee2',
							'label' => 'Menu',
							'name' => 'menu',
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
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => '',
					'acfe_flexible_render_style' => '',
					'acfe_flexible_render_script' => '',
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_61836c81d4267' => array(
					'key' => 'layout_61836c81d4267',
					'name' => 'post-query',
					'label' => 'Post Query',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_61836c9dd4268',
							'label' => 'Post Query',
							'name' => 'post_query',
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
								0 => 'group_61836b97d364d',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => 'acf/clones/page-content.php',
					'acfe_flexible_render_style' => 'css/theme.css',
					'acfe_flexible_render_script' => 'js/theme.js',
					'acfe_flexible_settings' => array(
						0 => 'group_612ff8ca6d684',
						1 => 'group_61731e9d87eea',
					),
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_6143b0ef8e4cc' => array(
					'key' => 'layout_6143b0ef8e4cc',
					'name' => 'shortcode',
					'label' => 'Shortcode',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6143b0fa8e4cd',
							'label' => 'Shortcode',
							'name' => 'shortcode',
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
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => '',
					'acfe_flexible_render_style' => '',
					'acfe_flexible_render_script' => '',
					'acfe_flexible_settings' => array(
						0 => 'group_61731e9d87eea',
					),
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_605e54ca946d6' => array(
					'key' => 'layout_605e54ca946d6',
					'name' => 'layout-wrapper-start',
					'label' => 'Layout Wrapper (Start)',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_613bbc754f4b2',
							'label' => '',
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
							'message' => 'Adds the ability to group together layouts in order to apply specific styles around those layouts. Best use-case would be to apply a fading/long background to more than one layout. Must be closed by adding "Layout Wrapper (End)" after the final layout to close the group. Background settings/attributes can be managed by clicking the Settings cog at the top right.',
							'new_lines' => 'wpautop',
							'esc_html' => 0,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => '',
					'acfe_flexible_render_style' => '',
					'acfe_flexible_render_script' => '',
					'acfe_flexible_settings' => array(
						0 => 'group_61731e9d87eea',
					),
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
				'layout_605e558a6f621' => array(
					'key' => 'layout_605e558a6f621',
					'name' => 'layout-wrapper-end',
					'label' => 'Layout Wrapper (End)',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_613bbc754f69f',
							'label' => '',
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
							'message' => 'Closes the "Layout Wrapper (Start)" group.',
							'new_lines' => 'wpautop',
							'esc_html' => 0,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => '',
					'acfe_flexible_render_style' => '',
					'acfe_flexible_render_script' => '',
					'acfe_flexible_settings' => '',
					'acfe_flexible_settings_size' => 'xlarge',
					'acfe_flexible_thumbnail' => '',
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
				),
			),
			'button_label' => '<span class="dashicons dashicons-screenoptions"></span> Add Layout',
			'min' => '',
			'max' => '',
			'acfe_flexible_hide_empty_message' => false,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_placeholder' => false,
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
		array(
			array(
				'param' => 'post_taxonomy',
				'operator' => '==',
				'value' => 'block-type:flexible-content',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'all',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'content-block',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'gp_elements',
			),
			array(
				'param' => 'post_type',
				'operator' => '!=',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'tooltip',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'discussion',
		2 => 'revisions',
		3 => 'slug',
		4 => 'format',
		5 => 'send-trackbacks',
	),
	'active' => true,
	'description' => 'Flexible content page builder that incorporates ACF extended for maximum flexibility and layout/design control.',
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
	'modified' => 1636060054,
));

endif;