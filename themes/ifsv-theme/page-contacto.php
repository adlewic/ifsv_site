<?php 
	get_header(); 
	$phone = get_post_meta($post->ID, '_phone_meta', true);
	$email = get_post_meta($post->ID, '_email_meta', true);
	$social1 = get_post_meta($post->ID, '_linkedin_meta', true);
	$social2 = get_post_meta($post->ID, '_twitter_meta', true);

	?>
	 <!-- small header -->
<header>
	<div id="title">
		<h3> <?php the_title(); ?> </h3>
	</div>		
	<div id="banner" class="b8">
		<div id="banner_title">
			<h2> <?php the_excerpt(); ?> </h2>
		</div>
	</div>
</header>

<div id="wrapper">
	<div id="customers_info">
		<h5><?php the_content(); ?></h5>
	</div>

	<div id="contact_general">
		<div id="contact_info">
			<h3><a href="tel:<?php echo $phone; ?>"><?php echo esc_html($phone); ?></a></h3>
			<h3><a href="mailto:<?php echo $email; ?>"><?php echo esc_html($email); ?></a></h3>
			<h4><a href="<?php echo $social1; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></h4>
			<h4><a href="<?php echo $social2; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></h4>
		</div>	

		<div id="contact_form">
			<h3>Contáctanos</h3>
			<form>
				<input type="text" name="nombre" placeholder="Nombre">
				<br>
				<input type="text" name="apellido" placeholder="Apellido">
				<br>
				<input type="text" name="nombre" placeholder="Email">
				<br>
				<input type="text" name="nombre" placeholder="Phone">
				<br>
				<br>
				<textarea placeholder=" Escribenos"></textarea> 
				<br>
				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

</div>
<?php get_footer(); ?>