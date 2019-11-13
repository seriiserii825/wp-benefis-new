<?php
/**
 * Template Name: Main page
 */

get_header();
?>
    <div class="slider" id="js-slider">
        <div class="slider_video_parent">
            <span></span>
            <div class="slider-video" id="js-slider-video">
				<?php $slider = carbon_get_post_meta(453, 'crb_slider'); ?>
				<?php foreach ($slider as $slider_item): ?>
                    <div class="slider-video__item">
                        <div class="slider-video__content">
                            <div class="slider-video__img">
								<?php echo $slider_item['image']; ?>
                            </div>
                            <div class="slider-video__text">
                                <h2><?php echo $slider_item['title' . get_lang()]; ?></h2>
                                <p><?php echo $slider_item['text' . get_lang()]; ?></p>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
            <video src="<?php echo get_template_directory_uri() . '/video/intro_video.mp4'; ?>" class="videoslider"
                   autoplay="" loop="" muted="" width="1280" height="720"></video>
        </div>

        <a href="#" id="js-muted-button" class="muted-btn"><i class="fa fa-volume-off"></i></a>
    </div>

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
<?php
get_footer();

