<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>



<div id="wrapper">

				<div id="industria_layout">
					<div class="first">
							<img class="i_icons" src="../images/g_icons/jet.svg"><br>			
							<h3>  Aeroespacial y Defensa </h3>
					</div>

					<div class="sec">
								<!-- type of bussineses  -->
							<h4> IFS permite la gestion con capacidad en tierra, mar y aire</h4>
							<p>
								Con el aumento de los retos de los mercados emergentes, las nuevas líneas de productos, nuevas tecnologías, nuevas regulaciones, nuevas exigencias y nuevas formas de hacer negocios combinados con el crecimiento estratégico, adquisiciones / fusiones y desafíos de los modelos de costos del operador.
							</p>
					</div>

					<div id="caracteristicas">
						<ul>
							<li>
								<h4>Caracteristica title</h4>
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamc
								</p>
							</li>


							<li>
								<h4>Caracteristica title</h4>
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamc
								</p>
							</li>
							
						</ul>
					</div>
				</div>

</div>

































<?php get_footer(); ?>
=======
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
>>>>>>> 7e3c78cf68625af550dc6e35caf2774c0a96e8e7
