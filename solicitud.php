<?php 

$nombre = $_POST['usr_nombre'];
$representacion=$_POST['usr_representacion'];
$nom_ent = $_POST['usr_nom_ent'];
$cargo = $_POST['usr_cargo'];
$tip_id = $_POST['usr_tip_id'];
$num_id = $_POST['usr_num_id'];
$num_cel = $_POST['usr_num_cel'];
$num_tel = $_POST['usr_num_tel'];
$mail = $_POST['usr_mail'];
$direccion = $_POST['usr_dir_serv'];
/*$localidad = $_POST['usr_localidad'];
$barrio = $_POST['usr_local'];*/
$ciudad = $_POST['usr_ciudad'];
$servicios = "";
	if(isset($_POST['chk_comp'])){
		$servicios=$servicios.$_POST['chk_comp'].': <br />';
		}
	if(isset($_POST['sc_mantenimiento'])){
		$servicios=$servicios.$_POST['sc_mantenimiento'].'<br />';
		}
	if(isset($_POST['sc_instalacion_hardware'])){
		$servicios=$servicios.$_POST['sc_instalacion_hardware'].'<br />';
		}
	if(isset($_POST['sc_instalacion_software'])){
		$servicios=$servicios.$_POST['sc_instalacion_software'].'<br />';
		}
		
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_asesoria'])){
		$servicios=$servicios.': '.$_POST['chk_asesoria'];
		}
	if(isset($_POST['at_sistemas_operativos'])){
		$servicios=$servicios.', '.$_POST['at_sistemas_operativos'];
		}
	if(isset($_POST['at_redes_sociales'])){
		$servicios=$servicios.', '.$_POST['at_redes_sociales'];
		}
	if(isset($_POST['at_redes'])){
		$servicios=$servicios.', '.$_POST['at_redes'];
		}
	if(isset($_POST['at_seguridad'])){
		$servicios=$servicios.', '.$_POST['at_seguridad'];
		}		
	if(isset($_POST['at_celulares'])){
		$servicios=$servicios.', '.$_POST['at_celulares'];
		}		
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_redes_sociales'])){
		$servicios=$servicios.': '.$_POST['chk_redes_sociales'];
		}
	if(isset($_POST['red_social_creacion'])){
		$servicios=$servicios.', '.$_POST['red_social_creacion'];
		}
	if(isset($_POST['red_social_soporte'])){
		$servicios=$servicios.', '.$_POST['red_social_soporte'];
		}
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_redes'])){
		$servicios=$servicios.': '.$_POST['chk_redes'];
		}
	if(isset($_POST['red_diseno'])){
		$servicios=$servicios.', '.$_POST['red_diseno'];
		}
	if(isset($_POST['red_instalacion'])){
		$servicios=$servicios.', '.$_POST['red_instalacion'];
		}
	if(isset($_POST['red_ruteo'])){
		$servicios=$servicios.', '.$_POST['red_ruteo'];
		}
	if(isset($_POST['red_soporte'])){
		$servicios=$servicios.', '.$_POST['red_soporte'];
		}
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_pag_web'])){
		$servicios=$servicios.': '.$_POST['chk_pag_web'];
		}
	if(isset($_POST['pag_diseno'])){
		$servicios=$servicios.', '.$_POST['pag_diseno'];
		}
	if(isset($_POST['pag_soporte'])){
		$servicios=$servicios.', '.$_POST['pag_soporte'];
		}
	if(isset($_POST['pag_codificacion'])){
		$servicios=$servicios.', '.$_POST['pag_codificacion'];
		}
 	
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_cyber_seg'])){
		$servicios=$servicios.': '.$_POST['chk_cyber_seg'];
		}
	if(isset($_POST['seg_antivirus'])){
		$servicios=$servicios.', '.$_POST['seg_antivirus'];
		}
	if(isset($_POST['seg_firewall'])){
		$servicios=$servicios.', '.$_POST['seg_firewall'];
		}
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
	if(isset($_POST['chk_cel'])){
		$servicios=$servicios.': '.$_POST['chk_cel'];
		}
	if(isset($_POST['cel_equipos'])){
		$servicios=$servicios.', '.$_POST['cel_equipos'];
		}
	if(isset($_POST['cel_mantenimiento'])){
		$servicios=$servicios.', '.$_POST['cel_mantenimiento'];
		}
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021 
 */ 		
						
		

//isset=> si existe

if ($nom_ent==null or $nom_ent=="")
 {
  $nom_ent="No Aplica";
 }
 
if ($cargo==null or $cargo=="")
 {
  $cargo="No Aplica";
 }
 
 if ($num_tel==null or $num_tel=="")
 {
  $num_tel="No tiene";
 }

 
$para = "rodrallica@gmail.com";
$asunto = "$nombre ha generado una solicitud";

$mensaje = 
'
 Nombre del solicitante: '.$nombre. '
 Tipo de representación: '.$representacion. '
 Nombre de la entidad: '.$nom_ent. '
 Cargo en la entidad: '.$cargo.'
 Tipo de identificación: '.$tip_id.'
 Número de documento: '.$num_id.'
 Número de teléfono fijo: '.$num_tel.'
 Número de teléfono celular: '.$num_cel.'
 Correo electronico: '.$mail.'
 Dirección: '.$direccion.'
 Ciudad: '.$ciudad.'
 Servicios solicitados: '.$servicios.'
  ';
/*
    Elaborado por: Miguel Angel Carvajal Copyright © 2021  
 */ 
 mail($para,$asunto,utf8_decode($mensaje));
 
 header('Location: FormEnviado.html');
 
?>
