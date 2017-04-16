<?php get_header();?>
	 <!-- small header -->
<header>
	<div id="title">
		<h3> Soluciones </h3>
	</div>		
	<div id="banner" class="b5">	
		<div id="banner_title">
			<h2> Lorem ipsum lorem </h2>
		</div>
	</div>
</header>

<div id="wrapper">

<!-- 	<div id="customers_info">
		<h5> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
		 amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
		</h5>
	</div> -->
</div>



<div id="wrapper">

<div id="general_soluciones">
	<?php 
		if(have_posts()):
		?>
			<ul>
			<?php	
				while(have_posts()):
					the_post();
				?>
					<li> 
						<a href="<?php the_permalink(); ?>">
							<!-- <img src="<?php //the_post_thumbnail(); ?>"> -->
							<img src="<?php echo get_template_directory_uri(); ?>/images/g_icons/conect.svg"><br>
							<h4> <?php the_title(); ?></h4>
						</a>
					</li>
			<?php 
				endwhile;
				?>
			</ul>
	<?php
		endif;
		?>
</div>


<?php get_footer(); ?>
