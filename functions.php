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

register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2>',
	'after_title'   => '</h2>'
));


// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//


?>
