<?php
include "_/inc/datos-globales.php";
//Verificar COOKIE Drupal
foreach ($_COOKIE as $key => $value) {
    if( preg_match( '/^SESS/' , $key) == 1 ){
        header("HTTP/1.0 307 Temporary Redirect");
        header('Location: http://clientes.jzmusic.cl');
    }
}
?>
<!doctype html>

<!--[if lt IE 8 ]>    <html class="ie ie7 no-js" lang="es"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->

<head>
	<title>Accesso Clientes <?php echo $nombreMarca; ?> &ndash; <?php echo $sloganMarca; ?></title>

	<meta name="description" content="Dedicados a la producción, musicalización, amplificación e iluminación de eventos, fiestas y matrimonios. Empresa de Joaquín Zanolli De Solminhac.">
	<meta name="author" content="<?php echo $nombreMarca.' '.$webDelAutor; ?>">
	<meta name="Copyright" content="Copyright <?php echo $nombreMarca.' '.date('Y'); ?>. All Rights Reserved.">
	<?php include "views/viewport-fav-setup.php"; ?>
	<link rel="stylesheet" href="_/css/styles.css">
	<?php include "views/modernizr.php"; ?>

</head>

<body class="articulo navAbierto subNavAbierto clientes">

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
			<div data-src="imgs/bolas-disco-2-480.jpg"></div>
			<div data-src="imgs/bolas-disco-2-1280.jpg"  data-media="(min-width: 480px)"></div>
			<noscript>
			<img src="imgs/bolas-disco-2-480.jpg">
			</noscript>
		</div>
	</div>
	<div class="corporis">
		<article>
			<h1 class="titulo">CLIENTES</h1>
			<h2 clas="subTitulo">ACCESO A FICHA TÉCNICA DEL EVENTO</h2>
			<p><strong>Este espacio está reservado para los clientes con eventos ya contratados con nuestra empresa. Aquí encontrará todos los elementos necesarios para tener el control y la tranquilidad de que la programación de su evento esta funcionando correctamente.</strong></p>
            <p>Ingrese su correo y contraseña.</p>
            <form id="form-contacto" action="http://clientes.jzmusic.cl/pide-login?destination=node/6029" method="post">
                <div class="row">
                    <div class="column">
                        <label for="form-nombre">Usuario</label><input type="text" name="name" id="form-nombre" value="<?=@$_POST['nombre']?>">
                    </div>
                    <div class="column">
                        <label for="form-email">Contraseña</label><input type="password" name="pass" id="form-email" value="<?=@$_POST['email']?>">
                    </div>
                </div>
                <div class="row recuperar">
                	<a href="http://clientes.jzmusic.cl/user/password">Olvidé mi contraseña</a>
                </div>
                <input type="hidden" name="form_id" value="user_login_block">
                <input type="hidden" name="op" value="Iniciar sesión">
                <input type="submit" value="entrar">
                <hr>
                <p>Si no estás registrado, <a href="http://clientes.jzmusic.cl/user/register">regístrate aquí</a>.</p>
            </form>
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
