<?php

include_once("config/config.php");
unset($_SESSION['USUARIO_AA']['HtmlMenu']);
unset($_SESSION['USUARIO_AA']['Usuario']);
$Database=new Database();

$plantilla=new Smarty;

$plantilla->assign("NOM_MODULO","Inici&oacute; de Sesi&oacute;n");
$plantilla->assign("unknown",(isset($_GET[',unknown'])?"Revise la contraseña indicada":""));
$plantilla->assign("MENU","NO");
$plantilla->assign("CONTENIDO_MODULO",$plantilla->fetch("_login.html"));
$plantilla->display("_generic.html");
?>