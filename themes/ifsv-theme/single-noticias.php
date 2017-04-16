<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>

<header>
	<div id="title">
		<h3> Noticias </h3>
	</div>			

	<div id="banner">	
		<div id="banner_title">
				<img class="i_icons" src="../images/g_icons/jet.svg"><br>		
			<h2> <?php the_title(); ?> </h2>
		</div>
	</div>
</header>


<div id="wrapper">

		<div id="single_news">
			<p> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

</div>



<?php get_footer(); ?>	