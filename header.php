
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

<link rel="stylesheet" type="text/css" media="all" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="slides.min.jquery.js"></script>
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
        fadeSpeed: 30

      });
    });
	</script>
</head>

<body>
<div id="wrapper">
      <div id="header">
      <div class="wrapper clearfix">
        <ul class="navtop left">
		<!--
            <li><a href="#">BERANDA</a></li>
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