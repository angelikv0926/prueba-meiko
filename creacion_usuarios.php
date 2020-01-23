<?php

include_once("config/config.php");
$Database=new Database();

$plantilla=new Smarty;

$plantilla->assign("NOM_MODULO","Registro de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_crearUsuario.html"));
$plantilla->display("_generic.html");
?>