<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
<!-- Start Title Tag -->
<title><?php get_my_title_tag(); ?></title>
<!-- End Title Tag -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
        <a href="index.php"><h1>AUDREY GLADSON</h1></a>
        <a href="index.php"><h3>Actor - Chicago, IL</h3></a>
    <nav id="cssmenu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation_items" class="%2$s">%3$s</ul>', ) ); ?>
    </nav>
