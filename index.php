<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
        <a href="index.php"><h1>AUDREY GLADSON</h1></a>
        <a href="index.php"><h3>Actor - Chicago, IL</h3></a>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation_items" class="%2$s">%3$s</ul>', ) ); ?>

<div id="sidebar">
	<?php if(is_page()) : ?>
	<h2><?php echo get_the_title($post->post_parent);?></h2>
	<ul class="sub-navigation-items">
	<?php 
	if ($post->post_parent) {

	wp_list_pages(array( 'child_of' => $post->post_parent, 'title_li' => '',)); 
} else {
	wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));
}
?>
</ul>
<?php endif; ?>

<?php if(!(is_page())) : ?>
<h2>Blog</h2>
<ul class="sub-navigation-items">
<?php wp_list_categories(array('title_li' => '',)); ?>	
<?php endif; ?>
	
</div>	
    
    <div id="content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    </div>

	

    </header> 
        <!-- START LEFT COLUMN -->
            <div id='hs1' class="wrapper">
            </div>
<?php wp_footer(); ?>


</body>
</html>
