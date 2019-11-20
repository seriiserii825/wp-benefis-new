<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

/**
 * Template Name: Catalog Page
 */

get_header(); ?>

    <div class="container">
        <div class="bs-main">
			<?php get_sidebar(); ?>

            <div class="woocommerce">
                <div class="bs-content">
                    <h2 class="products-section__title"><?php echo get_the_category_by_ID(376); ?></h2>
                    <div class="bs-products-loops">
						<?php
						$products = new WP_Query([
							'post_type' => 'product',
							'posts_per_page' => 10,
							'product_cat' => 'ready-made-products'
						]);
						?>

						<?php if ($products->have_posts()): ?>

							<?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

								<?php do_action('woocommerce_product_loop_start'); ?>

								<?php wc_get_template_part('content', 'product'); ?>

								<?php do_action('woocommerce_product_loop_end'); ?>

							<?php endwhile; ?><?php wp_reset_postdata(); ?>

						<?php else: ?><?php endif; ?>
                    </div>

                    <h2 class="products-section__title"><?php echo get_the_category_by_ID(380); ?></h2>
                    <div class="bs-products-loops">
						<?php
						$products_proposal = new WP_Query([
							'post_type' => 'product',
							'posts_per_page' => 10,
							'product_cat' => 'new-proposals'
						]);
						?>

						<?php if ($products_proposal->have_posts()): ?>

							<?php while ($products_proposal->have_posts()): ?><?php $products_proposal->the_post(); ?>

								<?php do_action('woocommerce_product_loop_start'); ?>

								<?php wc_get_template_part('content', 'product'); ?>

								<?php do_action('woocommerce_product_loop_end'); ?>

							<?php endwhile; ?><?php wp_reset_postdata(); ?>

						<?php else: ?><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
