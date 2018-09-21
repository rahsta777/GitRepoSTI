<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="richard" />

	<title>Sin título 1</title>
</head>

<body>

<?php
// Datos del email
$nombre_origen = "Sigre Sistema de Gestion de informacion de retencion de Impuesto";
$email_origen = "php@php.com.ve";
$email_copia = "php@php.com.ve";
$email_ocultos = "venehosting@hotmail.com";
$email_destino = "info@venehosting.com";
$asunto = "Emails desde PHP";
$mensaje = '<center><b>ESTE ES UN MENSAJE DE NITIFICACION DE </b><center>';
$formato = "html";
//*****************************************************************//
$headers = "From: $nombre_origen <$email_origen> \r\n";
$headers .= "Return-Path: <$email_origen> \r\n";
$headers .= "Reply-To: $email_origen \r\n";
$headers .= "Cc: $email_copia \r\n";
$headers .= "Bcc: $email_ocultos \r\n";
$headers .= "X-Sender: $email_origen \r\n";
$headers .= "X-Mailer: Enviado con Script de: PHP DE VENEZUELA \r\n";
$headers .= "X-Priority: 3 \r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: 7bit \r\n";
$headers .= "Disposition-Notification-To: \"$nombre_origen\" <$email_origen>
\r\n";
//*****************************************************************//
if($formato == "html"){
$headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";
} else{
$headers .= "Content-Type: text/plain; charset=iso-8859-1
\r\n";
}
if (@mail($email_destino, $asunto, $mensaje, $headers)) {
echo "Mensaje Enviado";
} else {
echo "Mensaje NO enviado";
}
?>
</body>
</html>