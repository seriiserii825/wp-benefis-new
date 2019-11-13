<?php
/**
 * Template Name: Main page
 */

get_header();
?>
    <div class="slider">
        <div class="slider_video_parent">
            <span></span>
            <div class="slider-video" id="js-slider-video">
                <?php $slider = carbon_get_post_meta(453, 'crb_slider'); ?>
                <?php foreach($slider as $slider_item): ?>
                    <div class="slider-video__item">
                        <div class="slider-video__content">
                            <div class="slider-video__img">
                                <?php echo $slider_item['image']; ?>
                            </div>
                            <div class="slider-video__text">
                                <h2><?php echo $slider_item['title'.get_lang()]; ?></h2>
                                <p><?php echo $slider_item['text'.get_lang()]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <video src="<?php echo get_template_directory_uri() . '/video/intro_video.mp4'; ?>" class="videoslider"
                   autoplay="" loop="" muted="" width="1280" height="720"></video>
        </div>

        <button id="unmuteButton">Unmuted</button>
    </div>

    <div class="container">
        <div class="bs-main">
			<?php get_sidebar(); ?>

			<?php do_action('woocommerce_before_main_content'); ?>

			<?php
			$products = new WP_Query(['post_type' => 'product', 'posts_per_page' => 6]);
			?>

			<?php if ($products->have_posts()): ?>

				<?php while ($products->have_posts()): ?><?php $products->the_post(); ?>

					<?php do_action('woocommerce_product_loop_start'); ?>

					<?php wc_get_template_part('content', 'product'); ?>

					<?php do_action('woocommerce_product_loop_end'); ?>

				<?php endwhile; ?><?php wp_reset_postdata(); ?>

			<?php else: ?><?php endif; ?>


			<?php do_action('woocommerce_after_main_content'); ?>

        </div>
    </div>
<?php
get_footer();
