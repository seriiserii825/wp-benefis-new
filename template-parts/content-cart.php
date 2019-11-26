<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
?>
<div class="cart-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
			<?php woocommerce_breadcrumb(); ?>
			<?php
					the_content();
			?>
        </div><!-- .entry-content -->
    </article>
</div>