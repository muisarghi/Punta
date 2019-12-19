<?php get_header(); ?>

<?php get_sidebar(); ?>
<div class="content">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post">
	
	 <?php
	if(has_post_thumbnail()) {
	echo '<div class="thumbnail">';
	the_post_thumbnail();
	echo '</div>';
	}
	?>

	<h1><?php the_title(); ?></h1>
	<?php the_excerpt();?>
	</div>


<?php endwhile; ?>


<?php else : ?>
	<div class="post">
	<h1>Not Found</h1>
	<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
	<?php endif; ?>

</div>
<div class="clear"></div>

</div>


	<?php get_footer(); ?>