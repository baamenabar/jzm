<?php
include "_/inc/datos-globales.php";
?>
<!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Galería <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<link rel="stylesheet" href="_/css/magnificPopup.css">
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
		<h1 class="titulo">BACKSTAGE</h1>
		<h2 clas="subTitulo">Una imagen que da confianza</h2>
		<p>
			Fiestas, Presentaciones, Iglesia, Exposiciones, Coros, Congresos, Desfiles, Discurso, Festivales, Reuniones.
		</p>
		<div class="galeria">
			<?php
			if(file_exists('gallery/dom.html')){
				include('gallery/dom.html');
			}
			?>
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
<script src="_/js/libs/magnificPopup.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Cargando imagen #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">La imagen #%curr%</a> no pudo ser cargada.'
		}
	});
});
</script>
</body>
</html>
