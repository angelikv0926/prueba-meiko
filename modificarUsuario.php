<?php

include_once("config/config.php");
$Database=new Database();

$row = $Database->actualizarUsuario($_POST['nomn_usu'], $_POST['ape_usu'], $_POST['email'], $_POST['pais'], $_POST['pass_usu'], $_POST['id']);

if($row){
	$message = "Datos insertados";
	header("location: main_admin.php");
}else{
	$message = "Datos NO modificados";
	echo $message;
}
?>