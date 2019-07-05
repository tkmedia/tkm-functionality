<?php
// Archive Setings - ACF Group
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_566050eabdc60',
	'title' => __('Archive settings', 'tkm-functionality'),
	'fields' => array(
		array(
			'key' => 'field_5be438386f014',
			'label' => __('Top Masthead', 'tkm-functionality'),
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
			'key' => 'field_595f4529c54e8',
			'label' => __('Main banner image', 'tkm-functionality'),
			'name' => 'archive_main_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
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
			'key' => 'field_5be438696f015',
			'label' => __('Articles layout', 'tkm-functionality'),
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
			'key' => 'field_566051d11ffe0',
			'label' => __('Articles per row', 'tkm-functionality'),
			'name' => 'archive_article_display',
			'type' => 'number',
			'instructions' => __('Between 1-5', 'tkm-functionality'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => 2,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 3,
			'step' => 1,
		),
		array(
			'key' => 'field_566051d11ffe0',
			'label' => __('Articles per row - mobile', 'tkm-functionality'),
			'name' => 'archive_article_display_mobile',
			'type' => 'number',
			'instructions' => __('Between 1-3', 'tkm-functionality'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => 2,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => 1,
			'max' => 3,
			'step' => 1,
		),
		array(
			'key' => 'field_5d0258c80c570',
			'label' => __('Slider style', 'tkm-functionality'),
			'name' => 'archive_article_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'style1' => 'style1',
				'style2' => 'style2',
				'style3' => 'style3',
				'style4' => 'style4',
				'style5' => 'style5',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'category',
			),
		),
	),
	'menu_order' => 6,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>
