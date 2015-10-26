<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">

		<div class="row">

			<div class="medium-4 columns">
				<div class="callout">
					<h2><?php the_field('title_1', 'option'); ?></h2>
					<p><?php the_field('description_1', 'option'); ?></p>	
				</div>
				<a class="callout-link" href="<?php the_field('page_link_1', 'option'); ?>">Learn More</a>
			</div>
			<div class="medium-4 columns">
				<div class="callout">
					<h2><?php the_field('title_2', 'option'); ?></h2>
					<p><?php the_field('description_2', 'option'); ?></p>
				</div>
				<a class="callout-link" href="<?php the_field('page_link_1', 'option'); ?>">Learn More</a>
			</div>
			<div class="medium-4 columns">
				<div class="callout">
					<h2><?php the_field('title_3', 'option'); ?></h2>
					<p><?php the_field('description_3', 'option'); ?></p>
				</div>
				<a class="callout-link" href="<?php the_field('page_link_1', 'option'); ?>">Learn More</a>
			</div>

		</div>

		<div class="row social">
			<a href="<?php the_field('twitter', 'option'); ?>" target="_blank">Twitter</a>
			<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">Facebook</a>
			<a href="<?php the_field('youtube', 'option'); ?>" target="_blank">YouTube</a>
			<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">LinkedIn</a>
		</div>

		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>







		<p class="copyright">&copy; <?php echo date("Y"); ?> Center for Compact and Efficient Fluid Power</p>
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
</div>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
