<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?<?php echo time(); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://itedup.com/wp-content/uploads/2018/11/itedup-it.png" />

	<!-- SEO página Home -->
	<title>ITedup | Logotipo Profesional</title>
	<meta name="description" content="Deja el diseño de tu logo en manos de los profesionales." /><!-- descripción de la página-->
	<meta name="keywords" content="logotipo profesional, logo profesional, logo, logotipo, diseño logo, diseño logotipo, diseño de logo, diseño de logotipo, diseño marca, diseño de marca, diseño gráfico" /><!-- palabras clave, separar cada keyword con una coma(,).-->
	<meta name="author" content="ITedup" />

	<!-- Imagen destacada -->
	<meta property="og:image" content="https://servicios.itedup.com.mx/imagen/logotipos-profesionales/images/logotipos-profesionales.jpg"><!-- dentro de content escribir la ruta donde se encuentra la imagen destacada. -->
	<meta property="og:image:type" content="image/jpg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">

	<!-- Analiticos -->

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
	</style>
</head>
<body>
	<section class="headerPage background-image-parallax" style="background-image: url(images/fondo-clear.jpg);">
		<div class="contenido-amplio">
			<div class="fila">
				<div class="column-12 column-m-12" style="padding-right: 0; padding-left: 0;">
					<div class="headerPage__contenido">
						<img class="imagen imagen-centrada headerPage__contenido--logo" src="https://itedup.com/wp-content/uploads/itedup-logo-animated.gif">
						<img class="imagen imagen-centrada headerPage__contenido--imagen" src="images/logotipos-profesionales-home.svg">
						<h1 class="molecula-titulo-principal color-secundario headerPage__contenido--titulo">Logotipos Profesionales</h1>
						<h2 class="molecula-subtitulo color-secundarioA headerPage__contenido--subtitulo">Deja el diseño de tu logo en manos de los profesionales</h2>
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
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Express</h3>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$500 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>1 Propuesta</li>
								      		<li>2 Revisiones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Básico</h3>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$1,000 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>3 Propuestas</li>
	      									<li>6 Revisiones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Básico." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Básico." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Avanzado</h3>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$1,500 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>5 Propuestas</li>
					      					<li>10 Revisiones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Avanzado." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Avanzado." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Premium</h3>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$3,000 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>Estudio de Marca</li>
					      					<li>3 Propuestas</li>
					      					<li>6 Revisiones</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Premium." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Premium." target="_blank">CONTRATAR</a>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario">Enterprise</h3>
										<h4 class="s-paquetes__tarjeta-header--precio color-secundario">$8,000 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4>
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<ul class="s-paquetes__tarjeta-lista">
											<li>Estudio de Marca</li>
					      					<li>5 Propuestas</li>
					      					<li>15 Revisiones</li>
					      					<li>Brandbook Básico</li>
										</ul>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Enterprise." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Enterprise." target="_blank">CONTRATAR</a>
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
	</section>
	<section class="s-plan seccion-general">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<div class="s-plan__head">
						<h3 class="molecula-titulo-general color-secundario s-plan__titulo">Proceso de Trabajo</h3>
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="column-12">
					<!-- Tab links -->
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'tabuno')" id="defaultOpen">1</button>
  						<button class="tablinks" onclick="openCity(event, 'tabdos')">2</button>
  						<button class="tablinks" onclick="openCity(event, 'tabtres')">3</button>
					</div>
					<hr class="linea-horizontal">

					<!-- Tab content -->
					<div id="tabuno" class="tabcontent">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/inspiracion.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">1.- Inspiración</h3>
					    		<p class="slider__descripcion color-secundarioA">En una sesión junto con el cliente, platicamos del proyecto y buscamos ejemplos para las propuestas. Investigamos a la competencia, selección de colores y tipografías y posibles isotipos.</p>
					    		<p class="slider__descripcion color-secundarioA">Con la información recaudada, procedemos a crear las propuestas. Dependiendo de su complejidad, una propuesta puede tomar en completar de 2 a 4 horas.</p>
					    	</div>
					    </div>
					</div>

					<div id="tabdos" class="tabcontent">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/revisiones.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">2.- Revisiones</h3>
					    		<p class="slider__descripcion color-secundarioA">Mostramos la propuesta y comenzamos un ciclo de revisiones, en donde analizamos la propuesta y platicamos de los detalles para mejorarlo.</p>
					    		<p class="slider__descripcion color-secundarioA">Dependiendo de la complejidad, un ciclo de revisiones puede tomar hasta 2 horas para mejorar la propuesta.</p>
					    	</div>
					    </div>
					</div>

					<div id="tabtres" class="tabcontent">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/entrega.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario">3.- Entrega</h3>
					    		<p class="slider__descripcion color-secundarioA">Cuando obtenemos la autorización y completa satisfacción del cliente, en un archivo comprimido, entregamos el logotipo en su archivo original y editable en todos los formatos y con todos sus elementos.</p>
						    	<ul class="slider__ul">
						    		<li class="slider__li">Formatos</li>
						    		<ul>
						    			<li class="slider__li2">Editables (.ai, .psd)</li>
						    			<li class="slider__li2">Presentación (.pdf)</li>
						    			<li class="slider__li2">Para uso (.png, .svg, .eps, .jpg)</li>
						    		</ul>
						    		<li class="slider__li">Tipografías implementadas</li>
						    		<li class="slider__li">Colores implementados</li>
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
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/tx-tint-logo.png">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/sgmass-logo.png">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/l angolo color.png">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-klpvc.jpg">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-diebe.svg">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-east-coast-alt.svg">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/bce 1.png">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-mobiliere.svg">
				</div>
				<div class="column-4 column-m-4">
					<img class="imagen imagen-centrada testimonios__body--imagen" src="images/logo-pbcautomotive.svg">
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
          slidesPerView: 5,
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
		function openCity(evt, cityName) {
		  // Declare all variables
		  var i, tabcontent, tablinks;

		  // Get all elements with class="tabcontent" and hide them
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  // Get all elements with class="tablinks" and remove the class "active"
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }

		  // Show the current tab, and add an "active" class to the button that opened the tab
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}
	</script>
	<script>
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>