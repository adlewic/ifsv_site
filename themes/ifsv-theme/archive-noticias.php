<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>
	 <!-- small header -->
<header>
	<div id="title">
		<h3> Noticias </h3>
	</div>		
	<div id="banner">	
		<div id="banner_title">
			<h2> Lorem ipsum lorem </h2>
		</div>
	</div>
</header>




<div id="wrapper">

	<div id="customers_info">
		<h5> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
		 amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.
		</h5>
	</div>
<!-- allposts_NoticiaS -->
	<div id="all_news">
	<!-- post_noticia  -->
		<article>
			<div>
				 <h4> Title news  Title news</h4>
				 <p>
					Lorem ipsum dolor sit amet, consectetur adipiscing eli.
				 </p>
			</div>
		</article>
	<!-- END post_noticia -->

	</div>
<!-- END allpostsNoticiaS -->
<?php get_footer(); ?>