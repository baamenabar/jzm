<?php
include "_/inc/datos-globales.php";
?><!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Acerca de JZMusic <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.min.css">
	<?php
		$openGraph['titulo'] = 'Acerca de JZMusic.cl';
		$openGraph['descripcion'] = 'Somos una empresa seria dedicada al negocio de la entretención a través de la producción integral de todos sus eventos con más de 21 años de experiencia.';
		include 'views/open-graph.php';
	?>
	<?php include "views/modernizr.php"; ?>

</head>

<body class="articulo navAbierto subNavAbierto">

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
			<div data-src="imgs/evento-480.jpg"></div>
			<div data-src="imgs/evento-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/evento-480.jpg">
			</noscript>
		</div>
	</div>
	<div class="corporis">
		<article>
			<h1 class="titulo">JZ MUSIC</h1>
			<h2 class="subTitulo">QUIENES SOMOS</h2>
			<p>Somos una empresa seria dedicada al negocio de la entretención a través de la producción integral de todos sus eventos. Llevamos más de 21 años encargándonos de hacer que cada fiesta sea extraordinaria. Para esto, nuestro servicio se preocupa de conocer a cada uno de sus clientes de manera exclusiva e individual en reuniones programadas dirigidas por el mismo dueño, logrando así la mejor atención posible.</p>
			<p class="destacado">Nuestro personal se destaca por su buena  disposición de servicio y excelente preparación en los aspectos técnicos y humanos.
			<p>JZMusic se adecua a sus necesidades y posibilidades ofreciendo una gran cantidad de alternativas en presupuestos que hace posible que usted adquiera el mejor servicio por el mejor precio.</p>
			<hr>
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
</body>
</html>
