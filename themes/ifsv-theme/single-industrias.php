<?php 
	get_header(); 
		if(have_posts()):
			while(have_posts()):
				the_post();
			?>
	<!-- general layout start  -->
			<div id="general_layout">
				<div id="industria_layout">
					<div id="in_layout_head">
						<div>		
							<h3> <?php the_title(); ?> </h3>
							<h4></h4>
						</div>
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					<ul>
						<li> <span>  ● </span> Fabricacion de Automoviles  </li>
						<li> <span>  ● </span> Concecionarios de Automoviles </li>
						<li> <span>  ● </span> Porveedores de automoviles  </li>
					</ul>
				</div>

				<div id="specifics">
					<ul>
						<li> 
							<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
							<h4> <?php the_title(); ?></h4>
						</li>
					</ul>
				</div>
			</div>
<?php 
			endwhile;	
		endif;
	get_footer(); 
	?>