<?php

include_once("config/config.php");

$Database=new Database();
$row = $Database->crearUsuario($_POST['nomn_usu'], $_POST['ape_usu'], $_POST['email'], $_POST['pais'], $_POST['pass_usu']);

if($row){
	$message = "Datos insertados";
	header("location: main_admin.php");
}else{
	$message = "Datos NO insertados";
	header("location: main_usuario.php");
}
?>