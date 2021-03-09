<?php
    include "configuracion.php"
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/main.css?<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/estilos.css?<?php echo time(); ?>">

	<!-- Favicon -->
	<link rel="shortcut icon" href="https://itedup.com/wp-content/uploads/2018/11/itedup-it.png" />

	<!-- SEO página Home -->
	<title><?php echo $lang['title-page'] ?></title>
	<meta name="description" content="Deja el diseño de tu logo en manos de los profesionales." /><!-- descripción de la página-->
	<meta name="keywords" content="logotipo profesional, logo profesional, logo, logotipo, diseño logo, diseño logotipo, diseño de logo, diseño de logotipo, diseño marca, diseño de marca, diseño gráfico" /><!-- palabras clave, separar cada keyword con una coma(,).-->
	<meta name="author" content="ITedup" />

	<!-- Imagen destacada -->
	<meta property="og:image" content="https://servicios.itedup.com.mx/imagen/logotipos-profesionales/images/logotipos-profesionales-destacada.jpg"><!-- dentro de content escribir la ruta donde se encuentra la imagen destacada. -->
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
.loaderIT 
{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 99999; 
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: auto;
}
.loaderIT__image{
	position: absolute;
	top: 80px;
}
.loaderIT__image img{
	width: 100px;
	height: auto;
}
.loaderIT__texto{
	text-align: center;
	position: absolute;
	bottom: 120px;
}
.loaderIT__iconos{
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	position: absolute;
	bottom: 80px;
}
.loaderIT__iconos a{
	padding-right: 20px;
}
.loaderIT__iconos i{
	width: 32px;
	height: 32px;
	color: #ee3344;
	border: 1px solid #ee3344;
	border-radius: 100px;
	line-height: 32px;
	text-align: center;
}
</style>

</head>
<body>
	<div class="loaderIT">
		<div class="loaderIT__image">
			<img src="https://itedup.com/wp-content/uploads/2018/11/itedup-it.png" alt="Loading itedup">
		</div>
		<div class="loaderIT__texto">
			<p><?php echo $lang['title-loading'] ?></p>
		</div>
		<div class="loaderIT__iconos">
			<a href=""><i class="fab fa-facebook-f"></i></a>
			<a href=""><i class="fab fa-instagram"></i></a>
			<a href=""><i class="fab fa-linkedin-in"></i></a>
			<a href=""><i class="fab fa-youtube"></i></a>
			<a href=""><i class="fab fa-twitter"></i></a>
		</div>
	</div>
	<section class="headerPage background-image-parallax" style="background-image: url(images/fondo-clear.jpg);">
		<div class="contenido-amplio">
			<div class="fila">
				<div class="column-12 column-m-12" style="padding-right: 0; padding-left: 0;">
					<div class="headerPage__contenido">
						<img class="imagen imagen-centrada headerPage__contenido--logo" src="https://itedup.com/wp-content/uploads/itedup-logo-animated.gif">
						<img class="imagen imagen-centrada headerPage__contenido--imagen" src="images/imgen-corporativa-c.svg">
						<h1 class="molecula-titulo-principal color-secundario headerPage__contenido--titulo"><?php echo $lang['titulo-primera-seccion'] ?></h1>
						<h2 class="molecula-subtitulo color-secundarioA headerPage__contenido--subtitulo"><?php echo $lang['subtitulo-primera-seccion'] ?></h2>
						<a class="boton background-primario color-blanco headerPage__contenido--boton" href="#paquetes"><?php echo $lang['boton-paquetes-primera-seccion'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="paquetes" class="s-paquetes seccion-general" style="background-color: #f3f7f9;">
		<div class="contenido">
			<div class="fila">
				<div class="column-12">
					<h3 class="molecula-titulo-general color-secundario s-paquetes__titulo"><?php echo $lang['titulo-segunda-seccion'] ?></h3>
					<h4 class="molecula-subtitulos color-secundarioA s-paquetes__subtitulo"><?php echo $lang['subtitulo-segunda-seccion'] ?></h4>
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
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario"><?php echo $lang['titulo-tarjeta-primera'] ?></h3>
										<!--h4 class="s-paquetes__tarjeta-header--precio color-secundario">$500 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4-->
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta1-cuerpo-titulo1'] ?></h5>
											<h6><?php echo $lang['tarjeta1-cuerpo-descripcion1'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta1-cuerpo-titulo2'] ?></h5>
											<h6><?php echo $lang['tarjeta1-cuerpo-descripcion2'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta1-cuerpo-titulo3'] ?></h5>
											<h6><?php echo $lang['tarjeta1-cuerpo-descripcion2'] ?>x1000, 4x4, laminadas</h6>
										</div>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<!--a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a-->
										<h3><?php echo $lang['tarjeta1-footer-precio1'] ?></h3>
										<span><?php echo $lang['tarjeta1-footer-descuento1'] ?></span>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario"><?php echo $lang['titulo-tarjeta-segunda'] ?></h3>
										<!--h4 class="s-paquetes__tarjeta-header--precio color-secundario">$500 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4-->
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo1'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion1'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo2'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion2'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo3'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion3'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo4'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion4'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo5'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion5'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta2-cuerpo-titulo6'] ?></h5>
											<h6><?php echo $lang['tarjeta2-cuerpo-descripcion6'] ?></h6>
										</div>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<!--a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a-->
										<h3><?php echo $lang['tarjeta2-footer-precio2'] ?></h3>
										<span><?php echo $lang['tarjeta2-footer-descuento2'] ?></span>
									</div>
								</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="tarjeta s-paquetes__tarjeta">
									<div class="tarjeta-header s-paquetes__tarjeta-header">
										<h3 class="s-paquetes__tarjeta-header--nombre color-primario"><?php echo $lang['titulo-tarjeta-tercera'] ?></h3>
										<!--h4 class="s-paquetes__tarjeta-header--precio color-secundario">$500 <span class="s-paquetes__tarjeta-header--moneda">MXN</span> </h4-->
									</div>
									<div class="tarjeta-body s-paquetes__tarjeta-body">
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo1'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion1'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo2'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion2'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo3'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion3'] ?>10 Slides</h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo4'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion4'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo5'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion5'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo6'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion6'] ?></h6>
										</div>
										<div class="s-paquetes__tarjeta-body--item">
											<h5><?php echo $lang['tarjeta3-cuerpo-titulo7'] ?></h5>
											<h6><?php echo $lang['tarjeta3-cuerpo-descripcion7'] ?></h6>
										</div>
									</div>
									<div class="tarjeta-footer s-paquetes__tarjeta-footer">
										<!--a class="boton background-primario color-blanco b-w-d" href="https://web.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a>
										<a class="boton background-primario color-blanco b-w-m" href="https://api.whatsapp.com/send?phone=5215572000685&text=Hola%E2%80%9A%20estoy%20interesado%20en%20el%20paquete%20Logotipo%20Express." target="_blank">CONTRATAR</a-->
										<h3><?php echo $lang['tarjeta3-footer-precio3'] ?></h3>
										<span><?php echo $lang['tarjeta3-footer-descuento3'] ?></span>
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
						<h3 class="molecula-titulo-general color-secundario s-plan__titulo"><?php echo $lang['titulo-tercera-seccion'] ?></h3>
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
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario"><?php echo $lang['titulo1-tab1-tercera-seccion'] ?></h3>
					    		<p class="slider__descripcion color-secundarioA"><?php echo $lang['descripcion1-tab1-tercera-seccion'] ?></p>
					    		<p class="slider__descripcion color-secundarioA"><?php echo $lang['descripcion2-tab1-tercera-seccion'] ?></p>
					    	</div>
					    </div>
					</div>

					<div id="tabdos" class="tabcontent">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/revisiones.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario"><?php echo $lang['titulo2-tab2-tercera-seccion'] ?></h3>
					    		<p class="slider__descripcion color-secundarioA"><?php echo $lang['descripcion1-tab2-tercera-seccion'] ?></p>
					    		<p class="slider__descripcion color-secundarioA"><?php echo $lang['descripcion2-tab2-tercera-seccion'] ?></p>
					    	</div>
					    </div>
					</div>

					<div id="tabtres" class="tabcontent">
  						<div class="fila" style="align-items: center;">
						    <div class="column-12 column-m-6">
						    	<img class="imagen imagen-centrada slider__imagen" src="images/entrega.svg"/>
						    </div>
					    	<div class="column-12 column-m-6">
					    		<h3 class="slider__titulo molecula-titulo-general color-secundario"><?php echo $lang['titulo3-tab3-tercera-seccion'] ?></h3>
					    		<p class="slider__descripcion color-secundarioA"><?php echo $lang['descripcion1-tab3-tercera-seccion'] ?></p>
						    	<ul class="slider__ul">
						    		<li class="slider__li"><?php echo $lang['lista1-tab3-tercera-seccion'] ?>Formatos</li>
						    		<ul>
						    			<li class="slider__li2"><?php echo $lang['lista1-1-tab3-tercera-seccion'] ?></li>
						    			<li class="slider__li2"><?php echo $lang['lista1-2-tab3-tercera-seccion'] ?></li>
						    			<li class="slider__li2"><?php echo $lang['lista1-3-tab3-tercera-seccion'] ?></li>
						    		</ul>
						    		<li class="slider__li"><?php echo $lang['lista2-tab3-tercera-seccion'] ?></li>
						    		<li class="slider__li"><?php echo $lang['lista3-tab3-tercera-seccion'] ?></li>
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
						<h3 class="molecula-titulo-general color-secundario testimonios__titulo"><?php echo $lang['titulo-cuarta-seccion'] ?></h3>
						<h4 class="molecula-subtitulos color-secundarioA testimonios__subtitulo"><?php echo $lang['subtitulo-cuarta-seccion'] ?></h4>
					</div>
				</div>
			</div>
			<div class="fila">
				<div class="column-12">
					<!-- Swiper -->
				  	<div class="swiper-container2">
					    <div class="swiper-wrapper">
					      	<div class="swiper-slide">
						      	<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/tx-tint-logo.png">
						      		<!--h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3-->
						      		<p class="testimonios-card__testimonio-texto"><?php echo $lang['descripcion1-testimonio'] ?></p>
						      		<h4 class="testimonios-card__nombre"><?php echo $lang['nombre1-testimonio'] ?>Mitchel Govea</h4>
						      		<h5 class="testimonios-card__puesto"><?php echo $lang['puesto1-testimonio'] ?>Fundador</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/sgmass-logo.png">
						      		<!--h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3-->
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Ivan Blanco</h4>
						      		<h5 class="testimonios-card__puesto">Director General</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/logo-diebe.svg">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/l angolo color.png">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/logo-pbcautomotive.svg">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/bce 1.png">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/logo-klpvc.jpg">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					      	<div class="swiper-slide">
					      		<div class="testimonios-card">
						      		<img class="imagen testimonios-card__imagen" src="images/logo-mobiliere.svg">
						      		<h3 class="testimonios-card__nombre-empresa">Nombre de la empresa</h3>
						      		<p class="testimonios-card__testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						      		<h4 class="testimonios-card__nombre">Nombre y Apellido</h4>
						      		<h5 class="testimonios-card__puesto">Titulo</h5>
						      	</div>
					      	</div>
					    </div>
					    <!-- Add Arrows -->
					    <div class="swiper-button-next testimonios__flecha-next"></div>
					    <div class="swiper-button-prev testimonios__flecha-prev"></div>
					    <!-- Add Pagination -->
    					<div class="swiper-pagination swiper-pagination-testimonios"></div>
				  	</div>
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
					<div style="margin-top:20px;">
						<a style="text-decoration: none; color: #555;" href="index2.php?lang=es"> <?php echo $lang['es'] ?> </a> | <a style="text-decoration: none; color: #555;" href="index2.php?lang=en"> <?php echo $lang['en'] ?></a>
					</div>
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
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      }
    });
  </script>
  <script>
    var swiper = new Swiper('.swiper-container2', {
      slidesPerView: 1,
      spaceBetween: 10,
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript">
      $(window).load(function() {
          $(".loaderIT").fadeOut(2000);//aquí se puede jugar con el numero 2000, se puede cambiar por 'slow' para una animación diferente.
      });
    </script>

</body>
</html>