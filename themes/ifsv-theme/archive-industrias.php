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
							<img class="g_icons" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/jet.svg"><br>
							<h4> <?php the_title(); ?></h4>
						</li>
				<?php 
					endwhile;
					?>
				</ul>
		<?php
			endif;
			?>
	</div>

<!-- wrapper -->
</div>

<?php get_footer(); ?>	