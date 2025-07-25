<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StoreBase
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main " role="main">
		<?php if (have_posts()) : ?>
			<?php if (class_exists( 'WooCommerce' )) : ?>
				<?php
				/** Start hero section */
				do_action( 'before_storebase_homepage_hero_section' );
				do_action( 'storebase_homepage_hero_section' );
				do_action( 'after_storebase_homepage_hero_section' );

				/** End hero section */
				/** Start Product Category section */

				do_action( 'before_storebase_homepage_product_category_section' );
				do_action( 'storebase_homepage_product_category_section' );
				do_action( 'after_storebase_homepage_product_category_section' );
				/** End Product Category section */

			else :
				?>
				<div class="container">
					<div class="row">
						<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						?>

					</div><!-- End .row -->
					<div class="py-4">
						<?php storebase_post_pagination(); ?>
					</div>
				</div><!-- End .container -->
			<?php endif; ?>
		<?php endif; ?>
	</main>
<div>

<?php
get_footer();
