<?php 
	get_header(); 
	if(have_posts()):
		while(have_posts()):
			the_post();
	?>


<div id="wrapper">

				<div id="industria_layout">
					<div class="first">
							<img class="i_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>			
							<h3>  <?php the_title(); ?> </h3>
					</div>

					<div class="sec">
								<!-- type of bussineses  -->
							<h4> <?php the_excerpt(); ?></h4>
							<p>
								<?php the_content(); ?>
							</p>
					</div>

					<div id="caracteristicas">
						<ul>
							<?php 
								$_spec1_arr_meta  = get_post_meta($post->ID, '_spec1_arr_meta_s', true);
								if($_spec1_arr_meta):
									foreach ($_spec1_arr_meta as $key => $value):
							?>
										<li>
											<h4><?php echo esc_html($key); ?></h4>
											<p><?php echo esc_html($value); ?></p>
										</li>
							<?php 
									endforeach;
								endif;	
							?>		
						</ul>
					</div>
				</div>

</div>

<?php
		endwhile;
	endif;	
	get_footer();
	?>