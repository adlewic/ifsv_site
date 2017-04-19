<?php 
	get_header(); 
	if(have_posts()):
		while(have_posts()):
			the_post();
	?>
			<header>
				<div id="title">
					<h3>
						<?php 
							$pt_title = get_post_type();
							echo  esc_html(ucfirst($pt_title));
						?>
					</h3>
				</div>			
				<div id="banner">	
					<div id="banner_title">
							<div class="i_icons">
								<?php the_post_thumbnail(); ?>
							</div>
							<!-- <img class="i_icons" src="../images/g_icons/jet.svg"><br> -->
						<h2> <?php the_title(); ?> </h2>
					</div>
				</div>
			</header>
			<div id="wrapper">
					<div id="single_news">
						<p> 
							<?php the_content(); ?>
						</p>
					</div>
			</div>
<?php
		endwhile;
	endif;
	get_footer(); 
	?>