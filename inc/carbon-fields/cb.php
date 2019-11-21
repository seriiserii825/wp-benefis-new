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

			Field::make('text', 'crb_distance_from_nipples_to_the_waist_line_en', __('Distance from nipples to the waist line en'))
				->set_width(30),
			Field::make('text', 'crb_distance_from_nipples_to_the_waist_line_ro', __('Distance from nipples to the waist line ro'))
				->set_width(30),
			Field::make('text', 'crb_distance_from_nipples_to_the_waist_line_ru', __('Distance from nipples to the waist line ru'))
				->set_width(30),

			Field::make('text', 'crb_front_width_en', __('Front width en'))
				->set_width(30),
			Field::make('text', 'crb_front_width_ro', __('Front width ro'))
				->set_width(30),
			Field::make('text', 'crb_front_width_ru', __('Front width ru'))
				->set_width(30),

			Field::make('text', 'crb_back_width_en', __('Back width en'))
				->set_width(30),
			Field::make('text', 'crb_back_width_ro', __('Back width ro'))
				->set_width(30),
			Field::make('text', 'crb_back_width_ru', __('Back width ru'))
				->set_width(30),

			Field::make('text', 'crb_front_length_en', __('Front length en'))
				->set_width(30),
			Field::make('text', 'crb_front_length_ro', __('Front length ro'))
				->set_width(30),
			Field::make('text', 'crb_front_length_ru', __('Front length ru'))
				->set_width(30),

			Field::make('text', 'crb_back_length_en', __('Back length en'))
				->set_width(30),
			Field::make('text', 'crb_back_length_ro', __('Back length ro'))
				->set_width(30),
			Field::make('text', 'crb_back_length_ru', __('Back length ru'))
				->set_width(30),

			Field::make('text', 'crb_slanting_front_length_en', __('Slanting front length en'))
				->set_width(30),
			Field::make('text', 'crb_slanting_front_length_ro', __('Slanting front length ro'))
				->set_width(30),
			Field::make('text', 'crb_slanting_front_length_ru', __('Slanting front length ru'))
				->set_width(30),

			Field::make('text', 'crb_slanting_back_length_en', __('Slanting back length en'))
				->set_width(30),
			Field::make('text', 'crb_slanting_back_length_ro', __('Slanting back length ro'))
				->set_width(30),
			Field::make('text', 'crb_slanting_back_length_ru', __('Slanting back length ru'))
				->set_width(30),

			Field::make('text', 'crb_shoulder_length_en', __('Shoulder length en'))
				->set_width(30),
			Field::make('text', 'crb_shoulder_length_ro', __('Shoulder length ro'))
				->set_width(30),
			Field::make('text', 'crb_shoulder_length_ru', __('Shoulder length ru'))
				->set_width(30),

			Field::make('text', 'crb_sleeve_length_en', __('Sleeve length en'))
				->set_width(30),
			Field::make('text', 'crb_sleeve_length_ro', __('Sleeve length ro'))
				->set_width(30),
			Field::make('text', 'crb_sleeve_length_ru', __('Sleeve length ru'))
				->set_width(30),

			Field::make('text', 'crb_circumference_of_the_arm_en', __('Circumference of the arm en'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_arm_ro', __('Circumference of the arm ro'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_arm_ru', __('Circumference of the arm ru'))
				->set_width(30),

			Field::make('text', 'crb_circumference_of_the_wrist_en', __('Circumference of the wrist en'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_wrist_ro', __('Circumference of the wrist ro'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_wrist_ru', __('Circumference of the wrist ru'))
				->set_width(30),

			Field::make('text', 'crb_circumference_of_the_leg_en', __('Circumference of the leg en'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_leg_ro', __('Circumference of the leg ro'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_leg_ru', __('Circumference of the leg ru'))
				->set_width(30),

			Field::make('text', 'crb_seat_height_en', __('Seat height en'))
				->set_width(30),
			Field::make('text', 'crb_seat_height_ro', __('Seat height ro'))
				->set_width(30),
			Field::make('text', 'crb_seat_height_ru', __('Seat height ru'))
				->set_width(30),

			Field::make('text', 'crb_total_height_of_the_individual_en', __('Total height of the individual en'))
				->set_width(30),
			Field::make('text', 'crb_total_height_of_the_individual_ro', __('Total height of the individual ro'))
				->set_width(30),
			Field::make('text', 'crb_total_height_of_the_individual_ru', __('Total height of the individual ru'))
				->set_width(30),

			Field::make('text', 'crb_side_distance_from_waist_to_floor_en', __('Side distance from waist to floor en'))
				->set_width(30),
			Field::make('text', 'crb_side_distance_from_waist_to_floor_ro', __('Side distance from waist to floor ro'))
				->set_width(30),
			Field::make('text', 'crb_side_distance_from_waist_to_floor_ru', __('Side distance from waist to floor ru'))
				->set_width(30),

			Field::make('text', 'crb_step_line_en', __('Step line en'))
				->set_width(30),
			Field::make('text', 'crb_step_line_ro', __('Step line ro'))
				->set_width(30),
			Field::make('text', 'crb_step_line_ru', __('Step line ru'))
				->set_width(30),

			Field::make('text', 'crb_side_distance_from_waist_to_the_knees_en', __('Side distance from waist to the knees en'))
				->set_width(30),
			Field::make('text', 'crb_side_distance_from_waist_to_the_knees_ro', __('Side distance from waist to the knees ro'))
				->set_width(30),
			Field::make('text', 'crb_side_distance_from_waist_to_the_knees_ru', __('Side distance from waist to the knees ru'))
				->set_width(30),

			Field::make('text', 'crb_circumference_of_the_neck_en', __('Circumference of the neck en'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_neck_ro', __('Circumference of the neck ro'))
				->set_width(30),
			Field::make('text', 'crb_circumference_of_the_neck_ru', __('Circumference of the neck ru'))
				->set_width(30),

			Field::make('text', 'crb_length_of_basque_of_tutu_en', __('Length of basque of tutu en'))
				->set_width(30),
			Field::make('text', 'crb_length_of_basque_of_tutu_ro', __('Length of basque of tutu ro'))
				->set_width(30),
			Field::make('text', 'crb_length_of_basque_of_tutu_ru', __('Length of basque of tutu ru'))
				->set_width(30),

			Field::make('text', 'crb_tutu_length_en', __('Tutu length en'))
				->set_width(30),
			Field::make('text', 'crb_tutu_length_ro', __('Tutu length ro'))
				->set_width(30),
			Field::make('text', 'crb_tutu_length_ru', __('Tutu length ru'))
				->set_width(30),

		));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once __DIR__ . '/../../vendor/autoload.php';
	\Carbon_Fields\Carbon_Fields::boot();
}
