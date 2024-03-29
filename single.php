<?php
	/**
	 * The template for displaying all single posts
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package benefis
	 */

	get_header();
?>

    <div class="container">
        <div class="row">
            <div class="bs-main">
				<?php get_sidebar(); ?><?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'productsingle');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>
            </div>
        </div>
    </div>

<?php
	get_footer();
