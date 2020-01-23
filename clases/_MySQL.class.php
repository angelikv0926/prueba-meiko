<?php

class Database{
	
	private $conexion;
	private $host="localhost";
	private $usuario="root";
	private $pass="";
	private $nombre="prueba_meiko";
	private $matriz;
	private $nomColumnas;
	
	function __construct(){
		$this->connect_db();
	}
	
	//Conexion a la base de datos
	public function connect_db(){
		$this->con = mysqli_connect($this->host, $this->usuario, $this->pass, $this->nombre);
		if(mysqli_connect_error()){
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
	
	//cierra la conexion establecida en la variable conexion
	function CerrarConexion(){
		mysqli_close($this->conexion);
	}
	
	//Consulta usuario por id
	function ValidarIngreso($usuario, $clave){
		$sql="SELECT DISTINCT id_usu, cod_Roll FROM usuarios WHERE nomn_usu='$usuario' AND pass_usu='$clave'";
		$resp = mysqli_query($this->con, $sql);
		$row = mysqli_fetch_assoc($resp);
		
		if($row['id_usu'] != "" and  $row['cod_Roll'] != ""){
			$_SESSION['USUARIO_AA']['Usuario']=$this;
			return $row;
		}
	}
	
	//Lista total de usuarios
	public function consultarUsuarios(){
		$sql = "SELECT * FROM usuarios";
		$resp = mysqli_query($this->con, $sql);
		return $resp;
	}
	
	//Crear usuario
	public function crearUsuario($nomn_usu, $ape_usu, $email, $pais, $pass_usu){
		$sql = "INSERT INTO `usuarios` (nomn_usu, ape_usu, email, pais_usu, pass_usu, cod_Roll) VALUES ('$nomn_usu', '$ape_usu', '$email', '$pais', '$pass_usu', 2)";
		$resp = mysqli_query($this->con, $sql);
		
		if($resp){
			return true;
		}else{
			return false;
		}
	}
	
	//Eliminar usuario por id
	public function eliminarUsuario($id_usu){
		$sql = "DELETE FROM usuarios WHERE id_usu=$id_usu";
		$resp = mysqli_query($this->con, $sql);
		if($resp){
			return true;
		}else{
			return false;
		}
	}

}
?>