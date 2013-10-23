<?php
$apurl=explode('/', $_SERVER['REQUEST_URI'] );
$esteUrl = array_pop($apurl);
?>
<p>
	<p>
<nav id="principal">
			<ol>
				<li class="itm-acerca"><a href="acerca-de-jzmusic">JZ MUSIC</a><?php if($esteUrl == 'acerca-de-jzmusic'): ?>
					<h2>JZ MUSIC</h2>
				<?php endif;	?></li>
				<li class="itm-contacto"><a href="contacto">CONTACTO</a><?php if($esteUrl == 'contacto'): ?>
					<h2>CONTACTO</h2>
				<?php endif;	?></li>
				<li class="itm-servicios"><a href="servicios">SERVICIOS</a><?php if($esteUrl == 'servicios'): ?>
					<h2>SERVICIOS</h2>
				<?php endif;	?></li>
				<li class="itm-presupuestos"><a href="presupuestos">PRESUPUESTOS</a><?php if($esteUrl == 'presupuestos'): ?>
					<h2>PRESUPUESTOS<ul>
						<li class="itmp-grad">FIESTAS DE GRADUACIÓN</li>
						<li class="itmp-sub20">FIESTAS SUB-20</li>
						<li class="itmp-matri">MATRIMONIOS</li>
						<li class="itmp-cumple">CUMPLEAÑOS Y ANIVERSARIOS</li>
						<li class="itmp-eventos">EVENTOS Y PRODUCCIONES ESPECIALES</li>
					</ul></h2>
				<?php endif;	?></li>
				<li class="itm-clientes"><a href="clientes">CLIENTES</a><?php if($esteUrl == 'clientes'): ?>
					<h2>CLIENTES</h2>
				<?php endif;	?></li>
				<li class="itm-galeria"><a href="galeria">GALERÍA</a><?php if($esteUrl == 'galeria'): ?>
					<h2>GALERÍA</h2>
				<?php endif;	?></li>
				<li class="itm-cava"><a href="http://clientes.jzmusic.cl/cava-sitio">CAVA MUSICAL</a><?php if($esteUrl == 'http://clientes.jzmusic.cl/cava-sitio'): ?>
					<h2>CAVA MUSICAL</h2>
				<?php endif;	?></li>
			</ol>
		</nav>
