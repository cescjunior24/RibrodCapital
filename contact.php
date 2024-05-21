<?php

$first_name = $_POST['firstname'];
$last_name= $_POST['lastname'];
$organitzation= $_POST['organitzation'];
$mail = $_POST['mail'];
$subject = $_POST['subject']; 

$asunto="Ribrod Capital Contacto";
$mailpropietario="marcriba@ribrodcapital.com";
$contestacion="Muchas gracias por contactar con nosotros, en breves analizaremos vuestra información y nos pondremos en contacto";


$headers="From: $mail";

if (mail($mailpropietario,$organitzation,$subject,$headers))
{
    echo ("Mensaje correctamente enviado");
}
else
{
    echo ("Mensaje no enviado");
}



header("Location: index.php#section-contact");
?>