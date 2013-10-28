<?php
include "_/inc/datos-globales.php";
?>
<!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Servicios <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>

</head>

<body class="articulo navAbierto subNavAbierto body-gris">

<div class="amictus">
	<div class="wrapper">
	<header>
		<div id="logoTop">
			<a href="./" title="Home">
			<div data-picture data-alt="Logotipo <?php echo $nombreMarca; ?>">
		        <div data-type="image/svg+xml" data-src="imgs/logo-JZMusic-disco.svg"></div>
		        <div data-src="imgs/logo-jzmusic-100.png"></div>
		        <div data-src="imgs/logo-jzmusic-disco-160.png" data-media="(min-width: 640px)"></div>
		        <noscript><img src="imgs/logo-jzmusic.png" alt="Logotipo <?php echo $nombreMarca; ?>"></noscript>
		    </div>
		    </a>
		</div>
		<div class="placeholderTitle"></div>
		<?php include "views/nav-principal.php"; ?>
	</header>
	<div class="corporis">
		<h1 class="titulo">SERVICIOS</h1>
		<h2 clas="subTitulo">Cubrimos una amplia gama de servicios</h2>
		<p>
			Fiestas, Presentaciones, Iglesia, Exposiciones, Coros, Congresos, Desfiles, Discurso, Festivales, Reuniones.
		</p>
		<div class="servicios">
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>GENERADORES &amp; FIESTA SEGURA</h3>
					<p class="servicio-desc">Contamos con equipos electrógenos insonoros trifásicos de diferentes capacidades para suministrar de energía a todos los servicios que trabajan normalmente en nuestros eventos.</p>
					<h4>Incluye:</h4º>
						<ul>
							<li>Petroleo</li>
							<li>Cable 40 mts</li>
							<li>Tablero eléctrico</li>
						</ul>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/generador-electrico-trifasico.jpg" width="200" height="120">
						<p>Equipos electrógenos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Los precios de arriendo son por día y pueden cambiar según la distancia y la cantidad de horas de trabajo.</p>

							<h4>Arriendo:</h4>

							<ul>
								<li>40 kva <span class="precio">$ 160.000</span></li>
								<li>80 kva <span class="precio">$ 200.000</span></li>
								<li>100 kva <span class="precio">$ 220.000</span></li>
								<li>150 kva <span class="precio">$ 260.000</span></li>
								<li>200 kva <span class="precio">$ 260.000</span></li>
								<li>250 kva <span class="precio">$ 300.000</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>CALEFACTORES</h3>
					<p class="servicio-desc">Disponemos de una amplia gama de turbocalefactores para temperar sus eventos.</p>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/calefactores-turbo-calefactor.jpg" width="200" height="120">
						<p>Turbo calefactores</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Con equipos de un gran aporte calórico que funcionan en base a gas envasado, con modernos y eficientes sistemas de seguridad y un muy bajo índice de ruido.</p>
							<p>Para el arriendo de los calefactores, recomendamos desarrollar un proyecto de calefacción personalizado para cada evento.</p>
							<h4>Arriendo:</h4>
							<p>35.000 k/cal: <span class="precio">$50.000 c/u</span></p>
							<p>El arriendo incluye un balón de gas de 15 Kg, que es el consumo aproximado de una noche.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>PANTALLAS &amp; VIDEO</h3>
					<p class="servicio-desc">Tenemos una gran variedad de equipos</p>
					<p class="servicio-cant">12 ITEMS</p>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-pantallas-lcd.jpg" width="200" height="120">
						<p>Pantallas LCD</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Contamos con pantallas LCD FULL HD de 32", 42", 55", 60", etc. para tu evento. Éstas incluyen soporte.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-proyectores.jpg" width="200" height="120">
						<p>Proyectores</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Contamos con diferentes tipos de proyectores para todo tipo de necesidades, desde los 2.500 Lúmenes ANSI hasta los 10.000 Lúmenes ANSI.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-telon-colgante.jpg" width="200" height="120">
						<p>Telón colgante</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Telones colgantes de:</p>
							<ul>
								<li>1.80 x 1.80 metros</li>
								<li>1.88 x 2.44 metros</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-telon-tripode.jpg" width="200" height="120">
						<p>Telón trípode</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Telones trípode de:</p>
							<ul>
								<li>2.00 x 2.00 metros</li>
								<li>2.43 x 2.43 metros</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-telon-mecano.jpg" width="200" height="120">
						<p>Telón mecano</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Telones mecano de:</p>
							<ul>
								<li>3.66 x 2.73 metros</li>
								<li>5.00 x 3.75 metros</li>
							</ul>
							<p>Desarrollamos proyectos de telones personalizados para <i lang="en">mapping</i> y <i lang="en">watchout.</i></p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-reproductor-dvd.jpg" width="200" height="120">
						<p>Reproductor DVD</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipos para reproducir DVD.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-reproductor-blu-ray.jpg" width="200" height="120">
						<p>Reproductor Blu-ray</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipos para reproducir Blue Ray.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-pc.jpg" width="200" height="120">
						<p>PC</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>PC de última generación para presentaciones, videos, imágenes corporativas, etc.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-splitter.jpg" width="200" height="120">
						<p>Splitter - Duplicador de imagen</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que permite duplicar la señal para reproducir la imágen en múltiples pantallas.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-scaler.jpg" width="200" height="120">
						<p>Scaler - Control de fuentes de video</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que permite poder conectar diferentes formatos de video, estandarizando la señal.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-matriz-video.jpg" width="200" height="120">
						<p>Matriz de Video - Manejo imagenes en vivo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Sistema que permite poder jugar con las distintas imágenes en las diferentes pantallas, para tener un control dinámico de la presentación.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multimedia-kit-instalacion-altura.jpg" width="200" height="120">
						<p>Kit instalación en altura</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Sistema para colgar los proyectores desde el techo o estructuras en altura.</p>
							<p>Incluye cables VGA o HDMI según sea la necesidad.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>SERVICIOS ADJUNTOS</h3>
					<p class="servicio-desc">Tenemos una gran variedad de equipos</p>
					<p class="servicio-cant">26 ITEMS</p>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-carpas.jpg" width="200" height="120">
						<p>Carpas</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Carpas Marfil</h3>
									<p>
										Contacto: Melvin Zwick <br>
										Tél.: 9 345 20 76<br>
										E-mail: <a href="mailto:melvin@carpasmarfil.cl">melvin@carpasmarfil.cl</a>
									</p>
								</li>
								<li>
									<h3>Carpas Nicolás</h3>
									<p>
										Contacto: Eliacer Alberto Gutierrez <br>
										Tél.: 9 773 60 88<br>
										E-mail: <a href="mailto:contacto@carpasnicolas.cl">contacto@carpasnicolas.cl</a>
									</p>
								</li>
								<li>
									<h3>Carpas R. Mena</h3>
									<p>
										Contacto: René Mena <br>
										Tél.: 5 781 54 59<br>
										E-mail: <a href="mailto:carpasrmena@gmail.com">carpasrmena@gmail.com</a>
									</p>
								</li>
								<li>
									<h3>Carpas Top Tent</h3>
									<p>
										Contacto: Diego Huidobro <br>
										Tél.: 9 658 41 78<br>
										E-mail: <a href="mailto:dhuidobro@toptent.cl">dhuidobro@toptent.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-arriendo-mobiliario.jpg" width="200" height="120">
						<p>Ambientaciones</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Ambients</h3>
									<p>
										Contacto: Felipe García Huidobro<br>
										Cel.: 8 889 18 75<br>
										E-mail: <a href="mailto:felipe@ambients.cl">felipe@ambients.cl</a><br>
										Web: <a href="http://www.ambients.cl" target="_blank">www.ambients.cl</a>
									</p>
								</li>
								<li>
									<h3>Fantuzzi & Grisanti</h3>
									<p>
										Contacto: Constanza Fantuzzi<br>
										Cel.: 7 333 00 09<br>
										E-mail: <a href="mailto:coni@fantuzzigrisanti.com">coni@fantuzzigrisanti.com</a><br>
										Web: <a href="http://www.fantuzzigrisanti.com" target="_blank">www.fantuzzigrisanti.com</a>
									</p>
								</li>
								<li>
									<h3>De Company</h3>
									<p>
										Contacto: Marcelo Jarpa<br>
										Cel.: 9 337 88 79<br>
										E-mail: <a href="mailto:mjarpa@decompany.cl">mjarpa@decompany.cl</a><br>
										Web: <a href="http://www.decompany.cl" target="_blank">www.decompany.cl</a>
									</p>
								</li>
								<li>
									<h3>Trilogía</h3>
									<p>
										Contacto: Patricio Zanca<br>
										Cel.: 9 920 27 82<br>
										E-mail: <a href="mailto:pzanca@3logia.cl">pzanca@3logia.cl</a><br>
										Web: <a href="http://www.3logia.cl" target="_blank">www.3logia.cl</a>
									</p>
								</li>
								<li>
									<h3>Steward (arriendos)</h3>
									<p>
										Tél.: 2756 60 81<br>
										E-mail: <a href="mailto:info@steward.cl">info@steward.cl</a><br>
										Web: <a href="http://www.steward.cl" target="_blank">www.steward.cl</a>
									</p>
								</li>
								<li>
									<h3>IREGUA (arriendos)</h3>
									<p>
										Tél.: 2229 71 33<br>
										Web: <a href="http://www.iregua.cl" target="_blank">www.iregua.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-banquetero.jpg" width="200" height="120">
						<p>Banquetería</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Martita Serani</h3>
									<p>
										Cel.: 9 579 37 67<br>
										E-mail: <a href="mailto:martita.serani.d@gmail.com">martita.serani.d@gmail.com</a><br>
										Web: <a href="http://www.martitaserani.cl" target="_blank">www.martitaserani.cl</a>
									</p>
								</li>
								<li>
									<h3>Magdalena Vial</h3>
									<p>
										Cel.: 9 837 73 74<br>
										E-mail: <a href="mailto:magdalena@maidavial.cl">magdalena@maidavial.cl</a><br>
										Web: <a href="http://www.maidavial.cl" target="_blank">www.maidavial.cl</a>
									</p>
								</li>
								<li>
									<h3>Surya</h3>
									<p>
										Contacto: Claudio Torrealba<br>
										Cel.: 9 324 77 45<br>
										E-mail: <a href="mailto:ctorrealbal@gmail.com">ctorrealbal@gmail.com</a><br>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-fotografia-profesional.jpg" width="200" height="120">
						<p>Fotografía Profesional</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Esteban Yañez</h3>
									<p>
										Fotógrafo y Camarógrafo <br>
										Tél.: 2284 46 41 <br>
										Cel: 9 871 44 40<br>
										E-mail: <a href="mailto:estebanyanez@mi.cl">estebanyanez@mi.cl</a>
									</p>
								</li>
								<li>
									<h3>Raimundo Lagos</h3>
									<p>
										Fotografía Profesional<br>
										Cel.: 9 335 31 29<br>
										E-mail: <a href="mailto:raymondlakes@gmail.com">raymondlakes@gmail.com</a><br>
										Web: <a href="http://www.raimundolagos.com" target="_blank">www.raimundolagos.com</a>
									</p>
								</li>
								<li>
									<h3>Cristabell Palma</h3>
									<p>
										Fotografía Profesional<br>
										Tél.: 2880 46 90<br>
										Cel.: 9 471 73 52<br>
										E-mail: <a href="mailto:cristabellpalma@gmail.com">cristabellpalma@gmail.com</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-fotografia-entretenida.jpg" width="200" height="120">
						<p>Fotografía Entretenida</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Egobox</h3>
									<p>
										Contacto: Christian McManus
										Cel.: 7 777 17 66<br>
										E-mail: <a href="mailto:contacto@egobox.cl">contacto@egobox.cl</a>
										Web: <a href="http://www.egobox.cl" target="_blank">www.egobox.cl</a>
									</p>
								</li>
								<li>
									<h3>Instant Photo</h3>
									<p>
										Contacto: Susana Díaz
										Cel.: 8 501 18 72 <br>
										E-mail: <a href="mailto:susana.diaz@instantphoto.cl ">susana.diaz@instantphoto.cl</a>
										Web: <a href="http://www.instantphoto.cl" target="_blank">www.instantphoto.cl</a>
									</p>
								</li>
								<li>
									<h3>Weddi</h3>
									<p>
										Contacto: María José Campamá
										Cel.: 7 532 25 95<br>
										E-mail: <a href="mailto:mariajose@weddi.cl">mariajose@weddi.cl</a>
										Web: <a href="http://www.weddi.cl" target="_blank">www.weddi.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-bebidas-domicilio.jpg" width="200" height="120">
						<p>Bebidas a domicilio</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Coca-Cola Directo</h3>
									<p>
										Web: <a href="http://www.cocacoladirecto.cl" target="_blank">www.cocacoladirecto.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-video.jpg" width="200" height="120">
						<p>Video</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>CH Studios</h3>
									<p>
										César Chacana - Cel.: 7 608 26 06<br>
										María José Puyol - Cel.: 7 808 67 79<br>
										E-mail: <a href="mailto:contacto@chstudio.cl">contacto@chstudio.cl</a><br>
										Web: <a href="http://www.chstudio.cl" target="_blank">www.chstudio.cl</a>
									</p>
								</li>
								<li>
									<h3>Esteban Yañez</h3>
									<p>
										Camarógrafo Profesional<br>
										Tél.: 2284 46 41<br>
										Cel.: 9 871 44 40<br>
										E-mail: <a href="mailto:estebanyanes@mi.cl">estebanyanes@mi.cl</a>
									</p>
								</li>
								<li>
									<h3>Panaitescu Comunicaciones</h3>
									<p>
										Contacto: Alexandru Pnaitescu A.<br>
										Tél.: 2283 12 77<br>
										Cel.: 8 229 45 10<br>
										E-mail: <a href="mailto:alex@panaitescucomunicaciones.cl">alex@panaitescucomunicaciones.cl</a><br>
										Web: <a href="http://www.panaitescucomunicaciones.cl" target="_blank">www.panaitescucomunicaciones.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-belleza.jpg" width="200" height="120">
						<p>Belleza</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Peluquero y Estilista</h3>
									<p>
										Luciano Dorero<br>
										Cel.: 8 385 39 91<br>
										E-mail: <a href="mailto:lucianofunp@hotmail.com">lucianofunp@hotmail.com</a>
									</p>
								</li>
								<li>
									<h3>Cosmetología y Maquillaje</h3>
									<p>
										María Cecilia Richter<br>
										Tél.: 2214 26 01 <br>
										Cel.: 9 224 68 88<br>
										E-mail: <a href="mailto:mcrichter@terra.cl">mcrichter@terra.cl</a>
									</p>
								</li>
								<li>
									<h3>Make Up Artist</h3>
									<p>
										Karla Balin Fürst<br>
										Cel.: 8 294 55 19<br>
										E-mail: <a href="mailto:makeupbykarla@live.cl">makeupbykarla@live.cl</a><br>
										Web: <a href="http://makeupbykarlabalin.blogspot.com" target="_blank">makeupbykarlabalin.blogspot.com</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-guardias.jpg" width="200" height="120">
						<p>Guardias</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Guardias AC</h3>
									<p>
										Contacto: Álvaro Contreras<br>
										Cel.: 8 259 52 05
										E-mail: <a href="mailto:hinricksen1974@yahoo.es">hinricksen1974@yahoo.es</a><br>
									</p>
								</li>
								<li>
									<h3>Guardias WL</h3>
									<p>
										Contacto: Walter López<br>
										Cel.: 8 479 69 87
										E-mail: <a href="mailto:sup.walterlopez@hotmail.com">sup.walterlopez@hotmail.com</a><br>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-decoracion-globos.jpg" width="200" height="120">
						<p>Decoración con Globos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Action Balloons</h3>
									<p>
										Tél.: 2212 41 33 - 2223 03 29<br>
										Web: <a href="http://www.actionballoons.cl" target="_blank">www.actionballoons.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-cotillon.jpg" width="200" height="120">
						<p>Cotillón</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Cotillón Express</h3>
									<p>
										Tél.: 2208 00 78<br>
										Américo Vespucio Norte #1165, Vitacura<br>
										E-mail: <a href="mailto:ventas@cotillonexpress.cl">ventas@cotillonexpress.cl</a><br>
										Web: <a href="http://www.cotillonexpress.cl" target="_blank">www.cotillonexpress.cl</a>
									</p>
								</li>
								<li>
									<h3>Cotillón Personalizado - Temático</h3>
									<p>
										Contacto: Cecilia Edwards<br>
										Cel.: 9 136 82 62 - 9 822 03 33<br>
										E-mail: <a href="mailto:contacto@disfracesycotillon.cl">contacto@disfracesycotillon.cl</a><br>
										Web: <a href="http://www.disfracesycotillon.cl" target="_blank">www.disfracesycotillon.cl</a><br>
										SÓLO SE VENDE CON ENTREVISTA PREVIA
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-carrito-helado.jpg" width="200" height="120">
						<p>Carrito de Helados</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Emporio la Rosa</h3>
									<p>
										Bernardita de la Cruz<br>
										Tél.: 2777 73 93<br>
										Cel.: 6 246 36 07<br>
										E-mail: <a href="mailto:bernarditadelacruz@emporiolarosa.cl">bernarditadelacruz@emporiolarosa.cl</a>
									</p>
								</li>
								<li>
									<h3>Jaime Ruiz Quintana</h3>
									<p>
										Tél.: 2225 11 85<br>
										Cel.: 9 509 87 41<br>
										E-mail: <a href="mailto:info@jaimeruiz.cl">info@jaimeruiz.cl</a><br>
										Web: <a href="http://www.jaimeruiz.cl" target="_blank">www.jaimeruiz.cl</a>
									</p>
								</li>
								<li>
									<h3>Bravissimo</h3>
									<p>
										Tél.: 248 38 28<br>
										E-mail: <a href="mailto:eventos@bravissimo.cl">eventos@bravissimo.cl</a><br>
										Web: <a href="http://www.bravissimo.cl/eventos/eventos.htm" target="_blank">www.bravissimo.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-otros-carritos.jpg" width="200" height="120">
						<p>Otros Carritos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Carritos Dulces</h3>
									<p>
										Jorge Carvallo J.<br>
										Algodones, Cabritas, Granizados, etc<br>
										Cel.: 7 777 88 38<br>
										Web: <a href="http://www.eventosjac.cl" target="_blank">www.eventosjac.cl</a>
									</p>
								</li>
								<li>
									<h3>Carrito de Comida</h3>
									<p>
										Manuel José Ovalle Besa<br>
										Hamburguesas y Churrascos<br>
										Tél.: 2208 61 14<br>
										Cel.: 8 259 63 45<br>
										E-mail: <a href="mailto:mjovalle@gmail.com">mjovalle@gmail.com</a>
									</p>
								</li>
								<li>
									<h3>Carrito de Comida</h3>
									<p>
										Chily Willys<br>
										Daniel Spoerer - Cel.: 8 139 93 84<br>
										Andrés Dougnac -  Cel.: 9 359 99 69<br>
										E-mail: <a href="mailto:chiliwillys2010@gmail.com">chiliwillys2010@gmail.com</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-tortas.jpg" width="200" height="120">
						<p>Tortas</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Tortas de Cuchuflies</h3>
									<p>
										Patricia Muñoz<br>
										Cel.: 8 139 85 22<br>
										Reparto a domicilio
									</p>
								</li>
								<li>
									<h3>Tortas la Florentina</h3>
									<p>
										Andrea Pairoa<br>
										Cel.: 9 547 18 65<br>
										Web: <a href="http://tortaslaflorentina.blogspot.com" target="_blank">tortaslaflorentina.blogspot.com</a><br>
										Facebook: Tortas la Florentina
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-cocktail-domicilio.jpg" width="200" height="120">
						<p>Cocktail a domicilio</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Cocktail a Domicilio</h3>
									<p>
										Dulces, empanadas y tapados a domicilio.<br>
										Tél.: 2552 55 74
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-baile-entretenido.jpg" width="200" height="120">
						<p>Animación, Shows en Vivo y Dobles</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Dobles Chilenos</h3>
									<p>
										Contacto: Marcelo Segovia<br>
										Cel.: 9 332 87 70<br>
										E-mail: <a href="mailto:produccion@dobleschilenos.cl">produccion@dobleschilenos.cl</a><br>
										Web: <a href="http://www.dobleschilenos.cl" target="_blank">www.dobleschilenos.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-mago.jpg" width="200" height="120">
						<p>Magos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Julián Varas</h3>
									<p>
										Tél.: 2570 95 84<br>
										E-mail: <a href="mailto:contacto@julianvaras.com">contacto@julianvaras.com</a><br>
										Web: <a href="http://www.julianvaras.com" target="_blank">www.julianvaras.com</a>
									</p>
								</li>
								<li>
									<h3>Mago Thiago</h3>
									<p>
										Cel.: 9 333 56 79
									</p>
								</li>
								<li>
									<h3>Carlos Arce</h3>
									<p>
										Mago Profesional<br>
										Cel.: 9 825 67 54<br>
										Web: <a href="http://www.magoarce.com" target="_blank">www.magoarce.com</a><br>
										Director
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-joyeria-fina.jpg" width="200" height="120">
						<p>Joyería Fina</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Luis Quezada M.</h3>
									<p>
										Tél.: 2622 09 33 - 2880 65 45<br>
										E-mail: <a href="mailto:lqjoyeria@vtr.net">lqjoyeria@vtr.net</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-flores.jpg" width="200" height="120">
						<p>Flores</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Claudia Kauak</h3>
									<p>
										Tél.: 2242 16 00<br>
										Cel.: 9 233 23 73<br>
										E-mail: <a href="mailto:flores@claudiakauak.cl">flores@claudiakauak.cl</a><br>
										Web: <a href="http://www.claudiakauak.cl" target="_blank">www.claudiakauak.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-musica-vivo.jpg" width="200" height="120">
						<p>Música en Vivo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Grupo Calle Vieja</h3>
									<p>
										Contacto: Francisco Mattar<br>
										Cel.: 9 822 00 02<br>
										E-mail: <a href="mailto:grupocallevieja@yahoo.com">grupocallevieja@yahoo.com</a><br>
										Web: <a href="http://www.callevieja.cl" target="_blank">www.callevieja.cl</a>
									</p>
								</li>
								<li>
									<h3>Cantante Cocktail & Comidas</h3>
									<p>
										Contacto: Nicole Bunout<br>
										Cel.: 9 475 71 712<br>
										E-mail: <a href="mailto:nicolebunout@gmail.com">nicolebunout@gmail.com</a><br>
										Web: <a href="http://www.myspace.com/nicolebunout" target="_blank">www.myspace.com/nicolebunout</a>
									</p>
								</li>
								<li>
									<h3>Cantante Jazz & Bossa Nova</h3>
									<p>
										Contacto: Francisca Santa María<br>
										Cel.: 7 870 64 03<br>
										E-mail: <a href="francisca_santamaria@yahoo.es">francisca_santamaria@yahoo.es</a><br>
										Web: <a href="www.myspace.com/franciscasantamaria" target="_blank">www.myspace.com/franciscasantamaria</a>
									</p>
								</li>
								<li>
									<h3>Banda Rufián Fuego y Las Balas de Plata</h3>
									<p>
										Contacto: Matías Radic<br>
										Cel.: 8 513 57 72<br>
										E-mail: <a href="matiasradic@gmail.com">matiasradic@gmail.com</a><br>
									</p>
								</li>
								<li>
									<h3>Banda Armando Jarana</h3>
									<p>
										Contacto: Francisco Vives<br>
										Cel.: 9 335 61 36<br>
										E-mail: <a href="franvivesa@gmail.com">franvivesa@gmail.com</a><br>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-coro-iglesia.jpg" width="200" height="120">
						<p>Coro Iglesia</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Coro Cantus Dei</h3>
									<p>
										Jacqueline De St. Aubin Ward<br>
										Tél.: 2321 55 47<br>
										Cel.: 9 824 02 54<br>
										E-mail: <a href="mailto:jdestaubin@gmail.com">jdestaubin@gmail.com</a><br>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/adjuntos-vinos.jpg" width="200" height="120">
						<p>Vinos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<ul>
								<li>
									<h3>Armonía Wines</h3>
									<p>
										Contacto: Nicolás Lisoni (Enólogo)<br>
										Cel.: 9 383 69 10<br>
										E-mail: <a href="mailto:nlisoni@armoniawines.cl">nlisoni@armoniawines.cl</a>
										Web: <a href="http://www.armoniawines.cl" target="_blank">www.armoniawines.cl</a>
									</p>
								</li>
								<li>
									<h3>Distribuidora El Cielo</h3>
									<p>
										Tél.: 2556 95 04 /  2551 14 18<br>
										E-mail: <a href="mailto:ventas@elcielo.cl">ventas@elcielo.cl</a>
										Web: <a href="http://www.elcielo.cl" target="_blank">www.elcielo.cl</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<p>*JZ MUSIC recomienda estas empreseas por reiteradas experiencias positivas, pero no se hace responsable por su desempeño profesional. Las fotos son referenciales.</p>
				</div>
			</div>
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>EFECTOS &amp; ILUMINACIÓN</h3>
					<p class="servicio-desc">Tenemos una gran variedad de equipos</p>
					<p class="servicio-cant">34 ITEMS</p>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-items">
					<div class="servicio-item" data-video="pq3jLGzyr_c">
						<img src="imgs/servicios/efecto-sha-50.jpg" width="200" height="120">
						<p>SHA 50</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Efecto compuesto de 8 colores que responden al ritmo de la música a través de giros en un eje produciendo finos haces de luces que forman círculos en la pista de baile y colorean el espacio de una manera muy dinámica y entretenida.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-sha-50-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="ZS6K5jeedS0">
						<img src="imgs/servicios/efecto-thunderbird.jpg" width="200" height="120">
						<p>Thunderbird</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Efecto Moon Flower full color que proyecta entre 25 y 100 rayos que rotan, barren horizontalmente y cambian de colores según el ritmo de la música. Gracias a su lámpara halógena de 100 watts es una excelente alternativa para llenar la pista de baile de colores</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-thunderbird-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="gEh6FtS_sE">
						<img src="imgs/servicios/efecto-spyro-250.jpg" width="200" height="120">
						<p>Spyro 250</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Robotizado con múltiples programas que responden a la música los que varían en figuras, velocidad de movimientos y color, para producir un entretenido ambiente que emula el interior de un tornado de color. Además posee una ampolleta de descarga, lo que permite que la óptica de la luz sea muy definida y superior a las de ampolletas convencionales, por lo que tiñe es espacio del color en que esta funcionando. Funciona también con DMX en protocolo 512.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-spyro-250-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="MG7Tj9QpohU">
						<img src="imgs/servicios/efecto-storm-bird.jpg" width="200" height="120">
						<p>Storm Bird</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Efecto Moon Flower full color con cambio de 18 gobos, proyecta entre 25 y 100 figuras que cambian, rotan y barren horizontalmente según el ritmo de la música. Esta luz es especial para espacios grandes y medianos y funciona perfecto como centro de pista. Utiliza una lámpara dicroica de 250 watts a 24volts por lo que es considerada como una luz muy llenadora.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-storm-bird-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="LcVYpt7q1Ls">
						<img src="imgs/servicios/efecto-scanner-slr-144-elc-250.jpg" width="200" height="120">
						<p>Scanner SLR 114 - ELC 250</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Scanner robotizado de cabezal móvil con múltiples programas que responden a la música con figuras, velocidad de movimientos y color, para producir entretenidos ambientes. Este equipo permite ser controlado manualmente o escenas prediseñadas bajo DMX 512 para lograr efectos específicos en el evento. Este aparato utiliza una ampolleta de descarga, lo que permite que la óptica de la luz sea muy definida y superior a las de ampolletas convencionales, por lo que los haces de luz realizan un juego compositivo en el espacio.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-scanner-slr-144-elc-250-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="UNzALH0tTAs">
						<img src="imgs/servicios/efecto-modjo-spin-master-iii.jpg" width="200" height="120">
						<p>Modjo Spin Master III</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Robotizado de Tercera Generación que responde al ritmo de la música con sus múltiples programas produciendo una coordinación total, entre la música y el ambiente. Gracias a su cabezal movil de barril de espejos proyectado con su poderosa ampolleta de descarga es capaz de activar escénicamente cualquier espacio. Protocolo DMX 512.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-modjo-spin-master-iii-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="cqsSQ5AB6Dc">
						<img src="imgs/servicios/efecto-cabezal-im5-575.jpg" width="200" height="120">
						<p>Cabezal IM5 575</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Cabezal robotizado con múltiples programas que responden a la música con figuras, color y velocidad de movimientos, para producir entretenidos ambientes escénicos 100% coordinados con la música. Este equipo permite ser controlado manualmente o escenas prediseñadas bajo DMX 512 para lograr efectos específicos en el evento. Este aparato utiliza una ampolleta de descarga de 575 watts, lo que permite que la óptica de la luz sea muy definida y superior a las de ampolletas convencionales, por lo que los haces de luz realizan un juego compositivo en el espacio.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-cabezal-im5-575-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="hn100xqgOZY">
						<img src="imgs/servicios/i-move-5s-efecto.jpg" width="200" height="120">
						<p>Cabezal I-MOVE 5S</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Cabezal robotizado con múltiples programas que responden a la música con figuras, color y velocidad de movimientos, para producir entretenidos ambientes escénicos 100% coordinados con la música. Este equipo permite ser controlado manualmente o escenas prediseñadas bajo DMX 512 para lograr efectos específicos en el evento. Este aparato utiliza una ampolleta de descarga de 250 watts, lo que permite que la óptica de la luz sea muy definida y superior a las de ampolletas convencionales, por lo que los haces de luz realizan un juego compositivo en el espacio.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/i-move-5s.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="jXD3xjEglOo">
						<img src="imgs/servicios/efecto-laser-ambiental-decorativo.jpg" width="200" height="120">
						<p>Laser Ambiental Decorativo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo laser de color rojo y verde, de 150mW de potencia.\nEste efecto es excelente para desarrollar motivos dinámicos en superficies planas sin decoración alguna, ya que genera miles de rayos en forma de túnel que rotan, se abren y cieran a ritmo de la música, produciendo secuencias temáticas combinando los colores y las formas prediseñadas en el equipo. Este equipo es linkeable y responde al protocolo DMX 512.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-laser-ambiental-decorativo-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="h9QeObjgLZs">
						<img src="imgs/servicios/efecto-laser-verde.jpg" width="200" height="120">
						<p>Equipo Laser Verde</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que proyecta un haz de luz verde de una potencia de 150 MW, respondiendo al ritmo de la música en una gran variedad de efectos producidos gracias a su sistema de scanner con micro sterming motors y microprocesador de alta velocidad. <br>¡NO ES PELIGROSO PARA LA SALUD!.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-laser-verde-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="OIvLrxRKSLU">
						<img src="imgs/servicios/efecto-laser-b-500-azul.jpg" width="200" height="120">
						<p>Laser B 500 Azul</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que proyecta un haz de luz azul de una potencia de 200 MW, respondiendo al ritmo de la música en una gran variedad de efectos producidos gracias a su sistema de scanner con micro sterming motors y microprocesador de alta velocidad. <br>¡NO ES PELIGROSO PARA LA SALUD!.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-laser-b-500-azul-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="83omlIMeEMA">
						<img src="imgs/servicios/efecto-laser-b-2000-multicolor.jpg" width="200" height="120">
						<p>Laser B 2000 Multi-color</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que proyecta varios haces de luces de colores verde, rojo y azul de diferentes potencias entre 150 MW y 200 MW, los cuales respondiendo al ritmo de la música generan una gran variedad de efectos y colores producidos gracias a su sistema de scanner con micro sterming motors y microprocesador de alta velocidad. ¡NO ES PELIGROSO PARA LA SALUD!.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-laser-b-2000-multicolor-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-ultravioleta.jpg" width="200" height="120">
						<p>Foco Ultravioleta</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Este foco U/V de 400 watts, también conocido como luz negra, es utilizado para destacar todos los elementos blancos y flourecentes que existan en sus cercanía. Funciona por radiación , por lo que es necesario que exista completa oscuridad y superficies blancas o fluorecentes para que se destaque.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-ultravioleta-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="mLrBvk5HUX0">
						<img src="imgs/servicios/efecto-golden-strobe.jpg" width="200" height="120">
						<p>Golden Strobe</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Efecto que emite destellos  de  250 a 2700 watts con una iterancia controlable que produce en el espectador la sensación de movimiento en cámara lenta. Nunca se utiliza por períodos prolongados ya que puede producir epilepcia.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-golden-strobe-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="GerdVp74NM8">
						<img src="imgs/servicios/efecto-maquina-humo-antari.jpg" width="200" height="120">
						<p>Máquina de Humo Antari</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Maquina de humo inalámbrica grande, ideal para lugares cerrados amplios. Tiene la ventaja de estar siempre activa y funcionar sin interrupciones. Posee un calefactor de 1000 watts , una salida de 20.000 pies cúbicos por minuto y un estanque de 2.5 litros que le permite funcionar perfectamente toda la noche.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-maquina-humo-antari-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="AbBVNuSqOuk">
						<img src="imgs/servicios/efecto-water-wave.jpg" width="200" height="120">
						<p>Water Wave</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Espectacular efecto de simulación de agua, equipado con dos discos de efectos para ir combinando los colores o fijar la tonalidad deseada entre rojos, verdes, azules y blancos. Gracias a su ampolleta de 250wtts es perfecto para ambientar túneles de acceso, sector de mesas y barrras.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-water-wave-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="I9O-zsURYUs">
						<img src="imgs/servicios/efecto-bubble-machine.jpg" width="200" height="120">
						<p>Bubble Machine</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Máquina capaz de generar gran cantidad de burbujas, como para llenar espacios de más de 200 m² en pocos minutos. Gracias a su tecnología de tubos de aire proyecta las burbujas desde el suelo hacia el cielo produciendo una permanencia de estas en el aire en mucho más prolongada que las maquinas que no disponen de esta tecnología.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-bubble-machine-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="boOCu9FboZs">
						<img src="imgs/servicios/efecto-snow-machine-dk-051.jpg" width="200" height="120">
						<p>Snow Machine DK-051</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Maquina de nieve ideal para lugar pequeños y medianos capaz de lanzar una gran cantidad de flujo a una distancia máxima de 6 metros. Viene con un controlador para dosificar su funcionamiento y caudal ya que su estanque de 1.5 litros no permite tenerla activa toda la noche.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-snow-machine-dk-051-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-canon-confeti.jpg" width="200" height="120">
						<p>Cañón de Confeti</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Cañón de aire comprimido capaz de disparar hasta 5 kilos de papel picado a 12 mts de altura a depender del ángulo de disparo y del nivel de carga de presión. Este dispositivo debe ser recargado de papel y presión cada vez que se desee disparar</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-canon-confeti-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>

					<div class="servicio-item" data-video="BFBRDwa6pG0">
						<img src="imgs/servicios/efecto-bola-disco.jpg" width="200" height="120">
						<p>Bola Disco</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Esfera de compuesta de pequeños espejos cuadrados que gira gracias a un motor en torno a su eje. Al ser iluminada con un foco proyecta pequeños haces de luces que iluminan la pista de baile de una manera estable pero entretenida. Su tamaño varía entre las 12”, 16”, 20” y 24”, y su cantidad e instalación dependerá de la altura y las características del cielo del recinto.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-bola-disco-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="BFBRDwa6pG0">
						<img src="imgs/servicios/efecto-mobile-color-250.jpg" width="200" height="120">
						<p>Mobile Color 250</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Efecto que permite concentrar un haz de luz muy denso para iluminar espejos murales, bolas disco, etc. Este foco posee más de 10 colores los que responden a un programa automático o bien a un controlador DMX. Esto permite cambiar completamente el color del ambiente al enfrentarlo a una bola disco, lo cual genera mayor dinamismo total de las bases de la ambientación.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-mobile-color-250-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="6z96W5cROzU">
						<img src="imgs/servicios/efecto-smart-gobo.jpg" width="200" height="120">
						<p>Smart Gobo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Sistema ambiental compuesto de 4 luces, 1 maestra y 3 esclavas, las cuales conectadas entre si son capaces de generar diferentes ambientes. Estas luces son robotizados que responden al ritmo de la música y se caracterizan por formar ambientes muy dinámicos y coloridos con sus más de 12 colores y 25 figuras.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-smart-gobo-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-foco-par-36-pin.jpg" width="200" height="120">
						<p>Foco Par 36 Pin</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco unidireccional especial para iluminar mesas en matrimonios y en comidas de etiqueta, además sirve para destacar elementos decorativos o puntos específicos en cualquier lugar del evento. Este se puede instalar en barras de aluminio o de manera cenital independiente.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-foco-par-36-pin-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-foco-par-64-aluminio.jpg" width="200" height="120">
						<p>Foco Par 64 Aluminio</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Tacho de aluminio con una lámpara de 1000 watts especial para iluminar salones, murallas y decoraciones maquillando estos con diferentes colores a depender del filtro que se utilice.<br>Colores:<br>El cliente deberá solicitar los colores de su preferencia, con anticipación.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-foco-par-64-aluminio-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item" data-video="_-Lx2sUQ_pQ">
						<img src="imgs/servicios/efecto-foco-par-64-led-pro-alto-brillo.jpg" width="200" height="120">
						<p>Foco Par 64 LED Pro Alto Brillo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Tacho de aluminio  compuesto por 36 LEDs de 1 Watt . Al igual que el Par 64 LED normal se utiliza para iluminar salones, murallas y decoraciones sin un consumo alto de energía y sin la generación de calor. Gracias a sus sietema RGB puede generar toda la gama cromática de una manera dinámica pudiendo cambiar de un segundo a otro el color de los focos produciendo así distintas ambientaciones en los salones. A diferencia del otro PAR 64 LED este foco se utiliza en alturas o distancias superiores a 5 metros.</p>
							<div class="servicio-video"></div>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-foco-par-64-led-pro-alto-brillo-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-par-led-king-rgbw-18-12w.jpg" width="200" height="120">
						<p>Par LED King RGBW 18x12W</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Tacho de aluminio con tecnología LEDS de 18 leds de 12 watts cada uno. Con un consumo menor a 220 watts ilumina más los famosos PAR 64 1000 watts. Se utiliza normalmente para iluminar grandes salones, murallas fachadas y escenarios. Gracias a su tecnología RGBW bajo el protocolo DMX 512 permite generar toda la gama cromática de una manera dinámica y eficiente pudiendo ajustarse a los requerimientos de cualquier puesta en escena.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-par-led-king-rgbw-18-12w-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-par-led-slim-rgbw-7-12w.jpg" width="200" height="120">
						<p>Par LED Slim RGBW 7x12W</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Tacho plástico con tecnología LEDS de 7 leds de 12 watts cada uno. Con un consumo menor a 90 watts . Se utiliza normalmente para iluminar salones medianos, murallas fachadas y escenarios. Gracias a su tecnología RGBW bajo el protocolo DMX 512 permite generar toda la gama cromática de una manera dinámica y eficiente pudiendo ajustarse a los requerimientos de cualquier puesta en escena. Gracias a su bajo peso y a su tamaño compacto se puede instalar prácticamente en cualquier parte sin generar ningún problema.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-par-led-slim-rgbw-7-12w-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-seguidor-1200-watts.jpg" width="200" height="120">
						<p>Seguidor 1200 Watts</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo de  1200 watts de potencia que montado sobre un atril  y operado por un técnico permite iluminar personas y elementos en movimiento para cualquier puesta en escena. Este seguidor permite jugar con filtros, temperatura de la luz, iris, black out , strob y muchos otros efectos.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-seguidor-1200-watts-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-elipsos.jpg" width="200" height="120">
						<p>Elipsos</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco de 750 watts de potencia utilizado principalmente para iluminar puntos específicos en escenarios  y puestas en escena ccn una luz fuerte y de temperatura cálida. Son los más utilizados en la iluminación de podios y de elementos  que se quieren destacar por contraste un punto o lelemento específico. Gracias a su sistema de  aletas y de iris permite definir muy bien los límites de la iluminación.Se pueden utilizar como mini seguidores.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-elipsos-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-frensel.jpg" width="200" height="120">
						<p>Frensel</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco de 1000 watts de potencia utilizado principalmente para iluminar escenarios  ccn planos generales ocn una luz pareja y de temperatura cálida. Casi siempre son los elegidos en teatros y en sets de televisión donde se requiere grabar un registro. Gracias a sus aletas permite definir muy bien los límites de la iluminación.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-frensel-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-mini-brut.jpg" width="200" height="120">
						<p>Mini Brut</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco compuesto por 4 lámparas de 650 watts de potencia utilizado principalmente para iluminar grandes explanadas ccn una luz fuerte y de temperatura cálida. Gracias a su potencia y velocidad de repuesta, es ideal  para ser utilizados en recitales y presentaciones artísticas con amplia congregación de público.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-mini-brut-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-halogeno-150-300-500-1000.jpg" width="200" height="120">
						<p>Halógeno 150/300/500/1000</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco de bajo costo que produce un haz de luz de gran apertura  y de una temperatura muy cálida. Ideal para iluminar follajes y planos generales. Este foco está disponible en 4 formatos según la potencia que se necesite; 150 / 300 / 500 / 1000 watts. Este foco utilizado con un dimmer, permite jugar con la intensidad  de la ampolleta.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-halogeno-150-300-500-1000-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/efecto-haluro-metal-400-watts.jpg" width="200" height="120">
						<p>Haluro Metal 400 Watts</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Foco de alta potencia lumínica que produce un haz de luz de gran apertura pero a una temperatura mas bien fría (blanca). Ideal para iluminar grandes explanadas a un bajo consumo eléctrico. Este foco se utiliza para iluminar carpas cocina, zonas de desconche, camarines, backstages y jardines pero en planos generales..</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-haluro-metal-400-watts-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>

					<div class="servicio-item">
						<img src="imgs/servicios/efecto-power-dimmer-lite-putter.jpg" width="200" height="120">
						<p>Power Dimmer Lite Putter</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Power Dimmer Análogo y Digital, profesional de 6 canales para iluminación.</p>
							<div class="servicio-desc-imgs">
								<img src="imgs/servicios/efecto-power-dimmer-lite-putter-equipo.jpg" width="130" height="130">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio servicio-padre">
				<div class="servicio-tipo">
					<h3>AMPLIFICACIÓN</h3>
					<p class="servicio-desc">Tenemos una gran variedad de equipos</p>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>EQUIPOS DE POTENCIA</h3>
					<p class="servicio-cant">5 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/parlante-zx1.jpg" width="200" height="120">
						<p>Electrovoice ZX1</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Este es un parlante aéreo de 2 vías especialmente diseñado para ser utilizados en matrimonios y comidas de etiqueta para amplificar los sectores de las mesas y lugares de conversación, ya que es un parlante elegante en su presencia y en su sonido. Tiene una potencia de 200W RMS continuos 800W peak con una sensibilidad máxima de 94 dB y de 123 dB en SPL</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/parlante-zx4.jpg" width="200" height="120">
						<p>Electrovoice ZX4</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Parlante aéreo de 2 vías, que entrega una potencia de 400W RMS continuos hasta 1500W peak con una sensibilidad máxima de 100 dB en SPL.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/parlante-zx5.jpg" width="200" height="120">
						<p>Electrovoice ZX5</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Parlante aéreo de 2 vías, que entrega una potencia de 600W RMS continuos hasta 2400W peak con una sensibilidad máxima de 132 dB en SPL.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/Line-Array-HDL-20A.jpg" width="200" height="120">
						<p>RCF Active Line Array</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
<p>RCF HDL20-A<br>
Perfecto para recitales masivos y presentaciones de bandas en vivo.<br>
Hasta 16 módulos por lado usando el <em>FLY BAR<em></p>
<ul><li>700 Watt RMS</li>
<li>135dBmaxSPL</li>
<li>55Hz - 20kHz</li>
<li>2x10" Woofers</li></ul>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/parlante-rcf-espace-800.jpg" width="200" height="120">
						<p>RCF ESPACE 800</p>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/sub-bajo-rfc-1018.jpg" width="200" height="120">
						<p>RCF 1018 - Sub-Bajo</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Sub-Bajo de 1.500 Watts</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/retorno-yamaha-cm15v.jpg" width="200" height="120">
						<p>Retorno Yamaha CM15V</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Parlante de 2 vías, especial para utilizarlo como retorno de escenario. Entrega una potencia de 500W RMS continuos hasta 2000W peak con una sensibilidad máxima de 99 dB y de 129 dB en SPL.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>MEZCLADORES</h3>
					<p class="servicio-cant">3 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/mezclador-dnx-500.jpg" width="200" height="120">
						<p>DNX 500</p>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/mezclador-dnx-900.jpg" width="200" height="120">
						<p>DNX 900</p>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/mezclador-dnx-1500.jpg" width="200" height="120">
						<p>DNX 1500</p>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>CONTROLADORES</h3>
					<p class="servicio-cant">3 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/controlador-denon-mc-6000.jpg" width="200" height="120">
						<p>DENON MC 6000</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Controladora MIDI de 4 canales que permite poner música y viedeos trabajando en conjunto con un computador.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/controlador-pioneer-ddj-sx.jpg" width="200" height="120">
						<p>Pioneer DDJ SX</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Controladora MIDI y mezcladora de 4 canales que permite poner música y videos trabajando simplemente con un computador con un computador y un programa de DJ.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/controlador-dn-2500-hd.jpg" width="200" height="120">
						<p>DN 2500 HD</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Controladora MIDI  y reproductora de Canciones MP3 que cuenta con un disco duro que permite almacenar una gran cantidad de canciones con un sistema de trabajo muy rápido y estable que asegura eficiencia en el momento de utilizarlo.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>TWIN CD</h3>
					<p class="servicio-cant">1 ITEM</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/twin-cd-dn-6000.jpg" width="200" height="120">
						<p>DN D6000</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Controladora MIDI de 4 canales que permite poner música y viedeos trabajando en conjunto con un computador.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>PROCESADORES</h3>
					<p class="servicio-cant">7 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/compresor-dbx-266-xl.jpg" width="200" height="120">
						<p>Compresor DBX 266 XL</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que como su nombre lo indica sirve para comprimir las señales enviadas por los distintos equipos e instrumentos utilizados en una amplificación y que permite eliminar los acoples.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/crossover-dbx-223-xl.jpg" width="200" height="120">
						<p>Crossover DBX 223 XL</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que permite separar las frecuencias bajas, medias y agudas de manera de amplificar cada una por separada con el fin de obtener un mayor control del sonido y mejorar el rendimiento del sistema. Generalmente se utiliza para poner sub bajos.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/multiefecto-lexicon-mx200.jpg" width="200" height="120">
						<p>Multi-efecto Lexicon MX200</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que como su nombre lo indica sirve para enriquecer los sonidos de los instrumentos utilizados en una amplificación con efectos sonoros como echo, delay, reverb, etc.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/ecualizador-dbx-1231.jpg" width="200" height="120">
						<p>Ecualizador DBX 1231</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Equipo que permite tener un control total del sonido  de cada uno de los  instrumentos utilizados en una amplificación, por lo cual ayuda a conseguir el sonido buscado y  eliminar los posibles acoples.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/mesa-soundcraft-12ch-efx.jpg" width="200" height="120">
						<p>Mesa de Sonido Soundcraft 12CH EFX</p>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/mesa-allen-health-428.jpg" width="200" height="120">
						<p>Mesa de Sonido Allen&Health 428</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Mesa de sonido de 24 canales mono y 2 estéreo. Fader 100 mm, 4 subgrupos, 2 envíos matrix, 6 envíos auxiliares pre, pre post y post fader, salidas directas, phantom independiente en todos sus canales y conectividad USB. Es una consola de gran dinámica, que puede ser usada en refuerzo sonoro y estudio de grabación.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/mesa-behringer-x32.jpg" width="200" height="120">
						<p>Mesa de Sonido Digital Behringer X32</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Al igual que su hermano mayor, la Behringer X32 Compact puede manejar hasta 40 entradas y 25 buses. Localmente disponemos de 16 entradas (físicas) XLR, 8 salidas XLR y 6 e/s auxiliares. Para usar todas sus capacidades en cuanto a canales necesitaremos la caja de escenario S16 con 16 entrdas y 8 salidas XLR, con la que enlazaremos mediante el puerto ULTRANET con cable categoría 5e, que también puede usarse para conectarse con el sistema de monitoraje personal P16.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>POWERS</h3>
					<p class="servicio-cant">4 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/power-makie-1400i.jpg" width="200" height="120">
						<p>Makie 1400i</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Power de 2 canales que entrega la potencia a los parlantes amplificando las señales de los reproductores o instrumentos permitiendo alcanzar grandes presiones sonaras con una gran fidelidad de sonido. Además cuenta con un crossover interno para amplificar sub bajos. Este power es capaz de entregar 300w/8 Ohm 500w/4 Ohm 700w /2. Bridge 1000w/8 Ohm  Bridge 1400w/ 4 Ohm.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/power-crest-ca9.jpg" width="200" height="120">
						<p>Crest CA9</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Power de 2 canales que entrega la potencia a los parlantes amplificando las señales de los reproductores o instrumentos permitiendo alcanzar grandes presiones sonaras con una gran fidelidad de sonido. Este power es capaz de entregar 600w/8 Ohm 900w/4 Ohm 1000w /2. Bridge 1800w/8 Ohm  Bridge 2000w/ 4 Ohm.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/power-qsc-40-50-hd.jpg" width="200" height="120">
						<p>QSC 40 50 HD</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Power de 2 canales que entrega la potencia a los parlantes amplificando las señales de los reproductores o instrumentos permitiendo alcanzar grandes presiones sonaras con una gran fidelidad de sonido. Este power es capaz de entregar 850w/8 Ohm 1400w/4 Ohm 2000w /2. Bridge 2700w/8 Ohm.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/power-audio-lab-da-4000.jpg" width="200" height="120">
						<p>Audio Lab DA-4000</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Power de 4 canales que entrega la potencia a los parlantes amplificando las señales de los reproductores o instrumentos permitiendo alcanzar grandes presiones sonaras con una gran fidelidad de sonido. Este power es capaz de entregar 1300w/8 Ohm 2200w/4 Ohm 2400w /2. Bridge 4400w/8 Ohm   Bridge 4800w/4 Ohm.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="servicio">
				<div class="servicio-tipo">
					<h3>MICROFONÍA</h3>
					<p class="servicio-cant">9 ITEMS</p>
				</div>
				<div class="servicio-items">
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-sennheiser-g1.jpg" width="200" height="120">
						<p>Sennheiser G1</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono inalámbrico de gran versatilidad en distintos estilos musicales, entregando gran calidad de sonido en todos ellos. Por su gran alcance y amplia selección de frecuencias es uno de los favoritos de todos los músicos.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-sennheiser-g2.jpg" width="200" height="120">
						<p>Sennheiser G2</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono inalámbrico de gran versatilidad en distintos estilos musicales, entregando gran calidad de sonido en todos ellos. Por su gran alcance y amplia selección de frecuencias es uno de los favoritos de todos los músicos.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-sennheiser-g3.jpg" width="200" height="120">
						<p>Sennheiser G3</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono inalámbrico de gran versatilidad en distintos estilos musicales, entregando gran calidad de sonido en todos ellos. Por su gran alcance y amplia selección de frecuencias es uno de los favoritos de todos los músicos.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-shure-sm58.jpg" width="200" height="120">
						<p>SHURE SM58</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono (alábrmico) dinámico unidireccional (cardiode) diseñado para amplificar voces y coros. Por su calidez y nitidez es casi siempre el más elegido por todos los músicos.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-shure-sm57.jpg" width="200" height="120">
						<p>SHURE SM57</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono (alámbrico) dinámico unidireccional (cardiode) fue diseñado para amplificar instrumentos de percusión , viento, guitarras y madera . Por su sonido brillante y nítido siempre responde como se espera.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-shure-sm581.jpg" width="200" height="120">
						<p>SHURE SM581</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono (alámbrico) de condensador unidireccional (cardiode) fue diseñado para amplificar instrumentos acústicos. Por su baja emisión de ruido sonido nítido y brillante, se utiliza siempre como primera alternativa en amplificar platillos , pianos y guitarras acústicas.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-shure-beta-52.jpg" width="200" height="120">
						<p>SHURE Beta 52</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono (alámbrico) dinámico supercardioide, de alta fidelidad en respuesta a frecuencias graves y muy graves. Altamente resistente a vibraciones , fue diseñado para amplificar bombos e instrumentos similares.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-shure-gooseneck-mx418-s.jpg" width="200" height="120">
						<p>SHURE Gooseneck MX418/S</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono de condensador de alta fidelidad diseñado para amplificar discursos gracias a su forma elegante y discreta que le permite adaptarse a la altura y ubicación del orador.  Es la alternativas más utilizada en podios y testeras.</p>
						</div>
					</div>
					<div class="servicio-item">
						<img src="imgs/servicios/microfono-rhode-m3.jpg" width="200" height="120">
						<p>RHODE M3</p>
						<div class="servicio-desc">
							<p>( Cerrar )</p>
							<p>Micrófono (ambiental) de condensador de alta fidelidad diseñado para amplificar sonidos ambientales. Gracias a su gran calidad y alcance es ideal para amplificar obras de teatro y coros  y orquestas de una gran cantidad de personas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
<a href="#" id="abreYcierra" class="">MENÚ</a>
<div class="theShame"></div>
<div class="evenMoreShameful"></div>
<div class="urgeo"></div>
</div>
<footer>
	<div class="botonesAlPie">
		<p class="tieneIcon"><span class="conIcon">☗</span><a href="./">Inicio</a></p>
		<div class="vcard">
			<h1 class="fn n tieneIcon"><span class="conIcon">☎</span><span class="given-name">Joaquín</span> <span class="family-name">Zanolli</span> <span class="additional-name">De Solminhac</span></h1>
			<p>Celular: <?php echo $celular; ?></p>
			<p>Teléfono / Fax: <?php echo $telefono; ?></p>
			<p class="tieneIcon"><span class="conIcon">☞</span><a class="email" href="mailto:<?php echo $mailContacto; ?>"><?php echo $mailContacto; ?></a></p>
			<?php /*<p><span class="street-address">Mar del plata 1745</span>, <span class="extended-address">oficina 94</span> <br>
			<span class="postal-code" title="Código postal"><?php echo $codigoPostal; ?></span> <span class="region">Providencia</span><br>
			<span class="locality">Santiago</span><br>
			<span class="country-name">Chile</span></p>*/ ?>
		</div>
	</div>
</footer>
<?php require("views/javascript-al-pie.php"); ?>
<script type="text/javascript" src="_/js/servicios.js"></script>
</body>
</html>
