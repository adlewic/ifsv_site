<?php get_header();?>

<header>
	<div id="title">
		<h3> Industrias </h3>
	</div>		
	<div id="banner" class="b2">	
		<div id="banner_title">
			<h2> Lorem ipsum lorem </h2>
		</div>
	</div>
</header>



<!-- <div id="wrapper"> -->

<div id="general_menu">
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
							<div>
								<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
								<h4> <?php the_title(); ?> </h4>
							</div>
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