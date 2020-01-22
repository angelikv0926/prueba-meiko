<?php

if (isset($_GET['id_usu'])){
	include('Async_Borrar_Usuario.php');
	$usuario = new Async_Borrar_Usuario();
	$id_usu=intval($_GET['id_usu']);
	$res = $usuario->eliminarUsuario($id_usu);
	if($res){
		header('location: index.php');
	}else{
		echo "Error al eliminar el registro";
	}
}

?>