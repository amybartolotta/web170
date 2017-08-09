<?php get_header(); ?>

    <div id="content"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
	<article class="post-excerpt">
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>">
    <?php the_title(); // get the page or posting title ?></a></h2>
	<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>
</small>
	<a href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail( 'thumbnail' ); ?>
	<?php the_excerpt(); // get the posting's excerpt ?>
	</article>
    <?php endwhile; endif; // end the loop ?>
    <small>index.php</small>
    </div>
    </header> 
        <!-- START LEFT COLUMN -->
            <div id='hs1' class="wrapper">

<?php get_sidebar(); ?>
<?php get_footer(); ?>
