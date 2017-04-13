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
		<!-- allposts_NoticiaS -->
			<div id="all_news" class="post_pool">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
				?>
						<!-- post_noticia  -->
						<a href="<?php the_permalink(); ?>">
						<article class="single_post">
							<div>
								<?php the_post_thumbnail(); ?>
							</div>
							<div>
								<h4> <?php the_title(); ?> </h4>
							 	<p>
							 		 <?php the_content(); ?>
							 	</p>
							</div>
						</article>
						</a>
					<!-- END post_noticia -->
				<?php 
					endwhile;
				endif;
					?>
			</div>
		<!-- END allpostsNoticiaS -->
		</div>
<?php get_footer(); ?>