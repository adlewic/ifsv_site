<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<script src="js/modernizr.custom.js"></script>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
			<header>
				<nav>  <!-- navegation bar -->
					<a href="index.html">
				  		<div>
			  				<img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/v_logos/logo.jpg">
				 	 	</div>
				    </a>	

			     	<div>
					    <ul> 
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>">Nosotros</a></li>  
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>">Consultoría</a></li>     
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>"> I F S </a></li>
					        <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>"> Industrias </a></li>
				            <li ><a class="hvr-underline-from-center" href="<?php echo bloginfo('url'); ?>"> Soluciones</a></li>
			               	<li ><a class="hvr-underline-from-center" href="page_clientes.html"> Clientes </a></li>
					        <li ><a class="hvr-underline-from-center" href="page_noticias.html">Noticias </a></li>
					       	<li ><a class="hvr-underline-from-center" href="page_contacto.html">Contacto</a></li>
					    </ul>
				  	</div>
				</nav>	<!-- navegation bar -->
		 	</header>