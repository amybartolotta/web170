<?php get_header(); ?>

    <div id="content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>">
    <?php the_title(); // get the page or posting title ?></a></h2>
    <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
	<h2>Latest Posts</h2>
	<?php rewind_posts(); // stop loop one ?>
	<?php query_posts('showposts=4'); // give directions to loop two ?>
	<?php while (have_posts()) : the_post(); // start loop two ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endwhile; // end loop two ?>
    <small>front-page.php</small>
    </div>
    </header> 
        <!-- START LEFT COLUMN -->
            <div id='hs1' class="wrapper">

<?php get_sidebar(); ?>
<?php get_footer(); ?>
