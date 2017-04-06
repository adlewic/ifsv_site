<?php get_header(); ?>
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
			<div id="all_news" class="post_pool">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
				?>
						<!-- post_noticia  -->
						<article class="single_post">
							<div>
								<?php the_post_thumbnail(); ?>
							</div>
							<div>
								<h4> <?php the_title(); ?> </h4>
							 	<p>
							 		Lorem ipsum dolor sit amet, consectetur adipiscing eli.

							 	</p>
							</div>
						</article>
					<!-- END post_noticia -->
				<?php 
					endwhile;
				endif;
					?>
			</div>
		<!-- END allpostsNoticiaS -->
		</div>
<?php get_footer(); ?>