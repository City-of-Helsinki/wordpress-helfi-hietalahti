<?php

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 0, false);

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();

	//Code for custom background support
add_custom_background();

//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

function recentPosts() {

$args = array(
 'order' => 'DESC',
);

	$rPosts = new WP_Query($args);

	$rPosts->query( 'showposts=22');
		while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
			<li>
				<a href="<?php the_permalink();?>"><?php the_post_thumbnail('recent-thumbnails'); ?></a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
			</li>
		<?php endwhile;
	wp_reset_query();
}
