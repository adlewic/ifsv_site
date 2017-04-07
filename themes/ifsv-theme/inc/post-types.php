<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){




		/*INDUSTRIAS*/
		$labels = array(
			'name'          => 'Industrias',
			'singular_name' => 'Industria',
			'add_new'       => 'Nueva Industria',
			'add_new_item'  => 'Nueva Industria',
			'edit_item'     => 'Editar Industria',
			'new_item'      => 'Nueva Industria',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Industria',
			'search_items'  => 'Buscar Industria',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Industrias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'industrias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'menu_icon' 		 =>'dashicons-building',
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		);
		register_post_type( 'industrias', $args );




		/*Soluciones*/
		$labels = array(
			'name'          => 'Soluciones',
			'singular_name' => 'Solucion',
			'add_new'       => 'Nueva Solucion',
			'add_new_item'  => 'Nueva Solucion',
			'edit_item'     => 'Editar Solucion',
			'new_item'      => 'Nueva Solucion',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Solucion',
			'search_items'  => 'Buscar Solucion',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Soluciones'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'soluciones' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'menu_icon'			 =>'dashicons-yes',
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		);
		register_post_type( 'soluciones', $args );



		/*CLIENTES*/
		$labels = array(
			'name'          => 'Clientes',
			'singular_name' => 'Cliente',
			'add_new'       => 'Nuevo Cliente',
			'add_new_item'  => 'Nuevo Cliente',
			'edit_item'     => 'Editar Cliente',
			'new_item'      => 'Nuevo Cliente',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver Cliente',
			'search_items'  => 'Buscar Cliente',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Clientes'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'clientes' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'menu_icon'			 =>	'dashicons-businessman',
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		);
		register_post_type( 'clientes', $args );

		// NOTICIAS
		$labels = array(
			'name'          => 'Noticias',
			'singular_name' => 'Noticia',
			'add_new'       => 'Nueva Noticia',
			'add_new_item'  => 'Nueva Noticia',
			'edit_item'     => 'Editar Noticia',
			'new_item'      => 'Nueva Noticia',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Noticia',
			'search_items'  => 'Buscar Noticia',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Noticias'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'noticias' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'menu_icon'  		 =>'dashicons-testimonial',
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
		);

		register_post_type( 'noticias', $args );
		
	});