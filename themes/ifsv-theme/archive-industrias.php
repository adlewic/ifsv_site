<<<<<<< HEAD
<?php get_header(); ?>
<div id="wrapper">

<div id="general_menu">
	<ul>
		<!-- one  -->
		<li> 
			<button>
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Aeroespacial y Defensa
			</button>
		</li>

		 <!-- two -->
		 <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Gestión y Mantenimiento de Activos
		 </li>

		 <!-- three -->
		 <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Automotriz
		 </li>

		 <!-- four -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Construcción
		 </li>

	  <!-- five -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Energía y Utilities
		 </li>

		 <!-- six -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Industria Manufacturera
		 </li>

		  <!-- seven -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Petróleo y Gas 
		 </li>

 		  <!-- seven -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Fabricación por Procesos
		 </li>

	   	<!-- seven -->
		  <li> 
			<img class="g_icons" src="./images/g_icons/jet.svg"><br>
				Retail
		 </li>
	</ul>
=======
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
						<button>
							<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
							<?php the_title(); ?>
						</button>
					</li>
			<?php 
				endwhile;
				?>
			</ul>
	<?php
		endif;
		?>
>>>>>>> cf66b4919c9e7cd7080af3f90160b6b5268b0008
</div>


<!-- general layout start  -->
<div id="general_layout">
		<div id="industria_layout">
			<div id="in_layout_head">
				<div>		
					<!-- industry name  -->
					<h3> Aeroespacial y Defensa </h3>
					<!-- subtitle  --> 
					<h4> IFS permite la gestion con capacidad en tierra, mar y aire</h4>
				</div>

				<p>
					Con el aumento de los retos de los mercados emergentes, las nuevas líneas de productos, nuevas tecnologías, nuevas regulaciones, nuevas exigencias y nuevas formas de hacer negocios - combinados con el crecimiento estratégico, adquisiciones / fusiones y desafíos de los modelos de costos del operador.
				</p>
			</div>

				<!-- main description  -->
			
		
				<!-- type of bussineses  -->
				<ul>
					<li> <span>  ● </span> Fabricacion de Automoviles  </li>
					<li> <span>  ● </span> Concecionarios de Automoviles </li>
<<<<<<< HEAD
					<li> <span>  ● </span>  porvedores de automoviles  </li>
=======
					<li> <span>  ● </span> Porveedores de automoviles  </li>
>>>>>>> cf66b4919c9e7cd7080af3f90160b6b5268b0008

				</ul>
		
		</div><!-- industria layout end-->



		<div id="specifics">
				<ul>
					<!-- specific individual -->
					<li>			
						<div id="image">
							<div id="in_image">
							</div>
						</div>

						<div id="text">
							<h4>  Logistica militar </h4>
							<p>
								IFS logra un enfoque integrado de la planificación de la estrategia, el movimiento táctico y mantenimiento de los activos militares en combinación con la ingeniería de mantenimiento general, la adquisición, el almacenamiento, la distribución, la eliminación y la planificación de recursos dentro de una solución única de Defensa.
							</p>
						</div>
					</li>
					<!-- end -->

						<!-- specific individual -->
					<li>			
						<div id="image">
							<div id="in_image">
							</div>
						</div>

						<div id="text">
							<h4>  Logistica militar </h4>
							<p>
								IFS logra un enfoque integrado de la planificación de la estrategia, el movimiento táctico y mantenimiento de los activos militares en combinación con la ingeniería de mantenimiento general, la adquisición, el almacenamiento, la distribución, la eliminación y la planificación de recursos dentro de una solución única de Defensa.
							</p>
						</div>
					</li>
					<!-- end -->
				</ul>
		</div>
</div> <!-- general layout end  -->

<!-- wrapper -->
	</div>

<?php get_footer(); ?>	