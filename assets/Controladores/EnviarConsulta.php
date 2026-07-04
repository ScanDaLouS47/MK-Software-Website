<?php 
ini_set('SMTP','me@localhost');
ini_set('smtp_port',25);
ini_set('sendmail_from','me@localhost');

$Nombre = $_REQUEST["Nombre"];
$Mail = $_REQUEST["Nombre"];
$Telefono = $_REQUEST["Telefono"];
$Detalle = $_REQUEST["Detalle"];

$to = "maicojobs@gmail.com";
$subject = "Consulta Pagina Web Hector Castillo";
$message = $Detalle;
$headers = "From: ".$Mail;

mail($to, $subject, $message, $headers);

?>