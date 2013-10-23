<?php 
$autor = 'Médula Diseño';
$webDelAutor = 'http://medula.cl/';
$nombreMarca = 'JZMusic';
$sloganMarca = 'Producción integral de eventos';
$codigoPostal = '7510838';
$direccionFisica = '';//'Calle numero<br>'.$codigoPostal.' Comuna<br>Ciudad, Chile';//http://medula.cl/blog/2012/07/07/formato-de-una-direccion-postal-en-chile/
$celular='<a class="tel celular" href="tel:+56987692271">+56(9) 8769 2271</a>';
$telefono = '<a class="tel fijo" href="tel:+56228951821">+56(2) 2895 1821</a>';
$dominioSitio = 'jzmusic.cl';
$home = 'http://'.$dominioSitio.'/';
$mailAministrador = 'agustin@fliin.com';
$mailWebmaster = 'agustin@medula.cl';
$mailContacto = 'contacto@jzmusic.cl';
$redire = 'http://'.$dominioSitio.'/';
if(isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'],'localhost')!==false)$redire = 'http://localhost/jzm/2012/';//gregar la carpeta local
?>