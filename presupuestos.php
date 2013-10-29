<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
	require_once 'Mailer.php';
	$msgJZ = '
			<p>Presupuesto de: '.$_POST['nombre'].' ('. $_POST['email'] .')</p>
			<p>Al responder este mensaje, <strong>NO</strong> estarás respondiendo directamente al cliente. Deberás ingresar manualmente la dirección de correo.<br></p>';
	$msgCliente = '
			<p>Esta es una copia del presupuesto generado en nuestro sitio <a href="www.jzmusic.cl">www.jzmusic.cl</a></p>
			<p><strong>Nombre:</strong> '. $_POST['nombre'] .'</p>
			<p><strong>E-mail:</strong> '. $_POST['email'] .'</p>
	';
	$msg = '
			<p><strong>Tipo de Evento:</strong> '. $_POST['evento'] .'</p>
			<p><strong>Teléfono/Celular:</strong> '. $_POST['telefono'] .'</p>
			<p><strong>Fecha del Evento:</strong> '. $_POST['fecha'] .'</p>
			<p><strong>Lugar del Evento:</strong> '. $_POST['lugar'] .'</p>
			<p><strong>Nº de Personas:</strong> '. $_POST['personas'] .'</p>
			<p><strong>Mensaje:</strong> '. nl2br(strip_tags($_POST['mensaje'])) .'</p>
		';
	$msg .= 'A continuación se encuentra el presupuesto preliminar generado en el sitio:
	<table width="50%" border="1" cellspacing="0" cellpadding="2"><tr align="center"><td width="10%"><strong>Cant.</strong></td><td><strong>Item</strong></td><td width="30%"><strong>Valor</strong></td></tr>';
	$items = explode('/', $_POST['items']);
	foreach ($items as $key => $value) {
		$data = explode('::', $value);
		$msg .= '<tr><td align="center">'. $data[0] .'</td><td>'. $data[1] .'</td><td align="right">'. $data[2] .'</td></tr>';
	}
	$msg .= '<tr align="right"><td colspan="2"><strong>TOTAL</strong></td><td><strong>'. $_POST['total'] .'</strong></td></tr></table>';
	$msgJZ = $msgJZ.$msg;
	if($_POST['mensaje_3'] !== ''){
		$msgJZ = $msgJZ . '<p>La elección de la pregunta sobre amplificar la zona del cocktail fue: '. $_POST['mensaje_3'] .' </p>';
	}
	$msgCliente = $msgCliente.$msg;
	$mailer = new Mail($_POST['email'], $_POST['nombre'], $msgCliente, 'Presupuesto desde JZMusic.cl');
	$mailer->sendQuote($msgJZ);
	if(!$mailer->result){
		echo 0;
	} else {
		echo 1;
	}
	exit();
}

include "_/inc/datos-globales.php";
?>
<!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Presupuestos — <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.min.css">
	<?php
		$openGraph['titulo'] = 'Presupuestos JZMusic.cl';
		$openGraph['descripcion'] = 'Nuestro equipo está disponible para cualquier comentario relacionado con la satisfacción de nuestros clientes y para escuchar sus necesidades.';
		include 'views/open-graph.php';
	?>
	<?php include "views/modernizr.php"; ?>

</head>

<body class="articulo navAbierto subNavAbierto presupuestos">

<div class="amictus">
	<div class="wrapper">
	<header>
		<div id="logoTop">
			<a href="./" title="Home">
			<div data-picture data-alt="Logotipo <?php echo $nombreMarca; ?>">
		        <div data-type="image/svg+xml" data-src="imgs/logo-JZMusic.svg"></div>
		        <div data-src="imgs/logo-jzmusic-100.png"></div>
		        <div data-src="imgs/logo-jzmusic-160.png" data-media="(min-width: 640px)"></div>
		        <noscript><img src="imgs/logo-jzmusic.png" alt="Logotipo <?php echo $nombreMarca; ?>"></noscript>
		    </div>
		    </a>
		</div>
		<div class="placeholderTitle"></div>
		<?php include "views/nav-principal.php"; ?>
	</header>
	<div class="temas" id="carousel">
		<div data-picture class="unPicture">
			<div data-src="imgs/decoracion-terraza-480.jpg"></div>
			<div data-src="imgs/decoracion-terraza-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/decoracion-terraza-480.jpg">
			</noscript>
		</div>
	</div>
	<div class="corporis">
		<article>
			<h1 class="titulo">PRESUPUESTOS</h1>
			<div id="presupuesto">
				<div id="presupuesto_1" class="presupuesto-slide">
					<h2>¿Qué tipo de evento es?</h2>
					<p class="bajada">Nuestro equipo está disponible para cualquier comentario relacionado con la satisfacción de nuestros clientes y para escuchar sus necesidades.</p>
					<ul class="tipos-fiestas">
						<li class="tipo-fiesta" id="fiesta_graduacion">
							<h3 data-evento>FIESTAS DE GRADUACIÓN</h3>
							<p>Fiesta de graduación de 4to medio</p>
						</li>
						<li class="tipo-fiesta" id="fiesta_sub20">
							<h3 data-evento>FIESTAS SUB-20</h3>
							<p>Fiesta para adolescentes con una edad inferior a 23 años</p>
						</li>
						<li class="tipo-fiesta" id="fiesta_matrimonio">
							<h3 data-evento>MATRIMONIOS</h3>
							<p>Matrimonio, con uno o más ambientes</p>
						</li>
						<li class="tipo-fiesta" id="fiesta_cumpleanos">
							<h3 data-evento>CUMPLEAÑOS Y ANIVERSARIOS</h3>
							<p>Música personalizada para una comida, o una gran fiesta bailable según la edad del festejado</p>
						</li>
						<li class="tipo-fiesta" id="fiesta_evento">
							<h3 data-evento>EVENTOS Y PRODUCCIONES ESPECIALES</h3>
							<p>Eventos que deben responder a una ficha técnica y a un programa específico</p>
						</li>
					</ul>
				</div>
<?php
/*
* ----------------- Slide 2 - Cantidad personas fiesta
*/
?>
				<div id="presupuesto_2" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿De cuántas personas será la fiesta?</h3>
					<input type="number" id="cantidad-personas" name="cantidad-personas" min="0" max="1000" value="10" step="10"> <button id="boton_calcular">calcular</button>
					<p id="presupuesto_2_matrimonio" class="hide">
						Para matrimonios incluye la gente que llegue después de la comida.
					</p>
					<div id="presupuesto_2_resultado" class="hide texto-resultado">
						<p>JZMusic te recomienda que, para una pista de baile de <span data-personas></span> personas:</p>
						<div class="rango" data-rango="1-100">
							<img src="imgs/presupuestos/parlante-ev-zx4.jpg" width="148" height="148">
							<p><span data-cantidad>2</span> <span data-item> parlantes EV ZX4 de 400 watts</span>.</p>
							<p>Precio: <span data-precio>$50.000</span></p>
						</div>
						<div class="rango" data-rango="101-150">
							<img src="imgs/presupuestos/parlante-ev-zx5.jpg" width="148" height="148">
							<p><span data-cantidad>2</span> <span data-item>parlantes EV ZX5 de 600 watts</span></p>
							<p>Precio: <span data-precio>$70.000</span></p>
						</div>
						<div class="rango" data-rango="151-250">
							<img src="imgs/presupuestos/parlante-ev-zx4.jpg" width="148" height="148">
							<p><span data-cantidad>4</span> <span data-item>parlantes EV ZX4 de 400 watts</span></p>
							<p>Precio: <span data-precio>$100.000</span></p>
						</div>
						<div class="rango" data-rango="251-400">
							<img src="imgs/presupuestos/parlante-ev-zx5.jpg" width="148" height="148">
							<p><span data-cantidad>4</span> <span data-item>parlantes EV ZX5 de 600 watts</span></p>
							<p>Precio: <span data-precio>$150.000</span></p>
						</div>
						<div class="rango" data-rango="401-550">
							<img src="imgs/presupuestos/parlante-ev-zx4.jpg" width="148" height="148">
							<p><span data-cantidad>6</span> <span data-item>parlantes EV ZX4 de 400 watts</span></p>
							<p>Precio: <span data-precio>$200.000</span></p>
						</div>
						<div class="rango" data-rango="551-650">
							<img src="imgs/presupuestos/parlante-ev-zx5.jpg" width="148" height="148">
							<p><span data-cantidad>6</span> <span data-item>parlantes EV ZX5 de 600 watts</span></p>
							<p>Precio: <span data-precio>$250.000</span></p>
						</div>
						<div class="rango" data-rango="651-750">
							<img src="imgs/presupuestos/parlante-ev-zx4.jpg" width="148" height="148">
							<p><span data-cantidad>8</span> <span data-item>parlantes EV ZX4 de 400 watts</span></p>
							<p>Precio: <span data-precio>$350.000</span></p>
						</div>
						<div class="rango" data-rango="751-1000">
							<img src="imgs/presupuestos/parlante-ev-zx5.jpg" width="148" height="148">
							<p><span data-cantidad>8</span> <span data-item>parlantes EV ZX5 de 600 watts</span></p>
							<p>Precio: <span data-precio>$400.000</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 3 - La zona de cocktail estara cerca de la pista de baila
* 								o haran el cockatil en otro lugar
*/
?>
				<div id="presupuesto_3" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Quieres que amplifiquemos la zona de cocktail?</h3>
					<div class="texto-explicacion">Nos adecuamos a todas las alternativas de amplificación que usted necesite para el momento del cóctail, ya sea en música envasada como en música en vivo. Para esta última necesitamos la ficha técnica del grupo para ajustarnos a ella.</div>
					<div class="opciones">
						<input type="radio" name="presupuesto-3-radio" id="presupuesto-3-radio-si" value="si">
						<label class="opcion ancho boton" data-si for="presupuesto-3-radio-si">
							 Sí, pero el cocktail estará a menos de 25 metros del lugar de la comida
						</label>
						<input type="radio" name="presupuesto-3-radio" id="presupuesto-3-radio-si2" value="si">
						<label class="opcion ancho boton" data-si for="presupuesto-3-radio-si2">
							 Sí, pero el cocktail estará a más de 25 metros del lugar de la comida
						</label>
						<input type="radio" name="presupuesto-3-radio" id="presupuesto-3-radio-no" value="no">
						<label class="opcion ancho boton" data-no for="presupuesto-3-radio-no">
							 No es necesario, el cocktail será en el mismo lugar de la comida
						</label>
						<input type="radio" name="presupuesto-3-radio" id="presupuesto-3-radio-no2" value="no">
						<label class="opcion ancho boton" data-no for="presupuesto-3-radio-no2">
							 No voy a necesitar que JZMusic amplifique el cocktail
						</label>

					</div>
					<div id="presupuesto_3_opcion_no" class="hide texto-resultado">
						Será en un sólo ambiente o el sector de cocktail no tendrá música ni amplificación.
					</div>
					<div id="presupuesto_3_opcion_si" class="hide texto-resultado">
						<p>Para la cantidad de gente que tienes estimada nosotros te recomendamos:</p>
					<div class="rango" data-rango="1-150">
						<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
						<p><span data-cantidad>2</span> <span data-item>parlantes EV ZX1</span></p>
						<p><span data-precio>$30.000</span></p>
					</div>
					<div class="rango" data-rango="151-300">
						<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
						<p><span data-cantidad>4</span> <span data-item>parlantes EV ZX1</span></p>
						<p><span data-precio>$50.000</span></p>
					</div>
					<div class="rango" data-rango="301-500">
						<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
						<p><span data-cantidad>6</span> <span data-item>parlantes EV ZX1</span></p>
						<p><span data-precio>$80.000</span></p>
					</div>
					<div class="rango" data-rango="501-700">
						<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
						<p><span data-cantidad>8</span> <span data-item>parlantes EV ZX1</span></p>
						<p><span data-precio>$100.000</span></p>
					</div>
					<div class="rango" data-rango="701-1000">
						<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
						<p><span data-cantidad>10</span> <span data-item>parlantes EV ZX1</span></p>
						<p><span data-precio>$120.000</span></p>
					</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 4 - Que se escuchara bien la musica en todas las mesas
*/
?>
				<div id="presupuesto_4" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Te gustaría que se escuchara bien la música en todas las mesas durante la comida?</h3>
					<div class="texto-explicacion">Muchas veces para en los matrimonios la gente reclama porque quedó cerca de un parlante y le molesta la música y otros quedaron lejos , por lo cual no escuchan… Esto se soluciona instalando varios parlantes pequeños en el perímetro de las mesas con un volumen independiente al de la pista de baile</div>
					<div class="opciones">
						<input type="radio" name="presupuesto-4-radio" id="presupuesto-4-radio-si" value="si">
						<label class="opcion ancho boton" data-si for="presupuesto-4-radio-si">
							 Sí, es lo que busco
						</label>
						<input type="radio" name="presupuesto-4-radio" id="presupuesto-4-radio-no" value="no">
						<label class="opcion ancho boton" data-no for="presupuesto-4-radio-no">
							 No es importante para mi
						</label>
					</div>
					<div id="presupuesto_4_opcion_no" class="hide texto-resultado">
						Será en un sólo ambiente o el sector de mesas no tendrá música ni amplificación.
					</div>
					<div id="presupuesto_4_opcion_si" class="hide texto-resultado">
						<p>Para la cantidad de gente que tienes estimada nosotros te recomendamos:</p>

						<div class="rango" data-rango="1-150">
							<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
							<p><span data-cantidad>2</span> <span data-item>parlantes EV ZX1</span></p>
							<p><span data-precio>$30.000</span></p>
						</div>
						<div class="rango" data-rango="151-300">
							<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
							<p><span data-cantidad>4</span> <span data-item>parlantes EV ZX1</span></p>
							<p><span data-precio>$50.000</span></p>
						</div>
						<div class="rango" data-rango="301-500">
							<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
							<p><span data-cantidad>6</span> <span data-item>parlantes EV ZX1</span></p>
							<p><span data-precio>$80.000</span></p>
						</div>
						<div class="rango" data-rango="501-700">
							<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
							<p><span data-cantidad>8</span> <span data-item>parlantes EV ZX1</span></p>
							<p><span data-precio>$100.000</span></p>
						</div>
						<div class="rango" data-rango="701-1000">
							<img src="imgs/presupuestos/parlante-ev-zx1.jpg" width="148"  height="148">
							<p><span data-cantidad>10</span> <span data-item>parlantes EV ZX1</span></p>
							<p><span data-precio>$120.000</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 5 - Sub-bajos
*/
?>
				<div id="presupuesto_5" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Quieres potenciar el sonido de la pista de baile con sub-bajos?</h3>
					<div class="texto-explicacion">Los sub-bajos son parlantes que sólo emiten sonidos de baja frecuencia, haciendo la música más envolvente y produciendo en las personas que la música se sienta en la piel. Importante: Hay centros de eventos, donde estos equipos están prohibidos.</div>
					<div class="opciones">
						<input type="radio" name="presupuesto-5-radio" id="presupuesto-5-radio-si" value="si">
						<label class="opcion ancho boton" data-si for="presupuesto-5-radio-si">
							 Sí, me encantaría
						</label>
						<input type="radio" name="presupuesto-5-radio" id="presupuesto-5-radio-no" value="no">
						<label class="opcion ancho boton" data-no for="presupuesto-5-radio-no">
							 No, gracias
						</label>
					</div>
					<div id="presupuesto_5_opcion_no" class="hide texto-resultado">
						<p>No habrá sub-bajos.</p>
					</div>
					<div id="presupuesto_5_opcion_si" class="hide texto-resultado">
						<p>Para la cantidad de gente que tienes estimada nosotros te recomendamos:</p>

						<div class="rango" data-rango="1-200">
							<img src="imgs/presupuestos/sub-bajo-18-pulgadas.jpg" width="148" height="148">
							<p><span data-cantidad>2</span> <span data-item>Sub Bajos 18" 1.500 Watts</span></p>
							<p><span data-precio>$40.000</span></p>
						</div>
						<div class="rango" data-rango="201-400">
							<img src="imgs/presupuestos/sub-bajo-18-pulgadas.jpg" width="148" height="148">
							<p><span data-cantidad>4</span> <span data-item>Sub Bajos 18" 1.500 Watts</span></p>
							<p><span data-precio>$80.000</span></p>
						</div>
						<div class="rango" data-rango="401-650">
							<img src="imgs/presupuestos/sub-bajo-18-pulgadas.jpg" width="148" height="148">
							<p><span data-cantidad>6</span> <span data-item>Sub Bajos 18" 1.500 Watts</span></p>
							<p><span data-precio>$120.000</span></p>
						</div>
						<div class="rango" data-rango="651-1000">
							<img src="imgs/presupuestos/sub-bajo-18-pulgadas.jpg" width="148" height="148">
							<p><span data-cantidad>8</span> <span data-item>Sub Bajos 18" 1.500 Watts8</span></p>
							<p><span data-precio>$150.000</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 6 - Robotizados pista de baile
*/
?>
				<div id="presupuesto_6" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Qué tipo de iluminación robotizada base te gustaría para animar tu fiesta?</h3>
					<div class="texto-explicacion">
						A continuación puedes seleccionar el tipo de robotizado que deseas para tu fiesta. Hemos seleccionado la mejor opción de acuerdo a la cantidad de personas indicadas. Si no deseas ninguno, <a href="javascript:;" data-siguiente>puedes continuar</a>.
					</div>
					<div class="grupos">
						<div class="grupo">
								<h4 class="grupo-titulo">Cabezas Móviles </h4>
							<figure class="grupo-image" data-video="cqsSQ5AB6Dc" data-bg="cabezas-moviles.jpg">&#9658;</figure>
							<div class="grupo-contenido">
								<p class="grupo-descripcion">575 Watts | $25.000 c/u</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									30 mts2 - <span data-equipos>2 Cabezas Móviles</span>
									<span data-precio>$50.000</span>
								</div>
								<div class="rango" data-rango="101-350">
									60 mts2 - <span data-equipos>4 Cabezas Móviles</span>
									<span data-precio>$100.000</span>
								</div>
								<div class="rango" data-rango="351-600">
									120 mts2 - <span data-equipos>6 Cabezas Móviles</span>
									<span data-precio>$150.000</span>
								</div>
								<div class="rango" data-rango="601-800">
									180 mts2 - <span data-equipos>8 Cabezas Móviles</span>
									<span data-precio>$200.000</span>
								</div>
								<div class="rango" data-rango="801-1000">
									240 mts2 - <span data-equipos>10 Cabezas Móviles</span>
									<span data-precio>$250.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
						<div class="grupo">
								<h4 class="grupo-titulo">Scaners</h4>
							<figure class="grupo-image" data-video="LcVYpt7q1Ls" data-bg="scanners.jpg">&#9658;</figure>
							<div class="grupo-contenido">
								<p class="grupo-descripcion">SLR 114 - ELC 250 | $15.000 c/u</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									30 mts2 - <span data-equipos>2 Scaners</span>
									<span data-precio>$30.000</span>
								</div>
								<div class="rango" data-rango="101-200">
									60 mts2 - <span data-equipos>4 Scaners</span>
									<span data-precio>$60.000</span>
								</div>
								<div class="rango" data-rango="201-450">
									120 mts2 - <span data-equipos>6 Scaners</span>
									<span data-precio>$90.000</span>
								</div>
								<div class="rango" data-rango="451-700">
									180 mts2 - <span data-equipos>8 Scaners</span>
									<span data-precio>$120.000</span>
								</div>
								<div class="rango" data-rango="701-1000">
									240 mts2 - <span data-equipos>10 Scaners</span>
									<span data-precio>$150.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 7 - Efectos especiales
*/
?>
				<div id="presupuesto_7" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Qué efectos especiales quieres agregar?</h3>
					<div class="texto-resultado">
						Existen efectos que sirven para potenciar momentos en la fiesta. Hemos seleccionado las mejores opciones de acuerdo a la cantidad de personas indicadas. Si no deseas ninguno, <a href="javascript:;" data-siguiente>puedes continuar</a>.
						<p>Puedes seleccionar más de una opción.</p>
					</div>
					<div class="grupos">
						<div class="grupo">
							<h4 class="grupo-titulo">Laser</h4>
							<figure class="grupo-image" data-video="OIvLrxRKSLU" data-bg="laser-b500.jpg">&#9658;</figure>
								<span class="grupo-descripcion">Generalmente los efectos laser los utilizamos para potenciar los momentos de música electrónica, dance y algunos reaggetones. Los tenemos en verde , rojo, azul y multicolor.</p>
							<div class="grupo-contenido">
								<h4 class="grupo-titulo">Laser B500 o K600 de 150 mw </h4>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									<span data-equipos>2 Laser K600 o B500</span>
									<span data-precio>$30.000</span>
								</div>
								<div class="rango" data-rango="101-200">
									<span data-equipos>4 Laser K600 o B500</span>
									<span data-precio>$60.000</span>
								</div>
								<div class="rango" data-rango="201-450">
									<span data-equipos>6 Laser K600 o B500</span>
									<span data-precio>$75.000</span>
								</div>
								<div class="rango" data-rango="451-700">
									<span data-equipos>8 Laser K600 o B500</span>
									<span data-precio>$120.000</span>
								</div>
								<div class="rango" data-rango="701-1000">
									<span data-equipos>10 Laser K600 o B500</span>
									<span data-precio>$150.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
						<div class="grupo">
							<h4 class="grupo-titulo">Luz estroboscópica</h4>
							<figure class="grupo-image play-negro" data-video="mLrBvk5HUX0" data-bg="luz-estroboscopica.jpg">&#9658;</figure>
							<div class="grupo-contenido">
								<span class="grupo-descripcion">Los efectos laser los utilizamos para destacar los momentos más altos de la fiesta encendiendo una luz muy poderosa que con su iterancia lp que todo se sienta como en cámara lenta.</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									<span data-equipos>1 Strob 250 Watts</span>
									<span data-precio>$10.000</span>
								</div>
								<div class="rango" data-rango="101-200">
									<span data-equipos>1 Strob 1500 Watts</span>
									<span data-precio>$15.000</span>
								</div>
								<div class="rango" data-rango="201-450">
									<span data-equipos>1 Strob 2700 Watts</span>
									<span data-precio>$20.000</span>
								</div>
								<div class="rango" data-rango="451-700">
									<span data-equipos>2 Strob 1500 Watts DMX</span>
									<span data-precio>$40.000</span>
								</div>
								<div class="rango" data-rango="701-1000">
									<span data-equipos>2 Strob 2700 Watts DMX</span>
									<span data-precio>$60.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
						<div class="grupo">
							<h4 class="grupo-titulo">Burbujas</h4>
							<figure class="grupo-image no-video" data-bg="burbujas.jpg"></figure>
							<div class="grupo-contenido">
								<p class="grupo-descripcion">Dale glamour a tu fiesta con increíbles burbujas.</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									<span data-equipos>1 Máquina de Burbujas</span>
									<span data-precio>$30.000</span>
								</div>
								<div class="rango" data-rango="101-200">
									<span data-equipos>2 Máquina de Burbujas</span>
									<span data-precio>$60.000</span>
								</div>
								<div class="rango" data-rango="201-450">
									<span data-equipos>3 Máquina de Burbujas</span>
									<span data-precio>$90.000</span>
								</div>
								<div class="rango" data-rango="451-700">
									<span data-equipos>4 Máquina de Burbujas</span>
									<span data-precio>$120.000</span>
								</div>
								<div class="rango" data-rango="701-1000">
									<span data-equipos>6 Máquina de Burbujas</span>
									<span data-precio>$180.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
						<div class="grupo">
							<h4 class="grupo-titulo">Nieve seca</h4>
							<figure class="grupo-image no-video" data-bg="nieve-seca.jpg"></figure>
							<div class="grupo-contenido">
								<p class="grupo-descripcion">Sorprende a tus invitados con esta increíble máquina que lanza nieve.</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-100">
									<span data-equipos>2 Máquinas de nieve seca</span>
									<span data-precio>$40.000</span>
								</div>
								<div class="rango" data-rango="101-200">
									<span data-equipos>4 Máquinas de nieve seca</span>
									<span data-precio>$80.000</span>
								</div>
								<div class="rango" data-rango="201-450">
									<span data-equipos>6 Máquinas de nieve seca</span>
									<span data-precio>$120.000</span>
								</div>
								<div class="rango" data-rango="451-700">
									<span data-equipos>8 Máquinas de nieve seca</span>
									<span data-precio>$160.000</span>
								</div>
								<div class="rango" data-rango="701-1000">
									<span data-equipos>10 Máquinas de nieve seca</span>
									<span data-precio>$200.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
						<div class="grupo">
							<h4 class="grupo-titulo">Cañon confeti</h4>
							<figure class="grupo-image no-video" data-bg="canon-confeti.jpg"></figure>
							<div class="grupo-contenido">
								<p class="grupo-descripcion">Haz tu fiesta involvidable con un increíble cañon que dispara confeti. Cada disparo extra tiene un costo de $10.000.</p>
								<hr>
								<p>Contarás con:</p>
								<p data-equipos></p>
								<p data-precio></p>
								<div class="rango" data-rango="1-1000">
									<span data-equipos>1 Cañón confeti con 3 detonaciones</span>
									<span data-precio>$50.000</span>
								</div>
								<div class="grupo-seleccionar">
									<button>Seleccionar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 8 - Bolas de disco
*/
?>
				<div id="presupuesto_8" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Te gustaría que instaláramos un racimo de bolas disco en el centro de pista de baile?</h3>
					<div class="texto-explicacion">Las bolas disco refleja la luz dirigida a ella en múltiples direcciones. Los Mobile Color cambian de color al ritmo de la música.</div>
					<div class="opciones">
						<input type="radio" name="presupuesto-8-radio" id="presupuesto-8-radio-si" value="si">
						<label class="opcion boton" data-si for="presupuesto-8-radio-si">
							 Sí, ¡genial!
						</label>
						<input type="radio" name="presupuesto-8-radio" id="presupuesto-8-radio-no" value="no">
						<label class="opcion boton" data-no for="presupuesto-8-radio-no">
							 No, gracias
						</label>
					</div>
					<div id="presupuesto_8_opcion_no" class="hide texto-resultado">
						<p>No habrán bolas de disco.</p>
					</div>
					<div id="presupuesto_8_opcion_si" class="hide texto-resultado">
						<p>Para la cantidad de gente que tienes estimada nosotros te recomendamos:</p>

						<div class="rango" data-rango="1-100">
							<img src="imgs/presupuestos/bola-disco-mobile-color.jpg" width="148" height="148">
							<p><span data-cantidad>1</span> <span data-item>Racimo de 3 bolas & 1 foco Mobile Color</span></p>
							<p><span data-precio>$30.000</span></p>
						</div>
						<div class="rango" data-rango="101-200">
							<img src="imgs/presupuestos/bola-disco-mobile-color.jpg" width="148" height="148">
							<p><span data-cantidad>1</span> <span data-item>Racimo de 5 bolas & 1 foco Mobile Color</span></p>
							<p><span data-precio>$60.000</span></p>
						</div>
						<div class="rango" data-rango="201-450">
							<img src="imgs/presupuestos/bola-disco-mobile-color.jpg" width="148" height="148">
							<p><span data-cantidad>1</span> <span data-item>Racimo de 7 bolas & 2 focos Mobile Color</span></p>
							<p><span data-precio>$75.000</span></p>
						</div>
						<div class="rango" data-rango="451-700">
							<img src="imgs/presupuestos/bola-disco-mobile-color.jpg" width="148" height="148">
							<p><span data-cantidad>1</span> <span data-item>Racimo de 9 bolas & 2 focos Mobile Color</span></p>
							<p><span data-precio>$120.000</span></p>
						</div>
						<div class="rango" data-rango="701-1000">
							<img src="imgs/presupuestos/bola-disco-mobile-color.jpg" width="148" height="148">
							<p><span data-cantidad>1</span> <span data-item>Racimo de 11 bolas & 2 focos Mobile Color</span></p>
							<p><span data-precio>$150.000</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 9 - JZMusic se haga cargo de los videos
*/
?>
				<div id="presupuesto_9" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Quieres que JZMusic se haga cargo de los videos de tu fiesta?</h3>
					<div class="texto-explicacion"><p>Tenemos una gran variedad de pantallas , telones y proyectores que permiten mostrar los videos , fotos y presentaciones en tu fiesta.</p><p>En esta pregunta buscamos conocer tu necesidad y no tiene un producto/valor asociado a tu respuesta, ya que se necesita realizar un estudio de factibilidad previo.</p></div>
					<div class="opciones">
						<input type="radio" name="presupuesto-9-radio" id="presupuesto-9-radio-si" value="si">
						<label class="opcion boton" data-si for="presupuesto-9-radio-si">
							 Sí
						</label>
						<input type="radio" name="presupuesto-9-radio" id="presupuesto-9-radio-no" value="no">
						<label class="opcion boton" data-no for="presupuesto-9-radio-no">
							 No
						</label>
					</div>
					<div id="presupuesto_9_opcion_no" class="hide texto-resultado"></div>
					<div id="presupuesto_9_opcion_si" class="hide texto-resultado">
						<div class="rango" data-rango="1-1000">
							<p><span data-cantidad>1</span> <span data-item>Deseo que JZMusic se haga cargo de los videos</span></p>
							<p><span data-precio>$0</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 10 - JZMusic se haga cargo de los videos
*/
?>
				<div id="presupuesto_10" class="presupuesto-slide hide">
					<h2 class="tipo-fiesta-seleccionada"></h2>
					<h3>¿Quieres que JZMusic se haga cargo de la iluminación ambiental de tu fiesta?</h3>
					<div class="texto-explicacion"><p>Tenemos una gran cantidad y variedad de focos que nos permitirán iluminar y destacar todos los elementos de tu matrimonio.</p><p>En esta pregunta buscamos conocer tu necesidad y no tiene un producto/valor asociado a tu respuesta, ya que se necesita realizar un estudio de factibilidad previo.</p></div>
					<div class="opciones">
						<input type="radio" name="presupuesto-10-radio" id="presupuesto-10-radio-si" value="si">
						<label class="opcion boton" data-si for="presupuesto-10-radio-si">
							 Sí
						</label>
						<input type="radio" name="presupuesto-10-radio" id="presupuesto-10-radio-no" value="no">
						<label class="opcion boton" data-no for="presupuesto-10-radio-no">
							 No
						</label>
					</div>
					<div id="presupuesto_10_opcion_no" class="hide texto-resultado"></div>
					<div id="presupuesto_10_opcion_si" class="hide texto-resultado">
						<div class="rango" data-rango="1-1000">
							<p><span data-cantidad>1</span> <span data-item>Deseo que JZMusic se haga cargo de la iluminación ambiental</span></p>
							<p><span data-precio>$0</span></p>
						</div>
					</div>
					<div class="presupuesto-navegacion hide">
						<div class="anterior">
							<button>Anterior</button>
							<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
						</div>
						<div class="siguiente">
							<button>Continuar</button>
						</div>
					</div>
				</div>
<?php
/*
* ----------------- Slide 11 - Presupuesto final
*/
?>
				<div id="presupuesto_11" class="presupuesto-slide hide">
					<p>De acuerdo a la información que nos has entregado, hemos elaborado el siguiente presupuesto preliminar para tu fiesta:</p>
					<table>
						<thead>
							<tr>
								<th colspan="3">
									<h3>PRESUPUESTO</h3>
									<p>Tipo evento: <span data-evento></span> | Cantidad personas: <span data-personas></span></p>
								</th>
							</tr>
							<tr>
								<th>Cant.</th>
								<th>Item</th>
								<th>Valor</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td colspan="2">TOTAL</td>
								<td data-total></td>
							</tr>
						</tfoot>
						<tbody>
						</tbody>
					</table>
					<p class="monto-minimo hide">Debes tener en cuenta que presupuesto mínimo para este tipo de eventos es de $<span data-monto-minimo></span>.</p>
					<h2>Envía tu presupuesto</h2>
					<p>Haremos llegar una copia tanto para nosotros como para ti. ¡Te contactaremos cuanto antes!.</p>
					<form id="form-contacto" method="post">
						<div class="row">
							<div class="column">
								<label for="form-nombre">Nombre</label><input type="text" name="nombre" id="form-nombre">
							</div>
							<div class="column">
								<label for="form-email">E-mail</label><input type="text" name="email" id="form-email">
							</div>
						</div>
						<div class="row">
							<div class="column">
								<label for="form-telefono">Teléfono/Celular</label><input type="text" name="telefono" id="form-telefono">
							</div>
							<div class="column">
								<label for="form-fecha">Fecha del Evento</label><input type="text" name="fecha" id="form-fecha" class="datepicker">
							</div>
						</div>
						<div class="row">
							<div class="column">
								<label for="form-lugar">Lugar del Evento</label><input type="text" name="lugar" id="form-lugar">
							</div>
						</div>
						<div class="row">
							<label for="form-mensaje">Mensaje</label><textarea name="mensaje" id="form-mensaje"></textarea>
						</div>
						<div class="presupuesto-navegacion">
							<div class="anterior">
								<button>Anterior</button>
								<div class="volver"><a href="javscript:;" class="volver">Volver a empezar</a></div>
							</div>
							<div class="enviar">
								<input type="submit" value="enviar">
							</div>
						</div>
					</form>
				</div>
				<div id="presupuesto_enviado" class="presupuesto-slide hide">
					<h3>¡Todo en orden!</h3>
					<p>El presupuesto ha sido enviado y tomaremos contacto contigo a la brevedad.</p>
				</div>
			</div>
		</article>
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
<script src="_/js/libs/magnificPopup.min.js"></script>
<script src="_/js/min/presupuestos.min.js"></script>
<script src="_/js/libs/jquery-ui-1.10.3.custom.min.js"></script>
</body>
</html>
