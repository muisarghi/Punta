<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>

  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="google-site-verification" content="NbAuMVblLggM1GZovdwVHb1GgzVIIAToybH5VZxxxv0" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/js/jquery.lightbox-0.5.css" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <script src="<?php bloginfo('template_directory')?>/js/jquery-1.6.min.js"></script>

  <script src="<?php bloginfo('template_directory')?>/js/slides.min.jquery.js"></script>

  <script src="<?php bloginfo('template_directory')?>/js/jquery.lightbox-0.5.js"></script>

  <script src="<?php bloginfo('template_directory')?>/js/scripts.js"></script>
  <script type="text/javascript" language="javascript" src="http://www.google.com/jsapi?key=ABQIAAAAFEyVt-pBJaTXzM__EKlCrBRyn6VRRdQGMLQqRPPw1fs6QDtVcBRGklOHzrf7hmoAX3qgxg4t5ImqRA"></script>
  <script src="<?php bloginfo('template_directory')?>/js/gfeedfetcher.js"></script>

  <!--[if lt IE 9]>

  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>

  <![endif]-->

<?php wp_head(); ?>

</head>



<body>

<div id="wrapper">

<div id="wrapper2">

    <div id="header">

        <a href="<?php echo get_option('home'); ?>/" id="logo"></a>

        <div class="clear"></div>

        <div id="nav">

            <!--<ul>

                <li class="current-menu-item"><a href="#">Home</a></li>

                <li><a href="#">Profile</a></li>

                <li><a href="#">Songs</a></li>

                <li><a href="#">Tour & Dates</a></li>

                <li><a href="#">Media</a></li>

                <li><a href="#">Press</a></li>

                <li><a href="#">Merchandise</a></li>

                <li><a href="#">Contact Us</a></li>

            </ul>-->

            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu',

                                   'container' => false ) ); ?>

        </div>

    </div>