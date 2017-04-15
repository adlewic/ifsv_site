<?php get_header(); ?>
	 	<!-- small header -->
		<header>
			<div id="title">
				<h3>
					<?php 
						$pt_name = ucfirst(get_post_type());
						echo $pt_name;
						?>
				</h3>
			</div>		
			<div id="banner">	
				<div id="banner_title">
					<!--ESTO PUED SER EL ATTRIBUTE ALT DE LA IMÁGEN-->
					<h2> <?php echo esc_html('Lorem ipsum lorem'); ?> </h2>
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
						<article class="single_post">
							<div>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</div>
							<div>
								<h4>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h4>
							 	<p>
							 		 <?php the_excerpt(); ?>
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