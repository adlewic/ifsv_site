<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>
	<!-- Insert content here -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
