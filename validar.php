<?php

/*
	Codigo Roll = 1 -> Administrador
	Codigo Roll = 2 -> Usuario Normal
*/

include_once("config/config.php");

$Database=new Database();
$row = $Database->ValidarIngreso($_POST['usuario'],$_POST['clave']);

if($row['id_usu'] !=""){
	if($row['cod_Roll'] == 1){
		header("location: main_admin.php");
	} elseif ($row['cod_Roll'] == 2){
		header("location: main_usuario.php?id={$row['id_usu']}");
	}
}else{
	header("location: login.php?unknown");
}
?>