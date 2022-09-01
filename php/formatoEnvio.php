<?php 
$calificacion = $_POST['usr_calificacion'];
$nombre = $_POST['usr_nombre'];
$mail = $_POST['usr_mail'];
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2017  
 */ 
  
$para = "rodrallica@gmail.com";
$asunto = "$nombre ha generado una calificación";

$mensaje = 
'
 Nombre del usuario: '.$nombre. '
 Correo electronico: '.$mail.'
 Calificación: '.$calificacion.'
  ';
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2017  
 */ 
 mail($para,$asunto,utf8_decode($mensaje));
 
 header('Location: enviado.html');
 
?>
