<?php

if (isset($_GET['id_usu'])){
	include('conexion.php');
	$usuario = new Database();
	$id_usu=intval($_GET['id_usu']);
	$res = $usuario->eliminarUsuario($id_usu);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}

?>