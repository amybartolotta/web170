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
    <nav id="cssmenu">
        <div class="menubutton"></div>
        <ul class="menulist">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="resume.php">Resume</a></li>
            <li><a href="media.php">Media</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="news.php">News</a></li>
        </ul>
    </nav>

    <div id="content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>">
    <?php the_title(); // get the page or posting title ?></a></h2>
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
