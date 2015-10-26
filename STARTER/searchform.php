<?php
/**
 * The template for displaying search form
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="row collapse">
		<?php do_action( 'foundationpress_searchform_top' ); ?>
		<div class="small-8 columns">
			<input type="text" value="" name="search" id="search" placeholder="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>">
		</div>
		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>
		<div class="small-4 columns">
			<input type="hidden" id="searchsubmit" value="<?php esc_attr_e( '', 'foundationpress' ); ?>" class="prefix button">
			<button type="submit" class="search"><i class="fa fa-search"></i></button>
		</div>
		<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>
	</div>
</form>
<?php do_action( 'foundationpress_after_searchform' ); ?>