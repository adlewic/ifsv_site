<?php get_header(); if(have_posts()):while(have_posts()):the_post();endwhile;endif;?>
<!-- small header -->
	<header>
		<div id="title">
			<h3> <?php the_title(); ?> Applications </h3>
		</div>		
		<div id="banner">	
			<div id="banner_title">
				<h2><?php the_excerpt(); ?></h2>
			</div>
		</div>
	</header>

	<div id="wrapper">
	<!-- section 1  -->
		<div id="sec_first">
			<div id="one"> <?php the_title(); ?> </div>	
			<div id="two">	
				<p>
				   <?php the_content(); ?>
				</p>
			</div>
		</div>

	<!-- section 2  -->
		<div id="sec_second">
			<ul id="ifs_menu">
				<li>
					<img class="ifs_icon" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/tool.svg">
					<h4> gestión de servicios y activos</h4>
				</li>
				<li>
					<img class="ifs_icon" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/factory.svg">
					<h4> fabricación </h4> 
				</li>
				<li>
					<img class="ifs_icon" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/states.svg">
					<h4> proyectos </h4> 
				</li>
				<li>
					<img class="ifs_icon" src="<?php echo get_template_directory_uri(); ?>/images/g_icons/conect.svg">
					<h4> gestión de cadena de suministros </h4> 
				</li>
			</ul>
		</div>

	<!-- section 3  -->
		<div id="sec_third">
			<div>
				<p>
					IFS Applications includes financials, human re- sources, quality management, document management, customer relationship management (CRM), business intelligence, sustainability management and other core functionality to facilitate full life cycle management of products, assets, custom
				</p>
			</div>

			<div>
				<p>
					IFS Applications includes financials, human re- sources, quality management, document management, customer relationship management (CRM), business intelligence, sustainability management and other core functionality to facilitate full life cycle management of products, assets, custom
				</p>
			</div>
		</div>


	<!-- section 4 table  -->
		<div id="components_table">
			<ul>
				<!-- yellow -->
				<li>
					<div class="square y">
						Consolidación 
					</div>
					<div class="square y">
						Activos Fijos 
					</div>
					<div class="square y">
						Cuentas por Cobrar 
					</div>
					<div class="square y">
						Cuentas por Pagar
					</div>
					<div class="square y">
						Tesorería 
					</div>
					<div class="square y">
						Gestión de Presupuestos 
					</div>
					<div class="square y">
						eFacturación 
					</div>
					<div class="square y">
						IFS Finanzas ™  
					</div>
				</li>

				<!-- magenta -->
				<li>
					<div class="square m">
						Administración de Nóminas 
					</div>
					<div class="square m">
						Control de Asistencia
					</div>
					<div class="square m">
						Control de Gastos
					</div>
					<div class="square m">
						Gestión de Capacitación
					</div>
					<div class="square m">
						Desarrollo de Empleados
					</div>
					<div class="square m">
						Reclutamiento
					</div>
					<div class="square m">
						Gestión de Empleados
					</div>
					<div class="square m">
						IFS Recursos Humanos ™
					</div>
				</li>

				<!-- blue  -->
				<li>
					
					<div class="square b">
						Gestión de Activos
					</div>
					<div class="square b">
						Gestion de Ingeniería
					</div>
					<div class="square b">
						Proyectos de Ingeniería 
					</div>
					<div class="square b">
						Configuración PDM
					</div>
					<div class="square b">
						IFS Ingeniería ™
					</div>
				</li>

				<!-- green -->

				<li> 
					
					<div class="square g">
						Gestión de Contratos de Venta 
					</div>
					<div class="square g">
						Gestión de Subcontratos
					</div>
					<div class="square g">
						Gestión de Proyectos 
					</div>
					<div class="square g">
						Planificación y Programación 
					</div>
					<div class="square g">
						Presupuestos del Proyecto
					</div>
					<div class="square g">
						Gestión de Riesgos
					</div>
					<div class="square g">
						Gestión de Proyectos
					</div>
					<div class="square g">
						IFS Proyectos ™
					</div>
				</li>

				<!-- green light -->
				<li>
					<div class="square gl">
						Planificación Múltisitio
					</div>
					<div class="square gl">
						Fabricación Contra Proyecto
					</div>
					<div class="square gl">
						Ingeniería bajo Pedido
					</div>
					<div class="square gl">
						Programación Basada en Restricciones
					</div>
					<div class="square gl">
						Costos
					</div>
					<div class="square gl">
						Procesamiento por Lotes
					</div>
					<div class="square gl">
						Fabricación Repetitiva 
					</div>
					<div class="square gl">
						Órdenes de Fabricación
					</div>
					<div class="square gl">
						Reporte de Planta
					</div>
					<div class="square gl">
						IFS Fabricación ™
					</div>
				</li>

				<!-- orange  -->
				<li>
					<div class="square o">
						Previsión de la Demanda
					</div>
					<div class="square o">
						Planificación Multisitio 
					</div>
					<div class="square o">
						Reposición de Inventario
					</div>
					<div class="square o">
						Distribición
					</div>
					<div class="square o">
						Pedidos de Clientes
					</div>
					<div class="square o">
						Adquisiciones
					</div>
					<div class="square o">
						Gestion de Alquileres
					</div>
			 		<div class="square o">
						Almacenaje
					</div>
					<div class="square o">
						IFS Cadena de Suministro ™ 
					</div>
				</li>

				<!-- olive -->
				
				<li>
					<div class="square ol">
						Reparación de Componentes
					</div>
					<div class="square ol">
						Mapas
					</div>
					<div class="square ol">
						Gestión de Casos y Llamadas
					</div>
					<div class="square ol">
						Agenda Dinámica 
					</div>
					<div class="square ol">
						Servicio de Campo
					</div>
					<div class="square ol">
						Gestión de Contratos de Servicios 
					</div>
					<div class="square ol">
						Configuración de Ventas 
					</div>
					<div class="square ol">
						Tienda Online
					</div>
					<div class="square ol">
						CRM
					</div>
					<div class="square ol">
						IFS Ventas y Servicio ™ 
					</div>
				</li>

				<!-- blue navy -->
				<li>
					<div class="square navy">
						Eficacia Global de Equipos 
					</div>
					<div class="square navy">
						Monitorización de Equipos 
					</div>
					<div class="square navy">
						Medición de Equipos 
					</div>
					<div class="square navy">
						Mantenimiento Preventivo
					</div>
					<div class="square navy">
						Programación y Recursos 
					</div>
					<div class="square navy">
						Ordenes de Trabajo
					</div>

					<div class="square navy">
						Activos Lineales
					</div>
					<div class="square navy">
						Equipo
					</div>
					<div class="square navy">
						IFS Mantenimiento™ 
					</div>
				</li>

				<!-- orange dark-->

				<li>
					<div class="square red ">
						Soluciones Colaborativas
					</div>
					<div class="square red">
						Portales Basados en Roles
					</div>
					<div class="square red">
						Soluciones Moviles y Aplicaciones 
					</div>
					<div class="square red">
						Integración y Gestión de Datos
					</div>
					<div class="square red">
						Programación de Eventos 
					</div>
					<div class="square red">
						IFS Tecnología de Negocio ™ 
					</div>
				</li>
			</ul>
			
			<hr>
				<ul>
					<li>
						<div class="square grey">
							Reglas Contables
						</div>
					</li>
					<li>
						<div class="square grey">
							Gestión de Sustentabilidad
						</div>
					</li>
					<li>
						<div class="square grey">
							Gestión de Ciclo de Vida
						</div>
					</li>
					<li>
						<div class="square grey">
							Gestión de Documentos
						</div>
					</li>
					<li>
						<div class="square grey">
							Inteligencia de Negocio
						</div>
					</li>
					<li>
						<div class="square grey">
							Inteligencia Operacional de la Empresa
						</div>
					</li>
					<li>
						<div class="square grey">
							Gestión de Calidad
						</div>
					</li>

					<li>
						<div class="square grey">
							Modelos de Proceso
						</div>
					</li>

					<li>
						<div class="square grey">
							Gestión de la Huella Ecológica
						</div>
					</li>
				</ul>
		</div>
</div>
<?php get_footer(); ?>