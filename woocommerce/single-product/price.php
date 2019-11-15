<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php
$product_adult = '';
$product_child = '';

$product_type = $product->get_attribute('type_custom');
$product_type_arr = explode(', ', $product_type);

if($product_type_arr[0]){
	$product_adult = $product_type_arr[0];
}

if($product_type_arr[1]){
	$product_child = $product_type_arr[1];
}

//получаем цену продажи (распродажи)
$sale_price = get_post_meta(get_the_ID(), '_price', true);
$regular_price = get_post_meta(get_the_ID(), '_regular_price', true);

//если у нас обычная стоимость отсутствует, то будем перебирать вариативную
if ($regular_price == "") {
	$adult_price = '';
	$adult_regular_price = '';
	$child_price = '';
	$child_regular_price = '';

	//1: получим вариации
	$available_variations = $product->get_available_variations();
	//получим значения цен
	//цена продажи (распродажи) первой вариации
	$adult_price = (int)$available_variations[0]['display_price'].get_woocommerce_currency_symbol();

	//обычная цена продажи первой вариации
	$adult_regular_price = (int)$available_variations[0]['display_regular_price'].get_woocommerce_currency_symbol();
	//$available_variations можно использовать в цикле, чтобы получить значения всех вариаций

	if ($available_variations[1]['display_price']) {
		$child_price = (int)$available_variations[1]['display_price'].get_woocommerce_currency_symbol();
	} elseif ($available_variations[1]['display_regular_price']) {
		$child_regular_price = (int)$available_variations[1]['display_regular_price'].get_woocommerce_currency_symbol();
	}
}

//Данные получены, можем веселиться с отображением
//Далее, я думаю, все просто и понятно
?>

<p class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>">
	<?php if ($product_child): ?>
        <span class="price__item">
            <span class="price__title"><?php echo $product_child ?></span>
            <span class="price__value">- <?php echo $child_price; ?></span>
        </span>
    <?php endif; ?>

    <?php if ($product_adult): ?>
        <span class="price__item">
            <span class="price__title"><?php echo $product_adult ?></span>
            <span class="price__value">- <?php echo $adult_price; ?></span>
        </span>
    <?php endif; ?>
</p>

<div class="product-single-currency" id="js-product-single-currency" data-currency="<?php echo get_woocommerce_currency(); ?>">
    <span class="product-single-currency__title">Currency: </span><?php echo do_shortcode('[woocommerce_currency_switcher_link_list] ') ?>
</div>

