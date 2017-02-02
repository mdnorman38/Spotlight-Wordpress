<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spotlight
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="theme-footer"><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'spotlight17' ), 'spotlight17', '<a href="https://automattic.com/" rel="designer">Michael Norman</a><br />');?></div>
			<div class="copyright">Copyright &copy; <?php echo date('Y'); ?></div>
			<!--<div class="social-icons"><?php echo DISPLAY_ULTIMATE_PLUS(); ?></div>-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
