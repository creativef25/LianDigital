<?php

date_default_timezone_set('America/Mexico_City');

$para = 'israel_4991@hotmail.com';
$titulo = $_POST['asunto'];
$mensaje = wordwrap($_POST['textarea'],70,"\r\n");
$cabecera = 'From:'.$_POST['correo'];

mail($para, $titulo, $mensaje, $cabecera);

header("Location: ../index.html");

?>
