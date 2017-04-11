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
		<div class="border" id="customers">

			<!-- single customer  -->
			<figure id="single_customer" class="imghvr-shutter-in-out-diag-2">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/g_logos/galdisa.png">
			  <figcaption>
			  		<h4> Galdisa , bla bla </h4>
		  			 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					empor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
					 amet, consectetur adipisicing elit, sed do eiusmod
			  </figcaption>
			</figure>   
			<!-- single customer end  -->

			<!-- single customer  -->
			<figure id="single_customer" class="imghvr-push-left">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/g_logos/galdisa.png">
			  <figcaption>
			  		<h4> Galdisa , bla bla </h4>
		  			 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					empor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
					 amet, consectetur adipisicing elit, sed do eiusmod
			  </figcaption>
			</figure>   
			<!-- single customer end  -->
		</div> 
</div><!-- wrapper -->
<?php get_footer(); ?>