<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Puntara
 * @since Puntara 1.0
 */

get_header(); ?>
<?get_sidebar(); ?>

	<div class="wrapperb-content">

		<div class="post">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'puntara' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'puntara' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		<!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>