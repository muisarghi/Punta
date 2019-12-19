<?php
/**
 * Template Name: Puntara
 *
 * @package WordPress
 * @subpackage puntara
 * @since puntara 2.0
 */


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php
load_theme_textdomain( 'your-theme', TEMPLATEPATH . '/languages' ); ?>

<head>
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'puntara' ), max( $paged, $page ) );

	?>

</title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<link rel="stylesheet" type="text/css" media="all" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="<?php bloginfo("template_url"); ?>/slides.min.jquery.js"></script>
	<!-- <script>
		$(function(){
			$('#slider').slides({
				preload: true,
				generateNextPrev: false
			});
		});
	</script> -->

	<script>
	$(function(){
      $("#slider").slides({
        effect: 'slide, fade'

      });
    });
	</script>
</head>

<body>
<div id="wrapper">
      <div id="header">
      <div class="wrapper clearfix">
        <ul class="navtop left">
            <!-- <li><a href="#">BERANDA</a></li>
            <li><a href="#">TIM KAMI</a></li>
            <li><a href="#">FILOSOFI</a></li>
            <li><a href="#">LAYANAN</a></li>
			-->
			<?php query_posts('showposts=4&offset=0'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			</li>
			<?php endwhile; endif;
			wp_reset_query();
			?>
        </ul>
        <a href="index.php" id="logo" class="left"></a>
        <ul class="navtop right">
            <li><a href="#">KLIEN</a></li>
            <li><a href="#">CSR</a></li>
            <li><a href="#">KONTAK</a></li>
            <li><a href="#">BLOG</a></li>
        </ul>
      </div>
      </div>

	  <div id="slider">
        <div class="slider_cont">

			<div class="slide_img">
				<div class="slides_container">

					<div class="slide">
						<div class="caption">
						<h1>membangun website
						yang sempurna untuk anda
						</h1>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</div>
					<img src="wp-content/themes/puntara2/images/slides.jpg" class="slideimg">
					</div>

					<div class="slide">
						<div class="caption">
						<h1>membangun website
						yang sempurna untuk anda
						</h1>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</div>
					<img src="wp-content/themes/puntara2/images/slides.jpg" class="slideimg">
					</div>

					<div class="slide">
						<div class="caption">
						<h1>membangun website
						yang sempurna untuk anda
						</h1>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</div>
					<img src="wp-content/themes/puntara2/images/slides.jpg" class="slideimg">
					</div>

				</div>
			</div>
        </div>

      </div>

      <div id="center" class="wrapper">


		<div class="landing3">

			<h1 class="post-title">PROJECT TERBARU</h1>
			<?php
			$args = array( 'numberposts' => 1, 'category_name' => 'blog', 'order'=> 'DESC', 'orderby' => 'date');
			$postslist = get_posts( $args );

			foreach ($postslist as $post) :  setup_postdata($post); ?>

			<a href="<?php the_permalink(); ?>" class="shadow">
			<?php the_post_thumbnail(); ?>
			<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
			</a>

			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>   </a></h2>
			<?php the_excerpt_max_charlength(100); ?>...

			<center><a href="<?php the_permalink(); ?>" class="button"> View Project </a> </center>
			<?php endforeach; ?>
		</div>

        <div class="landing3">
			<h1 class="post-title">TERBARU DI BLOG</h1>
            <?php
			$args = array( 'numberposts' => 1, 'category_name' => 'article', 'order'=> 'DESC', 'orderby' => 'date');
			$postslist = get_posts( $args );

			foreach ($postslist as $post) :  setup_postdata($post); ?>
			<center>
			<a href="<?php the_permalink(); ?>" class="shadow">
			<?php the_post_thumbnail(); ?>
			<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
			</a>
			</center>

            <h2 class="landing3"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>   </a></h2>
			<?php the_excerpt_max_charlength(100); ?>...

			<center><a href="<?php the_permalink(); ?>" class="button">Readmore</a></center>
			<?php endforeach; ?>
		</div>

		<div class="landing3">
		<?php
			$args = array( 'numberposts' => 1, 'category_name' => 'contact', 'order'=> 'DESC', 'orderby' => 'date');
			$postslist = get_posts( $args );

			foreach ($postslist as $post) :  setup_postdata($post); ?>

			<h1 class="post-title">BEKERJA BERSAMA KAMI</h1>
			<a href="<?php the_permalink(); ?>" class="shadow">
			<?php the_post_thumbnail(); ?>
			<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
			</a>

            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?>   </a></h2>
			<?php the_excerpt_max_charlength(100); ?>...

			<center><a href="<?php the_permalink(); ?>" class="button">Contact</a></center>
			<?php endforeach; ?>
		</div>




	  </div>
       <div class="clear"></div>
	  <div class="klien"></div>

<?php get_footer(); ?>
