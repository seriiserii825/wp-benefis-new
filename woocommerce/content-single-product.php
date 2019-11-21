<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<script>
	jQuery(document).ready(function ($) {
		// razmer
		$('#pa_razmer').change(function () {

			var th = $(this).find(':selected').val();
			if (th == 'svoj-razmer') {
				$('#pa_razmer')
					.parents('.value')
					.append('' +
						'<div class="rz_block">' +
						'<div class="inprz">' +
						'<label for="rz1">' +
						'<span><?php echo carbon_get_theme_option("crb_breast_level" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_breast_level" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/1.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a>' +
						'</label> <input name="rz1" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz2"><span><?php echo carbon_get_theme_option("crb_above_the_breast" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_above_the_breast" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/2.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz2" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz3"><span><?php echo carbon_get_theme_option("crb_below_the_breast" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_below_the_breast" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/3.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz3" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz4"><span><?php echo carbon_get_theme_option("crb_waist_level" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_waist_level" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/4.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz4" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz5"><span><?php echo carbon_get_theme_option("crb_hip_level" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_hip_level" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/5.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz5" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz6"><span><?php echo carbon_get_theme_option("crb_hip_level_2" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_hip_level_2" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/6.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz6" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz7"><span><?php echo carbon_get_theme_option("crb_breast_height" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_breast_height" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/7.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz7" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz8"><span><?php echo carbon_get_theme_option("crb_breast_center" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_breast_center" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/8.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz8" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz9"><span><?php echo carbon_get_theme_option("crb_distance_from_nipples_to_the_waist_line" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_distance_from_nipples_to_the_waist_line" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/9.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz9" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz10"><span><?php echo carbon_get_theme_option("crb_front_width" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_front_width" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/10.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz10" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz11"><span><?php echo carbon_get_theme_option("crb_back_width" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_back_width" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/11.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz11" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz12"><span><?php echo carbon_get_theme_option("crb_front_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_front_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/12.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz12" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz13"><span><?php echo carbon_get_theme_option("crb_back_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_back_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/13.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz13" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz14"><span><?php echo carbon_get_theme_option("crb_slanting_front_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_slanting_front_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/14.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz14" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz15"><span><?php echo carbon_get_theme_option("crb_slanting_back_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_slanting_back_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/15.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz15" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz16"><span><?php echo carbon_get_theme_option("crb_shoulder_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_shoulder_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/16.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz16" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz17"><span><?php echo carbon_get_theme_option("crb_sleeve_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_sleeve_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/17.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz17" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz18"><span><?php echo carbon_get_theme_option("crb_circumference_of_the_arm" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_circumference_of_the_arm" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/18.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz18" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz19"><span><?php echo carbon_get_theme_option("crb_circumference_of_the_wrist" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_circumference_of_the_wrist" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/19.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz19" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz20"><span><?php echo carbon_get_theme_option("crb_circumference_of_the_leg" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_circumference_of_the_leg" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/20.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz20" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz21"><span><?php echo carbon_get_theme_option("crb_seat_height" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_seat_height" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/21.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz21" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz22"><span><?php echo carbon_get_theme_option("crb_total_height_of_the_individual" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_total_height_of_the_individual" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/22.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz22" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz23"><span><?php echo carbon_get_theme_option("crb_side_distance_from_waist_to_floor" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_side_distance_from_waist_to_floor" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/23.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz23" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz24"><span><?php echo carbon_get_theme_option("crb_step_line" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_step_line" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/24.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz24" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz25"><span><?php echo carbon_get_theme_option("crb_side_distance_from_waist_to_the_knees" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_side_distance_from_waist_to_the_knees" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/25.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz25" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz26"><span><?php echo carbon_get_theme_option("crb_circumference_of_the_neck" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_circumference_of_the_neck" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/26.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz26" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz27"><span><?php echo carbon_get_theme_option("crb_length_of_basque_of_tutu" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_length_of_basque_of_tutu" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/27.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz27" type="text" class="custom_rz" value="" >' +
						'</div>' +
						'<div class="inprz"><label for="rz28"><span><?php echo carbon_get_theme_option("crb_tutu_length" . get_lang()); ?></span> <a data-fancybox="gallery" data-caption="<?php echo carbon_get_theme_option("crb_tutu_length" . get_lang()); ?>" href="/wp-content/themes/benefis/img/rz/28.jpg"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label> <input name="rz28" type="text" class="custom_rz" value="" >' +
						'</div>' +
                        '<input name="_custom_option" type="hidden" class="custom_rz" id="allval" value=""></div>' +
						'');
				//.append
			} else {
				$('.rz_block').remove();
			}
		});

		$('.variations_form.cart').on('submit', function () {
			var name,
				value,
				allrz = '';
			$('.inprz').each(function () {
				name = $(this).find('label > span').html();
				value = $(this).find('input').val();
				allrz += name + ": " + value + "; ";
			});
			alert(allrz);
			$('#allval').val(allrz);
		});
	});
</script>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action('woocommerce_before_single_product_summary');
	?>
    <div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action('woocommerce_single_product_summary');
		?>


    </div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>
