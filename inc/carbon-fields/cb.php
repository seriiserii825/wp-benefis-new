<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Basic Options'))
		->add_tab(__('Contacts'), array(
			Field::make('text', 'crb_mail', __('Email')),
			Field::make('text', 'crb_phone_1', __('Phone 1'))
				->set_width(30),
			Field::make('text', 'crb_phone_2', __('Phone 2'))
				->set_width(30),
			Field::make('text', 'crb_phone_3', __('Phone 3'))
				->set_width(30),

			Field::make('text', 'crb_address_ru', __('Address ru'))
				->set_width(30),
			Field::make('text', 'crb_address_ro', __('Address ro'))
				->set_width(30),
			Field::make('text', 'crb_address_en', __('Address en'))
				->set_width(30),

			Field::make('text', 'crb_facebook', __('Facebook')),
			Field::make('text', 'crb_twitter', __('Twitter')),
			Field::make('text', 'crb_linkedin', __('Linked in')),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Slider'), array(
			Field::make('text', 'crb_slider_title_ro', __('Block slider title ro')),
		))
		->add_tab('Pdf', array(
			Field::make('text', 'crb_pdf_title_en', __('crb_pdf_title_en'))
			->set_width(30),
			Field::make('text', 'crb_pdf_title_ro', __('crb_pdf_title_ro'))
			->set_width(30),
			Field::make('text', 'crb_pdf_title_ru', __('crb_pdf_title_ru'))
			->set_width(30),

			Field::make('file', 'crb_pdf_file', __('crb_pdf_file'))
			->set_value_type('url')
		));

	// Add second options page under 'Basic Options'
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Strings')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_fields(array(
			Field::make('text', 'crb_valulte_en', __('Valute en'))
				->set_width(30),
			Field::make('text', 'crb_valulte_ro', __('Valute ro'))
				->set_width(30),
			Field::make('text', 'crb_valulte_ru', __('Valute ru'))
				->set_width(30),

			Field::make('text', 'crb_language_en', __('language en'))
				->set_width(30),
			Field::make('text', 'crb_language_ro', __('language ro'))
				->set_width(30),
			Field::make('text', 'crb_language_ru', __('language ru'))
				->set_width(30),

			Field::make('text', 'crb_basket_ru', __('Basket ru'))
				->set_width(30),
			Field::make('text', 'crb_basket_ro', __('Basket ro'))
				->set_width(30),
			Field::make('text', 'crb_basket_en', __('Basket en'))
				->set_width(30),

			Field::make('text', 'crb_summ_ru', __('Summ ru'))
				->set_width(30),
			Field::make('text', 'crb_summ_ro', __('Summ ro'))
				->set_width(30),
			Field::make('text', 'crb_summ_en', __('Summ en'))
				->set_width(30),

			Field::make('text', 'crb_to_cart_ro', __('crb_to_cart_ro'))
				->set_width(30),
			Field::make('text', 'crb_to_cart_ru', __('crb_to_cart_ru'))
				->set_width(30),
			Field::make('text', 'crb_to_cart_en', __('crb_to_cart_en'))
				->set_width(30),

			Field::make('text', 'crb_enter_en', __('crb_enter_en'))
				->set_width(30),
			Field::make('text', 'crb_enter_ro', __('crb_enter_ro'))
				->set_width(30),
			Field::make('text', 'crb_enter_ru', __('crb_enter_ru'))
				->set_width(30),

			Field::make('text', 'crb_registration_en', __('crb_registration_en'))
				->set_width(30),
			Field::make('text', 'crb_registration_ro', __('crb_registration_ro'))
				->set_width(30),
			Field::make('text', 'crb_registration_ru', __('crb_registration_ru'))
				->set_width(30),
		));

	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Dimension translate')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_fields(array(
			Field::make('text', 'crb_breast_level_en', __('Circumference at breast level en'))
				->set_width(30),
			Field::make('text', 'crb_breast_level_ro', __('Circumference at breast level ro'))
				->set_width(30),
			Field::make('text', 'crb_breast_level_ru', __('Circumference at breast level ru'))
				->set_width(30),

			Field::make('text', 'crb_above_the_breast_en', __('Circumference above the breast en'))
				->set_width(30),
			Field::make('text', 'crb_above_the_breast_ro', __('Circumference above the breast ro'))
				->set_width(30),
			Field::make('text', 'crb_above_the_breast_ru', __('Circumference above the breast ru'))
				->set_width(30),

			Field::make('text', 'crb_below_the_breast_en', __('Circumference below the breast en'))
				->set_width(30),
			Field::make('text', 'crb_below_the_breast_ro', __('Circumference below the breast ro'))
				->set_width(30),
			Field::make('text', 'crb_below_the_breast_ru', __('Circumference below the breast ru'))
				->set_width(30),

			Field::make('text', 'crb_waist_level_en', __('Circumference at waist level en'))
				->set_width(30),
			Field::make('text', 'crb_waist_level_ro', __('Circumference at waist level ro'))
				->set_width(30),
			Field::make('text', 'crb_waist_level_ru', __('Circumference at waist level ru'))
				->set_width(30),

			Field::make('text', 'crb_hip_level_en', __('Circumference at hip level en'))
				->set_width(30),
			Field::make('text', 'crb_hip_level_ro', __('Circumference at hip level ro'))
				->set_width(30),
			Field::make('text', 'crb_hip_level_ru', __('Circumference at hip level ru'))
				->set_width(30),

			Field::make('text', 'crb_hip_level_2_en', __('Circumference at hip level_2 en'))
				->set_width(30),
			Field::make('text', 'crb_hip_level_2_ro', __('Circumference at hip level_2 ro'))
				->set_width(30),
			Field::make('text', 'crb_hip_level_2_ru', __('Circumference at hip level_2 ru'))
				->set_width(30),

			Field::make('text', 'crb_breast_height_en', __('Breast height en'))
				->set_width(30),
			Field::make('text', 'crb_breast_height_ro', __('Breast height ro'))
				->set_width(30),
			Field::make('text', 'crb_breast_height_ru', __('Breast height ru'))
				->set_width(30),

			Field::make('text', 'crb_breast_center_en', __('Breast center en'))
				->set_width(30),
			Field::make('text', 'crb_breast_center_ro', __('Breast center ro'))
				->set_width(30),
			Field::make('text', 'crb_breast_center_ru', __('Breast center ru'))
				->set_width(30),

		));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once __DIR__ . '/../../vendor/autoload.php';
	\Carbon_Fields\Carbon_Fields::boot();
}
