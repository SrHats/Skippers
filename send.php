<?php 

//Declaracion de variables del formulario
$nombre = $_POST['name']; 
$mail= $_POST['mail']; 
$message = $_POST['msg']; 

// Datos del email
$para = "skippersonlines@gmail.com"; 
$asunto = 'Mensaje de $name'; 
$header = 'From: ' . $mail;
$contenido = "Este mensaje fue enviado por " . $nombre . " \r\n " . $message;


//if ($_POST['submit']) {

    if (mail($para, $asunto, utf8_decode($contenido), $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
//

header('Location: /index.php');

?> 