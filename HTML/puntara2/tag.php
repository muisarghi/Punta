<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Strenua 1.0
 */

get_header(); ?>

<?php get_sidebar(); ?>
		<div class="wrapperb-content">

		<div class="post">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'puntara' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
			<!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
