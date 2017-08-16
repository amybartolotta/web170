<?php

/*
Theme Name: Web170
Theme URI: http://wordpress.org/themes/web170
Author: Amy Bartolotta
Author URI: http://wordpress.org/
Description: Web 170 Theme
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: one-column, black, grey, white
Text Domain: web170

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/


// Register Sidebars
register_sidebars(5, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
//
register_sidebar(array('name' =>  __('Fred', 'fred'), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>' ));
// Register Navigation Menus 
register_nav_menus(array('main-menu' => __('Main Menu')));
//
// Add Supprt for Post Thumbnails & Featured Images 
add_theme_support('post-thumbnails');
//
// Create Custom Image Sizes
add_image_size('icon', 140, 140, true); // 140 pixels wide by 140 pixels tall, hard crop mode
//
// Excerpt for Pages
add_post_type_support('page', 'excerpt');
//

// Get My Title Tag
function get_my_title_tag() {
	
	global $post; // make sure you make this a global variable
	
	if ( is_front_page() ) {  // for the site’s Front Page
	
		bloginfo('description'); // retrieve the site tagline
	
	} 
	
	elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
	
		the_title(); // retrieve the page or posting title 
	
	} 
	
	else { // for everything else
		
		bloginfo('description'); // retrieve the site tagline
		
	}
	
	if ( $post->post_parent ) { // for your site’s Parent Pages
	
		echo ' | '; // separator with spaces
		echo get_the_title($post->post_parent);  // retrieve the parent page title
		
	}
	echo ' | '; // separator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | '; // separator with spaces
	echo 'Seattle, WA.'; // write in the location
	
}
//

?>
