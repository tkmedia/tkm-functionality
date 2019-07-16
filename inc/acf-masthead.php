<?php
if( function_exists('acf_add_local_field_group') ):
// Page MastHead - ACF Group

acf_add_local_field_group(array(
	'key' => 'group_5tk5cdb269e18ef7',
	'title' => __('MastHead', 'tkm-functionality'),
	'fields' => array(
		array(
			'key' => 'field_5tk5c8e505e45130',
			'label' => __('Main Page Title', 'tkm-functionality'),
			'name' => 'page_masthead_title',
			'type' => 'text',
			'instructions' => __('H1 - Replace page name title', 'tkm-functionality'),
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
			'key' => 'field_5tk5cdbb46c75871',
			'label' => __('Hide Main Page Title', 'tkm-functionality'),
			'name' => 'page_masthead_title_hide',
			'type' => 'true_false',
			'instructions' => __('If main page title is hidden you should add an H1 title in page', 'tkm-functionality'),
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
			'ui_on_text' => '',
			'ui_off_text' => '',
		),	
		array(
			'key' => 'field_5tk5c8f46bfffa62',
			'label' => __('Second Featured Image', 'tkm-functionality'),
			'name' => 'page_main_icon',
			'type' => 'image',
			'instructions' => __('Will be used as hover image effect', 'tkm-functionality'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
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
			'key' => 'field_5tk6t45a82e09623',
			'label' => __('MastHead on Mobile', 'tkm-functionality'),
			'name' => 'masthead_on_mobile',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'same_desktop' => __('Same as Desktop', 'tkm-functionality'),
				'mobile_masthead' => __('Different on Mobile', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c8e515a45132',
			'label' => __('Intro Text', 'tkm-functionality'),
			'name' => 'page_masthead_text',
			'type' => 'wysiwyg',
			'instructions' => __('Position will be set by slider masthead style', 'tkm-functionality'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5tk5c8e510c45131',
			'label' => __('Short Excerpt', 'tkm-functionality'),
			'name' => 'page_masthead_excerpt',
			'type' => 'textarea',
			'instructions' => __('will be shown on related pages linked here', 'tkm-functionality'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5tk5c8e4d434512f',
			'label' => __('MastHead Top Slider', 'tkm-functionality'),
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
			'key' => 'field_5tk5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-functionality'),
			'name' => 'page_top_slider_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full_slider' => __('Image Slider or Youtube video', 'tkm-functionality'),
				'clean_top' => __('Clean Image Short Head', 'tkm-functionality'),
				'no_image_top' => __('No Image BG', 'tkm-functionality'),
				'manual_slider' => __('Full Manual slider', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5dma0378b7ddf',
			'label' => __('Show section divider', 'tkm-functionality'),
			'name' => 'page_top_slider_dividers',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5dma037ae401222',
			'label' => __('MastHead background color', 'tkm-functionality'),
			'name' => 'masthead_background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma0378f70beb1',
			'label' => __('Top divider section', 'tkm-functionality'),
			'name' => 'masthead_top_divider_section_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'waves' => __('Waves', 'tkm-functionality'),
				'opacity-waves' => __('Opacity waves', 'tkm-functionality'),
				'mountains' => __('Mountains', 'tkm-functionality'),
				'drops' => __('Drops', 'tkm-functionality'),
				'opacity-clouds' => __('Opacity clouds', 'tkm-functionality'),
				'big-clouds' => __('Big clouds', 'tkm-functionality'),
				'pyramids' => __('Pyramids', 'tkm-functionality'),
				'triangle' => __('Triangle', 'tkm-functionality'),
				'circle' => __('Circle', 'tkm-functionality'),
				'right-tilt' => __('Right tilt', 'tkm-functionality'),
				'left-tilt' => __('Left tilt', 'tkm-functionality'),
				'right-opacity-tilt' => __('Right opacity tilt', 'tkm-functionality'),
				'left-opacity-tilt' => __('Left opacity tilt', 'tkm-functionality'),
				'opacity-triangle' => __('Triangle opacity', 'tkm-functionality'),
				'right-arc' => __('Right Arc', 'tkm-functionality'),
				'left-arc' => __('Left Arc', 'tkm-functionality'),
				'opacity-circle' => __('Opacity Circle', 'tkm-functionality'),
				'right-opacity-arc' => __('Right Arc opacity', 'tkm-functionality'),
				'left-opacity-arc' => __('Left Arc opacity', 'tkm-functionality'),
				'arrow' => __('Arrow', 'tkm-functionality'),
				'cross' => __('Cross', 'tkm-functionality'),
				'watercolor' => __('Water-color',  'tkm-functionality'),
				'watercolor-spread' => __('Water-color spread', 'tkm-functionality'),
				'brush-spread' => __('Brush spread', 'tkm-functionality'),
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dma037ae40beb2',
			'label' => __('Top divider section - fill color', 'tkm-functionality'),
			'name' => 'masthead_top_divider_section_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma037ae40beb21',
			'label' => __('Top divider section - BG color', 'tkm-functionality'),
			'name' => 'masthead_top_divider_section_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'transparent',
		),
		array(
			'key' => 'field_5dma037b150beb3',
			'label' => __('Top divider section - height', 'tkm-functionality'),
			'name' => 'masthead_top_divider_section_height',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => 10,
			'max' => 300,
			'step' => 1,
		),
		array(
			'key' => 'field_5dma037b7e0beb4',
			'label' => __('Top divider section - position', 'tkm-functionality'),
			'name' => 'masthead_top_divider_section_position',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'behind' => __('Behind content', 'tkm-functionality'),
				'on-top' => __('On top content', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5dma0378f70berr1',
			'label' => __('Bottom divider section', 'tkm-functionality'),
			'name' => 'masthead_bottom_divider_section_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'waves' => __('Waves', 'tkm-functionality'),
				'opacity-waves' => __('Opacity waves', 'tkm-functionality'),
				'mountains' => __('Mountains', 'tkm-functionality'),
				'drops' => __('Drops', 'tkm-functionality'),
				'opacity-clouds' => __('Opacity clouds', 'tkm-functionality'),
				'big-clouds' => __('Big clouds', 'tkm-functionality'),
				'pyramids' => __('Pyramids', 'tkm-functionality'),
				'triangle' => __('Triangle', 'tkm-functionality'),
				'circle' => __('Circle', 'tkm-functionality'),
				'right-tilt' => __('Right tilt', 'tkm-functionality'),
				'left-tilt' => __('Left tilt', 'tkm-functionality'),
				'right-opacity-tilt' => __('Right opacity tilt', 'tkm-functionality'),
				'left-opacity-tilt' => __('Left opacity tilt', 'tkm-functionality'),
				'opacity-triangle' => __('Triangle opacity', 'tkm-functionality'),
				'right-arc' => __('Right Arc', 'tkm-functionality'),
				'left-arc' => __('Left Arc', 'tkm-functionality'),
				'opacity-circle' => __('Opacity Circle', 'tkm-functionality'),
				'right-opacity-arc' => __('Right Arc opacity', 'tkm-functionality'),
				'left-opacity-arc' => __('Left Arc opacity', 'tkm-functionality'),
				'arrow' => __('Arrow', 'tkm-functionality'),
				'cross' => __('Cross', 'tkm-functionality'),
				'watercolor' => __('Water-color',  'tkm-functionality'),
				'watercolor-spread' => __('Water-color spread', 'tkm-functionality'),
				'brush-spread' => __('Brush spread', 'tkm-functionality'),
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dma037ae40berr2',
			'label' => __('Bottom divider section - fill color', 'tkm-functionality'),
			'name' => 'masthead_bottom_divider_section_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma037ae40berr22',
			'label' => __('Bottom divider section - BG color', 'tkm-functionality'),
			'name' => 'masthead_bottom_divider_section_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'transparent',
		),				
		array(
			'key' => 'field_5dma037b150berr3',
			'label' => __('Bottom divider section - height', 'tkm-functionality'),
			'name' => 'masthead_bottom_divider_section_height',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => 10,
			'max' => 300,
			'step' => 1,
		),
		array(
			'key' => 'field_5dma037b7e0berr4',
			'label' => __('Bottom divider section - position', 'tkm-functionality'),
			'name' => 'masthead_bottom_divider_section_position',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'behind' => __('Behind content', 'tkm-functionality'),
				'on-top' => __('On top content', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5tk5c96a82e09651',
			'label' => __('Slider Effect', 'tkm-functionality'),
			'name' => 'page_top_slider_effect',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),								
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'style1' => __('style1', 'tkm-functionality'),
				'style2' => __('style2', 'tkm-functionality'),
				'style3' => __('style3', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c978bcf63295',
			'label' => __('Main title color', 'tkm-functionality'),
			'name' => 'page_masthead_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c978b4663293',
			'label' => __('Intro text color', 'tkm-functionality'),
			'name' => 'page_masthead_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c977a6af7f5e',
			'label' => __('Title & Intro location', 'tkm-functionality'),
			'name' => 'page_masthead_title_location',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'slider_content_inn' => __('On top of the Image', 'tkm-functionality'),
				'slider_content_bottom' => __('Under the image', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c9779d3f7f5c',
			'label' => __('Title & Intro Horizontal position', 'tkm-functionality'),
			'name' => 'page_masthead_title_hor',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'start' => __('start', 'tkm-functionality'),
				'center' => __('center', 'tkm-functionality'),
				'end' => __('end', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c977a33f7f5d',
			'label' => __('Titile & Intro Vertical position', 'tkm-functionality'),
			'name' => 'page_masthead_title_ver',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_inn',
					),
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => __('top', 'tkm-functionality'),
				'middle' => __('middle', 'tkm-functionality'),
				'bottom' => __('bottom', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c8e55e167281',
			'label' => __('MastHead Visual Height', 'tkm-functionality'),
			'name' => 'page_top_slider_height',
			'type' => 'range',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'min' => 10,
			'max' => 100,
			'step' => '',
			'prepend' => '',
			'append' => '%',
		),
		array(
			'key' => 'field_5tk5c8e518c6b897',
			'label' => __('MastHead Type', 'tkm-functionality'),
			'name' => 'page_top_slider_content',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'image_slider' => __('Image / Image slider', 'tkm-functionality'),
				'youtube_vid' => __('Youtube Video', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c8e51916b898',
			'label' => __('Choose Images', 'tkm-functionality'),
			'name' => 'page_main_top_slider',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8e518c6b897',
						'operator' => '==',
						'value' => 'image_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
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
			'key' => 'field_5tk5c8e51966b899',
			'label' => __('Youtube full URL', 'tkm-functionality'),
			'name' => 'page_top_slider_youtube_vid',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8e518c6b897',
						'operator' => '==',
						'value' => 'youtube_vid',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		
		array(
			'key' => 'field_5tk5csnnff651a',
			'label' => __('Button Type', 'tkm-functionality'),
			'name' => 'page_masthead_btn_type',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_text' => __('Text button', 'tkm-functionality'),
				'btn_img' => __('Image button', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),				
		array(
			'key' => 'field_5tk5c99d0f4451a',
			'label' => __('Button Style', 'tkm-functionality'),
			'name' => 'page_masthead_btn_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_style1' => __('Style 1', 'tkm-functionality'),
				'btn_style2' => __('Style 2', 'tkm-functionality'),
				'btn_style3' => __('Style 3', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),		
		array(
			'key' => 'field_5tk5c99dde13eea7',
			'label' => __('Button text color', 'tkm-functionality'),
			'name' => 'page_masthead_btn_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c99de133eea8',
			'label' => __('Button background color', 'tkm-functionality'),
			'name' => 'page_masthead_btn_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		
		
		array(
			'key' => 'field_5tk5c99d7e997b16',
			'label' => __('First Button - text', 'tkm-functionality'),
			'name' => 'page_masthead_btn1_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
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
			'key' => 'field_5tk5c99dssc46518',
			'label' => __('First Button - Image', 'tkm-functionality'),
			'name' => 'page_masthead_btn1_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'menu-50',
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
			'key' => 'field_5tk5c99d83597b17',
			'label' => __('First Button - link', 'tkm-functionality'),
			'name' => 'page_masthead_btn1_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tk5c99d84d97b18',
			'label' => __('Second Button - text', 'tkm-functionality'),
			'name' => 'page_masthead_btn2_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
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
			'key' => 'field_5tk5c99dsnfgf6518',
			'label' => __('Second Button - Image', 'tkm-functionality'),
			'name' => 'page_masthead_btn2_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'menu-50',
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
			'key' => 'field_5tk5c99d86397b19',
			'label' => __('Second Button - link', 'tkm-functionality'),
			'name' => 'page_masthead_btn2_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tk5cdfde3421a97',
			'label' => __('Manual Full Slider', 'tkm-functionality'),
			'name' => 'page_top_slider_manual',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5tk5cdfde5621a98',
					'label' => __('Background Type', 'tkm-functionality'),
					'name' => 'slider_manual_bg',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'image_bg' => __('Image', 'tkm-functionality'),
						'video_bg' => __('Video', 'tkm-functionality'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5tk5cdfde9921a99',
					'label' => __('Image', 'tkm-functionality'),
					'name' => 'slider_manual_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tk5cdfde5621a98',
								'operator' => '==',
								'value' => 'image_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
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
					'key' => 'field_5tk5cdfdeb621a9a',
					'label' => __('Video URL', 'tkm-functionality'),
					'name' => 'slider_manual_video',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tk5cdfde5621a98',
								'operator' => '==',
								'value' => 'video_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array(
					'key' => 'field_5tk5cdfded621a9b',
					'label' => __('Content on slide', 'tkm-functionality'),
					'name' => 'slider_manual_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5tk5cdsder4f123',
					'label' => __('Inner slide slider', 'tkm-functionality'),
					'name' => 'inner_manual_slider',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_5tk5cddnfgt91',
							'label' => __('Image', 'tkm-functionality'),
							'name' => 'inner_manual_slider_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'id',
							'preview_size' => 'menu-50',
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
							'key' => 'field_5tk5c99sd4171',
							'label' => __('Title', 'tkm-functionality'),
							'name' => 'inner_manual_slider_title',
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
							'key' => 'field_5tk5c8s3093221',
							'label' => __('Short Content', 'tkm-functionality'),
							'name' => 'inner_manual_slider_text',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '35',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => 4,
							'new_lines' => 'br',
						),
						array(
							'key' => 'field_5tk5c99kd09je71',
							'label' => __('Link', 'tkm-functionality'),
							'name' => 'inner_manual_slider_link',
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
					),
				),
				array(
					'key' => 'field_5tk5cdfdef421a9c',
					'label' => __('Contenet position on slide', 'tkm-functionality'),
					'name' => 'slider_manual_content_position',
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
						'center-xs middle-xs' => __('Center Middle', 'tkm-functionality'),
						'center-xs top-xs' => __('Center Top', 'tkm-functionality'),
						'center-xs bottom-xs' => __('Center Bottom', 'tkm-functionality'),
						'top-xs start-xs' => __('Top Start', 'tkm-functionality'),
						'middle-xs start-xs' => __('Middle Start', 'tkm-functionality'),
						'bottom-xs start-xs' => __('Bottom Start', 'tkm-functionality'),
						'top-xs end-xs' => __('Top End', 'tkm-functionality'),
						'middle-xs end-xs' => __('Middle End', 'tkm-functionality'),
						'bottom-xs end-xs' => __('Bottom End', 'tkm-functionality'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				
			),
		),
		array(
			'key' => 'field_5tkmobile5c8e4d434512f',
			'label' => __('Mobile MastHead Top Slider', 'tkm-functionality'),
			'name' => '',
			'type' => 'tab',
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk6t45a82e09623',
						'operator' => '==',
						'value' => 'mobile_masthead',
					),
				),
			),			
			'required' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_style',
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
				'full_slider' => __('Image Slider or Youtube video', 'tkm-functionality'),
				'clean_top' => __('Clean Image Short Head', 'tkm-functionality'),
				'no_image_top' => __('No Image BG', 'tkm-functionality'),
				'manual_slider' => __('Full Manual slider', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c96a82e09651',
			'label' => __('Slider Effect', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_effect',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),								
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'style1' => __('style1', 'tkm-functionality'),
				'style2' => __('style2', 'tkm-functionality'),
				'style3' => __('style3', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c978bcf63295',
			'label' => __('Main title color', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5c978b4663293',
			'label' => __('Intro text color', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5c977a6af7f5e',
			'label' => __('Title & Intro location', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_title_location',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'slider_content_inn' => __('On top of the Image', 'tkm-functionality'),
				'slider_content_bottom' => __('Under the image', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c9779d3f7f5c',
			'label' => __('Title & Intro Horizontal position', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_title_hor',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'start' => __('start', 'tkm-functionality'),
				'center' => __('center', 'tkm-functionality'),
				'end' => __('end', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c977a33f7f5d',
			'label' => __('Titile & Intro Vertical position', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_title_ver',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_inn',
					),
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => __('top', 'tkm-functionality'),
				'middle' => __('middle', 'tkm-functionality'),
				'bottom' => __('bottom', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8e55e167281',
			'label' => __('MastHead Visual Height', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_height',
			'type' => 'range',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'min' => 10,
			'max' => 100,
			'step' => '',
			'prepend' => '',
			'append' => '%',
		),
		array(
			'key' => 'field_5tkmobile5c8e518c6b897',
			'label' => __('MastHead Type', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_content',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'image_slider' => __('Image / Image slider', 'tkm-functionality'),
				'youtube_vid' => __('Youtube Video', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8e51916b898',
			'label' => __('Choose Images', 'tkm-functionality'),
			'name' => 'mobile_page_main_top_slider',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8e518c6b897',
						'operator' => '==',
						'value' => 'image_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
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
			'key' => 'field_5tkmobile5c8e51966b899',
			'label' => __('Youtube full URL', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_youtube_vid',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8e518c6b897',
						'operator' => '==',
						'value' => 'youtube_vid',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5tk5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-functionality'),
			'name' => 'page_top_slider_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full_slider' => __('Image Slider or Youtube video', 'tkm-functionality'),
				'clean_top' => __('Clean Image Short Head', 'tkm-functionality'),
				'no_image_top' => __('No Image BG', 'tkm-functionality'),
				'manual_slider' => __('Full Manual slider', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c99d7e997b16',
			'label' => __('First Button - text', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn1_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tkmobile5c99d83597b17',
			'label' => __('First Button - link', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn1_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tkmobile5c99d84d97b18',
			'label' => __('Second Button - text', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn2_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tkmobile5c99d86397b19',
			'label' => __('Second Button - link', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn2_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
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
			'key' => 'field_5tkmobile5c99d8ae97b1a',
			'label' => __('Button Style', 'tkm-functionality'),
			'name' => 'page_masthead_btn_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_style1' => __('Style 1', 'tkm-functionality'),
				'btn_style2' => __('Style 2', 'tkm-functionality'),
				'btn_style3' => __('Style 3', 'tkm-functionality'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),		
		array(
			'key' => 'field_5tkmobile5c99dde13eea7',
			'label' => __('Button text color', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5c99de133eea8',
			'label' => __('Button background color', 'tkm-functionality'),
			'name' => 'mobile_page_masthead_btn_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5cdfde3421a97',
			'label' => __('Manual Full Slider', 'tkm-functionality'),
			'name' => 'mobile_page_top_slider_manual',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5tkmobile5cdfde5621a98',
					'label' => __('Background Type', 'tkm-functionality'),
					'name' => 'mobile_slider_manual_bg',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'image_bg' => __('Image', 'tkm-functionality'),
						'video_bg' => __('Video', 'tkm-functionality'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5tkmobile5cdfde9921a99',
					'label' => __('Image', 'tkm-functionality'),
					'name' => 'mobile_slider_manual_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tkmobile5cdfde5621a98',
								'operator' => '==',
								'value' => 'image_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
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
					'key' => 'field_5tkmobile5cdfdeb621a9a',
					'label' => __('Video URL', 'tkm-functionality'),
					'name' => 'mobile_slider_manual_video',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tkmobile5cdfde5621a98',
								'operator' => '==',
								'value' => 'video_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array(
					'key' => 'field_5tkmobile5cdfded621a9b',
					'label' => __('Content on slide', 'tkm-functionality'),
					'name' => 'mobile_slider_manual_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5tkmobile5cdfdef421a9c',
					'label' => __('Contenet position on slide', 'tkm-functionality'),
					'name' => 'mobile_slider_manual_content_position',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'center-xs middle-xs' => __('Center Middle', 'tkm-functionality'),
						'top-xs middle-xs' => __('Top Middle', 'tkm-functionality'),
						'bottom-xs middle-xs' => __('Bottom Middle', 'tkm-functionality'),
						'top-xs start-xs' => __('Top Start', 'tkm-functionality'),
						'middle-xs start-xs' => __('Middle Start', 'tkm-functionality'),
						'bottom-xs start-xs' => __('Bottom Start', 'tkm-functionality'),
						'top-xs end-xs' => __('Top End', 'tkm-functionality'),
						'middle-xs end-xs' => __('Middle End', 'tkm-functionality'),
						'bottom-xs end-xs' => __('Bottom End', 'tkm-functionality'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				
				
			),
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
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'page_product.php',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		//0 => 'the_content',
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
	),
	'active' => true,
	'description' => '',
));

endif;

 ?>
