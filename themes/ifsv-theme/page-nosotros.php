<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>
		 <!-- small header -->
		<header>
			<div id="title">
				<h3> <?php the_title(); ?> </h3>
			</div>		
			<div id="banner">	
				<div id="banner_title">
					<h2> <?php the_excerpt(); ?> </h2>
				</div>
			</div>
		</header>
			

<div id="wrapper">
				<div id="customers_info">
			<h5> 
				<?php the_content(); ?>
			</h5>
		</div>
</div><!-- wrapper -->
<?php get_footer(); ?>