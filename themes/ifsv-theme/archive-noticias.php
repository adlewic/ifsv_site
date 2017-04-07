<?php get_header();?>
	 
		<div id="wrapper">
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
							 		 <?php the_content(); ?>
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