<?php get_header(); ?>
    <div id="content-main" class="main" role="main">
        
        <div id="content-main-wrap">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
    </div>

    </div><!-- #content-main -->

<?php 
if(is_page('mozilla-space')) {
   include ('sidebar-none.php');
}
else {              
   get_sidebar(); 
} ?>

<?php get_footer(); ?>
