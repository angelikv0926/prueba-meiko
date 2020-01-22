<?php

class Database{
	private $conexion;
	private $host="localhost";
	private $usuario="root";
	private $pass="";
	private $nombre="prueba_meiko";

	function __construct(){
		$this->connect_db();
	}
	
	//Conexion a la base de datos
	public function connect_db(){
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(mysqli_connect_error()){
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	
	//limpiar variables antes de ejecucion
	public function limpiar($var){
		$return = mysqli_real_escape_string($this->con, $var);
		return $return;
	}
	
	//Crear usuario
	public function crearUsuario($nomn_usu, $ape_usu, $email, $pais, $pass_usu){
		$sql = "INSERT INTO `usuarios` (nomn_usu, ape_usu, email, pais, pass_usu) VALUES ('$nomn_usu', '$ape_usu', '$email', '$pais', '$pass_usu')";
		$resp = mysqli_query($this->con, $sql);
		
		if($resp){
			return true;
		}else{
			return false;
		}
	}
	
	//Lista total de usuarios
	public function consultarUsuarios(){
		$sql = "SELECT * FROM usuarios";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
	
	//Consulta usuario por id
	public function consultarUsuario($id_usu){
		$sql = "SELECT * FROM usuarios where id_usu='$id_usu'";
		$resp = mysqli_query($this->con, $sql);
		$return = mysqli_fetch_object($resp);
		return $return ;
	}
	
	//Actualizar usuario
	public function actualizarUsuario($nomn_usu,$ape_usu,$email,$pais,$pass_usu, $id_usu){
		$sql = "UPDATE usuarios SET
					nomn_usu='$nomn_usu', ape_usu='$ape_usu', email='$email', pais='$pais', pass_usu='$pass_usu' WHERE id_usu=$id_usu";
		$resp = mysqli_query($this->con, $sql);
		if($resp){
			return true;
		}else{
			return false;
		}
	}
	
	//Eliminar usuario por id
	public function eliminarUsuario($id_usu){
		$sql = "DELETE FROM usuario WHERE id_usu=$id_usu";
		$resp = mysqli_query($this->con, $sql);
		if($resp){
			return true;
		}else{
			return false;
		}
	}

}
?>