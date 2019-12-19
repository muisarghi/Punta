<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage puntara
 * @since puntara 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div class="wrapperb-content">
		<div class="post">

			<?php
			/* Run the loop to output the attachment.
			 * If you want to overload this in a child theme then include a file
			 * called loop-attachment.php and that will be used instead.
			 */
			get_template_part( 'loop', 'attachment' );
			?>

			<!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
