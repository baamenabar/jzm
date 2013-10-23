<?php

$email = array();
/**
 * Si vas a cambiar el servidor, debes tener en cuenta que en los archivos donde efectivamente se envían los correos
 * esta configurado para conectarse vía SSL y puerto 465 (Mailer.php)
 *
 * Se debe copiar este archivo y dejarlo con nombre email-config.php en el servidor.
 *
 * ¡NO SUBIR A GITHUB!
 */
$email['servidor'] = 'smtp.gmail.com';
$email['usuario'] = '';
$email['password'] = '';
