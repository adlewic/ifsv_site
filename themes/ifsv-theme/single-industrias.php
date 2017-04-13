<?php get_header();?>
	<div id="wrapper">

		<div id="industria_layout">
			<div class="first">
					<img class="i_icons" src="../images/g_icons/jet.svg"><br>			
					<h3> <?php the_title();?></h3>
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
