<?php

class Async_Consultar_Usuario{
	
	include ("conexion.php");

	//Consulta usuario por id
	public function consultarUsuario($id_usu){
		$sql = "SELECT * FROM usuarios where id_usu='$id_usu'";
		$resp = mysqli_query($this->con, $sql);
		$return = mysqli_fetch_object($resp);
		return $return ;
	}

	//Lista total de usuarios
	public function consultarUsuarios(){
		$sql = "SELECT * FROM usuarios";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
}
?>