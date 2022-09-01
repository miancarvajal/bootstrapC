<?php
$paracorreo	= "rodrallica@gmail.com";
$titulo		= "Test correo";
$mensaje	= "Prueba superada";
$tucorreo	= "From: rodrallica@gmail.com";

	if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
	{
		echo "Correo enviado";
	}else
	{
		echo "Error";
	}

?>
