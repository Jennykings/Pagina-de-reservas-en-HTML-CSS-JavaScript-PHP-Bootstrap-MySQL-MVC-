<!DOCTYPE html>
<html lang="en">
<head>
    
         <!--favicon-->
         <link rel="shortcut icon" href="../views/sin_cuenta/img/utencilios.png" type="image/x-icon">
         <link rel="stylesheet" href="../views/style.css">
 </head>
<body>
    
</body>
</html>

<?php

$nombre=$_POST["nombre"];
$correo=$_POST["email"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];

$body=" Nombre: ". $nombre. "<br>Correo: ".$correo."<br>Asunto: ".$asunto. "<br>Mensaje: ".$mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

 try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saborperuano119@gmail.com';
    $mail->Password   = 'bdvmuciqqrzqrlhb';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;


    $mail->setFrom('saborperuano119@gmail.com', $nombre);
    $mail->addAddress('saborperuano119@gmail.com');


    $mail->isHTML(true);
    $mail->Subject = 'Contacto';
    $mail->Body    = $body; 



     if($mail->send()){
        ?>
        <?php
        include("../views/sin_cuenta/contacto.html");
     
      ?> 
      <h1 class="val">SE ENVIO MENSAJE CORRECTAMENTE <p class="valp">(Haga click en contactos para enviar un nuevo mensaje)</p></h1>
      
      <?php
    }
    } catch (Exception $e) {
        echo "HUBO UN ERROR AL ENVIAR EL MENSAJE ", $mail->ErrorInfo;
    }
     
?>