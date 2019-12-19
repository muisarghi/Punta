<?php
if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 181, 181 ); // Normal post thumbnails
	add_image_size( 'featured-thumbnail', 648, 9999 ); // Permalink thumbnail size
   add_image_size( 'merchandise-thumbnails', 198, 148, true ); // Permalink thumbnail size
   add_image_size( 'personel-thumbnails', 181, 181 ); // Permalink thumbnail size
   add_image_size( 'support-thumbnails', 183, 88 ); // Permalink thumbnail size

}
if ( function_exists('register_sidebar') ) {
register_sidebar(array('name'=>'footer-widget',
'before_widget' => '<div class="footer-widget">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-widget-title">',
'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ) {
register_sidebar(array('name'=>'sidebar-right',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title">',
'after_title' => '</div>',
));
}
if ( function_exists('register_sidebar') ) {
register_sidebar(array('name'=>'sidebar-twitter',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<div class="twitter-title">',
'after_title' => '</div>',
));
}

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}

function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="readmore">More Detail &gt;&gt;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>