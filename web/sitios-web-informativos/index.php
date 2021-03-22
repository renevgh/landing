<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/main.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?<?php echo time(); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://itedup.com/wp-content/uploads/2018/11/itedup-it.png" />

	<!-- SEO página Home -->
	<title>ITedup | Sitios Web Informativos</title>
	<meta name="description" content="Deja el diseño de tu logo en manos de los profesionales." /><!-- descripción de la página-->
	<meta name="keywords" content="logotipo profesional, logo profesional, logo, logotipo, diseño logo, diseño logotipo, diseño de logo, diseño de logotipo, diseño marca, diseño de marca, diseño gráfico" /><!-- palabras clave, separar cada keyword con una coma(,).-->
	<meta name="author" content="ITedup" />

	<!-- Imagen destacada -->
	<meta property="og:image" content=""><!-- dentro de content escribir la ruta donde se encuentra la imagen destacada. -->
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="200">

	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/c75ae0540c.js" crossorigin="anonymous"></script>

	<!-- Analiticos -->
	<!-- Hotjar Tracking Code for https://servicios.itedup.com.mx/imagen/logotipos-profesionales -->
	<!--script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:2214570,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script-->

	<!--Swiper js-->
	<link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
	<style type="text/css">
		.swiper-container{
			/*overflow: unset!important;*/
		}
		.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{
			margin-bottom: -40px;
		}
		.swiper-container1 {
      		width: 100%;
      		height: 100%;
      		overflow: hidden;
    	}
		.swiper-container2 {
      		width: 100%;
      		height: 100%;
      		overflow: hidden;
    	}
    	.imagen-fondo{
    		width: 100%;
  height: 100vh;
  background-position: center;
  background-size: cover;
  min-height: 500px; 
  background-image: url(images/logotipos-profesionales-home.jpg);
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
    	}
    	.imagen-fondo.con::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(255,255,255,0.5) 0%, rgba(0,0,0,0.5) 100%);
  z-index: -1;
}
table {
  border-collapse: collapse;
  width: 100%;
}
/*table, td, th {
  border: 1px solid #faa;
}
th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}*/
	</style>
</head>
<body>
	<?php
		require('../../loader/loader.php');
	?>
	<section class="headerPage background-image-parallax" style="background-image: url(images/fondo-clear.jpg);">
		<div class="contenido-amplio">
			<div class="fila">
				<div class="column-12 column-m-12" style="padding-right: 0; padding-left: 0;">
					<div class="headerPage__contenido">
						<img class="imagen imagen-centrada headerPage__contenido--logo" src="https://itedup.com/wp-content/uploads/itedup-logo-animated.gif">
						<img class="imagen imagen-centrada headerPage__contenido--imagen" src="images/web informativo.svg">
						<h1 class="molecula-titulo-principal color-secundario headerPage__contenido--titulo">Sitios Web Informativos</h1>
						<h2 class="molecula-subtitulo color-secundarioA headerPage__contenido--subtitulo">Digitaliza tu negocio con un sitio web y comienza a crear presencia en el internet</h2>
						<a class="boton background-primario color-blanco headerPage__contenido--boton" href="#paquetes">VER PAQUETES</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="paquetes" class="s-paquetes seccion-general" style="background-color: #f3f7f9;">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<h3 class="molecula-titulo-general color-secundario s-paquetes__titulo">Paquetes</h3>
					<h4 class="molecula-subtitulos color-secundarioA s-paquetes__subtitulo">Escoge el paquete que más te convenga</h4>
				</div>
			</div>
			<div class="fila">
				<div class="column-12">
					<!-- Swiper -->
				  	<div class="swiper-container1">
					    <div class="swiper-wrapper">
					      	<div class="swiper-slide">
						      	<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">One-Page Básico</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$6,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$3,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>5 Secciones/Subsecciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20One-Page%20Básico." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20One-Page%20Básico." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">One-Page Avanzado</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$10,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$6,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>10 Secciones/Subsecciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20One-Page%20Avanzado." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20One-Page%20Avanzado." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Básico</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$15,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$10,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>3 Páginas <br><span style="font-size: 12px; font-weight: 300;">(1 de Impacto, 2 Páginas)</span></li>
					      					<li>ó hasta 15 secciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Básico." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Básico." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Avanzado</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$21,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$15,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>10 Páginas <br><span style="font-size: 12px; font-weight: 300;">(3 de Impacto, 7 Páginas)</span></li>
					      					<li>ó hasta 50 secciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Avanzado." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Avanzado." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Premium</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$28,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$20,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>30 Páginas <br><span style="font-size: 12px; font-weight: 300;">(5 de Impacto, 25 Páginas)</span></li>
					      					<li>ó hasta 100 secciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Premium." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Premium." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Corporativo</h3>
										<span class="s-paquetes__tarjeta-header--descuento color-secundario">$40,000</span>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$30,000</h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>50 Páginas <br><span style="font-size: 12px; font-weight: 300;">(10 de Impacto, 40 Páginas)</span></li>
					      					<li>ó hasta 150 secciones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Corportaivo." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Sitio%20Web%20Corporativo." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					    </div>
					    <!-- Add Pagination -->
    					<div class="swiper-pagination swiper-pagination-paquetes"></div>
				  	</div>
				</div>
			</div>
		</div>
		<div class="contenido" style="margin-top: 50px;">
			<div class="fila">
				<div class="column-12 column-m-6">
					
				</div>
				<div class="column-12 column-m-6">
					
				</div>
			</div>
		</div>
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<div class="tab-estilo2">
						<button class="tablinks2" onclick="openTab2(event, 'Incluido')" id="defaultOpen2">Incluido</button>
  						<button class="tablinks2" onclick="openTab2(event, 'Extras')">Extras</button>
					</div>
					<div id="Incluido" class="tabcontent-estilo2">
					  	<div class="incluye">
							<p style="margin: 20px 0; font-size: 20px; font-weight: 500;">Servidor compartido con costo de <strong>$490 MXN</strong> anual</p>
							<ul>
								<li>Dominio Gratuito</li>
								<li>8GB de espacio en disco solido (SSD)</li>
								<li>Certificado SSL básico</li>
								<li>100 cuentas de correos electrónicos empresariales</li>
								<li>Soporte técnico asistido por correo electrónico</li>
							</ul>
						</div>
					</div>
					<div id="Extras" class="tabcontent-estilo2">
					  	<div style="text-align: left;">
							<p style="margin: 20px 0; font-size: 20px; font-weight: 500; text-align: center;">Complementa tu sitio con elementos adicionales</p>
						</div>
						<div style="overflow-x: auto;">
							<table class="table" style="text-align: center;">
								<thead>
								<tr>
									<th style="font-size: 18px; font-weight: 600; text-align: center;" colspan="2">Páginas, secciones o subsecciones</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>6 a 9</td>
									<td>$500 c/u</td>
								</tr>
								<tr>
									<td>10 a 49</td>
									<td>$450 c/u</td>
								</tr>
								<tr>
									<td>50 a 99</td>
									<td>$400 c/u</td>
								</tr>
								<tr>
									<td>100+</td>
									<td>$350 c/u</td>
								</tr>
								</tbody>
							</table>
						</div> 
						<div style="overflow-x: auto; margin-top: 15px;">
							<table style="text-align: center;">
								<thead style="border-bottom: 1px solid #dee2e6;">
								<tr>
									<th style="font-size: 18px; font-weight: 600; text-align: center;" colspan="2">Hospedaje</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Servicio Compartido</td>
									<td>VPS, dedicado o nube</td>
								</tr>
								<tr>
									<td>16GB SSD</td>
									<td>10 a 30 GB SSD</td>
								</tr>	
								<tr>
									<td>Dominio Gratuito</td>
									<td>Dominio Gratuito</td>
								</tr>
								<tr>
									<td>Certificado SSL</td>
									<td>Certificado SSL</td>
								</tr>
								<tr>
									<td>Cuentas de correo electrónico Ilimitadas</td>
									<td>Correo electrónico empresarial</td>
								</tr>
								<tr>
									<td>Soporte por chat o WhatsApp</td>
									<td>Soporte por chat o WhatsApp</td>
								</tr>
									
								<tr style="border-top: 1px solid #dee2e6;">
									<td style="font-size: 25px; font-weight: 600;">$790 anual</td>
									<td style="font-size: 25px; font-weight: 600;"><span style="font-size: 16px; font-weight: 300;">Desde</span><br>$1,990 anual</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="s-plan seccion-general">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<div class="s-plan__head">
						<h3 class="molecula-titulo-general color-secundario s-plan__titulo">Metodología de Desarrollo</h3>
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="column-12">
					<!-- Tab links -->
					<div class="tab-estilo1">
						<button class="tablinks1" onclick="openTab1(event, 'tabuno')" id="defaultOpen">1</button>
  						<button class="tablinks1" onclick="openTab1(event, 'tabdos')">2</button>
  						<button class="tablinks1" onclick="openTab1(event, 'tabtres')">3</button>
  						<button class="tablinks1" onclick="openTab1(event, 'tabcuatro')">4</button>
					</div>
					<hr class="linea-horizontal">

					<!-- Tab content -->
					<div id="tabuno" class="tabcontent-estilo1">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/descubrir_1.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">1.- Descubrir</h3>
					    		<p class="slider__descripcion color-secundarioA">En una o más sesiones junto con el cliente, platicamos del proyecto y de nuestro objetivo, buscamos ejemplos y los elementos y herramientas a implementar, establecemos un plan de trabajo.</p>
					    		<p>Las tareas a realizar son:</p>
					    		<ul class="slider__ul">
						    		<li class="slider__li">Videollamadas con el cliente</li>
						    		<li class="slider__li">Análisis de usuario</li>
						    		<li class="slider__li">Benchmark de la competencia</li>
						    		<li class="slider__li">Levantamiento de requerimientos</li>
						    		<li class="slider__li">Documento Gantt del proyecto</li>
						    	</ul>
					    	</div>
					    </div>
					</div>

					<div id="tabdos" class="tabcontent-estilo1">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/diseñar_1.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">2.- Diseñar</h3>
					    		<p class="slider__descripcion color-secundarioA">Con la información recaudada, trabajamos en el bocetaje y en el diseño y compartimos con el cliente un enlace de visualización.</p>
					    		<p>Las tareas a realizar son:</p>
					    		<ul class="slider__ul">
						    		<li class="slider__li">Casos de uso</li>
						    		<li class="slider__li">Bocetaje</li>
						    		<li class="slider__li">Diseño</li>
						    		<li class="slider__li">Revisiones</li>
						    	</ul>
					    	</div>
					    </div>
					</div>

					<div id="tabtres" class="tabcontent-estilo1">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/desarrollar_1.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">3.- Desarrollar</h3>
					    		<p class="slider__descripcion color-secundarioA">Una vez autorizado el diseño de nuestro sitio, creamos el ambiente de desarrollo (hospedaje, dominio, bases de datos) adecuado para nuestro proyecto y comenzamos a programar.</p>
						    	<p>Las tareas a realizar son:</p>
					    		<ul class="slider__ul">
						    		<li class="slider__li">Ambiente de desarrollo</li>
						    		<li class="slider__li">Programación</li>
						    		<li class="slider__li">Integraciones</li>
						    		<li class="slider__li">Revisiones</li>
						    		<li class="slider__li">Pruebas de uso</li>
						    		<li class="slider__li">Control de calidad</li>
						    	</ul>
					    	</div>
					    </div>
					</div>

					<div id="tabcuatro" class="tabcontent-estilo1">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/entrega_1.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">4.- Entrega</h3>
					    		<p class="slider__descripcion color-secundarioA">Nuestro sitio ha sido completado y está listo para su lanzamiento. Nos aseguramos de que todo funcione como está planeado y entregamos los archivos al cliente.</p>
						    	<p>Las tareas a realizar son:</p>
					    		<ul class="slider__ul">
						    		<li class="slider__li">Lanzamiento</li>
						    		<li class="slider__li">Control de calidad</li>
						    		<li class="slider__li">Indexación de Google</li>
						    		<li class="slider__li">Entrega de archivos</li>
						    	</ul>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonios seccion-general">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<div class="testimonios__head">
						<h3 class="molecula-titulo-general color-secundario testimonios__titulo">Nuestro Trabajo</h3>
					</div>
				</div>
			</div>
			<div class="fila" style="align-items: center;">
				<div class="column-4 column-m-4">
					<a href="https://conexionvital.com.mx/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/conexion-vital.png"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://sgmass.com/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/sgmass-logo.png"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://klpvc.com.mx/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-klpvc.jpg"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://pbcautomotive.com/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-pbcautomotive.svg"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://fuentesarquitectonicas.com/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-fuentes-arquitectonicas.svg"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://perfectgift.mx/" target="_blank"><img style="background-color: #222; padding: 10px;" class="imagen imagen-centrada testimonios__body--imagen" src="images/perfect-gift.png"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://portafoliodenegocios.com.mx/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/pdn-logo.png"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://www.txtint.com/" target="_blank"><img class="imagen imagen-centrada testimonios__body--imagen" src="images/tx-tint-logo.png"></a>
				</div>
				<div class="column-4 column-m-4">
					<a href="https://ajbabogados.com/" target="_blank"><img style="background-color: #222; padding: 10px;" class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-light.png"></a>
				</div>
			</div>
		</div>
	</section>
	<section class="s-footer seccion-general" style="background-color: #f3f7f9;">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<img class="imagen s-footer__imagen" src="https://itedup.com/wp-content/uploads/itedup-it.svg">
					<p class="s-footer__copy">2021 - <a class="s-footer__copy--link" href="https://itedup.com/legal/" target="_blank">Aviso Legal</a></p>
				</div>
			</div>
		</div>
	</section>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!--Swiper js-->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container1', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination-paquetes',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      }
    });
  </script>
  <script>
  	$('#indicador li a').on('click', function(){
    $('li a.activo').removeClass('activo');
    $(this).addClass('activo');
});
  </script>
  <script>
		function openTab1(evt, TabName) {
		  // Declare all variables
		  var i, tabcontent, tablinks;

		  // Get all elements with class="tabcontent" and hide them
		  tabcontent = document.getElementsByClassName("tabcontent-estilo1");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  // Get all elements with class="tablinks" and remove the class "active"
		  tablinks = document.getElementsByClassName("tablinks1");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }

		  // Show the current tab, and add an "active" class to the button that opened the tab
		  document.getElementById(TabName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>
	<script>
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>

	<script>
	function openTab2(evt, TabName2) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent-estilo2");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks2");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(TabName2).style.display = "block";
	  evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen2").click();
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript">
      $(window).load(function() {
          $(".loaderIT").fadeOut(2000);//aquí se puede jugar con el numero 2000, se puede cambiar por 'slow' para una animación diferente.
      });
    </script>
</body>
</html>