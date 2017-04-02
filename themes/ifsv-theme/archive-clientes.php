<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>

<!-- small header -->
<header>
	<div id="title">
		<h3> Clientes </h3>
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
		<a href="#">	
			<figure id="single_customer" class="imghvr-fade-in-left">
			  <img src="images/g_logos/galdisa.png">
			  <figcaption>
			  		<h4> Galdisa , bla bla </h4>
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					empor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
					amet, consectetur adipisicing elit, sed do eiusmod
			  </figcaption>
			</figure>   
		</a>
		<!-- END post_client -->

	</div> 

</div><!-- wrapper -->
<?php get_footer(); ?>