<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;

$product_adult = '';
$product_child = '';

$product_type = $product->get_attribute('type_custom');
$product_type_arr = explode(', ', $product_type);

if ($product_type_arr[0]) {
	$product_adult = $product_type_arr[0];
}

if (isset($product_type_arr[1])) {
	$product_child = $product_type_arr[1];
}

//получаем цену продажи (распродажи)
$sale_price = get_post_meta(get_the_ID(), '_price', true);
$regular_price = get_post_meta(get_the_ID(), '_regular_price', true);
$symbol = get_woocommerce_currency_symbol();


//если у нас обычная стоимость отсутствует, то будем перебирать вариативную
if ($regular_price == "") {
	$adult_price = '';
	$adult_regular_price = '';
	$child_price = '';
	$child_regular_price = '';

	//1: получим вариации
	$available_variations = $product->get_available_variations();
	foreach ($available_variations as $item) {
		if ($item['attributes']['attribute_pa_type_custom'] == 'vzr') {
			$adult_price = $item['display_price'];
			$adult_regular_price = $item['display_regular_price'];
		}
		if ($item['attributes']['attribute_pa_type_custom'] == 'child') {
			$child_price = $item['display_price'];
			$child_regular_price = $item['display_regular_price'];
		}
	}

//	$adult_regular_price = round($adult_regular_price, 0).''.$symbol;
//	$child_regular_price = round($child_regular_price, 0).''.$symbol;

	if($adult_regular_price == $adult_price){
		$adult_regular_price = '';
	}else{
		$adult_regular_price = round($adult_regular_price, 0).''.$symbol;
	}
	if($child_regular_price == $child_price){
		$child_regular_price = '';
	}else{
		$child_regular_price = round($child_regular_price, 0).''.$symbol;
	}

	$adult_html = '';
	$child_html = '';

	if(!empty($adult_price)){
		$adult_html = '<span class="price__item">
							<span class="price__type">'.$product_adult.':</span>
							<span class="price__regular">'.$adult_regular_price.'</span>
							<span class="price__sale">'.round($adult_price, 0).''.$symbol.'</span>
						</span>';
	}

	if(!empty($child_price)){
		$child_html = '<span class="price__item">
							<span class="price__type">'.$product_child.':</span>
							<span class="price__regular">'.$child_regular_price.'</span>
							<span class="price__sale">'.round($child_price, 0).''.$symbol.'</span>
						</span>';
	}

//Данные получены, можем веселиться с отображением
//Далее, я думаю, все просто и понятно

	echo apply_filters('woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
		sprintf('
			<div class="price-box">
				<span class="new-price">
					<span class="price">
					'.$adult_html.''.$child_html.'
					</span>
				</span>
			</div>
		</div>
		<div class="product-content2">
			<h2 class="product-name">
				<a href="' . get_permalink() . '">' . get_the_title() . '</a>
			</h2>

			<div class="price-box">
				<span class="new-price">
					<span class="price">
					'.$adult_html.''.$child_html.'
					</span>
				</span>
			</div>
			<div class="button-container">
				<a title="В корзину" href="%s" class="button cart_button %s">
					<span>' . esc_html__('Read more', 'benefis') . '</span>
				</a>
			</div>
		</div>
		', esc_url($product->add_to_cart_url()), esc_attr(isset($args['class']) ? $args['class'] : 'button'), isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '', esc_html($product->add_to_cart_text())), $product, $args);
}


