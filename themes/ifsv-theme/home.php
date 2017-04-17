<?php get_header(); ?>
	 <!-- small header -->
<div id="wrapper">
		<section id="title">
			
		</section>		

		<section id="banner" class="b00">
			<div id="principal">
				<?php echo " Un conjunto de aplicaciones único e integrado para negocios globales y exigentes."; ?>				
			</div>
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
								<h5> Industrias  – </h5>
								<div> Construcción y Contratistas </div>
								<p>
									Decrubre los beneficios que IFS puede traer a tu industria. 
									IFS offers agile, industry-proven software for demanding industries.
									Industries that require real-time project control, asset integrity management, traceability and agility. 
								</p>
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
											 <h5> Noticias – </h5>
											
											 <div> <?php the_title(); ?>  </div>
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
					<br>
					<h3> <?php echo 'Un conjunto de aplicaciones único e integrado para negocios globales y exigentes.'; ?>  </h3>
					<a href=""> Conoce más </a>
					<img id="ifs_logo" src="<?php echo get_template_directory_uri(); ?>/images/v_logos/IFS.png">
				</article>

				<div class="two" id="newsletter">
					<br><br>
					<h6> ¿Preguntas? estamos aquí para ayudarte </h6>
					<a href=""> Contáctanos </a>
				</div>

				<div class="two" id="contact">
					<br> <br>
					<h6> Conectemos </h6>
					<a href="https://www.linkedin.com/company-beta/2869713/"> Linkedin </a>
					<a href="https://www.youtube.com/channel/UC4RfaP5LxC1QLXJF5pdpwQw"> YouTube </a>
				</div>
		</div>










		</div>

</div>
<?php get_footer(); ?>