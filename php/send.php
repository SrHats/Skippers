<?php 

error_reporting(0); 

//Declaracion de variables del formulario
$nombre = $_POST['name']; 
$mail= $_POST['mail']; 
$message = $_POST['message']; 

// Datos del email
$para = "skippersonlines@gmail.com"; 
$asunto = 'Mensaje de $name'; 
$header = 'From: ' . $mail;
$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";


if ($_POST['submit']) {

    if (mail($para, $asunto, utf8_decode($mensaje), $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
}


?> 