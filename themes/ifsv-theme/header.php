<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php echo body_class(); ?>>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<header>
				<nav>  <!-- navegation bar -->
					<a href="<?php echo home_url(); ?>"><h1 id="logo" class="logo_header"><!--Espacio del logo--></h1></a>
			     	<div>
					    <ul> 
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/nosotros">Nosotros</a></li>  
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/consultoria">Consultoría</a></li>     
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/ifs"> I F S </a></li>
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/industrias"> Industrias </a></li>
				            <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/soluciones"> Soluciones</a></li>
			               	<li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/clientes"> Clientes </a></li>
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/noticias">Noticias </a></li>
					       	<li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>/contacto">Contacto</a></li>
					    </ul>
				  	</div>
				</nav>	<!-- navegation bar -->
		 	</header>