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
					<?php
					$taxonomy = 'product_cat';
					$orderby = 'name';
					$show_count = 0;      // 1 for yes, 0 for no
					$pad_counts = 0;      // 1 for yes, 0 for no
					$hierarchical = 1;      // 1 for yes, 0 for no
					$title = '';
					$empty = 1;

					$args = array(
						'taxonomy' => $taxonomy,
						'orderby' => $orderby,
						'show_count' => $show_count,
						'pad_counts' => $pad_counts,
						'hierarchical' => $hierarchical,
						'title_li' => $title,
						'hide_empty' => $empty
					);
					$all_categories = get_categories($args); ?>

					<?php foreach ($all_categories as $cat): ?>
						<?php if ($cat->category_parent == 0): ?>
                            <h2 class="products-section__title"><?php echo $cat->name; ?></h2>
                            <?php if(has_Children($cat->term_id)): ?>
								<?php $category_parent = $cat->term_id; ?>
								<?php
								$args2 = array(
									'taxonomy' => $taxonomy,
									'child_of' => 0,
									'parent' => $category_parent,
									'orderby' => $orderby,
									'show_count' => $show_count,
									'pad_counts' => $pad_counts,
									'hierarchical' => $hierarchical,
									'title_li' => $title,
									'hide_empty' => $empty
								);
								$sub_cats = get_categories($args2); ?>
								<?php if ($sub_cats): ?>
									<?php foreach ($sub_cats as $sub_category): ?>
                                        <h3 class="subcategories__title"><?php echo $sub_category->name; ?></h3>
                                        <div class="bs-products-loops">
											<?php
											$products = new WP_Query([
												'post_type' => 'product',
												'posts_per_page' => 5,
												'product_cat' => $sub_category->slug
											]);
											?>

											<?php if ($products->have_posts()): ?>

												<?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

													<?php do_action('woocommerce_product_loop_start'); ?>

													<?php wc_get_template_part('content', 'product'); ?>

													<?php do_action('woocommerce_product_loop_end'); ?>

												<?php endwhile; ?><?php wp_reset_postdata(); ?>

											<?php endif; ?>
                                        </div>
									<?php endforeach; ?>

								<?php endif; ?>
                            <?php else: ?>
                                <div class="bs-products-loops">
									<?php
									$products = new WP_Query([
										'post_type' => 'product',
										'posts_per_page' => 5,
										'product_cat' => $cat->slug
									]);
									?>

									<?php if ($products->have_posts()): ?>

										<?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

											<?php do_action('woocommerce_product_loop_start'); ?>

											<?php wc_get_template_part('content', 'product'); ?>

											<?php do_action('woocommerce_product_loop_end'); ?>

										<?php endwhile; ?><?php wp_reset_postdata(); ?>

									<?php endif; ?>
                                </div>
                            <?php endif; ?>
						<?php endif; ?>
					<?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

