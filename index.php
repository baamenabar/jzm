<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title><?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.min.css">
	<?php
		$openGraph['titulo'] = 'JZMusic.cl';
		$openGraph['descripcion'] = 'Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac';
		include 'views/open-graph.php';
	?>
	<?php include "views/modernizr.php"; ?>

</head>

<body class="navAbierto">

<div class="amictus">
	<div class="wrapper">
	<header>
		<div id="logoTop">
			<div data-picture data-alt="Logotipo <?php echo $nombreMarca; ?>">
		        <!-- If browser supports inline SVG, use image below: -->
		        <div data-type="image/svg+xml" data-src="imgs/logo-JZMusic.svg"></div>
		        <!-- Otherwise, fallback on PNG -->
		        <div data-src="imgs/logo-jzmusic-100.png"></div>
		        <div data-src="imgs/logo-jzmusic-160.png" data-media="(min-width: 640px)"></div>
		        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
		        <noscript><img src="imgs/logo-jzmusic.png" alt="Logotipo <?php echo $nombreMarca; ?>"></noscript>
		    </div>
		</div>
		<h1 class="titulo">PRODUCCIÓN<br>INTEGRAL DE EVENTOS</h1>
		<h2 class="subTitulo">Contamos con todo lo necesario para tu fiesta o evento.</h2>
		<?php include "views/nav-principal.php"; ?>
	</header>
	<div class="temas" id="carousel">
		<div data-picture class="unPicture">
			<div data-src="imgs/evento-1-480.jpg"></div>
			<div data-src="imgs/evento-1-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/evento-1-480.jpg">
			</noscript>
		</div>
		<div data-picture class="unPicture">
			<div data-src="imgs/evento-bailarines-1-480.jpg"></div>
			<div data-src="imgs/evento-bailarines-1-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/evento-bailarines-1-480.jpg">
			</noscript>
		</div>
		<div data-picture class="unPicture">
			<div data-src="imgs/evento-bailarines-2-480.jpg"></div>
			<div data-src="imgs/evento-bailarines-2-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/evento-bailarines-2-480.jpg">
			</noscript>
		</div>
	</div>
	<div class="corporis">
		<div class="calugasHome">
			<ul>
				<li><a href="galeria">
						<h2>Nuestros Eventos</h2>
						<div class="strip"><div data-picture>
							<div data-src="imgs/evento-comida-442x92.jpg"></div>
							<div data-src="imgs/evento-comida-290x162.jpg" data-media="(min-width: 640px)"></div>
							<div data-src="imgs/evento-comida-580x324.jpg" data-media="(min-width: 640px) and (-webkit-min-device-pixel-ratio: 1.5), (min-width: 640px) and (min-resolution: 144dpi)"></div>
							<noscript>
								<img src="imgs/evento-comida-442x92.jpg">
							</noscript>
							</div></div>
					</a></li>
				<li><a href="servicios">
						<h2>Equipos</h2>
						<div class="strip"><div data-picture>
							<div data-src="imgs/laser-verde-442x92.jpg"></div>
							<div data-src="imgs/laser-verde-290x162.jpg" data-media="(min-width: 640px)"></div>
							<div data-src="imgs/laser-verde-580x324.jpg" data-media="(min-width: 640px) and (-webkit-min-device-pixel-ratio: 1.5), (min-width: 640px) and (min-resolution: 144dpi)"></div>
							<noscript>
								<img src="imgs/laser-verde-442x92.jpg">
							</noscript>
							</div></div>
					</a></li>
				<li><a href="clientes">
						<h2>Acceso Clientes</h2>
						<div class="strip"><div data-picture>
							<div data-src="imgs/bolas-disco-442x92.jpg"></div>
							<div data-src="imgs/bolas-disco-290x162.jpg" data-media="(min-width: 640px)"></div>
							<div data-src="imgs/bolas-disco-580x324.jpg" data-media="(min-width: 640px) and (-webkit-min-device-pixel-ratio: 1.5), (min-width: 640px) and (min-resolution: 144dpi)"></div>
							<noscript>
								<img src="imgs/bolas-disco-442x92.jpg">
							</noscript>
							</div></div>
					</a></li>
			</ul>
		</div>
	</div>


</div>
<a href="#" id="abreYcierra" class="">MENÚ</a>
<div class="theShame"></div>
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
</body>
</html>
