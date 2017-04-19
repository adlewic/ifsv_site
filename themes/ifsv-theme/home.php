<?php get_header(); ?>
	 <!-- small header -->
<div id="wrapper">
		<section id="title"></section>

		<section id="banner" class="b0">
			<div id="principal"><?php echo "Soluciones innovadoras para la simplificación de tu industria."; ?></div>
		</section>
	
		<section id="wrapper">
				<?php 
					$args = array(
						'post_type'=>'noticias',
						'posts_per_page'=>2,
						'post_status'=>'publish',
						'orderby'=>'date',
						'order'=>'DESC'
						);
					$noticias = new WP_Query($args);
					if($noticias->have_posts()):
				?>
						<section id="news">
						<?php
							while($noticias->have_posts()):
								$noticias->the_post();
							?>
								<article class="clearfix latest">
										<div class="img_news">
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
										</div>
								</article>
						<?php 
							endwhile;
							wp_reset_postdata();
							?>
						</section>
				<?php		
					endif;	
				?>		

			<section id="static">
				<article>
					<img id="ifs_logo" src="<?php echo get_template_directory_uri(); ?>/images/v_logos/IFS.png">
					<br><br><br>
					<h4> 
						<?php echo 'IFS Applications soluciones que permiten la gestion de capacidades'; ?>
					</h4>
				</article>

				<article>
					<h3> asdasdasdas</h3>
				</article>
			</section>
		</section>

</div>
<?php get_footer(); ?>