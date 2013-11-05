<?php
include "_/inc/datos-globales.php";

if($_POST){
	$mensajes = array(
		'nombre' => 'Debes ingresar un nombre',
		'email' => 'Debes ingresar un e-mail',
		'invalid-email' => 'El e-mail ingresado es inválido',
		// 'telefono' => 'Debes ingresar un teléfono de contacto',
		// 'evento' => 'Debes seleccionar un tipo de evento',
		// 'fecha' => 'Debes indicar la fecha del evento',
		// 'invalid-fecha' => 'La fecha ingresada no es válida',
		// 'lugar' => 'Debes ingresar el lugar del evento',
		// 'personas' => 'Debes ingresar el número de personas',
		// 'mensaje' => 'Debes ingresar un mensaje'
		);
	foreach ($_POST as $campo => $valor) {
		$valor = trim($valor);
		if($campo == 'evento' and $valor == 0){ // Validacion del tipo evento
			//$errores[] = $mensajes[$campo];
		} elseif ($campo == 'email') { // Validacion de correo
			if($valor != '' and !filter_var($valor, FILTER_VALIDATE_EMAIL)){
				$errores[] = $mensajes['invalid-email'];
			} elseif($valor == '') {
				$errores[] = $mensajes[$campo];
			}
		} elseif($campo == 'fecha'){ // Validacion de fecha
			if($valor != ''){
				$fecha = explode('/', $valor);
				if(count($fecha) != 3 or !checkdate($fecha[1], $fecha[0], $fecha[2])){
					$errores[] = $mensajes['invalid-fecha'];
				}
			} else {
				//$errores[] = $mensajes[$campo];
			}
		} else { // Campos comunes y corrientes
			if($valor == ''){
				//$errores[] = $mensajes[$campo];
			}
		}
	}
	//Enviar correo
	if(!isset($errores)){
		require_once 'Mailer.php';
		$eventos = array('', 'Matrimonio', 'Aniversario', 'Sub 20', 'Fiestas de Graduación', 'Empresas');
		$msg = '<p>Presupuesto de: '.$_POST['nombre'].' ('. $_POST['email'] .')</p>
				<p>Al responder este mensaje, <strong>NO</strong> estarás respondiendo directamente al cliente. Deberás ingresar manualmente la dirección de correo.<br></p>
				<p><strong>Teléfono/Celular:</strong> '. $_POST['telefono'] .'</p>
				<p><strong>Tipo de Evento:</strong> '. $eventos[$_POST['evento']] .'</p>
				<p><strong>Fecha del Evento:</strong> '. $_POST['fecha'] .'</p>
				<p><strong>Lugar del Evento:</strong> '. $_POST['lugar'] .'</p>
				<p><strong>Nº de Personas:</strong> '. $_POST['personas'] .'</p>
				<p><strong>Mensaje:</strong> '. nl2br(strip_tags($_POST['mensaje'])) .'</p>
		';
		$mailer = new Mail($_POST['email'], $_POST['nombre'], $msg, 'Contacto desde JZMusic.cl');
		$mailer->sendContact();
		if(!$mailer->result){
			$errorEnvio = '<p>El mensaje no pudo ser enviado, por favor intenta nuevamente o envíanos un corrreo a <a href="mailto:'. $mailer->user .'">'. $mailer->user .'</a>. Disculpa las molestias.</p>';
		} else {
			$enviado = true;
		}
	}
}

?>
<!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Contacto <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.min.css">
	<?php
		$openGraph['titulo'] = 'Contacto JZMusic.cl';
		$openGraph['descripcion'] = 'Nuestro equipo está disponible para cualquier comentario relacionado con la satisfacción de nuestros clientes y para escuchar sus necesidades.';
		include 'views/open-graph.php';
	?>
	<?php include "views/modernizr.php"; ?>

</head>

<body class="articulo navAbierto subNavAbierto contacto">

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
			<div data-src="imgs/evento-1-480.jpg"></div>
			<div data-src="imgs/evento-1-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/evento-1-480.jpg">
			</noscript>
		</div>
	</div>
	<div class="corporis">
		<article>
			<h1 class="titulo">CONTÁCTANOS</h1>
			<?php
				if(isset($enviado)){
			?>
				<div class="form-enviado">
				<hr>
				<p><strong>Tu mensaje ha sido enviado. Te contactaremos a la brevedad.<br>¡Gracias!</strong></p>
				</div>
			<?php
				} else {
					if(isset($errorEnvio)) {
					echo $errorEnvio;
					} else {
			?>
			<h2 clas="subTitulo">CUÉNTANOS QUE NECESITAS</h2>
			<p><strong>Nuestro equipo esta atento para responder a sus necesidades.</strong></p>
			<?php
				}
			?>
			<div class="form-error">
				<hr>
				<p>Por favor soluciona los siguientes problemas para poder enviar el formulario:</p>
			<?php
				if($_POST){
			?>
				<ul>
					<?php
						if(isset($errores)){
							foreach ($errores as $error) {
								echo '<li>'. $error .'</li>';
							}
						}
					?>
				</ul>
			<?php
				}
			?>
			</div>
			<form id="form-contacto" method="post">
				<div class="row">
					<div class="column">
						<label for="form-nombre">Nombre</label><input type="text" name="nombre" id="form-nombre" value="<?=@$_POST['nombre']?>">
					</div>
					<div class="column">
						<label for="form-email">E-mail</label><input type="text" name="email" id="form-email" value="<?=@$_POST['email']?>">
					</div>
				</div>
				<div class="row">
					<div class="column">
						<label for="form-telefono">Teléfono/Celular</label><input type="text" name="telefono" id="form-telefono" value="<?=@$_POST['telefono']?>">
					</div>
					<div class="column">
						<label for="form-evento">Tipo de Evento</label>
						<select name="evento" id="form-evento">
							<option value="0" <?=(@$_POST['evento'] == 0) ? 'selected' : '' ?>> </option>
							<option value="1" <?=(@$_POST['evento'] == 1) ? 'selected' : '' ?>>Matrimonio</option>
							<option value="2" <?=(@$_POST['evento'] == 2) ? 'selected' : '' ?>>Aniversario</option>
							<option value="3" <?=(@$_POST['evento'] == 3) ? 'selected' : '' ?>>Sub 20</option>
							<option value="2" <?=(@$_POST['evento'] == 4) ? 'selected' : '' ?>>Fiestas de Graduación</option>
							<option value="3" <?=(@$_POST['evento'] == 5) ? 'selected' : '' ?>>Empresas</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<label for="form-fecha">Fecha del Evento</label><input type="text" name="fecha" id="form-fecha" class="datepicker" value="<?=@$_POST['fecha']?>">
					</div>
					<div class="column">
						<label for="form-lugar">Lugar del Evento</label><input type="text" name="lugar" id="form-lugar" value="<?=@$_POST['lugar']?>">
					</div>
				</div>
				<div class="row">
					<div class="column">
						<label for="form-personas">Nº de Personas</label><input type="text" name="personas" id="form-personas" value="<?=@$_POST['personas']?>">
					</div>
				</div>
				<div class="row">
					<label for="form-mensaje">Mensaje</label><textarea name="mensaje" id="form-mensaje"><?=@$_POST['mensaje']?></textarea>
				</div>
				<input type="submit" value="enviar">
			</form>
			<hr>
			<?php
				}
			?>
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
<script type="text/javascript" src="_/js/min/contacto.min.js"></script>
<script src="_/js/libs/jquery-ui-1.10.3.custom.min.js"></script>
</body>
</html>
