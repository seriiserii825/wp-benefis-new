<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_product_options');
function crb_attach_product_options()
{
	Container::make('post_meta', __('Product'))
		->where('post_type', '=', 'product')
		->add_tab('Slider', array(
			Field::make('complex', 'crb_slider', __('Slider'))
				->add_fields(array(
					Field::make('text', 'title_en', 'title_en')
						->set_width(30),
					Field::make('text', 'title_ro', 'title_ro')
						->set_width(30),
					Field::make('text', 'title_ru', 'title_ru')
						->set_width(30),

					Field::make('textarea', 'text_en', 'text_en')
						->set_width(30),
					Field::make('textarea', 'text_ro', 'text_ro')
						->set_width(30),
					Field::make('textarea', 'text_ru', 'text_ru')
						->set_width(30),

					Field::make('textarea', 'image', 'image')
						->set_help_text('svg icon code 200x200')
				))
				->set_layout('tabbed-horizontal')
		));
}
