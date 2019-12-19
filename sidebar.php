<div class="wrapper-inner">
		<div class="sidebar">
			
			<div class="widget">
			<h1>POSTS</h1>
			<h2> >> LATEST POSTS</h2>
			<ul>
			<?php query_posts('offset=0'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				</li>
				<?php endwhile; endif;
				wp_reset_query();
				 ?>
			</ul>
			</div>

			<div class="widget">
			<h1>ARTICLES</h1>
			<h2> >> LATEST ARTICLES</h2>
			<ul>
			 <?php
			$args = array( 'category_name' => 'article', 'order'=> 'DESC', 'orderby' => 'date');
			$postslist = get_posts( $args );
			
			foreach ($postslist as $post) :  setup_postdata($post); ?>

			<li> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>   </a></li>
			<?php endforeach; ?>

			</ul>
			</div>

			<div class="widget">
			<h1>BLOGS</h1>
			<h2> >> LATEST BLOGS</h2>
			<ul>
			<?php
			$args = array( 'category_name' => 'blog', 'order'=> 'DESC', 'orderby' => 'date');
			$postslist = get_posts( $args );
			
			foreach ($postslist as $post) :  setup_postdata($post); ?>

           <li> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>   </a></li>
		   <?php endforeach; ?>

			</ul>
			</div>


		</div>