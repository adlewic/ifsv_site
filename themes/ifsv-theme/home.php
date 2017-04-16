<?php get_header(); ?>
	 <!-- small header -->
<div id="wrapper">
		<section id="title">
			
		</section>		

		<section id="banner" class="b2">
			<div id="principal"><?php echo " Un conjunto de aplicaciones único e integrado para negocios globales y exigentes."; ?></div>
		</section>
	
		<div id="wrapper">


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
						<div id="news">

						<div id="estatico">
							<div class="img_news">
									
							</div>
							<div id="estatico_caption" class="caption_news">
								 <h4> hola mundo </h4>
							</div>

						</div>

						<?php
							while($noticias->have_posts()):
								$noticias->the_post();
							?>


								<article class="clearfix latest">
										<div class="img_news">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="caption_news">
											 <h4> <?php the_title(); ?></h4>
											<!--  <p>
												<?php the_content(); ?>
											 </p> -->
										</div>
								</article>
						<?php 
							endwhile;
							wp_reset_postdata();
							?>
						</div>
				<?php		
					endif;	
				?>		



		<div id="static">
				<article class="one">
					<img id="ifs_logo" src="<?php echo get_template_directory_uri(); ?>/images/v_logos/IFS.png">
					<br><br><br>
					<h3> 
						<?php echo 'IFS Applications soluciones que permiten la gestion de capacidades.'; ?>
					</h3>
				</article>

				<article class="two">
					<br><br><br>
					<h3> Lo que ifs puede hacer para la industria de la construcción </h3>

				</article>
		</div>










		</div>

</div>
<?php get_footer(); ?>