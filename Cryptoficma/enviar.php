<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$mail = $_POST['E-mail'];
$valor = $_POST['Valor'];
$comentarios = $_POST['comentarios'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje = $comentarios
$mensaje .= "Mensaje: " . $_POST['co'] . " \r\n";

$para = 'mjneme1995@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:mensajeEnviado.html");
?>