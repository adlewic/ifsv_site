<?php get_header(); 
	if(have_posts()):
	?>
		<!-- small header -->
		<header>
			<div id="title">
				<h3> 
					<?php
						$pt_name = ucfirst(get_post_type());
						echo esc_html($pt_name); 
					?> 
				</h3>
			</div>		
			<div id="banner">	
				<div id="banner_title">
					<h2> Lorem ipsum lorem </h2>
				</div>
			</div>
		</header>

		<div id="wrapper">
			<div id="customers_info">
				<h5> 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
					 amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</h5>
			</div>

			<div class="border" id="all_customers">

				<!--  post_cliente -->
				<?php 
					while(have_posts()):
						the_post();
				?>
						<a href="#">	
							<figure id="single_customer" class="imghvr-fade-in-left">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/g_logos/galdisa.png">
							  <figcaption>
							  		<h4> <?php the_title(); ?> </h4>
						  				<p>
						  					 <?php the_content(); ?>
										</p>
							  </figcaption>
							</figure>   
						</a>
				<?php 
					endwhile;
				?>
				<!-- END post_client -->

			</div> 

		</div><!-- wrapper -->
<?php 
	endif;
	get_footer(); 
?>


 	
