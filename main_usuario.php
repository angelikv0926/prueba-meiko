<?php

include_once("config/config.php");
$Database=new Database();

$buffer="";
$plantilla=new Smarty;

$row=$Database->consultarUsuarioById($_GET['id']);

$buffer.="<tr><td>{$row['nomn_usu']} {$row['ape_usu']}</td> <td>{$row['email']}</td> <td>{$row['pais_usu']}</td></tr>";

$plantilla->assign("tbody",$buffer);

$plantilla->assign("NOM_MODULO","Listado de usuarios");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","SI");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_mainUsuario.html"));
$plantilla->display("_generic.html");
?>