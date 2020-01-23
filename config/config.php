<?php

// cargue de smarty
require_once('smt/libs/Smarty.class.php');

//Incluye clases del proyecto

include_once("clases/_MySQL.class.php");

class Smarty_NewApp extends Smarty{

	// El constructor recibe el nombre de la aplicacion y lo asigna a la clase extendIDa Smarty
	function Smarty_NewApp($title="",$cargaPlantillas=true){
		// Class Constructor.
		// These automatically get set with each new instance.
		$this->Smarty();
		$this->template_dir = 'templates/';
		$this->compile_dir = 'tpl_c/';
		$this->config_dir = 'configs/';
		$this->cache_dir = 'cache/';
		$this->caching = false;
		$this->assign('NOM_APP',$title);
		global $Database;
		if(isset($_SESSION['id_usu'])){}
	}
}
session_start();

?>