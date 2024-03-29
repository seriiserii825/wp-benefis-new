<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
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
	exit; // Exit if accessed directly
}
?>
<?php if (is_single()): ?>
<div class="woocommerce">
    <div class="single-product">
		<?php else: ?>
        <div class="bs-content">
			<?php endif; ?>

			<?php if (!is_single()): ?>

            <h2 class="products-section__title"><?php single_cat_title(); ?></h2>

            <div class="bs-products-loops">
				<?php endif; ?>
