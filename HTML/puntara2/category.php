<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage puntara
 * @since puntara 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

		<div class="wrapperb-content">
		<div class="post">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'puntara' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

			<!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
