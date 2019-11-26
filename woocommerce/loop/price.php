<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>
<h1>Price</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequuntur distinctio fugiat laborum quisquam rem
    repudiandae voluptates, voluptatibus! Assumenda culpa, error inventore libero minima numquam porro quos tempora
    veniam vero! Architecto, assumenda, corporis exercitationem in iure iusto laudantium magni nihil quidem
    reprehenderit suscipit ullam velit voluptates? Alias aliquid culpa esse et id quis sequi velit? Atque commodi
    cupiditate ea eaque expedita itaque, iure laboriosam libero neque obcaecati odit perspiciatis repellat saepe sed
    sunt suscipit unde? Accusantium amet autem, commodi debitis dolorem doloremque ea facilis impedit iste maiores
    mollitia neque non, odit officia officiis praesentium provident quaerat repudiandae, saepe sapiente ullam.</p>
<?php //if ( $price_html = $product->get_price_html() ) : ?>
<!--<!--	<span class="price">-->--><?php ////echo $price_html; ?><!--<!--</span>-->-->
<?php //endif; ?>
