<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Spotlight
 */

wp_head();

wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu-class' ) );

if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--Parallax featured image -->
						<div class="parallax"></div>

						<style type="text/css">
							.parallax {
									background-image: url("<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>");
									min-height: 300px;
									width: 100%;
									margin: 0 auto;
									background-attachment: fixed;
									background-position: center;
									background-repeat: no-repeat;
									background-size: cover;
									margin-bottom: -25px;
								}
						</style>
					<?php the_post_navigation(); ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
