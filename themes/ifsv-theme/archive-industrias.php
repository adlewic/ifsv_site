<?php get_header();?>
<div id="wrapper">

<div id="general_menu">
	<?php 
		if(have_posts()):
		?>
			<ul>
			<?php	
				while(have_posts()):
					the_post();
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<button>
								<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
								<?php the_title(); ?>
							</button>
						</a>
					</li>
			<?php 
				endwhile;
				?>
			</ul>
	<?php
		endif;
		?>
</div>


<!-- general layout start  -->
<!-- <div id="general_layout">
	<div id="industria_layout">
		<div id="in_layout_head">
			<div>		
				<h3> Aeroespacial y Defensa </h3>
				<h4> IFS permite la gestion con capacidad en tierra, mar y aire</h4>
			</div>

			<p>
				Con el aumento de los retos de los mercados emergentes, las nuevas líneas de productos, nuevas tecnologías, nuevas regulaciones, nuevas exigencias y nuevas formas de hacer negocios - combinados con el crecimiento estratégico, adquisiciones / fusiones y desafíos de los modelos de costos del operador.
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
		<?php
		/*
			while(have_posts()):
				the_post();
			?>
				<li> 
					<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
					<h4> <?php the_title(); ?></h4>
				</li>
		<?php 
			endwhile;
			*/
			?>
		</ul>
	</div>
</div> -->

<?php get_footer(); ?>	