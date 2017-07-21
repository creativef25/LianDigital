<?php

$para = 'creativef25@gmail.com';
$titulo = $_POST['asunto'];
$mensaje = $_POST['textarea'];
$cabecera = 'From:'.$_POST['correo'];

ini_set("SMTP","localhost");
ini_set("smtp_port","25");

mail($para, $titulo, $mensaje, $cabecera);

?>
